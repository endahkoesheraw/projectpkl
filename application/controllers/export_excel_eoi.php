<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_excel_eoi extends CI_Controller {
	
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
			$userInfo = $this->model_account->getUserInfoByEmailNonRegular($en_email);  
				if(count($userInfo)<1){
				 redirect('landing');
				}
		}else{
				redirect('landing');
		}
		
	}
	
	function index(){
		$this->load->helper('url');
		$a['page']	= "view_home";
		$this->load->view('index',$a);
	}
	
	
	public function export_generalinfo(){			
		$a['title']	= "EoI_GeneralInfo";	
		$a['data'] = $this->model_eoiform->getEoiAll();
		$this->load->view('view_export_generalinfo',$a);
    }		
	
	public function export_identitas(){			
		$a['title']	= "EoI_Identitas";	
		$a['data'] = $this->model_eoiform->getEoiAll();
		$this->load->view('view_export_identitas',$a);
    }		
	
		public function export_preferensi(){			
		$a['title']	= "EoI_Prefensi";	
		$a['data'] = $this->model_eoiform->getEoiAll();
		$this->load->view('view_export_preferensi',$a);
    }		
	
		public function export_pengalaman(){			
		$a['title']	= "EoI_Pengalaman";	
		$a['data'] = $this->model_eoiform->getEoiAll();
		$this->load->view('view_export_pengalaman',$a);
    }		

	public function export_users(){			
		$a['title']	= "EoI_Users";	
		$a['data'] = $this->model_account->getUsersAll();
		$this->load->view('view_export_users',$a);
    }			
	
	public function export_submissiondetailwithexp($uid){		
		$uid=decrypt_url($uid);	
		$a['title']	= "EoI_SubmissionDetailWithExp";	
		$a['data'] = $this->model_eoiform->getEoiByUid($uid);
		$this->load->view('view_export_detailwithexp',$a);
    }			
	

	
	
}

