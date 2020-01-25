<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model(array('model_login','model_account'));
		$this->load->library('user_agent');
		$this->load->library('security');
		$this->load->library('encrypt');
		$this->load->helper('base64url');
		$this->load->helper('string');
		date_default_timezone_set("Asia/Jakarta");
		
		
		//check users by sessions
        if ($this->session->userdata('en_email')) {
			$en_email= base64url_decode($this->session->userdata('en_email'));
			$userInfo = $this->model_account->getUserInfoByEmail($en_email);  
			if($userInfo){
            redirect('home');
			}
        }	
		
    }
	
    function index() {;	
		$this->load->view('login');
    }
	
    function proses() {
		
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
			
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $psw = $this->input->post('password');  
			
			//encrypt email & pass
			$en_email= base64url_encode($email);
			$en_psw=md5($this->encrypt->sha1($psw));
				
			$cek_users = $this->model_login->cek_users($email, $en_psw);			
			if ($cek_users->num_rows() > 0) {
				foreach ($cek_users->result_object() as $qad) {
					
					$id = $qad->id;
					$name  = $qad->name;
					$phone = $qad->phone;
					$email  = $qad->email;
					$roles  = $qad->roles;
					$position = $qad->position;
					$company  = $qad->company;
					
					}
					//check expired periode
					$cek_period = $this->model_login->cek_period();	
					if($cek_period==TRUE or $roles=="ADMINISTRATOR" or $roles=="REVIEWER"){
						$sess_data['id']  = $id;
						 $sess_data['name']  = $name;
						 $sess_data['phone']  = $phone;
						 $sess_data['email']  = $email;
						 $sess_data['roles']  = $roles;
						 $sess_data['position']  = $position;
						 $sess_data['company']  = $company;
						 $sess_data['en_email']  = $en_email;
					}else{
						$this->session->set_flashdata('result_login', '<br>The submission period is now officially closed, thank you for your participation and submission. We appreciate your interest and goodwill.');
						redirect('login');
					}
					
				$this->session->set_userdata($sess_data);	
				redirect('home','refresh');	
			}
			else {
				$this->session->set_flashdata('result_login', '<br>Oops! User not found, Please activate your account or check your email and password correctly');
				redirect('login');
			}
        }
    }
	

	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
	
}
