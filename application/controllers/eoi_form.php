<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eoi_form extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','html','security'));
		$this->load->model(array('model_eoiform','model_account'));
		$this->load->library(['form_validation','session']);
		$this->load->helper('kripto');
		$this->load->library('security');
		$this->load->library('encrypt');
		date_default_timezone_set("Asia/Jakarta");

		//check session
		if ($this->session->userdata('en_email')) {
			$en_email= $this->base64url_decode($this->session->userdata('en_email'));
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
		$user_id=$this->session->userdata('id');
		$a['page']	= "view_eoiform";	
		$a['data']=$this->model_eoiform->getEoiByUid($user_id);
		$this->load->view('index', $a);

	}
	
	
	function finsert_idekreatif(){
	
		 $this->form_validation->set_rules('user_id', 'User Id','required');
		 $this->form_validation->set_rules('judul_ide', 'Judul Ide','required');
         $this->form_validation->set_rules('latarbelakang_ide','Latarbelakang Ide','required');
         $this->form_validation->set_rules('tujuan_ide','Tujuan Ide','required');
         $this->form_validation->set_rules('deskripsi_ide','Deskripsi Ide','required'); 
		
		 if($this->form_validation->run() == FALSE) {
             $this->session->set_flashdata('result_login', '<br>Upload Gagal, Form yang di Isi tidak lengkap!');
         }else{ 
			 $user_id =  $this->security->xss_clean($this->input->post('user_id'));
			 $judul_ide =  $this->security->xss_clean($this->input->post('judul_ide'));
			 $latarbelakang_ide =  $this->security->xss_clean($this->input->post('latarbelakang_ide'));
			 $tujuan_ide =  $this->security->xss_clean($this->input->post('tujuan_ide'));
			 $deskripsi_ide =  $this->security->xss_clean($this->input->post('deskripsi_ide'));
			 $created_by= $this->security->xss_clean($this->session->userdata('email'));
			 $created_dtm= $this->security->xss_clean(date("Y-m-d H:i:s"));
			
			$a=$this->model_idekreatif->getUserIdekreatifByUid($user_id)->num_rows();
			if($a<3){
			$this->model_idekreatif->insert_idekreatif($user_id,$judul_ide,$latarbelakang_ide,$tujuan_ide,$deskripsi_ide,$created_by,$created_dtm);
			$this->session->set_flashdata('result_sukses', '<br>Upload Berhasil');
			}else{
			$this->session->set_flashdata('result_login', '<br>Upload Gagal, Maks jumlah ide 3');
			}
		}
		
		redirect('ide_kreatif','refresh');
	}			
	
	function fhapus_idekreatif($id,$user_id){
		$id=decrypt_url($id);
		$user_id=decrypt_url($user_id);
		
		$this->model_idekreatif->hapus_idekreatif($id,$user_id);
		redirect('ide_kreatif','refresh');
	}
	
	function base64url_encode($data) {   
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
    function base64url_decode($data) {   
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   } 
	
}

