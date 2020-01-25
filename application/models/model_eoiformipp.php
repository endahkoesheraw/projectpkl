<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_eoiformipp extends CI_Model {

  public function __construct(){
    //load helper database
	parent::__construct();
	$this->load->database('mysql',true);
  } 

	public function insert_eoiformipp(
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
		$created_dtm)
	
	{		
		$data = array(
		'UId'=>($UId),
        'BasicCompanyLegalEntityName'=>($BasicCompanyLegalEntityName),
        'BasicCompanyCode'=>($BasicCompanyCode),
        'BasicCompayAddress'=>($BasicCompayAddress),
		'BasicCompanyWebAddress'=>($BasicCompanyWebAddress),
		'BasicCompanyYearEstablished'=>($BasicCompanyYearEstablished),
		'BasicCompanyCountryOfEstablishment'=>($BasicCompanyCountryOfEstablishment),
		'LonglistCompatibilityLegitimacy'=>($LonglistCompatibilityLegitimacy),
		'UploadCompanyProfile'=>($UploadCompanyProfile),
		'UploadSignedEOI'=>($UploadSignedEOI),
		'BasicCompanyContactPerson1Name'=>($BasicCompanyContactPerson1Name),
		'BasicCompanyContactPerson1Position'=>($BasicCompanyContactPerson1Position),
		'BasicCompanyContactPerson1TelephoneNumber'=>($BasicCompanyContactPerson1TelephoneNumber),
		'BasicCompanyContactPerson1EmailAdress'=>($BasicCompanyContactPerson1EmailAdress),
		'BasicCompanyContactPerson2Name'=>($BasicCompanyContactPerson2Name),
		'BasicCompanyContactPerson2Position'=>($BasicCompanyContactPerson2Position),
		'BasicCompanyContactPerson2TelephoneNumber'=>($BasicCompanyContactPerson2TelephoneNumber),
		'BasicCompanyContactPerson2EmailAdress'=>($BasicCompanyContactPerson2EmailAdress),
		'BasicCompanyLegalEntityNameInIndonesia'=>($BasicCompanyLegalEntityNameInIndonesia),
		'BasicCompayAddressInIndonesia'=>($BasicCompayAddressInIndonesia),
		'BasicCompanyContactPersonIndonesiaName'=>($BasicCompanyContactPersonIndonesiaName),
		'BasicCompanyContactPersonIndonesiaPosition'=>($BasicCompanyContactPersonIndonesiaPosition),
		'BasicCompanyContactPersonIndonesiaTelephoneNumber'=>($BasicCompanyContactPersonIndonesiaTelephoneNumber),
		'BasicCompanyContactPersonIndonesiaEmailAdress'=>($BasicCompanyContactPersonIndonesiaEmailAdress),

		'LonglistCapitalTotalAsset'=>($LonglistCapitalTotalAsset),
		'LonglistCapitalEBITDA'=>($LonglistCapitalEBITDA),
		'LonglistCapitalCreditRating'=>($LonglistCapitalCreditRating),
		'LonglistCapitalDSCR'=>($LonglistCapitalDSCR),
		'UploadFinancialStatement'=>($UploadFinancialStatement),

		'AreaOfInterestCoalFired'				=>($AreaOfInterestCoalFired),
		'AreaOfInterestMineMouth'				=>($AreaOfInterestMineMouth),
		'AreaOfInterestGasFiredCombinedCycle'	=>($AreaOfInterestGasFiredCombinedCycle),
		'AreaOfInterestWasteToEnergy'			=>($AreaOfInterestWasteToEnergy),
		'AreaOfInterestDieselPower'				=>($AreaOfInterestDieselPower),
		'AreaOfInterestBiomassBiogasBioful'		=>($AreaOfInterestBiomassBiogasBioful),
		'AreaOfInterestNuclearEnergy'			=>($AreaOfInterestNuclearEnergy),
		'AreaOfInterestCoalGasification'		=>($AreaOfInterestCoalGasification),
		'AreaOfInterestOthers'					=>($AreaOfInterestOthers),	
		
		'PreferenceCoalFiredRoleInvestor' =>($AreaOfInterestCoalFiredRoleInvestor),
		'PreferenceCoalFiredRoleEPC' =>($AreaOfInterestCoalFiredRoleEPC),
		'PreferenceCoalFiredRoleLender' =>($AreaOfInterestCoalFiredRoleInvestorLender),
		'PreferenceCoalFiredRoleManufactured' =>($AreaOfInterestCoalFiredRoleManufactured),
		'PreferenceCoalFiredRoleLandOwner' =>($AreaOfInterestCoalFiredRoleLandOwner),
		'PreferenceCoalFiredRoleOperationMaintenance' =>($AreaOfInterestCoalFiredRoleOperationMaintenance),
		'PreferenceCoalFiredRolePrimaryEnergy' =>($AreaOfInterestCoalFiredRolePrimaryEnergy),
		'PreferenceCoalFiredRoleConsultant' =>($AreaOfInterestCoalFiredRoleConsultant),
		'PreferenceCoalFiredNotes' =>($AreaOfInterestCoalFiredNotes),
		
		'PreferenceMainMouthRoleInvestor' =>($AreaOfInterestMainMouthRoleInvestor),
		'PreferenceMainMouthRoleEPC' =>($AreaOfInterestMainMouthRoleEPC),
		'PreferenceMainMouthRoleLender' =>($AreaOfInterestMainMouthRoleLender),
		'PreferenceMainMouthRoleManufactured' =>($AreaOfInterestMainMouthRoleManufactured),
		'PreferenceMainMouthRoleLandOwner' =>($AreaOfInterestMainMouthLandRoleOwner),
		'PreferenceMainMouthRoleOperationMaintenance' =>($AreaOfInterestMainMouthRoleOperationMaintenance),
		'PreferenceMainMouthRolePrimaryEnergy' =>($AreaOfInterestMainMouthRolePrimaryEnergy),
		'PreferenceMainMouthRoleConsultant' =>($AreaOfInterestMainMouthRoleConsultant),
		'PreferenceMainMouthNotes' =>($AreaOfInterestMainMouthNotes),
		
		'PreferenceGasFiredCombinedCycleRoleInvestor' =>($AreaOfInterestGasFiredCombinedCycleRoleInvestor),
		'PreferenceGasFiredCombinedCycleRoleEPC' =>($AreaOfInterestGasFiredCombinedCycleRoleEPC),
		'PreferenceGasFiredCombinedCycleRoleLender' =>($AreaOfInterestGasFiredCombinedCycleRoleLender),
		'PreferenceGasFiredCombinedCycleRoleManufactured' =>($AreaOfInterestGasFiredCombinedCycleRoleManufactured),
		'PreferenceGasFiredCombinedCycleRoleLandOwner' =>($AreaOfInterestGasFiredCombinedCycleRoleLandOwner),
		'PreferenceGasFiredCombinedCycleRoleOperationMaintenance' =>($AreaOfInterestGasFiredCombinedCycleRoleOperationMaintenance),
		'PreferenceGasFiredCombinedCycleRolePrimaryEnergy' =>($AreaOfInterestGasFiredCombinedCycleRolePrimaryEnergy),
		'PreferenceGasFiredCombinedCycleRoleConsultant' =>($AreaOfInterestGasFiredCombinedCycleRoleConsultant),
		'PreferenceGasFiredCombinedCycleNotes' =>($AreaOfInterestGasFiredCombinedCycleNotes),

		'PreferenceWasteToEnergyRoleInvestor' =>($AreaOfInterestWasteToEnergyRoleInvestor),
		'PreferenceWasteToEnergyRoleEPC' =>($AreaOfInterestWasteToEnergyRoleEPC),
		'PreferenceWasteToEnergyRoleLender' =>($AreaOfInterestWasteToEnergyRoleLender),
		'PreferenceWasteToEnergyRoleManufactured' =>($AreaOfInterestWasteToEnergyRoleManufactured),
		'PreferenceWasteToEnergyRoleLandOwner' =>($AreaOfInterestWasteToEnergyRoleLandOwner),
		'PreferenceWasteToEnergyRoleOperationMaintenance' =>($AreaOfInterestWasteToEnergyRoleOperationMaintenance),
		'PreferenceWasteToEnergyRolePrimaryEnergy' =>($AreaOfInterestWasteToEnergyRolePrimaryEnergy),
		'PreferenceWasteToEnergyRoleConsultant' =>($AreaOfInterestWasteToEnergyRoleConsultant),
		'PreferenceWasteToEnergyNotes' =>($AreaOfInterestWasteToEnergyNotes),

		'PreferenceDieselPowerRoleInvestor' =>($AreaOfInterestDieselPowerRoleInvestor),
		'PreferenceDieselPowerRoleEPC' =>($AreaOfInterestDieselPowerRoleEPC),
		'PreferenceDieselPowerRoleLender' =>($AreaOfInterestDieselPowerRoleLender),
		'PreferenceDieselPowerRoleManufactured' =>($AreaOfInterestDieselPowerRoleManufactured),
		'PreferenceDieselPowerRoleLandOwner' =>($AreaOfInterestDieselPowerRoleLandOwner),
		'PreferenceDieselPowerRoleOperationMaintenance' =>($AreaOfInterestDieselPowerRoleOperationMaintenance),
		'PreferenceDieselPowerRolePrimaryEnergy' =>($AreaOfInterestDieselPowerRolePrimaryEnergy),
		'PreferenceDieselPowerRoleConsultant' =>($AreaOfInterestDieselPowerRoleConsultant),
		'PreferenceDieselPowerNotes' =>($AreaOfInterestDieselPowerNotes),

		'PreferenceBiomassBiogasBiofulRoleInvestor' =>($AreaOfInterestBiomassBiogasBiofulRoleInvestor),
		'PreferenceBiomassBiogasBiofulRoleEPC' =>($AreaOfInterestBiomassBiogasBiofulRoleEPC),
		'PreferenceBiomassBiogasBiofulRoleLender' =>($AreaOfInterestBiomassBiogasBiofulRoleLender),
		'PreferenceBiomassBiogasBiofulRoleManufactured' =>($AreaOfInterestBiomassBiogasBiofulRoleManufactured),
		'PreferenceBiomassBiogasBiofulRoleLandOwner' =>($AreaOfInterestBiomassBiogasBiofulRoleLandOwner),
		'PreferenceBiomassBiogasBiofulRoleOperationMaintenance' =>($AreaOfInterestBiomassBiogasBiofulRoleOperationMaintenance),
		'PreferenceBiomassBiogasBiofulRolePrimaryEnergy' =>($AreaOfInterestBiomassBiogasBiofulRolePrimaryEnergy),
		'PreferenceBiomassBiogasBiofulRoleConsultant' =>($AreaOfInterestBiomassBiogasBiofulRoleConsultant),
		'PreferenceBiomassBiogasBiofulNotes' =>($AreaOfInterestBiomassBiogasBiofulNotes),

		'PreferenceNuclearEnergyRoleInvestor' =>($AreaOfInterestNuclearEnergyRoleInvestor),
		'PreferenceNuclearEnergyRoleEPC' =>($AreaOfInterestNuclearEnergyRoleEPC),
		'PreferenceNuclearEnergyRoleLender' =>($AreaOfInterestNuclearEnergyRoleLender),
		'PreferenceNuclearEnergyRoleManufactured' =>($AreaOfInterestNuclearEnergyRoleManufactured),
		'PreferenceNuclearEnergyRoleLandOwner' =>($AreaOfInterestNuclearEnergyRoleLandOwner),
		'PreferenceNuclearEnergyRoleOperationMaintenance' =>($AreaOfInterestNuclearEnergyRoleOperationMaintenance),
		'PreferenceNuclearEnergyRolePrimaryEnergy' =>($AreaOfInterestNuclearEnergyRolePrimaryEnergy),
		'PreferenceNuclearEnergyRoleConsultant' =>($AreaOfInterestNuclearEnergyRoleConsultant),
		'PreferenceNuclearEnergyNotes' =>($AreaOfInterestNuclearEnergyNotes),

		'PreferenceCoalGasificationRoleInvestor' =>($AreaOfInterestCoalGasificationRoleInvestor),
		'PreferenceCoalGasificationRoleEPC' =>($AreaOfInterestCoalGasificationRoleEPC),
		'PreferenceCoalGasificationRoleLender' =>($AreaOfInterestCoalGasificationRoleLender),
		'PreferenceCoalGasificationRoleManufactured' =>($AreaOfInterestCoalGasificationRoleManufactured),
		'PreferenceCoalGasificationRoleLandOwner' =>($AreaOfInterestCoalGasificationRoleLandOwner),
		'PreferenceCoalGasificationRoleOperationMaintenance' =>($AreaOfInterestCoalGasificationRoleOperationMaintenance),
		'PreferenceCoalGasificationRolePrimaryEnergy' =>($AreaOfInterestCoalGasificationRolePrimaryEnergy),
		'PreferenceCoalGasificationRoleConsultant' =>($AreaOfInterestCoalGasificationRoleConsultant),
		'PreferenceCoalGasificationNotes' =>($AreaOfInterestCoalGasificationNotes),

		'PreferenceOthersRoleInvestor' =>($AreaOfInterestOthersRoleInvestor),
		'PreferenceOthersRoleEPC' =>($AreaOfInterestOthersRoleEPC),
		'PreferenceOthersRoleLender' =>($AreaOfInterestOthersRoleLender),
		'PreferenceOthersRoleManufactured' =>($AreaOfInterestOthersRoleManufactured),
		'PreferenceOthersRoleLandOwner' =>($AreaOfInterestOthersRoleLandOwner),
		'PreferenceOthersRoleOperationMaintenance' =>($AreaOfInterestOthersRoleOperationMaintenance),
		'PreferenceOthersRolePrimaryEnergy' =>($AreaOfInterestOthersRolePrimaryEnergy),
		'PreferenceOthersRoleConsultant' =>($AreaOfInterestOthersRoleConsultant),
		'PreferenceOthersNotes' =>($AreaOfInterestOthersNotes),

		'ProjectName'=>($ProjectName),
        'ProjectLocation'=>($ProjectLocation),
        'ProjectType'=>($ProjectType),
		'ProjectCapacity'=>($ProjectCapacity),
		'ProjectCOD'=>($ProjectCOD),
		'ProjectTariff'=>($ProjectTariff),
		'ProjectValue'=>($ProjectValue),
		'ProjectRoleIPP'=>($ProjectRoleIPP),
		'ProjectRoleFinancingProvider'=>($ProjectRoleFinancingProvider),
		'ProjectRoleTechnologyProvider'=>($ProjectRoleTechnologyProvider),
		'ProjectRoleEPCProvider'=>($ProjectRoleEPCProvider),
		'ProjectRoleConsultingServiceProvider'=>($ProjectRoleConsultingServiceProvider),
		'ProjectRoleOMServiceProvider'=>($ProjectRoleOMServiceProvider),
		'created_dtm'=>($created_dtm)
		);

		$this->db->insert('ippippmaintable',$data);
		$this->db->close();
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	
	
	public function update_eoiformipp(
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
		$created_dtm)
	
	{		
		$data = array(
			'UId'=>($UId),
			'BasicCompanyLegalEntityName'=>($BasicCompanyLegalEntityName),
			'BasicCompanyCode'=>($BasicCompanyCode),
			'BasicCompayAddress'=>($BasicCompayAddress),
			'BasicCompanyWebAddress'=>($BasicCompanyWebAddress),
			'BasicCompanyYearEstablished'=>($BasicCompanyYearEstablished),
			'BasicCompanyCountryOfEstablishment'=>($BasicCompanyCountryOfEstablishment),
			'LonglistCompatibilityLegitimacy'=>($LonglistCompatibilityLegitimacy),
			'UploadCompanyProfile'=>($UploadCompanyProfile),
			'UploadSignedEOI'=>($UploadSignedEOI),
			'BasicCompanyContactPerson1Name'=>($BasicCompanyContactPerson1Name),
			'BasicCompanyContactPerson1Position'=>($BasicCompanyContactPerson1Position),
			'BasicCompanyContactPerson1TelephoneNumber'=>($BasicCompanyContactPerson1TelephoneNumber),
			'BasicCompanyContactPerson1EmailAdress'=>($BasicCompanyContactPerson1EmailAdress),
			'BasicCompanyContactPerson2Name'=>($BasicCompanyContactPerson2Name),
			'BasicCompanyContactPerson2Position'=>($BasicCompanyContactPerson2Position),
			'BasicCompanyContactPerson2TelephoneNumber'=>($BasicCompanyContactPerson2TelephoneNumber),
			'BasicCompanyContactPerson2EmailAdress'=>($BasicCompanyContactPerson2EmailAdress),
			'BasicCompanyLegalEntityNameInIndonesia'=>($BasicCompanyLegalEntityNameInIndonesia),
			'BasicCompayAddressInIndonesia'=>($BasicCompayAddressInIndonesia),
			'BasicCompanyContactPersonIndonesiaName'=>($BasicCompanyContactPersonIndonesiaName),
			'BasicCompanyContactPersonIndonesiaPosition'=>($BasicCompanyContactPersonIndonesiaPosition),
			'BasicCompanyContactPersonIndonesiaTelephoneNumber'=>($BasicCompanyContactPersonIndonesiaTelephoneNumber),
			'BasicCompanyContactPersonIndonesiaEmailAdress'=>($BasicCompanyContactPersonIndonesiaEmailAdress),
	
			'LonglistCapitalTotalAsset'=>($LonglistCapitalTotalAsset),
			'LonglistCapitalEBITDA'=>($LonglistCapitalEBITDA),
			'LonglistCapitalCreditRating'=>($LonglistCapitalCreditRating),
			'LonglistCapitalDSCR'=>($LonglistCapitalDSCR),
			'UploadFinancialStatement'=>($UploadFinancialStatement),
	
			'AreaOfInterestCoalFired'				=>($AreaOfInterestCoalFired),
			'AreaOfInterestMineMouth'				=>($AreaOfInterestMineMouth),
			'AreaOfInterestGasFiredCombinedCycle'	=>($AreaOfInterestGasFiredCombinedCycle),
			'AreaOfInterestWasteToEnergy'			=>($AreaOfInterestWasteToEnergy),
			'AreaOfInterestDieselPower'				=>($AreaOfInterestDieselPower),
			'AreaOfInterestBiomassBiogasBioful'		=>($AreaOfInterestBiomassBiogasBioful),
			'AreaOfInterestNuclearEnergy'			=>($AreaOfInterestNuclearEnergy),
			'AreaOfInterestCoalGasification'		=>($AreaOfInterestCoalGasification),
			'AreaOfInterestOthers'					=>($AreaOfInterestOthers),

			'PreferenceCoalFiredRoleInvestor' =>($AreaOfInterestCoalFiredRoleInvestor),
			'PreferenceCoalFiredRoleEPC' =>($AreaOfInterestCoalFiredRoleEPC),
			'PreferenceCoalFiredRoleLender' =>($AreaOfInterestCoalFiredRoleInvestorLender),
			'PreferenceCoalFiredRoleManufactured' =>($AreaOfInterestCoalFiredRoleManufactured),
			'PreferenceCoalFiredRoleLandOwner' =>($AreaOfInterestCoalFiredRoleLandOwner),
			'PreferenceCoalFiredRoleOperationMaintenance' =>($AreaOfInterestCoalFiredRoleOperationMaintenance),
			'PreferenceCoalFiredRolePrimaryEnergy' =>($AreaOfInterestCoalFiredRolePrimaryEnergy),
			'PreferenceCoalFiredRoleConsultant' =>($AreaOfInterestCoalFiredRoleConsultant),
			'PreferenceCoalFiredNotes' =>($AreaOfInterestCoalFiredNotes),
			
			'PreferenceMainMouthRoleInvestor' =>($AreaOfInterestMainMouthRoleInvestor),
			'PreferenceMainMouthRoleEPC' =>($AreaOfInterestMainMouthRoleEPC),
			'PreferenceMainMouthRoleLender' =>($AreaOfInterestMainMouthRoleLender),
			'PreferenceMainMouthRoleManufactured' =>($AreaOfInterestMainMouthRoleManufactured),
			'PreferenceMainMouthRoleLandOwner' =>($AreaOfInterestMainMouthLandRoleOwner),
			'PreferenceMainMouthRoleOperationMaintenance' =>($AreaOfInterestMainMouthRoleOperationMaintenance),
			'PreferenceMainMouthRolePrimaryEnergy' =>($AreaOfInterestMainMouthRolePrimaryEnergy),
			'PreferenceMainMouthRoleConsultant' =>($AreaOfInterestMainMouthRoleConsultant),
			'PreferenceMainMouthNotes' =>($AreaOfInterestMainMouthNotes),
			
			'PreferenceGasFiredCombinedCycleRoleInvestor' =>($AreaOfInterestGasFiredCombinedCycleRoleInvestor),
			'PreferenceGasFiredCombinedCycleRoleEPC' =>($AreaOfInterestGasFiredCombinedCycleRoleEPC),
			'PreferenceGasFiredCombinedCycleRoleLender' =>($AreaOfInterestGasFiredCombinedCycleRoleLender),
			'PreferenceGasFiredCombinedCycleRoleManufactured' =>($AreaOfInterestGasFiredCombinedCycleRoleManufactured),
			'PreferenceGasFiredCombinedCycleRoleLandOwner' =>($AreaOfInterestGasFiredCombinedCycleRoleLandOwner),
			'PreferenceGasFiredCombinedCycleRoleOperationMaintenance' =>($AreaOfInterestGasFiredCombinedCycleRoleOperationMaintenance),
			'PreferenceGasFiredCombinedCycleRolePrimaryEnergy' =>($AreaOfInterestGasFiredCombinedCycleRolePrimaryEnergy),
			'PreferenceGasFiredCombinedCycleRoleConsultant' =>($AreaOfInterestGasFiredCombinedCycleRoleConsultant),
			'PreferenceGasFiredCombinedCycleNotes' =>($AreaOfInterestGasFiredCombinedCycleNotes),
	
			'PreferenceWasteToEnergyRoleInvestor' =>($AreaOfInterestWasteToEnergyRoleInvestor),
			'PreferenceWasteToEnergyRoleEPC' =>($AreaOfInterestWasteToEnergyRoleEPC),
			'PreferenceWasteToEnergyRoleLender' =>($AreaOfInterestWasteToEnergyRoleLender),
			'PreferenceWasteToEnergyRoleManufactured' =>($AreaOfInterestWasteToEnergyRoleManufactured),
			'PreferenceWasteToEnergyRoleLandOwner' =>($AreaOfInterestWasteToEnergyRoleLandOwner),
			'PreferenceWasteToEnergyRoleOperationMaintenance' =>($AreaOfInterestWasteToEnergyRoleOperationMaintenance),
			'PreferenceWasteToEnergyRolePrimaryEnergy' =>($AreaOfInterestWasteToEnergyRolePrimaryEnergy),
			'PreferenceWasteToEnergyRoleConsultant' =>($AreaOfInterestWasteToEnergyRoleConsultant),
			'PreferenceWasteToEnergyNotes' =>($AreaOfInterestWasteToEnergyNotes),
	
			'PreferenceDieselPowerRoleInvestor' =>($AreaOfInterestDieselPowerRoleInvestor),
			'PreferenceDieselPowerRoleEPC' =>($AreaOfInterestDieselPowerRoleEPC),
			'PreferenceDieselPowerRoleLender' =>($AreaOfInterestDieselPowerRoleLender),
			'PreferenceDieselPowerRoleManufactured' =>($AreaOfInterestDieselPowerRoleManufactured),
			'PreferenceDieselPowerRoleLandOwner' =>($AreaOfInterestDieselPowerRoleLandOwner),
			'PreferenceDieselPowerRoleOperationMaintenance' =>($AreaOfInterestDieselPowerRoleOperationMaintenance),
			'PreferenceDieselPowerRolePrimaryEnergy' =>($AreaOfInterestDieselPowerRolePrimaryEnergy),
			'PreferenceDieselPowerRoleConsultant' =>($AreaOfInterestDieselPowerRoleConsultant),
			'PreferenceDieselPowerNotes' =>($AreaOfInterestDieselPowerNotes),
	
			'PreferenceBiomassBiogasBiofulRoleInvestor' =>($AreaOfInterestBiomassBiogasBiofulRoleInvestor),
			'PreferenceBiomassBiogasBiofulRoleEPC' =>($AreaOfInterestBiomassBiogasBiofulRoleEPC),
			'PreferenceBiomassBiogasBiofulRoleLender' =>($AreaOfInterestBiomassBiogasBiofulRoleLender),
			'PreferenceBiomassBiogasBiofulRoleManufactured' =>($AreaOfInterestBiomassBiogasBiofulRoleManufactured),
			'PreferenceBiomassBiogasBiofulRoleLandOwner' =>($AreaOfInterestBiomassBiogasBiofulRoleLandOwner),
			'PreferenceBiomassBiogasBiofulRoleOperationMaintenance' =>($AreaOfInterestBiomassBiogasBiofulRoleOperationMaintenance),
			'PreferenceBiomassBiogasBiofulRolePrimaryEnergy' =>($AreaOfInterestBiomassBiogasBiofulRolePrimaryEnergy),
			'PreferenceBiomassBiogasBiofulRoleConsultant' =>($AreaOfInterestBiomassBiogasBiofulRoleConsultant),
			'PreferenceBiomassBiogasBiofulNotes' =>($AreaOfInterestBiomassBiogasBiofulNotes),
	
			'PreferenceNuclearEnergyRoleInvestor' =>($AreaOfInterestNuclearEnergyRoleInvestor),
			'PreferenceNuclearEnergyRoleEPC' =>($AreaOfInterestNuclearEnergyRoleEPC),
			'PreferenceNuclearEnergyRoleLender' =>($AreaOfInterestNuclearEnergyRoleLender),
			'PreferenceNuclearEnergyRoleManufactured' =>($AreaOfInterestNuclearEnergyRoleManufactured),
			'PreferenceNuclearEnergyRoleLandOwner' =>($AreaOfInterestNuclearEnergyRoleLandOwner),
			'PreferenceNuclearEnergyRoleOperationMaintenance' =>($AreaOfInterestNuclearEnergyRoleOperationMaintenance),
			'PreferenceNuclearEnergyRolePrimaryEnergy' =>($AreaOfInterestNuclearEnergyRolePrimaryEnergy),
			'PreferenceNuclearEnergyRoleConsultant' =>($AreaOfInterestNuclearEnergyRoleConsultant),
			'PreferenceNuclearEnergyNotes' =>($AreaOfInterestNuclearEnergyNotes),
	
			'PreferenceCoalGasificationRoleInvestor' =>($AreaOfInterestCoalGasificationRoleInvestor),
			'PreferenceCoalGasificationRoleEPC' =>($AreaOfInterestCoalGasificationRoleEPC),
			'PreferenceCoalGasificationRoleLender' =>($AreaOfInterestCoalGasificationRoleLender),
			'PreferenceCoalGasificationRoleManufactured' =>($AreaOfInterestCoalGasificationRoleManufactured),
			'PreferenceCoalGasificationRoleLandOwner' =>($AreaOfInterestCoalGasificationRoleLandOwner),
			'PreferenceCoalGasificationRoleOperationMaintenance' =>($AreaOfInterestCoalGasificationRoleOperationMaintenance),
			'PreferenceCoalGasificationRolePrimaryEnergy' =>($AreaOfInterestCoalGasificationRolePrimaryEnergy),
			'PreferenceCoalGasificationRoleConsultant' =>($AreaOfInterestCoalGasificationRoleConsultant),
			'PreferenceCoalGasificationNotes' =>($AreaOfInterestCoalGasificationNotes),
	
			'PreferenceOthersRoleInvestor' =>($AreaOfInterestOthersRoleInvestor),
			'PreferenceOthersRoleEPC' =>($AreaOfInterestOthersRoleEPC),
			'PreferenceOthersRoleLender' =>($AreaOfInterestOthersRoleLender),
			'PreferenceOthersRoleManufactured' =>($AreaOfInterestOthersRoleManufactured),
			'PreferenceOthersRoleLandOwner' =>($AreaOfInterestOthersRoleLandOwner),
			'PreferenceOthersRoleOperationMaintenance' =>($AreaOfInterestOthersRoleOperationMaintenance),
			'PreferenceOthersRolePrimaryEnergy' =>($AreaOfInterestOthersRolePrimaryEnergy),
			'PreferenceOthersRoleConsultant' =>($AreaOfInterestOthersRoleConsultant),
			'PreferenceOthersNotes' =>($AreaOfInterestOthersNotes),
	
			'ProjectName'=>($ProjectName),
        	'ProjectLocation'=>($ProjectLocation),
        	'ProjectType'=>($ProjectType),
			'ProjectCapacity'=>($ProjectCapacity),
			'ProjectCOD'=>($ProjectCOD),
			'ProjectTariff'=>($ProjectTariff),
			'ProjectValue'=>($ProjectValue),
			'ProjectRoleIPP'=>($ProjectRoleIPP),
			'ProjectRoleFinancingProvider'=>($ProjectRoleFinancingProvider),
			'ProjectRoleTechnologyProvider'=>($ProjectRoleTechnologyProvider),
			'ProjectRoleEPCProvider'=>($ProjectRoleEPCProvider),
			'ProjectRoleConsultingServiceProvider'=>($ProjectRoleConsultingServiceProvider),
			'ProjectRoleOMServiceProvider'=>($ProjectRoleOMServiceProvider),
			'updated_dtm'=>($created_dtm)
		);
		
		$this->db->where('UId', $UId);
		$this->db->update('ippmaintable',$data);
		$this->db->close();
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	
	
	public function delete_eoiipp($user_id)
	{
		return $this->db->delete('ippmaintable', array('UId'=>$user_id));
	}
	
	public function getEoiByUid($uid){	  
		return $this->db->get_where('ippmaintable',array('UId'=>$uid));		  
   }  
   
   public function getEoiByCompanyId($CompanyID){	  
		return $this->db->get_where('ippmaintable',array('CompanyID'=>$CompanyID));		  
   }  
   
   public function getEoiAll(){	  	  
		$this->db->order_by("BasicCompanyLegalEntityName", "asc");
		$query=$this->db->get('ippmaintable');
		return $query;
   }  

}
