<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_eoi_form extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','html'));
		$this->load->model(array('model_eoiform','model_account'));
		$this->load->library(['form_validation','session']);
		$this->load->helper('kripto');
		$this->load->helper('base64url');
		$this->load->library('encrypt');
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
	
	function index(){
			
		$this->load->helper('url');
		$a['page']	= "view_eoiform";	
		$this->load->view('index', $a);

	}
	
	
	function delete_eoi($user_id){
		$id=decrypt_url($user_id);
		
		$this->model_eoiform->delete_eoi($id);
		redirect('eoi_form_ipp','refresh');
	}
	
	function delete_eoi_admin($user_id){
		$id=decrypt_url($user_id);
		
		$this->model_eoiform->delete_eoi($id);
		redirect('eoi_submission_admin','refresh');
	}
	
	function delete_users($user_id){
		$id=decrypt_url($user_id);
		
		$this->model_account->delete_users($id);
		redirect('users_admin','refresh');
	}
	
}

