<?php
class Email extends CI_Controller {

    function __construct() {
        parent::__construct();
		 $this->load->library('email');
		 $this->load->library('encrypt');
		 $this->load->helper('base64url');
		 date_default_timezone_set("Asia/Jakarta");
    }
	
	 function v2($en_email,$en_message) {
	
		$email = base64url_decode($en_email);    
		$message = base64url_decode($en_message);    
		
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "smtp.ptpjb.com";
		$config['smtp_port'] = "25";
		//$config['smtp_user'] = "noreply@ptpjb.com; 
		//$config['smtp_pass'] = "-----";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";

		$ci->email->initialize($config);
		
		$ci->email->from('noreply@ptpjb.com', 'noreply@ptpjb.com');
		$ci->email->to($email);
		$this->email->reply_to($email, 'Users');
		$ci->email->subject('PT PJB EoI - Email Verification');
		$ci->email->message($message);
		echo $status=$ci->email->send();
		
		if($status==1){
		
		$this->session->set_flashdata('result_sukses', '<br>Please Activate Your Account. Before you can login, you must active your account with the code sent to your email address. If you did not receive this email, please check your junk/spam folder. If you entered an incorrect email address, you will need to re-register with the correct email address');
		}
		redirect('login');
    
    }
	
	function v3($en_email,$en_message) {
	
		$email = base64url_decode($en_email);    
		$message = base64url_decode($en_message);    
		
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "smtp.ptpjb.com";
		$config['smtp_port'] = "25";
		//$config['smtp_user'] = "noreply@ptpjb.com; 
		//$config['smtp_pass'] = "-----";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";

		$ci->email->initialize($config);
		
		$ci->email->from('noreply@ptpjb.com', 'noreply.ptpjb.com');
		$ci->email->to($email);
		$this->email->reply_to($email, 'Users');
		$ci->email->subject('PT PJB EoI - Email Reset Password');
		$ci->email->message($message);
		echo $status=$ci->email->send();
		
		if($status==1){
		
		$this->session->set_flashdata('result_sukses', '<br>A message will be sent to that address containing a link to reset your password. If you do not receive your email within five minutes check your spam folder.');
		}
		redirect('login');
    
    }
	
	//create notification
	function v4($en_email,$en_message) {
	
		$email = base64url_decode($en_email);    
		$message = base64url_decode($en_message);    
		
		
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "smtp.ptpjb.com";
		$config['smtp_port'] = "25";
		//$config['smtp_user'] = "noreply@ptpjb.com; 
		//$config['smtp_pass'] = "-----";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";


		$ci->email->initialize($config);
		
		$ci->email->from('noreply@ptpjb.com', 'noreply.ptpjb.com');
		$ci->email->to($email);
		$this->email->reply_to($email, 'Users');
		$ci->email->subject('PT PJB EoI - Email Notification');
		$ci->email->message($message);
		$status=$ci->email->send();
		
		if($status==1){
		$this->session->set_flashdata('result_sukses', '<br>Upload successful');
		}else{
		$this->session->set_flashdata('result_login', '<br>Upload failed, please try again !');
		}
		redirect('create_eoi_form','refresh');
    
    }
	
	//update notification
	function v5($en_email,$en_message) {
	
		$email = base64url_decode($en_email);    
		$message = base64url_decode($en_message);    
		
		
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "smtp.ptpjb.com";
		$config['smtp_port'] = "25";
		//$config['smtp_user'] = "noreply@ptpjb.com; 
		//$config['smtp_pass'] = "-----";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";


		$ci->email->initialize($config);
		
		$ci->email->from('noreply@ptpjb.com', 'noreply.ptpjb.com');
		$ci->email->to($email);
		$this->email->reply_to($email, 'Users');
		$ci->email->subject('PT PJB EoI - Email Notification');
		$ci->email->message($message);
		$status=$ci->email->send();
		
		if($status==1){
		$this->session->set_flashdata('result_sukses', '<br>Upload successful');
		}else{
		$this->session->set_flashdata('result_login', '<br>Upload failed, please try again!');
		}
		redirect('update_eoi_form','refresh');
    
    }
	
	



}
