<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_eoi_from_user extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','html','security'));
		$this->load->model(array('model_eoiform','model_account'));
		$this->load->library(['form_validation','session']);
		$this->load->helper('base64url');
		$this->load->helper('kripto');
		$this->load->library('security');
		$this->load->library('encrypt');
		date_default_timezone_set("Asia/Jakarta");

		//check session administrator
		if ($this->session->userdata('en_email')) {
			$en_email= base64url_decode($this->session->userdata('en_email'));
			$userInfo = $this->model_account->getUserInfoByEmailAdmin($en_email);  
				if(count($userInfo)<1){
				 redirect('landing');
				}
		}else{
				redirect('landing');
		}
		
	}
	
	function index(){
	
		$this->load->helper('url');
		$a['page']	= "view_users_admin";	
		$a['data']=$this->model_account->getUsersAll();
		$this->load->view('index', $a);

	}
	

	function update($user_id){
			
		$this->load->helper('url');
		$user_id	= decrypt_url($user_id);
		$a['user_id']=$user_id;
		$a['data']=$this->model_eoiform->getEoiByUid($user_id);
		$a['page']	= "view_update_eoi_from_user";	
		$this->load->view('index', $a);

	}
		
	
	function proses(){
			
			//form validation
			 $this->form_validation->set_rules('UId', 'Name','required');
			 $this->form_validation->set_rules('BasicCompanyLegalEntityName', 'Company Name','required');
			 //$this->form_validation->set_rules('BasicCompanyCode', 'Company Code','max_length[4]|min_length[4]');
			 $this->form_validation->set_rules('BasicCompayAddress','Company Address','required');
			 $this->form_validation->set_rules('BasicCompanyWebAddress','Web Address','required');
			 $this->form_validation->set_rules('BasicCompanyYearEstablished','Company Year Established','required|numeric');
			 $this->form_validation->set_rules('BasicCompanyCountryOfEstablishment','Company Country of Establishment','required'); 
			 $this->form_validation->set_rules('LonglistCompatibilityLegitimacy','Company Status','required'); 
			 
			 $this->form_validation->set_rules('BasicCompanyContactPerson1Name','Contact Person 1 Name','required'); 
			 $this->form_validation->set_rules('BasicCompanyContactPerson1Position','Contact Person 1 Position ','required'); 
			 $this->form_validation->set_rules('BasicCompanyContactPerson1TelephoneNumber','Contact Person 1 Telephone Number','required'); 
			 $this->form_validation->set_rules('BasicCompanyContactPerson1EmailAdress','Contact Person 1 Email ','required');
			 
			 $this->form_validation->set_rules('BasicCompanyContactPerson2Name','Contact Person 2 Name','required'); 
			 $this->form_validation->set_rules('BasicCompanyContactPerson2Position','Contact Person 2 Position','required'); 
			 $this->form_validation->set_rules('BasicCompanyContactPerson2TelephoneNumber','Contact Person 2 Telephone Number','required'); 
			 $this->form_validation->set_rules('BasicCompanyContactPerson2EmailAdress','Contact Person 2 Email ','required'); 
			 
			 $this->form_validation->set_rules('LonglistCapitalTotalAsset','Total Asset ','required'); 
			 $this->form_validation->set_rules('LonglistCapitalEBITDA','EBITDA ','required'); 
			 $this->form_validation->set_rules('LonglistCapitalCreditRating','Credit Rating','required'); 
			 $this->form_validation->set_rules('LonglistCapitalDSCR','DSCR','required'); 

		
		 if($this->form_validation->run() == FALSE) {
			 $this->load->view('view_form_validation');
         }else{ 
			 $UId =  $this->security->xss_clean($this->input->post('UId'));
			 $BasicCompanyLegalEntityName =  $this->security->xss_clean($this->input->post('BasicCompanyLegalEntityName'));
			 $BasicCompanyCode =  $this->security->xss_clean($this->input->post('BasicCompanyCode'));
			 $BasicCompayAddress =  $this->input->post('BasicCompayAddress');
			 $BasicCompanyYearEstablished =  $this->security->xss_clean($this->input->post('BasicCompanyYearEstablished'));
			 $BasicCompanyCountryOfEstablishment =  $this->security->xss_clean($this->input->post('BasicCompanyCountryOfEstablishment'));
			 $LonglistCompatibilityLegitimacy =  $this->security->xss_clean($this->input->post('LonglistCompatibilityLegitimacy'));
			 $BasicCompanyWebAddress =  $this->security->xss_clean($this->input->post('BasicCompanyWebAddress'));
			 $UploadCompanyProfileOld =  $this->security->xss_clean($this->input->post('UploadCompanyProfileOld'));
			 $UploadSignedEOIOld =  $this->security->xss_clean($this->input->post('UploadSignedEOIOld'));
			 $UploadFinancialStatementOld =  $this->security->xss_clean($this->input->post('UploadFinancialStatementOld'));
			 
			 // Start Uploading File 
			         $config =   [
						'upload_path'   => './uploads/',
                        'allowed_types' => 'pdf',
						'encrypt_name' => 'TRUE',
                         'max_size'      => 0
                     ];

            $this->load->library('upload', $config);
			//UploadCompanyProfile
			if (!$this->upload->do_upload('UploadCompanyProfile')){
			 $UploadCompanyProfile=$UploadCompanyProfileOld;
			}else{
			$data = $this->upload->data();
			$UploadCompanyProfile=$data['file_name'];
			}
				
			//UploadSignedEOI
			if (!$this->upload->do_upload('UploadSignedEOI')){
			 $UploadSignedEOI=$UploadSignedEOIOld;
			}else{
			$data = $this->upload->data();
			$UploadSignedEOI=$data['file_name'];
			}
			
			//UploadFinancialStatement
			if (!$this->upload->do_upload('UploadFinancialStatement')){
			 $UploadFinancialStatement=$UploadFinancialStatementOld;
			}else{
			$data = $this->upload->data();
			$UploadFinancialStatement=$data['file_name'];
			}			
			 
			 $BasicCompanyContactPerson1Name =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson1Name'));
			 $BasicCompanyContactPerson1Position =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson1Position'));
			 $BasicCompanyContactPerson1TelephoneNumber =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson1TelephoneNumber'));
			 $BasicCompanyContactPerson1EmailAdress =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson1EmailAdress'));
			 
			 $BasicCompanyContactPerson2Name =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson2Name'));
			 $BasicCompanyContactPerson2Position =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson2Position'));
			 $BasicCompanyContactPerson2TelephoneNumber =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson2TelephoneNumber'));
			 $BasicCompanyContactPerson2EmailAdress =  $this->security->xss_clean($this->input->post('BasicCompanyContactPerson2EmailAdress'));
			 
			 $BasicCompanyLegalEntityNameInIndonesia =  $this->security->xss_clean($this->input->post('BasicCompanyLegalEntityNameInIndonesia'));
			 $BasicCompayAddressInIndonesia = $this->input->post('BasicCompayAddressInIndonesia');
			 $BasicCompanyContactPersonIndonesiaName =  $this->security->xss_clean($this->input->post('BasicCompanyContactPersonIndonesiaName'));
			 $BasicCompanyContactPersonIndonesiaPosition =  $this->security->xss_clean($this->input->post('BasicCompanyContactPersonIndonesiaPosition'));
			 $BasicCompanyContactPersonIndonesiaTelephoneNumber =  $this->security->xss_clean($this->input->post('BasicCompanyContactPersonIndonesiaTelephoneNumber'));
			 $BasicCompanyContactPersonIndonesiaEmailAdress =  $this->security->xss_clean($this->input->post('BasicCompanyContactPersonIndonesiaEmailAdress'));
			
			 $LonglistCapitalTotalAsset =  $this->security->xss_clean($this->input->post('LonglistCapitalTotalAsset'));
			 $LonglistCapitalEBITDA =  $this->security->xss_clean($this->input->post('LonglistCapitalEBITDA'));
			 $LonglistCapitalCreditRating =  $this->security->xss_clean($this->input->post('LonglistCapitalCreditRating'));
			 $LonglistCapitalDSCR =  $this->security->xss_clean($this->input->post('LonglistCapitalDSCR'));
			 
			 $AreaOfInterestHydroelectricPowerPlant =  $this->security->xss_clean($this->input->post('AreaOfInterestHydroelectricPowerPlant'));
			 $AreaOfInterestGeothermalPP =  $this->security->xss_clean($this->input->post('AreaOfInterestGeothermalPP'));
			 $AreaOfInterestSolarPhotovoltaicPP =  $this->security->xss_clean($this->input->post('AreaOfInterestSolarPhotovoltaicPP'));
			 $AreaOfInterestSolarThermalPP =  $this->security->xss_clean($this->input->post('AreaOfInterestSolarThermalPP'));
			 $AreaOfInterestWindPowerPP =  $this->security->xss_clean($this->input->post('AreaOfInterestWindPowerPP'));
			 $AreaOfInterestEnergyStoragePumpedPP =  $this->security->xss_clean($this->input->post('AreaOfInterestEnergyStoragePumpedPP'));
			 $AreaOfInterestSeaEnergyPP =  $this->security->xss_clean($this->input->post('AreaOfInterestSeaEnergyPP'));
			 $AreaOfInterestWastetoEnergyPP =  $this->security->xss_clean($this->input->post('AreaOfInterestWastetoEnergyPP'));
			 $AreaOfInterestNuclearEnergyPP =  $this->security->xss_clean($this->input->post('AreaOfInterestNuclearEnergyPP'));
			 $AreaOfInterestOtherCleanTechnologyPP =  $this->security->xss_clean($this->input->post('AreaOfInterestOtherCleanTechnologyPP'));
			 
			 $PreferenceHydroelectricCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricCapacity1'));
			 $PreferenceHydroelectricCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricCapacity2'));
			 $PreferenceHydroelectricCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricCapacity3'));
			 $PreferenceHydroelectricCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricCapacity4'));
			 $PreferenceHydroelectricCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricCapacity5'));
			 $PreferenceHydroelectricCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricCapacity6'));
			 $PreferenceHydroelectricExpNotes =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpNotes'));
			 $PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity'));
			 $PreferenceHydroelectricExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpRoleEPCProviderCapacity'));
			 $PreferenceHydroelectricExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpRoleFinancingProviderCapacity'));
			 $PreferenceHydroelectricExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpRoleIPPCapacity'));
			 $PreferenceHydroelectricExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpRoleOMServiceProviderCapacity'));
			 $PreferenceHydroelectricExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricExpRoleTechnologyProviderCapacity'));
			 $PreferenceHydroelectricNotes =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricNotes'));
			 $PreferenceHydroelectricPartner =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricPartner'));
			 $PreferenceHydroelectricRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricRoleConsultingServiceProvider'));
			 $PreferenceHydroelectricRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricRoleEPCProvider'));
			 $PreferenceHydroelectricRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricRoleFinancingProvider'));
			 $PreferenceHydroelectricRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricRoleIPP'));
			 $PreferenceHydroelectricRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricRoleOMServiceProvider'));
			 $PreferenceHydroelectricRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceHydroelectricRoleTechnologyProvider'));	

			$PreferenceGeothermalCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceGeothermalCapacity1'));
			$PreferenceGeothermalCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceGeothermalCapacity2'));
			$PreferenceGeothermalCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceGeothermalCapacity3'));
			$PreferenceGeothermalCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceGeothermalCapacity4'));
			$PreferenceGeothermalCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceGeothermalCapacity5'));
			$PreferenceGeothermalCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceGeothermalCapacity6'));
			$PreferenceGeothermalExpNotes =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpNotes'));
			$PreferenceGeothermalExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpRoleConsultingServiceProviderCapacity'));
			$PreferenceGeothermalExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpRoleEPCProviderCapacity'));
			$PreferenceGeothermalExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpRoleFinancingProviderCapacity'));
			$PreferenceGeothermalExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpRoleIPPCapacity'));
			$PreferenceGeothermalExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpRoleOMServiceProviderCapacity'));
			$PreferenceGeothermalExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceGeothermalExpRoleTechnologyProviderCapacity'));
			$PreferenceGeothermalNotes =  $this->security->xss_clean($this->input->post('PreferenceGeothermalNotes'));
			$PreferenceGeothermalPartner =  $this->security->xss_clean($this->input->post('PreferenceGeothermalPartner'));
			$PreferenceGeothermalRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceGeothermalRoleConsultingServiceProvider'));
			$PreferenceGeothermalRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceGeothermalRoleEPCProvider'));
			$PreferenceGeothermalRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceGeothermalRoleFinancingProvider'));
			$PreferenceGeothermalRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceGeothermalRoleIPP'));
			$PreferenceGeothermalRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceGeothermalRoleOMServiceProvider'));
			$PreferenceGeothermalRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceGeothermalRoleTechnologyProvider'));	
			
			$PreferenceNuclearCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceNuclearCapacity1'));
			$PreferenceNuclearCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceNuclearCapacity2'));
			$PreferenceNuclearCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceNuclearCapacity3'));
			$PreferenceNuclearCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceNuclearCapacity4'));
			$PreferenceNuclearCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceNuclearCapacity5'));
			$PreferenceNuclearCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceNuclearCapacity6'));
			$PreferenceNuclearExpNotes =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpNotes'));
			$PreferenceNuclearExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpRoleConsultingServiceProviderCapacity'));
			$PreferenceNuclearExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpRoleEPCProviderCapacity'));
			$PreferenceNuclearExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpRoleFinancingProviderCapacity'));
			$PreferenceNuclearExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpRoleIPPCapacity'));
			$PreferenceNuclearExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpRoleOMServiceProviderCapacity'));
			$PreferenceNuclearExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceNuclearExpRoleTechnologyProviderCapacity'));
			$PreferenceNuclearNotes =  $this->security->xss_clean($this->input->post('PreferenceNuclearNotes'));
			$PreferenceNuclearPartner =  $this->security->xss_clean($this->input->post('PreferenceNuclearPartner'));
			$PreferenceNuclearRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceNuclearRoleConsultingServiceProvider'));
			$PreferenceNuclearRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceNuclearRoleEPCProvider'));
			$PreferenceNuclearRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceNuclearRoleFinancingProvider'));
			$PreferenceNuclearRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceNuclearRoleIPP'));
			$PreferenceNuclearRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceNuclearRoleOMServiceProvider'));
			$PreferenceNuclearRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceNuclearRoleTechnologyProvider'));	
			
			$PreferenceSeaEnergyCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyCapacity1'));
			$PreferenceSeaEnergyCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyCapacity2'));
			$PreferenceSeaEnergyCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyCapacity3'));
			$PreferenceSeaEnergyCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyCapacity4'));
			$PreferenceSeaEnergyCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyCapacity5'));
			$PreferenceSeaEnergyCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyCapacity6'));
			$PreferenceSeaEnergyExpNotes =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpNotes'));
			$PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity'));
			$PreferenceSeaEnergyExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpRoleEPCProviderCapacity'));
			$PreferenceSeaEnergyExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpRoleFinancingProviderCapacity'));
			$PreferenceSeaEnergyExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpRoleIPPCapacity'));
			$PreferenceSeaEnergyExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpRoleOMServiceProviderCapacity'));
			$PreferenceSeaEnergyExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyExpRoleTechnologyProviderCapacity'));
			$PreferenceSeaEnergyNotes =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyNotes'));
			$PreferenceSeaEnergyPartner =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyPartner'));
			$PreferenceSeaEnergyRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyRoleConsultingServiceProvider'));
			$PreferenceSeaEnergyRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyRoleEPCProvider'));
			$PreferenceSeaEnergyRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyRoleFinancingProvider'));
			$PreferenceSeaEnergyRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyRoleIPP'));
			$PreferenceSeaEnergyRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyRoleOMServiceProvider'));
			$PreferenceSeaEnergyRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceSeaEnergyRoleTechnologyProvider'));	
			
			$PreferenceSolarPhotovoltaicCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicCapacity1'));
			$PreferenceSolarPhotovoltaicCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicCapacity2'));
			$PreferenceSolarPhotovoltaicCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicCapacity3'));
			$PreferenceSolarPhotovoltaicCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicCapacity4'));
			$PreferenceSolarPhotovoltaicCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicCapacity5'));
			$PreferenceSolarPhotovoltaicCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicCapacity6'));
			$PreferenceSolarPhotovoltaicExpNotes =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpNotes'));
			$PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac'));
			$PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity'));
			$PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity'));
			$PreferenceSolarPhotovoltaicExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpRoleIPPCapacity'));
			$PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity'));
			$PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity'));
			$PreferenceSolarPhotovoltaicNotes =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicNotes'));
			$PreferenceSolarPhotovoltaicPartner =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicPartner'));
			$PreferenceSolarPhotovoltaicRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicRoleConsultingServiceProvider'));
			$PreferenceSolarPhotovoltaicRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicRoleEPCProvider'));
			$PreferenceSolarPhotovoltaicRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicRoleFinancingProvider'));
			$PreferenceSolarPhotovoltaicRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicRoleIPP'));
			$PreferenceSolarPhotovoltaicRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicRoleOMServiceProvider'));
			$PreferenceSolarPhotovoltaicRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarPhotovoltaicRoleTechnologyProvider'));	
			
			$PreferenceSolarThermalCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalCapacity1'));
			$PreferenceSolarThermalCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalCapacity2'));
			$PreferenceSolarThermalCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalCapacity3'));
			$PreferenceSolarThermalCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalCapacity4'));
			$PreferenceSolarThermalCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalCapacity5'));
			$PreferenceSolarThermalCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalCapacity6'));
			$PreferenceSolarThermalExpNotes =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpNotes'));
			$PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity'));
			$PreferenceSolarThermalExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpRoleEPCProviderCapacity'));
			$PreferenceSolarThermalExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpRoleFinancingProviderCapacity'));
			$PreferenceSolarThermalExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpRoleIPPCapacity'));
			$PreferenceSolarThermalExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpRoleOMServiceProviderCapacity'));
			$PreferenceSolarThermalExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalExpRoleTechnologyProviderCapacity'));
			$PreferenceSolarThermalNotes =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalNotes'));
			$PreferenceSolarThermalPartner =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalPartner'));
			$PreferenceSolarThermalRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalRoleConsultingServiceProvider'));
			$PreferenceSolarThermalRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalRoleEPCProvider'));
			$PreferenceSolarThermalRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalRoleFinancingProvider'));
			$PreferenceSolarThermalRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalRoleIPP'));
			$PreferenceSolarThermalRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalRoleOMServiceProvider'));
			$PreferenceSolarThermalRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceSolarThermalRoleTechnologyProvider'));	
			
			$PreferenceWasteToEnergyCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyCapacity1'));
			$PreferenceWasteToEnergyCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyCapacity2'));
			$PreferenceWasteToEnergyCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyCapacity3'));
			$PreferenceWasteToEnergyCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyCapacity4'));
			$PreferenceWasteToEnergyCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyCapacity5'));
			$PreferenceWasteToEnergyCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyCapacity6'));
			$PreferenceWasteToEnergyExpNotes =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpNotes'));
			$PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity'));
			$PreferenceWasteToEnergyExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpRoleEPCProviderCapacity'));
			$PreferenceWasteToEnergyExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpRoleFinancingProviderCapacity'));
			$PreferenceWasteToEnergyExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpRoleIPPCapacity'));
			$PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity'));
			$PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity'));
			$PreferenceWasteToEnergyNotes =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyNotes'));
			$PreferenceWasteToEnergyPartner =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyPartner'));
			$PreferenceWasteToEnergyRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleConsultingServiceProvider'));
			$PreferenceWasteToEnergyRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleEPCProvider'));
			$PreferenceWasteToEnergyRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleFinancingProvider'));
			$PreferenceWasteToEnergyRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleIPP'));
			$PreferenceWasteToEnergyRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleOMServiceProvider'));
			$PreferenceWasteToEnergyRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleTechnologyProvider'));	
			
			$PreferenceWindPowerCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceWindPowerCapacity1'));
			$PreferenceWindPowerCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceWindPowerCapacity2'));
			$PreferenceWindPowerCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceWindPowerCapacity3'));
			$PreferenceWindPowerCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceWindPowerCapacity4'));
			$PreferenceWindPowerCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceWindPowerCapacity5'));
			$PreferenceWindPowerCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceWindPowerCapacity6'));
			$PreferenceWindPowerExpNotes =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpNotes'));
			$PreferenceWindPowerExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpRoleConsultingServiceProviderCapacity'));
			$PreferenceWindPowerExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpRoleEPCProviderCapacity'));
			$PreferenceWindPowerExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpRoleFinancingProviderCapacity'));
			$PreferenceWindPowerExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpRoleIPPCapacity'));
			$PreferenceWindPowerExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpRoleOMServiceProviderCapacity'));
			$PreferenceWindPowerExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceWindPowerExpRoleTechnologyProviderCapacity'));
			$PreferenceWindPowerNotes =  $this->security->xss_clean($this->input->post('PreferenceWindPowerNotes'));
			$PreferenceWindPowerPartner =  $this->security->xss_clean($this->input->post('PreferenceWindPowerPartner'));
			$PreferenceWindPowerRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceWindPowerRoleConsultingServiceProvider'));
			$PreferenceWindPowerRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceWindPowerRoleEPCProvider'));
			$PreferenceWindPowerRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceWindPowerRoleFinancingProvider'));
			$PreferenceWindPowerRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceWindPowerRoleIPP'));
			$PreferenceWindPowerRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceWindPowerRoleOMServiceProvider'));
			$PreferenceWindPowerRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceWindPowerRoleTechnologyProvider'));	
			
			$PreferenceBiomassBiogasCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasCapacity1'));
			$PreferenceBiomassBiogasCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasCapacity2'));
			$PreferenceBiomassBiogasCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasCapacity3'));
			$PreferenceBiomassBiogasCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasCapacity4'));
			$PreferenceBiomassBiogasCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasCapacity5'));
			$PreferenceBiomassBiogasCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasCapacity6'));
			$PreferenceBiomassBiogasExpNotes =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpNotes'));
			$PreferenceBiomassBiogasExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpRoleConsultingServiceProviderCapacity'));
			$PreferenceBiomassBiogasExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpRoleEPCProviderCapacity'));
			$PreferenceBiomassBiogasExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpRoleFinancingProviderCapacity'));
			$PreferenceBiomassBiogasExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpRoleIPPCapacity'));
			$PreferenceBiomassBiogasExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpRoleOMServiceProviderCapacity'));
			$PreferenceBiomassBiogasExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasExpRoleTechnologyProviderCapacity'));
			$PreferenceBiomassBiogasNotes =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasNotes'));
			$PreferenceBiomassBiogasPartner =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasPartner'));
			$PreferenceBiomassBiogasRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasRoleConsultingServiceProvider'));
			$PreferenceBiomassBiogasRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasRoleEPCProvider'));
			$PreferenceBiomassBiogasRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasRoleFinancingProvider'));
			$PreferenceBiomassBiogasRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasRoleIPP'));
			$PreferenceBiomassBiogasRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasRoleOMServiceProvider'));
			$PreferenceBiomassBiogasRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasRoleTechnologyProvider'));	
			
			$PreferenceEnergyStorageCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageCapacity1'));
			$PreferenceEnergyStorageCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageCapacity2'));
			$PreferenceEnergyStorageCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageCapacity3'));
			$PreferenceEnergyStorageCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageCapacity4'));
			$PreferenceEnergyStorageCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageCapacity5'));
			$PreferenceEnergyStorageCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageCapacity6'));
			$PreferenceEnergyStorageExpNotes =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpNotes'));
			$PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity'));
			$PreferenceEnergyStorageExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpRoleEPCProviderCapacity'));
			$PreferenceEnergyStorageExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpRoleFinancingProviderCapacity'));
			$PreferenceEnergyStorageExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpRoleIPPCapacity'));
			$PreferenceEnergyStorageExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpRoleOMServiceProviderCapacity'));
			$PreferenceEnergyStorageExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageExpRoleTechnologyProviderCapacity'));
			$PreferenceEnergyStorageNotes =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageNotes'));
			$PreferenceEnergyStoragePartner =  $this->security->xss_clean($this->input->post('PreferenceEnergyStoragePartner'));
			$PreferenceEnergyStorageRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageRoleConsultingServiceProvider'));
			$PreferenceEnergyStorageRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageRoleEPCProvider'));
			$PreferenceEnergyStorageRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageRoleFinancingProvider'));
			$PreferenceEnergyStorageRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageRoleIPP'));
			$PreferenceEnergyStorageRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageRoleOMServiceProvider'));
			$PreferenceEnergyStorageRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceEnergyStorageRoleTechnologyProvider'));	
			
			$PreferenceOtherCleanCapacity1 =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanCapacity1'));
			$PreferenceOtherCleanCapacity2 =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanCapacity2'));
			$PreferenceOtherCleanCapacity3 =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanCapacity3'));
			$PreferenceOtherCleanCapacity4 =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanCapacity4'));
			$PreferenceOtherCleanCapacity5 =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanCapacity5'));
			$PreferenceOtherCleanCapacity6 =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanCapacity6'));
			$PreferenceOtherCleanExpNotes =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpNotes'));
			$PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity'));
			$PreferenceOtherCleanExpRoleEPCProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpRoleEPCProviderCapacity'));
			$PreferenceOtherCleanExpRoleFinancingProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpRoleFinancingProviderCapacity'));
			$PreferenceOtherCleanExpRoleIPPCapacity =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpRoleIPPCapacity'));
			$PreferenceOtherCleanExpRoleOMServiceProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpRoleOMServiceProviderCapacity'));
			$PreferenceOtherCleanExpRoleTechnologyProviderCapacity =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanExpRoleTechnologyProviderCapacity'));
			$PreferenceOtherCleanNotes =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanNotes'));
			$PreferenceOtherCleanPartner =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanPartner'));
			$PreferenceOtherCleanRoleConsultingServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanRoleConsultingServiceProvider'));
			$PreferenceOtherCleanRoleEPCProvider =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanRoleEPCProvider'));
			$PreferenceOtherCleanRoleFinancingProvider =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanRoleFinancingProvider'));
			$PreferenceOtherCleanRoleIPP =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanRoleIPP'));
			$PreferenceOtherCleanRoleOMServiceProvider =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanRoleOMServiceProvider'));
			$PreferenceOtherCleanRoleTechnologyProvider =  $this->security->xss_clean($this->input->post('PreferenceOtherCleanRoleTechnologyProvider'));	
			
			$ProjectName =  $this->security->xss_clean(json_encode($this->input->post('ProjectName')));
			$ProjectLocation =  $this->security->xss_clean(json_encode($this->input->post('ProjectLocation')));
			$ProjectType =  $this->security->xss_clean(json_encode($this->input->post('ProjectType')));
			$ProjectCapacity =  $this->security->xss_clean(json_encode($this->input->post('ProjectCapacity')));
			$ProjectCOD =  $this->security->xss_clean(json_encode($this->input->post('ProjectCOD')));
			$ProjectTariff =  $this->security->xss_clean(json_encode($this->input->post('ProjectTariff')));
			$ProjectValue =  $this->security->xss_clean(json_encode($this->input->post('ProjectValue')));
			$ProjectRoleIPP =  $this->security->xss_clean(json_encode($this->input->post('ProjectRoleIPP')));
			$ProjectRoleFinancingProvider =  $this->security->xss_clean(json_encode($this->input->post('ProjectRoleFinancingProvider')));
			$ProjectRoleTechnologyProvider =  $this->security->xss_clean(json_encode($this->input->post('ProjectRoleTechnologyProvider')));
			$ProjectRoleEPCProvider =  $this->security->xss_clean(json_encode($this->input->post('ProjectRoleEPCProvider')));
			$ProjectRoleConsultingServiceProvider =  $this->security->xss_clean(json_encode($this->input->post('ProjectRoleConsultingServiceProvider')));
			$ProjectRoleOMServiceProvider =  $this->security->xss_clean(json_encode($this->input->post('ProjectRoleOMServiceProvider')));
 
			 $created_dtm= $this->security->xss_clean(date("Y-m-d H:i:s"));
			
			$a=$this->model_eoiform->getEoiByUid($UId)->num_rows();
			if($a==1){
			
			
			$this->model_eoiform->update_eoiform($UId,$BasicCompanyLegalEntityName,$BasicCompanyCode,$BasicCompayAddress,$BasicCompanyWebAddress,$BasicCompanyYearEstablished,$BasicCompanyCountryOfEstablishment,$LonglistCompatibilityLegitimacy,$UploadCompanyProfile,$UploadSignedEOI,$BasicCompanyContactPerson1Name,$BasicCompanyContactPerson1Position,$BasicCompanyContactPerson1TelephoneNumber,$BasicCompanyContactPerson1EmailAdress,$BasicCompanyContactPerson2Name,$BasicCompanyContactPerson2Position,$BasicCompanyContactPerson2TelephoneNumber,$BasicCompanyContactPerson2EmailAdress,$BasicCompanyLegalEntityNameInIndonesia,$BasicCompayAddressInIndonesia,$BasicCompanyContactPersonIndonesiaName,$BasicCompanyContactPersonIndonesiaPosition,$BasicCompanyContactPersonIndonesiaTelephoneNumber,$BasicCompanyContactPersonIndonesiaEmailAdress,$LonglistCapitalTotalAsset,$LonglistCapitalEBITDA,$LonglistCapitalCreditRating,$LonglistCapitalDSCR,$UploadFinancialStatement,$AreaOfInterestHydroelectricPowerPlant,$AreaOfInterestGeothermalPP,$AreaOfInterestSolarPhotovoltaicPP,$AreaOfInterestSolarThermalPP,$AreaOfInterestWindPowerPP,$AreaOfInterestEnergyStoragePumpedPP,$AreaOfInterestSeaEnergyPP,$AreaOfInterestWastetoEnergyPP,$AreaOfInterestNuclearEnergyPP,$AreaOfInterestOtherCleanTechnologyPP,
			$PreferenceHydroelectricCapacity1,$PreferenceHydroelectricCapacity2,$PreferenceHydroelectricCapacity3,$PreferenceHydroelectricCapacity4, $PreferenceHydroelectricCapacity5, $PreferenceHydroelectricCapacity6,$PreferenceHydroelectricExpNotes, $PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity ,$PreferenceHydroelectricExpRoleEPCProviderCapacity, $PreferenceHydroelectricExpRoleFinancingProviderCapacity, $PreferenceHydroelectricExpRoleIPPCapacity, $PreferenceHydroelectricExpRoleOMServiceProviderCapacity,$PreferenceHydroelectricExpRoleTechnologyProviderCapacity ,$PreferenceHydroelectricNotes,$PreferenceHydroelectricPartner, $PreferenceHydroelectricRoleConsultingServiceProvider, $PreferenceHydroelectricRoleEPCProvider ,$PreferenceHydroelectricRoleFinancingProvider,$PreferenceHydroelectricRoleIPP,$PreferenceHydroelectricRoleOMServiceProvider,$PreferenceHydroelectricRoleTechnologyProvider,
			$PreferenceGeothermalCapacity1,$PreferenceGeothermalCapacity2,$PreferenceGeothermalCapacity3,$PreferenceGeothermalCapacity4, $PreferenceGeothermalCapacity5, $PreferenceGeothermalCapacity6,$PreferenceGeothermalExpNotes, $PreferenceGeothermalExpRoleConsultingServiceProviderCapacity ,$PreferenceGeothermalExpRoleEPCProviderCapacity, $PreferenceGeothermalExpRoleFinancingProviderCapacity, $PreferenceGeothermalExpRoleIPPCapacity, $PreferenceGeothermalExpRoleOMServiceProviderCapacity,$PreferenceGeothermalExpRoleTechnologyProviderCapacity ,$PreferenceGeothermalNotes,$PreferenceGeothermalPartner, $PreferenceGeothermalRoleConsultingServiceProvider, $PreferenceGeothermalRoleEPCProvider ,$PreferenceGeothermalRoleFinancingProvider,$PreferenceGeothermalRoleIPP,$PreferenceGeothermalRoleOMServiceProvider,$PreferenceGeothermalRoleTechnologyProvider,
			$PreferenceNuclearCapacity1,$PreferenceNuclearCapacity2,$PreferenceNuclearCapacity3,$PreferenceNuclearCapacity4, $PreferenceNuclearCapacity5, $PreferenceNuclearCapacity6,$PreferenceNuclearExpNotes, $PreferenceNuclearExpRoleConsultingServiceProviderCapacity ,$PreferenceNuclearExpRoleEPCProviderCapacity, $PreferenceNuclearExpRoleFinancingProviderCapacity, $PreferenceNuclearExpRoleIPPCapacity, $PreferenceNuclearExpRoleOMServiceProviderCapacity,$PreferenceNuclearExpRoleTechnologyProviderCapacity ,$PreferenceNuclearNotes,$PreferenceNuclearPartner, $PreferenceNuclearRoleConsultingServiceProvider, $PreferenceNuclearRoleEPCProvider ,$PreferenceNuclearRoleFinancingProvider,$PreferenceNuclearRoleIPP,$PreferenceNuclearRoleOMServiceProvider,$PreferenceNuclearRoleTechnologyProvider,
			$PreferenceSeaEnergyCapacity1,$PreferenceSeaEnergyCapacity2,$PreferenceSeaEnergyCapacity3,$PreferenceSeaEnergyCapacity4, $PreferenceSeaEnergyCapacity5, $PreferenceSeaEnergyCapacity6,$PreferenceSeaEnergyExpNotes, $PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity ,$PreferenceSeaEnergyExpRoleEPCProviderCapacity, $PreferenceSeaEnergyExpRoleFinancingProviderCapacity, $PreferenceSeaEnergyExpRoleIPPCapacity, $PreferenceSeaEnergyExpRoleOMServiceProviderCapacity,$PreferenceSeaEnergyExpRoleTechnologyProviderCapacity ,$PreferenceSeaEnergyNotes,$PreferenceSeaEnergyPartner, $PreferenceSeaEnergyRoleConsultingServiceProvider, $PreferenceSeaEnergyRoleEPCProvider ,$PreferenceSeaEnergyRoleFinancingProvider,$PreferenceSeaEnergyRoleIPP,$PreferenceSeaEnergyRoleOMServiceProvider,$PreferenceSeaEnergyRoleTechnologyProvider,
			$PreferenceSolarPhotovoltaicCapacity1,$PreferenceSolarPhotovoltaicCapacity2,$PreferenceSolarPhotovoltaicCapacity3,$PreferenceSolarPhotovoltaicCapacity4, $PreferenceSolarPhotovoltaicCapacity5, $PreferenceSolarPhotovoltaicCapacity6,$PreferenceSolarPhotovoltaicExpNotes, $PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac ,$PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity, $PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity, $PreferenceSolarPhotovoltaicExpRoleIPPCapacity, $PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity,$PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity ,$PreferenceSolarPhotovoltaicNotes,$PreferenceSolarPhotovoltaicPartner, $PreferenceSolarPhotovoltaicRoleConsultingServiceProvider, $PreferenceSolarPhotovoltaicRoleEPCProvider ,$PreferenceSolarPhotovoltaicRoleFinancingProvider,$PreferenceSolarPhotovoltaicRoleIPP,$PreferenceSolarPhotovoltaicRoleOMServiceProvider,$PreferenceSolarPhotovoltaicRoleTechnologyProvider,
			$PreferenceSolarThermalCapacity1,$PreferenceSolarThermalCapacity2,$PreferenceSolarThermalCapacity3,$PreferenceSolarThermalCapacity4, $PreferenceSolarThermalCapacity5, $PreferenceSolarThermalCapacity6,$PreferenceSolarThermalExpNotes, $PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity ,$PreferenceSolarThermalExpRoleEPCProviderCapacity, $PreferenceSolarThermalExpRoleFinancingProviderCapacity, $PreferenceSolarThermalExpRoleIPPCapacity, $PreferenceSolarThermalExpRoleOMServiceProviderCapacity,$PreferenceSolarThermalExpRoleTechnologyProviderCapacity ,$PreferenceSolarThermalNotes,$PreferenceSolarThermalPartner, $PreferenceSolarThermalRoleConsultingServiceProvider, $PreferenceSolarThermalRoleEPCProvider ,$PreferenceSolarThermalRoleFinancingProvider,$PreferenceSolarThermalRoleIPP,$PreferenceSolarThermalRoleOMServiceProvider,$PreferenceSolarThermalRoleTechnologyProvider,
			$PreferenceWasteToEnergyCapacity1,$PreferenceWasteToEnergyCapacity2,$PreferenceWasteToEnergyCapacity3,$PreferenceWasteToEnergyCapacity4, $PreferenceWasteToEnergyCapacity5, $PreferenceWasteToEnergyCapacity6,$PreferenceWasteToEnergyExpNotes, $PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity ,$PreferenceWasteToEnergyExpRoleEPCProviderCapacity, $PreferenceWasteToEnergyExpRoleFinancingProviderCapacity, $PreferenceWasteToEnergyExpRoleIPPCapacity, $PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity,$PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity ,$PreferenceWasteToEnergyNotes,$PreferenceWasteToEnergyPartner, $PreferenceWasteToEnergyRoleConsultingServiceProvider, $PreferenceWasteToEnergyRoleEPCProvider ,$PreferenceWasteToEnergyRoleFinancingProvider,$PreferenceWasteToEnergyRoleIPP,$PreferenceWasteToEnergyRoleOMServiceProvider,$PreferenceWasteToEnergyRoleTechnologyProvider,
			$PreferenceWindPowerCapacity1,$PreferenceWindPowerCapacity2,$PreferenceWindPowerCapacity3,$PreferenceWindPowerCapacity4, $PreferenceWindPowerCapacity5, $PreferenceWindPowerCapacity6,$PreferenceWindPowerExpNotes, $PreferenceWindPowerExpRoleConsultingServiceProviderCapacity ,$PreferenceWindPowerExpRoleEPCProviderCapacity, $PreferenceWindPowerExpRoleFinancingProviderCapacity, $PreferenceWindPowerExpRoleIPPCapacity, $PreferenceWindPowerExpRoleOMServiceProviderCapacity,$PreferenceWindPowerExpRoleTechnologyProviderCapacity ,$PreferenceWindPowerNotes,$PreferenceWindPowerPartner, $PreferenceWindPowerRoleConsultingServiceProvider, $PreferenceWindPowerRoleEPCProvider ,$PreferenceWindPowerRoleFinancingProvider,$PreferenceWindPowerRoleIPP,$PreferenceWindPowerRoleOMServiceProvider,$PreferenceWindPowerRoleTechnologyProvider,
			$PreferenceBiomassBiogasCapacity1,$PreferenceBiomassBiogasCapacity2,$PreferenceBiomassBiogasCapacity3,$PreferenceBiomassBiogasCapacity4, $PreferenceBiomassBiogasCapacity5, $PreferenceBiomassBiogasCapacity6,$PreferenceBiomassBiogasExpNotes, $PreferenceBiomassBiogasExpRoleConsultingServiceProviderCapacity ,$PreferenceBiomassBiogasExpRoleEPCProviderCapacity, $PreferenceBiomassBiogasExpRoleFinancingProviderCapacity, $PreferenceBiomassBiogasExpRoleIPPCapacity, $PreferenceBiomassBiogasExpRoleOMServiceProviderCapacity,$PreferenceBiomassBiogasExpRoleTechnologyProviderCapacity ,$PreferenceBiomassBiogasNotes,$PreferenceBiomassBiogasPartner, $PreferenceBiomassBiogasRoleConsultingServiceProvider, $PreferenceBiomassBiogasRoleEPCProvider ,$PreferenceBiomassBiogasRoleFinancingProvider,$PreferenceBiomassBiogasRoleIPP,$PreferenceBiomassBiogasRoleOMServiceProvider,$PreferenceBiomassBiogasRoleTechnologyProvider,
			$PreferenceEnergyStorageCapacity1,$PreferenceEnergyStorageCapacity2,$PreferenceEnergyStorageCapacity3,$PreferenceEnergyStorageCapacity4, $PreferenceEnergyStorageCapacity5, $PreferenceEnergyStorageCapacity6,$PreferenceEnergyStorageExpNotes, $PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity ,$PreferenceEnergyStorageExpRoleEPCProviderCapacity, $PreferenceEnergyStorageExpRoleFinancingProviderCapacity, $PreferenceEnergyStorageExpRoleIPPCapacity, $PreferenceEnergyStorageExpRoleOMServiceProviderCapacity,$PreferenceEnergyStorageExpRoleTechnologyProviderCapacity ,$PreferenceEnergyStorageNotes,$PreferenceEnergyStoragePartner, $PreferenceEnergyStorageRoleConsultingServiceProvider, $PreferenceEnergyStorageRoleEPCProvider ,$PreferenceEnergyStorageRoleFinancingProvider,$PreferenceEnergyStorageRoleIPP,$PreferenceEnergyStorageRoleOMServiceProvider,$PreferenceEnergyStorageRoleTechnologyProvider, 
			$PreferenceOtherCleanCapacity1,$PreferenceOtherCleanCapacity2,$PreferenceOtherCleanCapacity3,$PreferenceOtherCleanCapacity4, $PreferenceOtherCleanCapacity5, $PreferenceOtherCleanCapacity6,$PreferenceOtherCleanExpNotes, $PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity ,$PreferenceOtherCleanExpRoleEPCProviderCapacity, $PreferenceOtherCleanExpRoleFinancingProviderCapacity, $PreferenceOtherCleanExpRoleIPPCapacity, $PreferenceOtherCleanExpRoleOMServiceProviderCapacity,$PreferenceOtherCleanExpRoleTechnologyProviderCapacity ,$PreferenceOtherCleanNotes,$PreferenceOtherCleanPartner, $PreferenceOtherCleanRoleConsultingServiceProvider, $PreferenceOtherCleanRoleEPCProvider ,$PreferenceOtherCleanRoleFinancingProvider,$PreferenceOtherCleanRoleIPP,$PreferenceOtherCleanRoleOMServiceProvider,$PreferenceOtherCleanRoleTechnologyProvider, 
			$ProjectName,$ProjectLocation,$ProjectType,$ProjectCapacity,$ProjectCOD,$ProjectTariff,$ProjectValue,$ProjectRoleIPP,$ProjectRoleFinancingProvider,$ProjectRoleTechnologyProvider,$ProjectRoleEPCProvider,$ProjectRoleConsultingServiceProvider,$ProjectRoleOMServiceProvider,
			$created_dtm);
			
			/* //send email
			 $message = '';             
             $message .= '<strong>Your form has been updated successfully.</strong><br>';  
             $message .= 'You can still access your Expression of Interest (EoI) after it has been submitted to:<br>';  
             $message .= '<ol type="1">';  
             $message .= '<li>Update information and details, if your circumstances have changed; and/or.</li>';  
             $message .= '<li>Suspend the Expression of Interest.</li><br>';  
			 $message .= '</ol>';  
			 $message .= '<strong>Regards, </strong><br>';  
             $message .= '<strong>PT Pembangkitan Jawa Bali</strong> ' . $link;         
			 
			 //decode email and message
			 $en_email= $this->session->userdata('en_email');
			 $en_message= base64url_encode($message);
				
			redirect('email/v5/'.$en_email.'/'.$en_message); */
			$this->session->set_flashdata('result_sukses', '<br>Update successful');
			}else{
			$this->model_eoiform->insert_eoiform($UId,$BasicCompanyLegalEntityName,$BasicCompanyCode,$BasicCompayAddress,$BasicCompanyWebAddress,$BasicCompanyYearEstablished,$BasicCompanyCountryOfEstablishment,$LonglistCompatibilityLegitimacy,$UploadCompanyProfile,$UploadSignedEOI,$BasicCompanyContactPerson1Name,$BasicCompanyContactPerson1Position,$BasicCompanyContactPerson1TelephoneNumber,$BasicCompanyContactPerson1EmailAdress,$BasicCompanyContactPerson2Name,$BasicCompanyContactPerson2Position,$BasicCompanyContactPerson2TelephoneNumber,$BasicCompanyContactPerson2EmailAdress,$BasicCompanyLegalEntityNameInIndonesia,$BasicCompayAddressInIndonesia,$BasicCompanyContactPersonIndonesiaName,$BasicCompanyContactPersonIndonesiaPosition,$BasicCompanyContactPersonIndonesiaTelephoneNumber,$BasicCompanyContactPersonIndonesiaEmailAdress,$LonglistCapitalTotalAsset,$LonglistCapitalEBITDA,$LonglistCapitalCreditRating,$LonglistCapitalDSCR,$UploadFinancialStatement,$AreaOfInterestHydroelectricPowerPlant,$AreaOfInterestGeothermalPP,$AreaOfInterestSolarPhotovoltaicPP,$AreaOfInterestSolarThermalPP,$AreaOfInterestWindPowerPP,$AreaOfInterestEnergyStoragePumpedPP,$AreaOfInterestSeaEnergyPP,$AreaOfInterestWastetoEnergyPP,$AreaOfInterestNuclearEnergyPP,$AreaOfInterestOtherCleanTechnologyPP,
			$PreferenceHydroelectricCapacity1,$PreferenceHydroelectricCapacity2,$PreferenceHydroelectricCapacity3,$PreferenceHydroelectricCapacity4, $PreferenceHydroelectricCapacity5, $PreferenceHydroelectricCapacity6,$PreferenceHydroelectricExpNotes, $PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity ,$PreferenceHydroelectricExpRoleEPCProviderCapacity, $PreferenceHydroelectricExpRoleFinancingProviderCapacity, $PreferenceHydroelectricExpRoleIPPCapacity, $PreferenceHydroelectricExpRoleOMServiceProviderCapacity,$PreferenceHydroelectricExpRoleTechnologyProviderCapacity ,$PreferenceHydroelectricNotes,$PreferenceHydroelectricPartner, $PreferenceHydroelectricRoleConsultingServiceProvider, $PreferenceHydroelectricRoleEPCProvider ,$PreferenceHydroelectricRoleFinancingProvider,$PreferenceHydroelectricRoleIPP,$PreferenceHydroelectricRoleOMServiceProvider,$PreferenceHydroelectricRoleTechnologyProvider,
			$PreferenceGeothermalCapacity1,$PreferenceGeothermalCapacity2,$PreferenceGeothermalCapacity3,$PreferenceGeothermalCapacity4, $PreferenceGeothermalCapacity5, $PreferenceGeothermalCapacity6,$PreferenceGeothermalExpNotes, $PreferenceGeothermalExpRoleConsultingServiceProviderCapacity ,$PreferenceGeothermalExpRoleEPCProviderCapacity, $PreferenceGeothermalExpRoleFinancingProviderCapacity, $PreferenceGeothermalExpRoleIPPCapacity, $PreferenceGeothermalExpRoleOMServiceProviderCapacity,$PreferenceGeothermalExpRoleTechnologyProviderCapacity ,$PreferenceGeothermalNotes,$PreferenceGeothermalPartner, $PreferenceGeothermalRoleConsultingServiceProvider, $PreferenceGeothermalRoleEPCProvider ,$PreferenceGeothermalRoleFinancingProvider,$PreferenceGeothermalRoleIPP,$PreferenceGeothermalRoleOMServiceProvider,$PreferenceGeothermalRoleTechnologyProvider,
			$PreferenceNuclearCapacity1,$PreferenceNuclearCapacity2,$PreferenceNuclearCapacity3,$PreferenceNuclearCapacity4, $PreferenceNuclearCapacity5, $PreferenceNuclearCapacity6,$PreferenceNuclearExpNotes, $PreferenceNuclearExpRoleConsultingServiceProviderCapacity ,$PreferenceNuclearExpRoleEPCProviderCapacity, $PreferenceNuclearExpRoleFinancingProviderCapacity, $PreferenceNuclearExpRoleIPPCapacity, $PreferenceNuclearExpRoleOMServiceProviderCapacity,$PreferenceNuclearExpRoleTechnologyProviderCapacity ,$PreferenceNuclearNotes,$PreferenceNuclearPartner, $PreferenceNuclearRoleConsultingServiceProvider, $PreferenceNuclearRoleEPCProvider ,$PreferenceNuclearRoleFinancingProvider,$PreferenceNuclearRoleIPP,$PreferenceNuclearRoleOMServiceProvider,$PreferenceNuclearRoleTechnologyProvider,
			$PreferenceSeaEnergyCapacity1,$PreferenceSeaEnergyCapacity2,$PreferenceSeaEnergyCapacity3,$PreferenceSeaEnergyCapacity4, $PreferenceSeaEnergyCapacity5, $PreferenceSeaEnergyCapacity6,$PreferenceSeaEnergyExpNotes, $PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity ,$PreferenceSeaEnergyExpRoleEPCProviderCapacity, $PreferenceSeaEnergyExpRoleFinancingProviderCapacity, $PreferenceSeaEnergyExpRoleIPPCapacity, $PreferenceSeaEnergyExpRoleOMServiceProviderCapacity,$PreferenceSeaEnergyExpRoleTechnologyProviderCapacity ,$PreferenceSeaEnergyNotes,$PreferenceSeaEnergyPartner, $PreferenceSeaEnergyRoleConsultingServiceProvider, $PreferenceSeaEnergyRoleEPCProvider ,$PreferenceSeaEnergyRoleFinancingProvider,$PreferenceSeaEnergyRoleIPP,$PreferenceSeaEnergyRoleOMServiceProvider,$PreferenceSeaEnergyRoleTechnologyProvider,
			$PreferenceSolarPhotovoltaicCapacity1,$PreferenceSolarPhotovoltaicCapacity2,$PreferenceSolarPhotovoltaicCapacity3,$PreferenceSolarPhotovoltaicCapacity4, $PreferenceSolarPhotovoltaicCapacity5, $PreferenceSolarPhotovoltaicCapacity6,$PreferenceSolarPhotovoltaicExpNotes, $PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac ,$PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity, $PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity, $PreferenceSolarPhotovoltaicExpRoleIPPCapacity, $PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity,$PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity ,$PreferenceSolarPhotovoltaicNotes,$PreferenceSolarPhotovoltaicPartner, $PreferenceSolarPhotovoltaicRoleConsultingServiceProvider, $PreferenceSolarPhotovoltaicRoleEPCProvider ,$PreferenceSolarPhotovoltaicRoleFinancingProvider,$PreferenceSolarPhotovoltaicRoleIPP,$PreferenceSolarPhotovoltaicRoleOMServiceProvider,$PreferenceSolarPhotovoltaicRoleTechnologyProvider,
			$PreferenceSolarThermalCapacity1,$PreferenceSolarThermalCapacity2,$PreferenceSolarThermalCapacity3,$PreferenceSolarThermalCapacity4, $PreferenceSolarThermalCapacity5, $PreferenceSolarThermalCapacity6,$PreferenceSolarThermalExpNotes, $PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity ,$PreferenceSolarThermalExpRoleEPCProviderCapacity, $PreferenceSolarThermalExpRoleFinancingProviderCapacity, $PreferenceSolarThermalExpRoleIPPCapacity, $PreferenceSolarThermalExpRoleOMServiceProviderCapacity,$PreferenceSolarThermalExpRoleTechnologyProviderCapacity ,$PreferenceSolarThermalNotes,$PreferenceSolarThermalPartner, $PreferenceSolarThermalRoleConsultingServiceProvider, $PreferenceSolarThermalRoleEPCProvider ,$PreferenceSolarThermalRoleFinancingProvider,$PreferenceSolarThermalRoleIPP,$PreferenceSolarThermalRoleOMServiceProvider,$PreferenceSolarThermalRoleTechnologyProvider,
			$PreferenceWasteToEnergyCapacity1,$PreferenceWasteToEnergyCapacity2,$PreferenceWasteToEnergyCapacity3,$PreferenceWasteToEnergyCapacity4, $PreferenceWasteToEnergyCapacity5, $PreferenceWasteToEnergyCapacity6,$PreferenceWasteToEnergyExpNotes, $PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity ,$PreferenceWasteToEnergyExpRoleEPCProviderCapacity, $PreferenceWasteToEnergyExpRoleFinancingProviderCapacity, $PreferenceWasteToEnergyExpRoleIPPCapacity, $PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity,$PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity ,$PreferenceWasteToEnergyNotes,$PreferenceWasteToEnergyPartner, $PreferenceWasteToEnergyRoleConsultingServiceProvider, $PreferenceWasteToEnergyRoleEPCProvider ,$PreferenceWasteToEnergyRoleFinancingProvider,$PreferenceWasteToEnergyRoleIPP,$PreferenceWasteToEnergyRoleOMServiceProvider,$PreferenceWasteToEnergyRoleTechnologyProvider,
			$PreferenceWindPowerCapacity1,$PreferenceWindPowerCapacity2,$PreferenceWindPowerCapacity3,$PreferenceWindPowerCapacity4, $PreferenceWindPowerCapacity5, $PreferenceWindPowerCapacity6,$PreferenceWindPowerExpNotes, $PreferenceWindPowerExpRoleConsultingServiceProviderCapacity ,$PreferenceWindPowerExpRoleEPCProviderCapacity, $PreferenceWindPowerExpRoleFinancingProviderCapacity, $PreferenceWindPowerExpRoleIPPCapacity, $PreferenceWindPowerExpRoleOMServiceProviderCapacity,$PreferenceWindPowerExpRoleTechnologyProviderCapacity ,$PreferenceWindPowerNotes,$PreferenceWindPowerPartner, $PreferenceWindPowerRoleConsultingServiceProvider, $PreferenceWindPowerRoleEPCProvider ,$PreferenceWindPowerRoleFinancingProvider,$PreferenceWindPowerRoleIPP,$PreferenceWindPowerRoleOMServiceProvider,$PreferenceWindPowerRoleTechnologyProvider,
			$PreferenceBiomassBiogasCapacity1,$PreferenceBiomassBiogasCapacity2,$PreferenceBiomassBiogasCapacity3,$PreferenceBiomassBiogasCapacity4, $PreferenceBiomassBiogasCapacity5, $PreferenceBiomassBiogasCapacity6,$PreferenceBiomassBiogasExpNotes, $PreferenceBiomassBiogasExpRoleConsultingServiceProviderCapacity ,$PreferenceBiomassBiogasExpRoleEPCProviderCapacity, $PreferenceBiomassBiogasExpRoleFinancingProviderCapacity, $PreferenceBiomassBiogasExpRoleIPPCapacity, $PreferenceBiomassBiogasExpRoleOMServiceProviderCapacity,$PreferenceBiomassBiogasExpRoleTechnologyProviderCapacity ,$PreferenceBiomassBiogasNotes,$PreferenceBiomassBiogasPartner, $PreferenceBiomassBiogasRoleConsultingServiceProvider, $PreferenceBiomassBiogasRoleEPCProvider ,$PreferenceBiomassBiogasRoleFinancingProvider,$PreferenceBiomassBiogasRoleIPP,$PreferenceBiomassBiogasRoleOMServiceProvider,$PreferenceBiomassBiogasRoleTechnologyProvider,
			$PreferenceEnergyStorageCapacity1,$PreferenceEnergyStorageCapacity2,$PreferenceEnergyStorageCapacity3,$PreferenceEnergyStorageCapacity4, $PreferenceEnergyStorageCapacity5, $PreferenceEnergyStorageCapacity6,$PreferenceEnergyStorageExpNotes, $PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity ,$PreferenceEnergyStorageExpRoleEPCProviderCapacity, $PreferenceEnergyStorageExpRoleFinancingProviderCapacity, $PreferenceEnergyStorageExpRoleIPPCapacity, $PreferenceEnergyStorageExpRoleOMServiceProviderCapacity,$PreferenceEnergyStorageExpRoleTechnologyProviderCapacity ,$PreferenceEnergyStorageNotes,$PreferenceEnergyStoragePartner, $PreferenceEnergyStorageRoleConsultingServiceProvider, $PreferenceEnergyStorageRoleEPCProvider ,$PreferenceEnergyStorageRoleFinancingProvider,$PreferenceEnergyStorageRoleIPP,$PreferenceEnergyStorageRoleOMServiceProvider,$PreferenceEnergyStorageRoleTechnologyProvider, 
			$PreferenceOtherCleanCapacity1,$PreferenceOtherCleanCapacity2,$PreferenceOtherCleanCapacity3,$PreferenceOtherCleanCapacity4, $PreferenceOtherCleanCapacity5, $PreferenceOtherCleanCapacity6,$PreferenceOtherCleanExpNotes, $PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity ,$PreferenceOtherCleanExpRoleEPCProviderCapacity, $PreferenceOtherCleanExpRoleFinancingProviderCapacity, $PreferenceOtherCleanExpRoleIPPCapacity, $PreferenceOtherCleanExpRoleOMServiceProviderCapacity,$PreferenceOtherCleanExpRoleTechnologyProviderCapacity ,$PreferenceOtherCleanNotes,$PreferenceOtherCleanPartner, $PreferenceOtherCleanRoleConsultingServiceProvider, $PreferenceOtherCleanRoleEPCProvider ,$PreferenceOtherCleanRoleFinancingProvider,$PreferenceOtherCleanRoleIPP,$PreferenceOtherCleanRoleOMServiceProvider,$PreferenceOtherCleanRoleTechnologyProvider, 
			$ProjectName,$ProjectLocation,$ProjectType,$ProjectCapacity,$ProjectCOD,$ProjectTariff,$ProjectValue,$ProjectRoleIPP,$ProjectRoleFinancingProvider,$ProjectRoleTechnologyProvider,$ProjectRoleEPCProvider,$ProjectRoleConsultingServiceProvider,$ProjectRoleOMServiceProvider,
			$created_dtm);
			$this->session->set_flashdata('result_sukses', '<br>Create successful');
			}
			redirect('update_eoi_from_user','refresh');
		}
		
		

	}			
	

	
	
}

