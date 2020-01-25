 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
		 $this->load->helper('base64url');
         $this->load->model(array('model_login','model_account'));
		 $this->load->library('security');
		 $this->load->library('encrypt');
		 date_default_timezone_set("Asia/Jakarta");
     }
	
	 function index() {
		//$this->load->helper('url');
		//$a['page']	= "view_register";	
		$this->load->view('view_register');
    }
	
     public function proses() {
 
         $this->form_validation->set_rules('name', 'Name','required');
		 $this->form_validation->set_rules('email','Email','required|valid_email');
		 $this->form_validation->set_rules('phone', 'Phone','required');
         $this->form_validation->set_rules('position','Job Position','required');
		 $this->form_validation->set_rules('company','Company','required');
		 $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
		 $this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');       
	   
         if($this->form_validation->run() == FALSE) {
             //$a['page']	= "view_register";	
			 //$this->load->view('index', $a);
			 $this->load->view('view_register');
         }else{ 
			//encode email subject
			$en_email = base64url_encode($this->input->post('email'));  
			
			//clean & check users
			$email = $this->security->xss_clean($this->input->post('email'));   
            $userInfo = $this->model_account->getUserInfoByEmail($email);  
             
			 //check expired periode
			$cek_period = $this->model_login->cek_period();	
			if($cek_period==TRUE){ 
				 if(!$userInfo){	
					$data['name']   =    $this->input->post('name');
					$data['email']  =    $this->input->post('email');
					$data['phone']  =    $this->input->post('phone');
					$data['position']  =    $this->input->post('position');
					$data['company']  =    $this->input->post('company');
					$data['password'] = md5($this->encrypt->sha1($this->input->post('password')));
					$data['roles']  =   "REGULAR";
					$data['status']  =   "INACTIVE";
					$data['created_date']  =   date("Y-m-d H:i:s");
					$data['updated_date']  =   date("Y-m-d H:i:s");
				 
					 $url = site_url() . 'activate/v2/' . $en_email;  
					 $link = '<a href="' . $url . '">' . $url . '</a>';   
					   
					 $message = '';             
					 $message .= '<strong>Activate Your Account.</strong><br>';  
					 $message .= '<strong>To complete the activation of your account please click the following link:</strong> ' . $link;  
					 
					 //decode email message
					 $en_message = base64url_encode($message);       			 
					
					 $this->model_account->daftar($data);
					 redirect('email/v2/'.$en_email.'/'.$en_message);
				 } 
				else{
				$this->session->set_flashdata('result_login', 'Registration Failed The email address you entered is already in use or invalid. Please enter another email address.');
			}
		}
		else{
				$this->session->set_flashdata('result_login', '<br>The submission period is now officially closed, thank you for your participation and submission. We appreciate your interest and goodwill.');
		}
			redirect('register');
				
         }
     }
	
	 
 }