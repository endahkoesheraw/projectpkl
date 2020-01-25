<?php
class Activate extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model(array('model_account'));
		$this->load->library('user_agent');
		$this->load->library('security');
		$this->load->helper('base64url');
		$this->load->library('encrypt');
		$this->load->helper('string');
		date_default_timezone_set("Asia/Jakarta");
		
    }
	
	function v2($qstring) {   
		$qstring = base64url_decode($qstring);    
		$result= $this->model_account->aktivasiUser($qstring);
		if($result){
		$this->session->set_flashdata('result_sukses', '<br>Congratulations, your account has been activated');
		} else{
		$this->session->set_flashdata('result_login', '<br>Failed to activated your account');
		}
		redirect('login');
		
   }


	
}
