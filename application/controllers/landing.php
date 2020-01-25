<?php
class Landing extends CI_Controller {

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
		$this->load->view('view_landing');
    }
	
}
