<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eoi_submission_review extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','html','security'));
		$this->load->model(array('model_eoiform','model_account'));
		$this->load->library(['form_validation','session']);
		$this->load->helper('kripto');
		$this->load->library('security');
		$this->load->helper('base64url');
		$this->load->library('encrypt');
		date_default_timezone_set("Asia/Jakarta");

		//check session administrator
		if ($this->session->userdata('en_email')) {
			$en_email= base64url_decode($this->session->userdata('en_email'));
			$userInfo = $this->model_account->getUserInfoByEmailReviewer($en_email);  
				if(count($userInfo)<1){
				 redirect('landing');
				}
		}else{
				redirect('landing');
		}
		
	}
	
	function index(){
			
		$this->load->helper('url');
		$a['page']	= "view_eoi_submission_review";	
		$a['data']=$this->model_eoiform->getEoiAll();
		$this->load->view('index', $a);

	}
	
	function eoi_submission_prev($CompanyID){
		$CompanyID=decrypt_url($CompanyID);
		$a['page']	= "view_eoi_submission_admin_prev";	
		$a['data']=$this->model_eoiform->getEoiByCompanyId($CompanyID);
		$this->load->view('index', $a);
	}
	

	
}

