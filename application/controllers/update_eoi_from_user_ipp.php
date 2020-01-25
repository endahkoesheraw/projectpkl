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
			 
             $AreaOfInterestCoalFired 			=  $this->security->xss_clean($this->input->post('AreaOfInterestCoalFired'));
			 $AreaOfInterestMineMouth 			=  $this->security->xss_clean($this->input->post('AreaOfInterestMineMouth'));
			 $AreaOfInterestGasFiredCombinedCycle 	=  $this->security->xss_clean($this->input->post('AreaOfInterestGasFiredCombinedCycle'));
			 $AreaOfInterestWasteToEnergy 		=  $this->security->xss_clean($this->input->post('AreaOfInterestWasteToEnergy'));
			 $AreaOfInterestDieselPower 		=  $this->security->xss_clean($this->input->post('AreaOfInterestDieselPower'));
			 $AreaOfInterestBiomassBiogasBioful =  $this->security->xss_clean($this->input->post('AreaOfInterestBiomassBiogasBioful'));
			 $AreaOfInterestNuclearEnergy 		=  $this->security->xss_clean($this->input->post('AreaOfInterestNuclearEnergy'));
			 $AreaOfInterestCoalGasification	=  $this->security->xss_clean($this->input->post('AreaOfInterestCoalGasification'));
			 $AreaOfInterestOthers				=  $this->security->xss_clean($this->input->post('AreaOfInterestOthers'));
			 
			 
			  
             $PreferenceCoalFiredRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleInvestor'));			 
			 $PreferenceCoalFiredRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleEPC'));
			 $PreferenceCoalFiredRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleLender'));
			 $PreferenceCoalFiredRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleManufacturer'));
			 $PreferenceCoalFiredRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleLandOwner'));
			 $PreferenceCoalFiredRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleOperationMaintenance'));
			 $PreferenceCoalFiredRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRolePrimaryEnergy'));
			 $PreferenceCoalFiredRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredRoleConsultant'));
			 $PreferenceCoalFiredNotes 									=  $this->security->xss_clean($this->input->post('PreferenceCoalFiredNotes'));
		
			 $PreferenceMineMouthRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleInvestor'));			 
			 $PreferenceMineMouthRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleEPC'));
			 $PreferenceMineMouthRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleLender'));
			 $PreferenceMineMouthRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleManufacturer'));
			 $PreferenceMineMouthRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleLandOwner'));
			 $PreferenceMineMouthRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleOperationMaintenance'));
			 $PreferenceMineMouthRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRolePrimaryEnergy'));
			 $PreferenceMineMouthRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceMineMouthRoleConsultant'));
			 $PreferenceMineMouthNotes 									=  $this->security->xss_clean($this->input->post('PreferenceMineMouthNotes'));

			 $PreferenceGasFiredCombinedCycleRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleInvestor'));			 
			 $PreferenceGasFiredCombinedCycleRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleEPC'));
			 $PreferenceGasFiredCombinedCycleRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleLender'));
			 $PreferenceGasFiredCombinedCycleRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleManufacturer'));
			 $PreferenceGasFiredCombinedCycleRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleLandOwner'));
			 $PreferenceGasFiredCombinedCycleRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleOperationMaintenance'));
			 $PreferenceGasFiredCombinedCycleRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRolePrimaryEnergy'));
			 $PreferenceGasFiredCombinedCycleRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleRoleConsultant'));
			 $PreferenceGasFiredCombinedCycleNotes 									=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleNotes'));

			 $PreferenceWasteToEnergyRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleInvestor'));			 
			 $PreferenceWasteToEnergyRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleEPC'));
			 $PreferenceWasteToEnergyRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleLender'));
			 $PreferenceWasteToEnergyRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleManufacturer'));
			 $PreferenceWasteToEnergyRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleLandOwner'));
			 $PreferenceWasteToEnergyRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleOperationMaintenance'));
			 $PreferenceWasteToEnergyRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRolePrimaryEnergy'));
			 $PreferenceWasteToEnergyRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyRoleConsultant'));
			 $PreferenceWasteToEnergyNotes 									=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyNotes'));

			 $PreferenceDieselPowerRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleInvestor'));			 
			 $PreferenceDieselPowerRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleEPC'));
			 $PreferenceDieselPowerRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleLender'));
			 $PreferenceDieselPowerRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleManufacturer'));
			 $PreferenceDieselPowerRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleLandOwner'));
			 $PreferenceDieselPowerRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleOperationMaintenance'));
			 $PreferenceDieselPowerRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRolePrimaryEnergy'));
			 $PreferenceDieselPowerRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerRoleConsultant'));
			 $PreferenceDieselPowerNotes 									=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerNotes'));

			 $PreferenceBiomassBiogasBiofulRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleInvestor'));			 
			 $PreferenceBiomassBiogasBiofulRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleEPC'));
			 $PreferenceBiomassBiogasBiofulRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleLender'));
			 $PreferenceBiomassBiogasBiofulRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleManufacturer'));
			 $PreferenceBiomassBiogasBiofulRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleLandOwner'));
			 $PreferenceBiomassBiogasBiofulRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleOperationMaintenance'));
			 $PreferenceBiomassBiogasBiofulRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRolePrimaryEnergy'));
			 $PreferenceBiomassBiogasBiofulRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulRoleConsultant'));
			 $PreferenceBiomassBiogasBiofulNotes 									=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulNotes'));
			 
			 $PreferenceNuclearEnergyRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleInvestor'));			 
			 $PreferenceNuclearEnergyRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleEPC'));
			 $PreferenceNuclearEnergyRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleLender'));
			 $PreferenceNuclearEnergyRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleManufacturer'));
			 $PreferenceNuclearEnergyRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleLandOwner'));
			 $PreferenceNuclearEnergyRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleOperationMaintenance'));
			 $PreferenceNuclearEnergyRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRolePrimaryEnergy'));
			 $PreferenceNuclearEnergyRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyRoleConsultant'));
			 $PreferenceNuclearEnergyNotes 									=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyNotes'));

			 $PreferenceCoalGasificationRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleInvestor'));			 
			 $PreferenceCoalGasificationRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleEPC'));
			 $PreferenceCoalGasificationRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleLender'));
			 $PreferenceCoalGasificationRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleManufacturer'));
			 $PreferenceCoalGasificationRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleLandOwner'));
			 $PreferenceCoalGasificationRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleOperationMaintenance'));
			 $PreferenceCoalGasificationRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRolePrimaryEnergy'));
			 $PreferenceCoalGasificationRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationRoleConsultant'));
			 $PreferenceCoalGasificationNotes 									=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationNotes'));

			 $PreferenceOthersRoleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleInvestor'));			 
			 $PreferenceOthersRoleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleEPC'));
			 $PreferenceOthersRoleLender 									=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleLender'));
			 $PreferenceOthersRoleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleManufacturer'));
			 $PreferenceOthersRoleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleLandOwner'));
			 $PreferenceOthersRoleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleOperationMaintenance'));
			 $PreferenceOthersRolePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceOthersRolePrimaryEnergy'));
			 $PreferenceOthersRoleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceOthersRoleConsultant'));
			 $PreferenceOthersNotes 									=  $this->security->xss_clean($this->input->post('PreferenceOthersNotes'));

			 $PreferenceMineMouthInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceMineMouthInvestor'));			 
			 $PreferenceMineMouthEPC 									=  $this->security->xss_clean($this->input->post('PreferenceMineMouthEPC'));
			 $PreferenceMineMouthManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceMineMouthManufacturer'));
			 $PreferenceMineMouthLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceMineMouthLandOwner'));
			 $PreferenceMineMouthOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceMineMouthOperationMaintenance'));
			 $PreferenceMineMouthPrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceMineMouthPrimaryEnergy'));
			 $PreferenceMineMouthConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceMineMouthConsultant'));
			 $PreferenceMineMouthNotes 									=  $this->security->xss_clean($this->input->post('PreferenceMineMouthNotes'));
			  
			 $PreferenceGasFiredCombinedCycleInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleInvestor'));			 
			 $PreferenceGasFiredCombinedCycleEPC 									=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleEPC'));
			 $PreferenceGasFiredCombinedCycleManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleManufacturer'));
			 $PreferenceGasFiredCombinedCycleLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleLandOwner'));
			 $PreferenceGasFiredCombinedCycleOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleOperationMaintenance'));
			 $PreferenceGasFiredCombinedCyclePrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCyclePrimaryEnergy'));
			 $PreferenceGasFiredCombinedCycleConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleConsultant'));
			 $PreferenceGasFiredCombinedCycleNotes 									=  $this->security->xss_clean($this->input->post('PreferenceGasFiredCombinedCycleNotes'));
			  
			 $PreferenceWasteToEnergyInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyInvestor'));			 
			 $PreferenceWasteToEnergyEPC 									=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyEPC'));
			 $PreferenceWasteToEnergyManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyManufacturer'));
			 $PreferenceWasteToEnergyLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyLandOwner'));
			 $PreferenceWasteToEnergyOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyOperationMaintenance'));
			 $PreferenceWasteToEnergyPrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyPrimaryEnergy'));
			 $PreferenceWasteToEnergyConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyConsultant'));
			 $PreferenceWasteToEnergyNotes 									=  $this->security->xss_clean($this->input->post('PreferenceWasteToEnergyNotes'));
			  
			 $PreferenceDieselPowerInvestor 							=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerInvestor'));			 
			 $PreferenceDieselPowerEPC 									=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerEPC'));
			 $PreferenceDieselPowerManufacturer 						=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerManufacturer'));
			 $PreferenceDieselPowerLandOwner 							=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerLandOwner'));
			 $PreferenceDieselPowerOperationMaintenance 				=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerOperationMaintenance'));
			 $PreferenceDieselPowerPrimaryEnergy 						=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerPrimaryEnergy'));
			 $PreferenceDieselPowerConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerConsultant'));
			 $PreferenceDieselPowerNotes 								=  $this->security->xss_clean($this->input->post('PreferenceDieselPowerNotes'));
			  
			 $PreferenceBiomassBiogasBiofulInvestor 							=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulInvestor'));			 
			 $PreferenceBiomassBiogasBiofulEPC 									=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulEPC'));
			 $PreferenceBiomassBiogasBiofulManufacturer 						=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulManufacturer'));
			 $PreferenceBiomassBiogasBiofulLandOwner 							=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulLandOwner'));
			 $PreferenceBiomassBiogasBiofulOperationMaintenance 				=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulOperationMaintenance'));
			 $PreferenceBiomassBiogasBiofulPrimaryEnergy 						=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulPrimaryEnergy'));
			 $PreferenceBiomassBiogasBiofulConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulConsultant'));
			 $PreferenceBiomassBiogasBiofulNotes 								=  $this->security->xss_clean($this->input->post('PreferenceBiomassBiogasBiofulNotes'));
			  
			 $PreferenceNuclearEnergyInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyInvestor'));			 
			 $PreferenceNuclearEnergyEPC 									=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyEPC'));
			 $PreferenceNuclearEnergyManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyManufacturer'));
			 $PreferenceNuclearEnergyLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyLandOwner'));
			 $PreferenceNuclearEnergyOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyOperationMaintenance'));
			 $PreferenceNuclearEnergyPrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyPrimaryEnergy'));
			 $PreferenceNuclearEnergyConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyConsultant'));
			 $PreferenceNuclearEnergyNotes 									=  $this->security->xss_clean($this->input->post('PreferenceNuclearEnergyNotes'));
			  
			 $PreferenceCoalGasificationInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationInvestor'));			 
			 $PreferenceCoalGasificationEPC 									=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationEPC'));
			 $PreferenceCoalGasificationManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationManufacturer'));
			 $PreferenceCoalGasificationLandOwner 								=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationLandOwner'));
			 $PreferenceCoalGasificationOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationOperationMaintenance'));
			 $PreferenceCoalGasificationPrimaryEnergy 							=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationPrimaryEnergy'));
			 $PreferenceCoalGasificationConsultant 								=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationConsultant'));
			 $PreferenceCoalGasificationNotes 									=  $this->security->xss_clean($this->input->post('PreferenceCoalGasificationNotes'));
			  
			 $PreferenceOthersInvestor 								=  $this->security->xss_clean($this->input->post('PreferenceOthersInvestor'));			 
			 $PreferenceOthersEPC 									=  $this->security->xss_clean($this->input->post('PreferenceOthersEPC'));
			 $PreferenceOthersManufacturer 							=  $this->security->xss_clean($this->input->post('PreferenceOthersManufacturer'));
			 $PreferenceOthersLandOwner 							=  $this->security->xss_clean($this->input->post('PreferenceOthersLandOwner'));
			 $PreferenceOthersOperationMaintenance 					=  $this->security->xss_clean($this->input->post('PreferenceOthersOperationMaintenance'));
			 $PreferenceOthersPrimaryEnergy 						=  $this->security->xss_clean($this->input->post('PreferenceOthersPrimaryEnergy'));
			 $PreferenceOthersConsultant 							=  $this->security->xss_clean($this->input->post('PreferenceOthersConsultant'));
			 $PreferenceOthersNotes 								=  $this->security->xss_clean($this->input->post('PreferenceOthersNotes'));
			 
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
			
			
			$this->model_eoiform->update_eoiform(
                $UId,
		$BasicCompanyLegalEntityName,$BasicCompanyCode,$BasicCompayAddress,$BasicCompanyWebAddress,$BasicCompanyYearEstablished,$BasicCompanyCountryOfEstablishment,$LonglistCompatibilityLegitimacy,$UploadCompanyProfile,$UploadSignedEOI,
		$BasicCompanyContactPerson1Name,$BasicCompanyContactPerson1Position,$BasicCompanyContactPerson1TelephoneNumber,$BasicCompanyContactPerson1EmailAdress,
		$BasicCompanyContactPerson2Name,$BasicCompanyContactPerson2Position,$BasicCompanyContactPerson2TelephoneNumber,$BasicCompanyContactPerson2EmailAdress,
		$BasicCompanyLegalEntityNameInIndonesia,$BasicCompayAddressInIndonesia,$BasicCompanyContactPersonIndonesiaName,$BasicCompanyContactPersonIndonesiaPosition,$BasicCompanyContactPersonIndonesiaTelephoneNumber,$BasicCompanyContactPersonIndonesiaEmailAdress,
		$LonglistCapitalTotalAsset,$LonglistCapitalEBITDA,$LonglistCapitalCreditRating,$LonglistCapitalDSCR,$UploadFinancialStatement,
		$AreaOfInterestCoalFired,$AreaOfInterestMineMouth,$AreaOfInterestGasFiredCombinedCycle,$AreaOfInterestWasteToEnergy,$AreaOfInterestDieselPower,$AreaOfInterestBiomassBiogasBioful,$AreaOfInterestNuclearEnergy,$AreaOfInterestCoalGasification,$AreaOfInterestOthers,
		$PreferenceCoalFiredRoleInvestor, $PreferenceCoalFiredRoleEPC, $PreferenceCoalFiredRoleLender, $PreferenceCoalFiredRoleManufacturer, $PreferenceCoalFiredRoleLandOwner, $PreferenceCoalFiredRoleOperationMaintenance, $PreferenceCoalFiredRolePrimaryEnergy, $PreferenceCoalFiredRoleConsultant, $PreferenceCoalFiredNotes,
		$PreferenceMineMouthRoleInvestor, $PreferenceMineMouthRoleEPC, $PreferenceMineMouthRoleLender, $PreferenceMineMouthRoleManufacturer, $PreferenceMineMouthRoleLandOwner, $PreferenceMineMouthRoleOperationMaintenance, $PreferenceMineMouthRolePrimaryEnergy, $PreferenceMineMouthRoleConsultant, $PreferenceMineMouthNotes,
		$PreferenceGasFiredCombinedCycleRoleInvestor, $PreferenceGasFiredCombinedCycleRoleEPC, $PreferenceGasFiredCombinedCycleRoleLender, $PreferenceGasFiredCombinedCycleRoleManufacturer, $PreferenceGasFiredCombinedCycleRoleLandOwner, $PreferenceGasFiredCombinedCycleRoleOperationMaintenance, $PreferenceGasFiredCombinedCycleRolePrimaryEnergy, $PreferenceGasFiredCombinedCycleRoleConsultant, $PreferenceGasFiredCombinedCycleNotes,
		$PreferenceWasteToEnergyRoleInvestor, $PreferenceWasteToEnergyRoleEPC, $PreferenceWasteToEnergyRoleLender, $PreferenceWasteToEnergyRoleManufacturer, $PreferenceWasteToEnergyRoleLandOwner, $PreferenceWasteToEnergyRoleOperationMaintenance, $PreferenceWasteToEnergyRolePrimaryEnergy, $PreferenceWasteToEnergyRoleConsultant, $PreferenceWasteToEnergyNotes,
		$PreferenceDieselPowerRoleInvestor, $PreferenceDieselPowerRoleEPC, $PreferenceDieselPowerRoleLender, $PreferenceDieselPowerRoleManufacturer, $PreferenceDieselPowerRoleLandOwner, $PreferenceDieselPowerRoleOperationMaintenance, $PreferenceDieselPowerRolePrimaryEnergy, $PreferenceDieselPowerRoleConsultant, $PreferenceDieselPowerNotes,
		$PreferenceBiomassBiogasBiofulRoleInvestor, $PreferenceBiomassBiogasBiofulRoleEPC, $PreferenceBiomassBiogasBiofulRoleLender, $PreferenceBiomassBiogasBiofulRoleManufacturer, $PreferenceBiomassBiogasBiofulRoleLandOwner, $PreferenceBiomassBiogasBiofulRoleOperationMaintenance, $PreferenceBiomassBiogasBiofulRolePrimaryEnergy, $PreferenceBiomassBiogasBiofulRoleConsultant, $PreferenceBiomassBiogasBiofulNotes,
		$PreferenceNuclearEnergyRoleInvestor, $PreferenceNuclearEnergyRoleEPC, $PreferenceNuclearEnergyRoleLender, $PreferenceNuclearEnergyRoleManufacturer, $PreferenceNuclearEnergyRoleLandOwner, $PreferenceNuclearEnergyRoleOperationMaintenance, $PreferenceNuclearEnergyRolePrimaryEnergy, $PreferenceNuclearEnergyRoleConsultant, $PreferenceNuclearEnergyNotes,
		$PreferenceCoalGasificationRoleInvestor, $PreferenceCoalGasificationRoleEPC, $PreferenceCoalGasificationRoleLender, $PreferenceCoalGasificationRoleManufacturer, $PreferenceCoalGasificationRoleLandOwner, $PreferenceCoalGasificationRoleOperationMaintenance, $PreferenceCoalGasificationRolePrimaryEnergy, $PreferenceCoalGasificationRoleConsultant, $PreferenceCoalGasificationNotes,
		$PreferenceOthersRoleInvestor, $PreferenceOthersRoleEPC, $PreferenceOthersRoleLender, $PreferenceOthersRoleManufacturer, $PreferenceOthersRoleLandOwner, $PreferenceOthersRoleOperationMaintenance, $PreferenceOthersRolePrimaryEnergy, $PreferenceOthersRoleConsultant, $PreferenceOthersNotes,
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
			$this->model_eoiform->insert_eoiform(
                $UId,
		$BasicCompanyLegalEntityName,$BasicCompanyCode,$BasicCompayAddress,$BasicCompanyWebAddress,$BasicCompanyYearEstablished,$BasicCompanyCountryOfEstablishment,$LonglistCompatibilityLegitimacy,$UploadCompanyProfile,$UploadSignedEOI,
		$BasicCompanyContactPerson1Name,$BasicCompanyContactPerson1Position,$BasicCompanyContactPerson1TelephoneNumber,$BasicCompanyContactPerson1EmailAdress,
		$BasicCompanyContactPerson2Name,$BasicCompanyContactPerson2Position,$BasicCompanyContactPerson2TelephoneNumber,$BasicCompanyContactPerson2EmailAdress,
		$BasicCompanyLegalEntityNameInIndonesia,$BasicCompayAddressInIndonesia,$BasicCompanyContactPersonIndonesiaName,$BasicCompanyContactPersonIndonesiaPosition,$BasicCompanyContactPersonIndonesiaTelephoneNumber,$BasicCompanyContactPersonIndonesiaEmailAdress,
		$LonglistCapitalTotalAsset,$LonglistCapitalEBITDA,$LonglistCapitalCreditRating,$LonglistCapitalDSCR,$UploadFinancialStatement,
		$AreaOfInterestCoalFired,$AreaOfInterestMineMouth,$AreaOfInterestGasFiredCombinedCycle,$AreaOfInterestWasteToEnergy,$AreaOfInterestDieselPower,$AreaOfInterestBiomassBiogasBioful,$AreaOfInterestNuclearEnergy,$AreaOfInterestCoalGasification,$AreaOfInterestOthers,
		$PreferenceCoalFiredRoleInvestor, $PreferenceCoalFiredRoleEPC, $PreferenceCoalFiredRoleLender, $PreferenceCoalFiredRoleManufacturer, $PreferenceCoalFiredRoleLandOwner, $PreferenceCoalFiredRoleOperationMaintenance, $PreferenceCoalFiredRolePrimaryEnergy, $PreferenceCoalFiredRoleConsultant, $PreferenceCoalFiredNotes,
		$PreferenceMineMouthRoleInvestor, $PreferenceMineMouthRoleEPC, $PreferenceMineMouthRoleLender, $PreferenceMineMouthRoleManufacturer, $PreferenceMineMouthRoleLandOwner, $PreferenceMineMouthRoleOperationMaintenance, $PreferenceMineMouthRolePrimaryEnergy, $PreferenceMineMouthRoleConsultant, $PreferenceMineMouthNotes,
		$PreferenceGasFiredCombinedCycleRoleInvestor, $PreferenceGasFiredCombinedCycleRoleEPC, $PreferenceGasFiredCombinedCycleRoleLender, $PreferenceGasFiredCombinedCycleRoleManufacturer, $PreferenceGasFiredCombinedCycleRoleLandOwner, $PreferenceGasFiredCombinedCycleRoleOperationMaintenance, $PreferenceGasFiredCombinedCycleRolePrimaryEnergy, $PreferenceGasFiredCombinedCycleRoleConsultant, $PreferenceGasFiredCombinedCycleNotes,
		$PreferenceWasteToEnergyRoleInvestor, $PreferenceWasteToEnergyRoleEPC, $PreferenceWasteToEnergyRoleLender, $PreferenceWasteToEnergyRoleManufacturer, $PreferenceWasteToEnergyRoleLandOwner, $PreferenceWasteToEnergyRoleOperationMaintenance, $PreferenceWasteToEnergyRolePrimaryEnergy, $PreferenceWasteToEnergyRoleConsultant, $PreferenceWasteToEnergyNotes,
		$PreferenceDieselPowerRoleInvestor, $PreferenceDieselPowerRoleEPC, $PreferenceDieselPowerRoleLender, $PreferenceDieselPowerRoleManufacturer, $PreferenceDieselPowerRoleLandOwner, $PreferenceDieselPowerRoleOperationMaintenance, $PreferenceDieselPowerRolePrimaryEnergy, $PreferenceDieselPowerRoleConsultant, $PreferenceDieselPowerNotes,
		$PreferenceBiomassBiogasBiofulRoleInvestor, $PreferenceBiomassBiogasBiofulRoleEPC, $PreferenceBiomassBiogasBiofulRoleLender, $PreferenceBiomassBiogasBiofulRoleManufacturer, $PreferenceBiomassBiogasBiofulRoleLandOwner, $PreferenceBiomassBiogasBiofulRoleOperationMaintenance, $PreferenceBiomassBiogasBiofulRolePrimaryEnergy, $PreferenceBiomassBiogasBiofulRoleConsultant, $PreferenceBiomassBiogasBiofulNotes,
		$PreferenceNuclearEnergyRoleInvestor, $PreferenceNuclearEnergyRoleEPC, $PreferenceNuclearEnergyRoleLender, $PreferenceNuclearEnergyRoleManufacturer, $PreferenceNuclearEnergyRoleLandOwner, $PreferenceNuclearEnergyRoleOperationMaintenance, $PreferenceNuclearEnergyRolePrimaryEnergy, $PreferenceNuclearEnergyRoleConsultant, $PreferenceNuclearEnergyNotes,
		$PreferenceCoalGasificationRoleInvestor, $PreferenceCoalGasificationRoleEPC, $PreferenceCoalGasificationRoleLender, $PreferenceCoalGasificationRoleManufacturer, $PreferenceCoalGasificationRoleLandOwner, $PreferenceCoalGasificationRoleOperationMaintenance, $PreferenceCoalGasificationRolePrimaryEnergy, $PreferenceCoalGasificationRoleConsultant, $PreferenceCoalGasificationNotes,
		$PreferenceOthersRoleInvestor, $PreferenceOthersRoleEPC, $PreferenceOthersRoleLender, $PreferenceOthersRoleManufacturer, $PreferenceOthersRoleLandOwner, $PreferenceOthersRoleOperationMaintenance, $PreferenceOthersRolePrimaryEnergy, $PreferenceOthersRoleConsultant, $PreferenceOthersNotes,
		$ProjectName,$ProjectLocation,$ProjectType,$ProjectCapacity,$ProjectCOD,$ProjectTariff,$ProjectValue,$ProjectRoleIPP,$ProjectRoleFinancingProvider,$ProjectRoleTechnologyProvider,$ProjectRoleEPCProvider,$ProjectRoleConsultingServiceProvider,$ProjectRoleOMServiceProvider,
		$created_dtm);
			$this->session->set_flashdata('result_sukses', '<br>Create successful');
			}
			redirect('update_eoi_from_user','refresh');
		}
		
		

	}			
	

	
	
}

