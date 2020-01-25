<?php
class Change_password extends CI_Controller {

   function __construct() {
        parent::__construct();
        session_start();
        $this->load->model(array('model_account'));
		$this->load->library('security');
		$this->load->library('encrypt');
		$this->load->helper('string');
		$this->load->helper('base64url');
		date_default_timezone_set("Asia/Jakarta");
		
		//check session
		if ($this->session->userdata('en_email')) {
			$en_email= base64url_decode($this->session->userdata('en_email'));
			$userInfo = $this->model_account->getUserInfoByEmail($en_email);  
				if(count($userInfo)<1){
				 redirect('landing');
				}
		}else{
				redirect('landing');
		}
    }
	
	    function index() {
		$this->load->helper('url');
		$a['page']	= "view_change_password";	
		$this->load->view('index', $a);
    }
	
	public function proses()  
     {  
         
         $this->form_validation->set_rules('user_id', 'User Id', 'required');   
         $this->form_validation->set_rules('password_lama', 'Current Password', 'required|min_length[5]');   
         $this->form_validation->set_rules('password_baru', 'New Password', 'required|min_length[5]');   
         $this->form_validation->set_rules('passconf', 'Re-Type Password', 'required|matches[password_baru]');       
         
         if($this->form_validation->run() == FALSE) {  
             $data['page'] = 'view_change_password';  
             $this->load->view('index',$data);  
         }else{  
             $user_id = $this->security->xss_clean($this->input->post('user_id'));     
             $password_lama = $this->security->xss_clean($this->input->post('password_lama'));     
             $password_baru = $this->security->xss_clean($this->input->post('password_baru'));     
             $passconf = $this->security->xss_clean($this->input->post('passconf'));     
             

			$password_lama = md5($this->encrypt->sha1($password_lama));          
			$userInfo = $this->model_account->getUserChangePass($user_id,$password_lama);  
			if(!$userInfo){  
               $this->session->set_flashdata('result_login', 'Your current password is missing or incorrect.');  
			}
			else{
			    $hashed = md5($this->encrypt->sha1($password_baru));          
			    $cleanPost['password'] = $hashed;  
			    $cleanPost['id'] = $user_id;  
			    $this->model_account->updatePassword($cleanPost);  
				$this->session->set_flashdata('result_sukses', 'Your Password has been changed!');  
			}

			  redirect(site_url('change_password'),'refresh');   
           
         }  
         
     }  

          
	
}
