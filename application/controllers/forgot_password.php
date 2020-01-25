ng <?php
class Forgot_password extends CI_Controller {

     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
		 $this->load->helper('base64url');
         $this->load->model('model_account'); 
		 $this->load->library('security');
		 $this->load->library('encrypt');
		 date_default_timezone_set("Asia/Jakarta");
     }
	
	    function index() {
		//$this->load->helper('url');
		//$a['page']	= "view_lupa_password";	
		//$this->load->view('index', $a);
		$this->load->view('view_lupa_password');
    }
	
	public function proses()  
     {  
         
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');   
         
         if($this->form_validation->run() == FALSE) {  
             $this->load->view('view_lupa_password');  
         }else{  
             $email = $this->security->xss_clean($this->input->post('email'));  
             $userInfo = $this->model_account->getUserInfoByEmail($email);  
			 
             if(!$userInfo){  
               $this->session->set_flashdata('result_login', 'Email address not found, Please check the email address and try again !');  
               redirect('forgot_password');     
             }    
			   
             //build token    
             $token = $this->model_account->insertToken($userInfo->id);              
             $qstring =  base64url_encode($token);           
             $url = site_url() . 'forgot_password/reset/token/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
               
             $message = '';             
             $message .= '<strong>Reset password.</strong><br>';  
             $message .= '<strong>Click the following link ro reset password:</strong> ' . $link;         
			 
			 //decode email and message
			 $en_email=  base64url_encode($email);
			 $en_message= base64url_encode($message);
				
			 redirect('email/v3/'.$en_email.'/'.$en_message);
           
         }
		
         
     }  
   
     public function reset()  
     {  
       $token = base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
         
       $user_info = $this->model_account->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('result_login', 'Invalid or Expired Token');  
         redirect(site_url('login'),'refresh');   
       }    
   
       $data = array(  
	     'name'=> $user_info->name,  
         'page'=> 'view_reset_password',  
         'token'=>base64url_encode($token)  
       );  
         
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');         
	   
         
       if ($this->form_validation->run() == FALSE) {    
		  //$this->load->view('index', $data);
		  $this->load->view('view_reset_password', $data);
       }else{  
                           
         $post = $this->input->post(NULL, TRUE);          
         $cleanPost = $this->security->xss_clean($post);          
         $hashed = md5($this->encrypt->sha1($cleanPost['password']));          
         $cleanPost['password'] = $hashed;  
         $cleanPost['id'] = $user_info->id;  
         unset($cleanPost['passconf']);          
         if(!$this->model_account->updatePassword($cleanPost)){  
           $this->session->set_flashdata('result_login', 'Failed to update password.');  
         }else{  
           $this->session->set_flashdata('result_sukses', 'Your password has been changed successfully.');  
         }  
         redirect(site_url('login'),'refresh');         
       }  
     }  
         
	
}
