 <?php
 error_reporting(0); 
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=$title.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>
 <style type="text/css">
    table {
           /*...all table attributes like fontsize etc*/
            font-size:12px;
            color:#333333;                
    }
    table th {
            /*...all th attributes like padding etc*/
            background-color:#d4e3e5;
            padding: 8px;
    }
    table td {
            /*...all td attributes like padding etc*/
            padding: 8px;
    }
    </style>
 <table border="1" width="100%">
 
      <thead>
			<tr>
				<th align="left" colspan="8"><h1><b><i>EOI REPORT -  EOI SUBMISSION DETAIL WITH EXPERIENCE </i></b></h1></td>
			</tr>
			<tr>
				<th align="left" colspan="8"><b><i><?php echo "Print Date: ". date("d-m-Y H:i:s");?></i></b></td>
			</tr>
      </thead>
 
      <tbody>
           <?php $i=1;foreach ($data->result_object() as $lihat) { 
				 $BasicCompanyCode=$lihat->BasicCompanyCode;
				 $BasicCompanyLegalEntityName=$lihat->BasicCompanyLegalEntityName;
				 $BasicCompayAddress=$lihat->BasicCompayAddress;
				 $BasicCompanyWebAddress=$lihat->BasicCompanyWebAddress;
				 $BasicCompanyYearEstablished=$lihat->BasicCompanyYearEstablished;
				 $BasicCompanyCountryOfEstablishment=$lihat->BasicCompanyCountryOfEstablishment;
				 $LonglistCompatibilityLegitimacy=$lihat->LonglistCompatibilityLegitimacy;
				 
				 $BasicCompanyContactPerson1Name=$lihat->BasicCompanyContactPerson1Name;
				 $BasicCompanyContactPerson1Position=$lihat->BasicCompanyContactPerson1Position;
				 $BasicCompanyContactPerson1TelephoneNumber=$lihat->BasicCompanyContactPerson1TelephoneNumber;
				 $BasicCompanyContactPerson1EmailAdress=$lihat->BasicCompanyContactPerson1EmailAdress;
				 
				 $BasicCompanyContactPerson2Name=$lihat->BasicCompanyContactPerson2Name;
				 $BasicCompanyContactPerson2Position=$lihat->BasicCompanyContactPerson2Position;
				 $BasicCompanyContactPerson2TelephoneNumber=$lihat->BasicCompanyContactPerson2TelephoneNumber;
				 $BasicCompanyContactPerson2EmailAdress=$lihat->BasicCompanyContactPerson2EmailAdress;
				 
				 $BasicCompanyLegalEntityNameInIndonesia=$lihat->BasicCompanyLegalEntityNameInIndonesia;
				 $BasicCompayAddressInIndonesia=$lihat->BasicCompayAddressInIndonesia;
				 $BasicCompanyContactPersonIndonesiaName=$lihat->BasicCompanyContactPersonIndonesiaName;
				 $BasicCompanyContactPersonIndonesiaPosition=$lihat->BasicCompanyContactPersonIndonesiaPosition;
				 $BasicCompanyContactPersonIndonesiaTelephoneNumber=$lihat->BasicCompanyContactPersonIndonesiaTelephoneNumber;
				 $BasicCompanyContactPersonIndonesiaEmailAdress=$lihat->BasicCompanyContactPersonIndonesiaEmailAdress;

				 $LonglistCapitalTotalAsset=$lihat->LonglistCapitalTotalAsset;
				 $LonglistCapitalCreditRating=$lihat->LonglistCapitalCreditRating;
				 $LonglistCapitalEBITDA=$lihat->LonglistCapitalEBITDA;
				 $LonglistCapitalDSCR=$lihat->LonglistCapitalDSCR;
				 
				$PreferenceBiomassBiogasCapacity1 = $lihat->PreferenceBiomassBiogasCapacity1;
				$PreferenceBiomassBiogasCapacity2 = $lihat->PreferenceBiomassBiogasCapacity2;
				$PreferenceBiomassBiogasCapacity3 = $lihat->PreferenceBiomassBiogasCapacity3;
				$PreferenceBiomassBiogasCapacity4 = $lihat->PreferenceBiomassBiogasCapacity4;
				$PreferenceBiomassBiogasCapacity5 = $lihat->PreferenceBiomassBiogasCapacity5;
				$PreferenceBiomassBiogasCapacity6 = $lihat->PreferenceBiomassBiogasCapacity6;
				$PreferenceBiomassBiogasExpNotes = $lihat->PreferenceBiomassBiogasExpNotes;
				$PreferenceBiomassBiogasExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceBiomassBiogasExpRoleConsultingServiceProviderCapacity;
				$PreferenceBiomassBiogasExpRoleEPCProviderCapacity = $lihat->PreferenceBiomassBiogasExpRoleEPCProviderCapacity;
				$PreferenceBiomassBiogasExpRoleFinancingProviderCapacity = $lihat->PreferenceBiomassBiogasExpRoleFinancingProviderCapacity;
				$PreferenceBiomassBiogasExpRoleIPPCapacity = $lihat->PreferenceBiomassBiogasExpRoleIPPCapacity;
				$PreferenceBiomassBiogasExpRoleOMServiceProviderCapacity = $lihat->PreferenceBiomassBiogasExpRoleOMServiceProviderCapacity;
				$PreferenceBiomassBiogasExpRoleTechnologyProviderCapacity = $lihat->PreferenceBiomassBiogasExpRoleTechnologyProviderCapacity;
				$PreferenceBiomassBiogasNotes = $lihat->PreferenceBiomassBiogasNotes;
				$PreferenceBiomassBiogasPartner = $lihat->PreferenceBiomassBiogasPartner;
				$PreferenceBiomassBiogasRoleConsultingServiceProvider = $lihat->PreferenceBiomassBiogasRoleConsultingServiceProvider;
				$PreferenceBiomassBiogasRoleEPCProvider = $lihat->PreferenceBiomassBiogasRoleEPCProvider;
				$PreferenceBiomassBiogasRoleFinancingProvider = $lihat->PreferenceBiomassBiogasRoleFinancingProvider;
				$PreferenceBiomassBiogasRoleIPP = $lihat->PreferenceBiomassBiogasRoleIPP;
				$PreferenceBiomassBiogasRoleOMServiceProvider = $lihat->PreferenceBiomassBiogasRoleOMServiceProvider;
				$PreferenceBiomassBiogasRoleTechnologyProvider = $lihat->PreferenceBiomassBiogasRoleTechnologyProvider;		
				$PreferenceEnergyStorageCapacity1 = $lihat->PreferenceEnergyStorageCapacity1;
				$PreferenceEnergyStorageCapacity2 = $lihat->PreferenceEnergyStorageCapacity2;
				$PreferenceEnergyStorageCapacity3 = $lihat->PreferenceEnergyStorageCapacity3;
				$PreferenceEnergyStorageCapacity4 = $lihat->PreferenceEnergyStorageCapacity4;
				$PreferenceEnergyStorageCapacity5 = $lihat->PreferenceEnergyStorageCapacity5;
				$PreferenceEnergyStorageCapacity6 = $lihat->PreferenceEnergyStorageCapacity6;
				$PreferenceEnergyStorageExpNotes = $lihat->PreferenceEnergyStorageExpNotes;
				$PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity;
				$PreferenceEnergyStorageExpRoleEPCProviderCapacity = $lihat->PreferenceEnergyStorageExpRoleEPCProviderCapacity;
				$PreferenceEnergyStorageExpRoleFinancingProviderCapacity = $lihat->PreferenceEnergyStorageExpRoleFinancingProviderCapacity;
				$PreferenceEnergyStorageExpRoleIPPCapacity = $lihat->PreferenceEnergyStorageExpRoleIPPCapacity;
				$PreferenceEnergyStorageExpRoleOMServiceProviderCapacity = $lihat->PreferenceEnergyStorageExpRoleOMServiceProviderCapacity;
				$PreferenceEnergyStorageExpRoleTechnologyProviderCapacity = $lihat->PreferenceEnergyStorageExpRoleTechnologyProviderCapacity;
				$PreferenceEnergyStorageNotes = $lihat->PreferenceEnergyStorageNotes;
				$PreferenceEnergyStoragePartner = $lihat->PreferenceEnergyStoragePartner;
				$PreferenceEnergyStorageRoleConsultingServiceProvider = $lihat->PreferenceEnergyStorageRoleConsultingServiceProvider;
				$PreferenceEnergyStorageRoleEPCProvider = $lihat->PreferenceEnergyStorageRoleEPCProvider;
				$PreferenceEnergyStorageRoleFinancingProvider = $lihat->PreferenceEnergyStorageRoleFinancingProvider;
				$PreferenceEnergyStorageRoleIPP = $lihat->PreferenceEnergyStorageRoleIPP;
				$PreferenceEnergyStorageRoleOMServiceProvider = $lihat->PreferenceEnergyStorageRoleOMServiceProvider;
				$PreferenceEnergyStorageRoleTechnologyProvider = $lihat->PreferenceEnergyStorageRoleTechnologyProvider;
				$PreferenceGeothermalCapacity1 = $lihat->PreferenceGeothermalCapacity1;
				$PreferenceGeothermalCapacity2 = $lihat->PreferenceGeothermalCapacity2;
				$PreferenceGeothermalCapacity3 = $lihat->PreferenceGeothermalCapacity3;
				$PreferenceGeothermalCapacity4 = $lihat->PreferenceGeothermalCapacity4;
				$PreferenceGeothermalCapacity5 = $lihat->PreferenceGeothermalCapacity5;
				$PreferenceGeothermalCapacity6 = $lihat->PreferenceGeothermalCapacity6;
				$PreferenceGeothermalExpNotes = $lihat->PreferenceGeothermalExpNotes;
				$PreferenceGeothermalExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceGeothermalExpRoleConsultingServiceProviderCapacity;
				$PreferenceGeothermalExpRoleEPCProviderCapacity = $lihat->PreferenceGeothermalExpRoleEPCProviderCapacity;
				$PreferenceGeothermalExpRoleFinancingProviderCapacity = $lihat->PreferenceGeothermalExpRoleFinancingProviderCapacity;
				$PreferenceGeothermalExpRoleIPPCapacity = $lihat->PreferenceGeothermalExpRoleIPPCapacity;
				$PreferenceGeothermalExpRoleOMServiceProviderCapacity = $lihat->PreferenceGeothermalExpRoleOMServiceProviderCapacity;
				$PreferenceGeothermalExpRoleTechnologyProviderCapacity = $lihat->PreferenceGeothermalExpRoleTechnologyProviderCapacity;
				$PreferenceGeothermalNotes = $lihat->PreferenceGeothermalNotes;
				$PreferenceGeothermalPartner = $lihat->PreferenceGeothermalPartner;
				$PreferenceGeothermalRoleConsultingServiceProvider = $lihat->PreferenceGeothermalRoleConsultingServiceProvider;
				$PreferenceGeothermalRoleEPCProvider = $lihat->PreferenceGeothermalRoleEPCProvider;
				$PreferenceGeothermalRoleFinancingProvider = $lihat->PreferenceGeothermalRoleFinancingProvider;
				$PreferenceGeothermalRoleIPP = $lihat->PreferenceGeothermalRoleIPP;
				$PreferenceGeothermalRoleOMServiceProvider = $lihat->PreferenceGeothermalRoleOMServiceProvider;
				$PreferenceGeothermalRoleTechnologyProvider = $lihat->PreferenceGeothermalRoleTechnologyProvider;
				$PreferenceHydroelectricCapacity1 = $lihat->PreferenceHydroelectricCapacity1;
				$PreferenceHydroelectricCapacity2 = $lihat->PreferenceHydroelectricCapacity2;
				$PreferenceHydroelectricCapacity3 = $lihat->PreferenceHydroelectricCapacity3;
				$PreferenceHydroelectricCapacity4 = $lihat->PreferenceHydroelectricCapacity4;
				$PreferenceHydroelectricCapacity5 = $lihat->PreferenceHydroelectricCapacity5;
				$PreferenceHydroelectricCapacity6 = $lihat->PreferenceHydroelectricCapacity6;
				$PreferenceHydroelectricExpNotes = $lihat->PreferenceHydroelectricExpNotes;
				$PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity;
				$PreferenceHydroelectricExpRoleEPCProviderCapacity = $lihat->PreferenceHydroelectricExpRoleEPCProviderCapacity;
				$PreferenceHydroelectricExpRoleFinancingProviderCapacity = $lihat->PreferenceHydroelectricExpRoleFinancingProviderCapacity;
				$PreferenceHydroelectricExpRoleIPPCapacity = $lihat->PreferenceHydroelectricExpRoleIPPCapacity;
				$PreferenceHydroelectricExpRoleOMServiceProviderCapacity = $lihat->PreferenceHydroelectricExpRoleOMServiceProviderCapacity;
				$PreferenceHydroelectricExpRoleTechnologyProviderCapacity = $lihat->PreferenceHydroelectricExpRoleTechnologyProviderCapacity;
				$PreferenceHydroelectricNotes = $lihat->PreferenceHydroelectricNotes;
				$PreferenceHydroelectricPartner = $lihat->PreferenceHydroelectricPartner;
				$PreferenceHydroelectricRoleConsultingServiceProvider = $lihat->PreferenceHydroelectricRoleConsultingServiceProvider;
				$PreferenceHydroelectricRoleEPCProvider = $lihat->PreferenceHydroelectricRoleEPCProvider;
				$PreferenceHydroelectricRoleFinancingProvider = $lihat->PreferenceHydroelectricRoleFinancingProvider;
				$PreferenceHydroelectricRoleIPP = $lihat->PreferenceHydroelectricRoleIPP;
				$PreferenceHydroelectricRoleOMServiceProvider = $lihat->PreferenceHydroelectricRoleOMServiceProvider;
				$PreferenceHydroelectricRoleTechnologyProvider = $lihat->PreferenceHydroelectricRoleTechnologyProvider;
				$PreferenceNuclearCapacity1 = $lihat->PreferenceNuclearCapacity1;
				$PreferenceNuclearCapacity2 = $lihat->PreferenceNuclearCapacity2;
				$PreferenceNuclearCapacity3 = $lihat->PreferenceNuclearCapacity3;
				$PreferenceNuclearCapacity4 = $lihat->PreferenceNuclearCapacity4;
				$PreferenceNuclearCapacity5 = $lihat->PreferenceNuclearCapacity5;
				$PreferenceNuclearCapacity6 = $lihat->PreferenceNuclearCapacity6;
				$PreferenceNuclearExpNotes = $lihat->PreferenceNuclearExpNotes;
				$PreferenceNuclearExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceNuclearExpRoleConsultingServiceProviderCapacity;
				$PreferenceNuclearExpRoleEPCProviderCapacity = $lihat->PreferenceNuclearExpRoleEPCProviderCapacity;
				$PreferenceNuclearExpRoleFinancingProviderCapacity = $lihat->PreferenceNuclearExpRoleFinancingProviderCapacity;
				$PreferenceNuclearExpRoleIPPCapacity = $lihat->PreferenceNuclearExpRoleIPPCapacity;
				$PreferenceNuclearExpRoleOMServiceProviderCapacity = $lihat->PreferenceNuclearExpRoleOMServiceProviderCapacity;
				$PreferenceNuclearExpRoleTechnologyProviderCapacity = $lihat->PreferenceNuclearExpRoleTechnologyProviderCapacity;
				$PreferenceNuclearNotes = $lihat->PreferenceNuclearNotes;
				$PreferenceNuclearPartner = $lihat->PreferenceNuclearPartner;
				$PreferenceNuclearRoleConsultingServiceProvider = $lihat->PreferenceNuclearRoleConsultingServiceProvider;
				$PreferenceNuclearRoleEPCProvider = $lihat->PreferenceNuclearRoleEPCProvider;
				$PreferenceNuclearRoleFinancingProvider = $lihat->PreferenceNuclearRoleFinancingProvider;
				$PreferenceNuclearRoleIPP = $lihat->PreferenceNuclearRoleIPP;
				$PreferenceNuclearRoleOMServiceProvider = $lihat->PreferenceNuclearRoleOMServiceProvider;
				$PreferenceNuclearRoleTechnologyProvider = $lihat->PreferenceNuclearRoleTechnologyProvider;
				$PreferenceSeaEnergyCapacity1 = $lihat->PreferenceSeaEnergyCapacity1;
				$PreferenceSeaEnergyCapacity2 = $lihat->PreferenceSeaEnergyCapacity2;
				$PreferenceSeaEnergyCapacity3 = $lihat->PreferenceSeaEnergyCapacity3;
				$PreferenceSeaEnergyCapacity4 = $lihat->PreferenceSeaEnergyCapacity4;
				$PreferenceSeaEnergyCapacity5 = $lihat->PreferenceSeaEnergyCapacity5;
				$PreferenceSeaEnergyCapacity6 = $lihat->PreferenceSeaEnergyCapacity6;
				$PreferenceSeaEnergyExpNotes = $lihat->PreferenceSeaEnergyExpNotes;
				$PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity;
				$PreferenceSeaEnergyExpRoleEPCProviderCapacity = $lihat->PreferenceSeaEnergyExpRoleEPCProviderCapacity;
				$PreferenceSeaEnergyExpRoleFinancingProviderCapacity = $lihat->PreferenceSeaEnergyExpRoleFinancingProviderCapacity;
				$PreferenceSeaEnergyExpRoleIPPCapacity = $lihat->PreferenceSeaEnergyExpRoleIPPCapacity;
				$PreferenceSeaEnergyExpRoleOMServiceProviderCapacity = $lihat->PreferenceSeaEnergyExpRoleOMServiceProviderCapacity;
				$PreferenceSeaEnergyExpRoleTechnologyProviderCapacity = $lihat->PreferenceSeaEnergyExpRoleTechnologyProviderCapacity;
				$PreferenceSeaEnergyNotes = $lihat->PreferenceSeaEnergyNotes;
				$PreferenceSeaEnergyPartner = $lihat->PreferenceSeaEnergyPartner;
				$PreferenceSeaEnergyRoleConsultingServiceProvider = $lihat->PreferenceSeaEnergyRoleConsultingServiceProvider;
				$PreferenceSeaEnergyRoleEPCProvider = $lihat->PreferenceSeaEnergyRoleEPCProvider;
				$PreferenceSeaEnergyRoleFinancingProvider = $lihat->PreferenceSeaEnergyRoleFinancingProvider;
				$PreferenceSeaEnergyRoleIPP = $lihat->PreferenceSeaEnergyRoleIPP;
				$PreferenceSeaEnergyRoleOMServiceProvider = $lihat->PreferenceSeaEnergyRoleOMServiceProvider;
				$PreferenceSeaEnergyRoleTechnologyProvider = $lihat->PreferenceSeaEnergyRoleTechnologyProvider;
				$PreferenceSolarPhotovoltaicCapacity1 = $lihat->PreferenceSolarPhotovoltaicCapacity1;
				$PreferenceSolarPhotovoltaicCapacity2 = $lihat->PreferenceSolarPhotovoltaicCapacity2;
				$PreferenceSolarPhotovoltaicCapacity3 = $lihat->PreferenceSolarPhotovoltaicCapacity3;
				$PreferenceSolarPhotovoltaicCapacity4 = $lihat->PreferenceSolarPhotovoltaicCapacity4;
				$PreferenceSolarPhotovoltaicCapacity5 = $lihat->PreferenceSolarPhotovoltaicCapacity5;
				$PreferenceSolarPhotovoltaicCapacity6 = $lihat->PreferenceSolarPhotovoltaicCapacity6;
				$PreferenceSolarPhotovoltaicExpNotes = $lihat->PreferenceSolarPhotovoltaicExpNotes;
				$PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac = $lihat->PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac;
				$PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity = $lihat->PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity;
				$PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity = $lihat->PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity;
				$PreferenceSolarPhotovoltaicExpRoleIPPCapacity = $lihat->PreferenceSolarPhotovoltaicExpRoleIPPCapacity;
				$PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity = $lihat->PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity;
				$PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity = $lihat->PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity;
				$PreferenceSolarPhotovoltaicNotes = $lihat->PreferenceSolarPhotovoltaicNotes;
				$PreferenceSolarPhotovoltaicPartner = $lihat->PreferenceSolarPhotovoltaicPartner;
				$PreferenceSolarPhotovoltaicRoleConsultingServiceProvider = $lihat->PreferenceSolarPhotovoltaicRoleConsultingServiceProvider;
				$PreferenceSolarPhotovoltaicRoleEPCProvider = $lihat->PreferenceSolarPhotovoltaicRoleEPCProvider;
				$PreferenceSolarPhotovoltaicRoleFinancingProvider = $lihat->PreferenceSolarPhotovoltaicRoleFinancingProvider;
				$PreferenceSolarPhotovoltaicRoleIPP = $lihat->PreferenceSolarPhotovoltaicRoleIPP;
				$PreferenceSolarPhotovoltaicRoleOMServiceProvider = $lihat->PreferenceSolarPhotovoltaicRoleOMServiceProvider;
				$PreferenceSolarPhotovoltaicRoleTechnologyProvider = $lihat->PreferenceSolarPhotovoltaicRoleTechnologyProvider;
				$PreferenceSolarThermalCapacity1 = $lihat->PreferenceSolarThermalCapacity1;
				$PreferenceSolarThermalCapacity2 = $lihat->PreferenceSolarThermalCapacity2;
				$PreferenceSolarThermalCapacity3 = $lihat->PreferenceSolarThermalCapacity3;
				$PreferenceSolarThermalCapacity4 = $lihat->PreferenceSolarThermalCapacity4;
				$PreferenceSolarThermalCapacity5 = $lihat->PreferenceSolarThermalCapacity5;
				$PreferenceSolarThermalCapacity6 = $lihat->PreferenceSolarThermalCapacity6;
				$PreferenceSolarThermalExpNotes = $lihat->PreferenceSolarThermalExpNotes;
				$PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity;
				$PreferenceSolarThermalExpRoleEPCProviderCapacity = $lihat->PreferenceSolarThermalExpRoleEPCProviderCapacity;
				$PreferenceSolarThermalExpRoleFinancingProviderCapacity = $lihat->PreferenceSolarThermalExpRoleFinancingProviderCapacity;
				$PreferenceSolarThermalExpRoleIPPCapacity = $lihat->PreferenceSolarThermalExpRoleIPPCapacity;
				$PreferenceSolarThermalExpRoleOMServiceProviderCapacity = $lihat->PreferenceSolarThermalExpRoleOMServiceProviderCapacity;
				$PreferenceSolarThermalExpRoleTechnologyProviderCapacity = $lihat->PreferenceSolarThermalExpRoleTechnologyProviderCapacity;
				$PreferenceSolarThermalNotes = $lihat->PreferenceSolarThermalNotes;
				$PreferenceSolarThermalPartner = $lihat->PreferenceSolarThermalPartner;
				$PreferenceSolarThermalRoleConsultingServiceProvider = $lihat->PreferenceSolarThermalRoleConsultingServiceProvider;
				$PreferenceSolarThermalRoleEPCProvider = $lihat->PreferenceSolarThermalRoleEPCProvider;
				$PreferenceSolarThermalRoleFinancingProvider = $lihat->PreferenceSolarThermalRoleFinancingProvider;
				$PreferenceSolarThermalRoleIPP = $lihat->PreferenceSolarThermalRoleIPP;
				$PreferenceSolarThermalRoleOMServiceProvider = $lihat->PreferenceSolarThermalRoleOMServiceProvider;
				$PreferenceSolarThermalRoleTechnologyProvider = $lihat->PreferenceSolarThermalRoleTechnologyProvider;
				$PreferenceWasteToEnergyCapacity1 = $lihat->PreferenceWasteToEnergyCapacity1;
				$PreferenceWasteToEnergyCapacity2 = $lihat->PreferenceWasteToEnergyCapacity2;
				$PreferenceWasteToEnergyCapacity3 = $lihat->PreferenceWasteToEnergyCapacity3;
				$PreferenceWasteToEnergyCapacity4 = $lihat->PreferenceWasteToEnergyCapacity4;
				$PreferenceWasteToEnergyCapacity5 = $lihat->PreferenceWasteToEnergyCapacity5;
				$PreferenceWasteToEnergyCapacity6 = $lihat->PreferenceWasteToEnergyCapacity6;
				$PreferenceWasteToEnergyExpNotes = $lihat->PreferenceWasteToEnergyExpNotes;
				$PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity;
				$PreferenceWasteToEnergyExpRoleEPCProviderCapacity = $lihat->PreferenceWasteToEnergyExpRoleEPCProviderCapacity;
				$PreferenceWasteToEnergyExpRoleFinancingProviderCapacity = $lihat->PreferenceWasteToEnergyExpRoleFinancingProviderCapacity;
				$PreferenceWasteToEnergyExpRoleIPPCapacity = $lihat->PreferenceWasteToEnergyExpRoleIPPCapacity;
				$PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity = $lihat->PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity;
				$PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity = $lihat->PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity;
				$PreferenceWasteToEnergyNotes = $lihat->PreferenceWasteToEnergyNotes;
				$PreferenceWasteToEnergyPartner = $lihat->PreferenceWasteToEnergyPartner;
				$PreferenceWasteToEnergyRoleConsultingServiceProvider = $lihat->PreferenceWasteToEnergyRoleConsultingServiceProvider;
				$PreferenceWasteToEnergyRoleEPCProvider = $lihat->PreferenceWasteToEnergyRoleEPCProvider;
				$PreferenceWasteToEnergyRoleFinancingProvider = $lihat->PreferenceWasteToEnergyRoleFinancingProvider;
				$PreferenceWasteToEnergyRoleIPP = $lihat->PreferenceWasteToEnergyRoleIPP;
				$PreferenceWasteToEnergyRoleOMServiceProvider = $lihat->PreferenceWasteToEnergyRoleOMServiceProvider;
				$PreferenceWasteToEnergyRoleTechnologyProvider = $lihat->PreferenceWasteToEnergyRoleTechnologyProvider;
				$PreferenceWindPowerCapacity1 = $lihat->PreferenceWindPowerCapacity1;
				$PreferenceWindPowerCapacity2 = $lihat->PreferenceWindPowerCapacity2;
				$PreferenceWindPowerCapacity3 = $lihat->PreferenceWindPowerCapacity3;
				$PreferenceWindPowerCapacity4 = $lihat->PreferenceWindPowerCapacity4;
				$PreferenceWindPowerCapacity5 = $lihat->PreferenceWindPowerCapacity5;
				$PreferenceWindPowerCapacity6 = $lihat->PreferenceWindPowerCapacity6;
				$PreferenceWindPowerExpNotes = $lihat->PreferenceWindPowerExpNotes;
				$PreferenceWindPowerExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceWindPowerExpRoleConsultingServiceProviderCapacity;
				$PreferenceWindPowerExpRoleEPCProviderCapacity = $lihat->PreferenceWindPowerExpRoleEPCProviderCapacity;
				$PreferenceWindPowerExpRoleFinancingProviderCapacity = $lihat->PreferenceWindPowerExpRoleFinancingProviderCapacity;
				$PreferenceWindPowerExpRoleIPPCapacity = $lihat->PreferenceWindPowerExpRoleIPPCapacity;
				$PreferenceWindPowerExpRoleOMServiceProviderCapacity = $lihat->PreferenceWindPowerExpRoleOMServiceProviderCapacity;
				$PreferenceWindPowerExpRoleTechnologyProviderCapacity = $lihat->PreferenceWindPowerExpRoleTechnologyProviderCapacity;
				$PreferenceWindPowerNotes = $lihat->PreferenceWindPowerNotes;
				$PreferenceWindPowerPartner = $lihat->PreferenceWindPowerPartner;
				$PreferenceWindPowerRoleConsultingServiceProvider = $lihat->PreferenceWindPowerRoleConsultingServiceProvider;
				$PreferenceWindPowerRoleEPCProvider = $lihat->PreferenceWindPowerRoleEPCProvider;
				$PreferenceWindPowerRoleFinancingProvider = $lihat->PreferenceWindPowerRoleFinancingProvider;
				$PreferenceWindPowerRoleIPP = $lihat->PreferenceWindPowerRoleIPP;
				$PreferenceWindPowerRoleOMServiceProvider = $lihat->PreferenceWindPowerRoleOMServiceProvider;
				$PreferenceWindPowerRoleTechnologyProvider = $lihat->PreferenceWindPowerRoleTechnologyProvider;
				$PreferenceOtherCleanCapacity1 = $lihat->PreferenceOtherCleanCapacity1;
				$PreferenceOtherCleanCapacity2 = $lihat->PreferenceOtherCleanCapacity2;
				$PreferenceOtherCleanCapacity3 = $lihat->PreferenceOtherCleanCapacity3;
				$PreferenceOtherCleanCapacity4 = $lihat->PreferenceOtherCleanCapacity4;
				$PreferenceOtherCleanCapacity5 = $lihat->PreferenceOtherCleanCapacity5;
				$PreferenceOtherCleanCapacity6 = $lihat->PreferenceOtherCleanCapacity6;
				$PreferenceOtherCleanExpNotes = $lihat->PreferenceOtherCleanExpNotes;
				$PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity = $lihat->PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity;
				$PreferenceOtherCleanExpRoleEPCProviderCapacity = $lihat->PreferenceOtherCleanExpRoleEPCProviderCapacity;
				$PreferenceOtherCleanExpRoleFinancingProviderCapacity = $lihat->PreferenceOtherCleanExpRoleFinancingProviderCapacity;
				$PreferenceOtherCleanExpRoleIPPCapacity = $lihat->PreferenceOtherCleanExpRoleIPPCapacity;
				$PreferenceOtherCleanExpRoleOMServiceProviderCapacity = $lihat->PreferenceOtherCleanExpRoleOMServiceProviderCapacity;
				$PreferenceOtherCleanExpRoleTechnologyProviderCapacity = $lihat->PreferenceOtherCleanExpRoleTechnologyProviderCapacity;
				$PreferenceOtherCleanNotes = $lihat->PreferenceOtherCleanNotes;
				$PreferenceOtherCleanPartner = $lihat->PreferenceOtherCleanPartner;
				$PreferenceOtherCleanRoleConsultingServiceProvider = $lihat->PreferenceOtherCleanRoleConsultingServiceProvider;
				$PreferenceOtherCleanRoleEPCProvider = $lihat->PreferenceOtherCleanRoleEPCProvider;
				$PreferenceOtherCleanRoleFinancingProvider = $lihat->PreferenceOtherCleanRoleFinancingProvider;
				$PreferenceOtherCleanRoleIPP = $lihat->PreferenceOtherCleanRoleIPP;
				$PreferenceOtherCleanRoleOMServiceProvider = $lihat->PreferenceOtherCleanRoleOMServiceProvider;
				$PreferenceOtherCleanRoleTechnologyProvider = $lihat->PreferenceOtherCleanRoleTechnologyProvider;
				
				$AreaOfInterestHydroelectricPowerPlant = $lihat->AreaOfInterestHydroelectricPowerPlant;
				$AreaOfInterestGeothermalPP = $lihat->AreaOfInterestGeothermalPP;
				$AreaOfInterestSolarPhotovoltaicPP = $lihat->AreaOfInterestSolarPhotovoltaicPP;
				$AreaOfInterestSolarThermalPP = $lihat->AreaOfInterestSolarThermalPP;
				$AreaOfInterestWindPowerPP = $lihat->AreaOfInterestWindPowerPP;
				$AreaOfInterestEnergyStoragePumpedPP = $lihat->AreaOfInterestEnergyStoragePumpedPP;
				$AreaOfInterestSeaEnergyPP = $lihat->AreaOfInterestSeaEnergyPP;
				$AreaOfInterestWastetoEnergyPP = $lihat->AreaOfInterestWastetoEnergyPP;
				$AreaOfInterestNuclearEnergyPP = $lihat->AreaOfInterestNuclearEnergyPP;
				$AreaOfInterestOtherCleanTechnologyPP = $lihat->AreaOfInterestOtherCleanTechnologyPP;	
				
				$ProjectName = $lihat->ProjectName;
				$ProjectLocation = $lihat->ProjectLocation;
				$ProjectType = $lihat->ProjectType;
				$ProjectCapacity = $lihat->ProjectCapacity;
				$ProjectCOD = $lihat->ProjectCOD;
				$ProjectTariff = $lihat->ProjectTariff;
				$ProjectValue = $lihat->ProjectValue;
				$ProjectRoleConsultingServiceProvider = $lihat->ProjectRoleConsultingServiceProvider;
				$ProjectRoleEPCProvider = $lihat->ProjectRoleEPCProvider;
				$ProjectRoleFinancingProvider = $lihat->ProjectRoleFinancingProvider;
				$ProjectRoleIPP = $lihat->ProjectRoleIPP;
				$ProjectRoleOMServiceProvider = $lihat->ProjectRoleOMServiceProvider;
				$ProjectRoleTechnologyProvider = $lihat->ProjectRoleTechnologyProvider;

				}
		   ?>
			<tr rowspan="2">
				<th colspan="8"><i>Participant Information</i></th>
			</tr>
           <tr>
				<!-- Participant Information-->
                <th>Basic Company Code</th>
                <th colspan="2">Basic Company Legal Entity Name</th>
                <th>Basic Company Address</th>
                <th>Basic Company Web Address</th>
                <th>Basic Company Year Established</th>
                <th>Basic Company Country Of Establishment</th>
                <th>Longlist Compatibility Legitimacy</th>
           </tr>
 
           <tr>
				<!-- Participant Information-->	
                <td><?php echo $BasicCompanyCode ; ?></td>
                <td colspan="2"><?php echo $BasicCompanyLegalEntityName; ?></td>
                <td><?php echo $BasicCompayAddress; ?></td>
                <td><?php echo $BasicCompanyWebAddress; ?></td>
                <td><?php echo $BasicCompanyYearEstablished; ?></td>
                <td><?php echo $BasicCompanyCountryOfEstablishment; ?></td>
				<td>
					<?php 
						if($LonglistCompatibilityLegitimacy=="1"){echo "No Information";}
						else if($LonglistCompatibilityLegitimacy=="2"){echo "Individual Company";}
						else if($LonglistCompatibilityLegitimacy=="3"){echo "Private Company";}
						else if($LonglistCompatibilityLegitimacy=="4"){echo "Publicly Listed Company";}
						else if($LonglistCompatibilityLegitimacy=="5"){echo "State Owned Company";}
						else {echo "None";}
					?>
				</td>
           </tr>
				
			<tr>
				<th colspan="8"><b><i>Contact Person 1</i></b></td>
			</tr>
			<tr>
				<th colspan="2">Contact Person 1 Name</th>
                <th colspan="2">Contact Person 1 Position</th>
                <th colspan="2">Contact Person 1 TelephoneNumber</th>
                <th colspan="2">Contact Person 1 EmailAdress</th>
			</tr>
			<tr>
				<!-- Contact Person 1-->
                <td colspan="2"><?php echo $BasicCompanyContactPerson1Name ; ?></td>
                <td colspan="2"><?php echo $BasicCompanyContactPerson1Position; ?></td>
                <td colspan="2"><?php echo $BasicCompanyContactPerson1TelephoneNumber; ?></td>
                <td colspan="2"><?php echo $BasicCompanyContactPerson1EmailAdress; ?></td>
			</tr>	
			<tr>
				<th colspan="8"><b><i>Contact Person 2</i></b></td>
			</tr>
			<tr>				
				<th colspan="2">Contact Person 2 Name</th>
                <th colspan="2">Contact Person 2 Position</th>
                <th colspan="2">Contact Person 2 TelephoneNumber</th>
                <th colspan="2">Contact Person 2 EmailAdress</th>
			</tr>
			<tr>
				<!-- Contact Person 2-->
                <td colspan="2"><?php echo $BasicCompanyContactPerson2Name ; ?></td>
                <td colspan="2"><?php echo $BasicCompanyContactPerson2Position; ?></td>
                <td colspan="2"><?php echo $BasicCompanyContactPerson2TelephoneNumber; ?></td>
                <td colspan="2"><?php echo $BasicCompanyContactPerson2EmailAdress; ?></td>
			</tr>
			
			<tr>
				<th colspan="8"><b><i>Indonesia Representative</i></b></td>
			</tr>
			<tr>				
				<th colspan="2">Company Legal Entity Name InIndonesia</th>
                <th colspan="2">Compay Address In Indonesia</th>
                <th colspan="1">Company Contact Person Indonesia Name</th>
                <th colspan="1">Company Contact Person Indonesia Position</th>
                <th colspan="1">Company Contact Person Indonesia Telephone Number</th>
                <th colspan="1">Company Contact Person Indonesia Email Adress</th>
			</tr>
			<tr>
				<!-- Indonesia Representative-->
                <td colspan="2"><?php echo $BasicCompanyLegalEntityNameInIndonesia ; ?></td>
                <td colspan="2"><?php echo $BasicCompayAddressInIndonesia; ?></td>
                <td colspan="1"><?php echo $BasicCompanyContactPersonIndonesiaName; ?></td>
                <td colspan="1"><?php echo $BasicCompanyContactPersonIndonesiaPosition; ?></td>
                <td colspan="1"><?php echo $BasicCompanyContactPersonIndonesiaTelephoneNumber; ?></td>
                <td colspan="1"><?php echo $BasicCompanyContactPersonIndonesiaEmailAdress; ?></td>
			</tr>
			
			<tr>
				<th colspan="8"><b><i>Financial Criteria</i></b></td>
			</tr>
			<tr>				
				<!-- Financial Criteria -->
                <th colspan="2">Longlist Capital Total Asset</th>
                <th colspan="2">Longlist Capital Credit Rating</th>
                <th colspan="2">Longlist Capital EBITDA</th>
                <th colspan="2">Longlist Capital DSCR</th>
			</tr>
			<tr>
					<!-- Financial Criteria-->			
                <td colspan="2">
					<?php 
						if($LonglistCapitalTotalAsset=="1"){echo "USD 0 - 1 Billion";}
						else if($LonglistCapitalTotalAsset=="2"){echo "USD 1 - 2.5 Billion";}
						else if($LonglistCapitalTotalAsset=="3"){echo "USD 2.5 - 5 Billion";}
						else if($LonglistCapitalTotalAsset=="4"){echo "USD 5 - 10 Billion";}
						else if($LonglistCapitalTotalAsset=="5"){echo "USD 10 Billion";}
						else {echo "None";}
					?>
				</td>
                <td colspan="2">
					<?php 
						if($LonglistCapitalCreditRating=="1"){echo "DnB Rating 1A4 - 1A4 or equal";}
						else if($LonglistCapitalCreditRating=="2"){echo "DnB Rating 2A4 - 2A1 or equal";}
						else if($LonglistCapitalCreditRating=="3"){echo "DnB Rating 3A4 - 3A1 or equal";}
						else if($LonglistCapitalCreditRating=="4"){echo "DnB Rating 4A4 - 4A1 or equal";}
						else if($LonglistCapitalCreditRating=="5"){echo "DnB Rating 5A4 - 5A1 or equal";}
						else {echo "None";}

					?>
				</td>
                <td colspan="2">
					<?php 
						if($LonglistCapitalEBITDA=="1"){echo "< USD 10 Million";}
						else if($LonglistCapitalEBITDA=="2"){echo "USD 10 - 25 Million";}
						else if($LonglistCapitalEBITDA=="3"){echo "USD 25 - 50 Million";}
						else if($LonglistCapitalEBITDA=="4"){echo "USD 50 - 100 Million";}
						else if($LonglistCapitalEBITDA=="5"){echo "USD 100 Million";}
						else {echo "None";}

					?>
				</td>
                <td colspan="2"><?php echo $LonglistCapitalDSCR ; ?></td>
			</tr>			
			
			<!-- Area Of Interest Hydroelectric PowerPlant -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest Hydroelectric PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestHydroelectricPowerPlant ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceHydroelectricCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceHydroelectricCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceHydroelectricCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceHydroelectricRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceHydroelectricRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceHydroelectricRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceHydroelectricNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceHydroelectricExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceHydroelectricExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceHydroelectricExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceHydroelectricExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceHydroelectricExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			<!-- Area Of Interest Geothermal PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest Geothermal PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestGeothermalPP ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceGeothermalCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceGeothermalCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceGeothermalCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceGeothermalRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceGeothermalRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceGeothermalRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceGeothermalNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceGeothermalExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceGeothermalExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceGeothermalExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceGeothermalExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceGeothermalExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			<!-- Area Of Interest Solar Photovoltaic PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest SolarPhotovoltaic PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestSolarPhotovoltaicPP ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSolarPhotovoltaicCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarPhotovoltaicCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarPhotovoltaicCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSolarPhotovoltaicRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarPhotovoltaicRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarPhotovoltaicRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceSolarPhotovoltaicNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSolarPhotovoltaicExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceSolarPhotovoltaicExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
		   <!-- Area Of Interest Solar Thermal PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest SolarThermal PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestSolarThermalPP; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSolarThermalCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarThermalCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarThermalCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSolarThermalRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarThermalRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarThermalRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceSolarThermalNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSolarThermalExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarThermalExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceSolarThermalExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSolarThermalExpRoleOMServiceProviderCapacity ; ?></td>	
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceSolarThermalExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			<!-- Area Of Interest Wind Power PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest WindPower PP</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestWindPowerPP ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceWindPowerCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceWindPowerCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceWindPowerCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceWindPowerRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceWindPowerRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceWindPowerRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceWindPowerNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceWindPowerExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceWindPowerExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceWindPowerExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceWindPowerExpRoleOMServiceProviderCapacity ; ?></td>	
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceWindPowerExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			<!-- Area Of Interest Energy Storage Pumped PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest Energy Storage PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestEnergyStoragePumpedPP; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceEnergyStorageCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceEnergyStorageCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceEnergyStorageCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceEnergyStorageRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceEnergyStorageRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceEnergyStorageRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceEnergyStorageNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceEnergyStorageExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceEnergyStorageExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceEnergyStorageExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceEnergyStorageExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceEnergyStorageExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			
			<!-- Area Of Interest Sea Energy PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest SeaEnergy PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestSeaEnergyPP; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSeaEnergyCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceSeaEnergyCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceSeaEnergyCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSeaEnergyRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceSeaEnergyRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceSeaEnergyRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceSeaEnergyNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceSeaEnergyExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceSeaEnergyExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceSeaEnergyExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceSeaEnergyExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceSeaEnergyExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			
			<!-- Area Of Interest Waste to Energy PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest WasteToEnergy PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestWastetoEnergyPP; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceWasteToEnergyCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceWasteToEnergyCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceWasteToEnergyCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceWasteToEnergyRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceWasteToEnergyRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceWasteToEnergyRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceWasteToEnergyNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceWasteToEnergyExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceWasteToEnergyExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceWasteToEnergyExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceWasteToEnergyExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			
			<!-- Area Of Interest Nuclear Energy PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest Nuclear PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestNuclearEnergyPP ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceNuclearCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceNuclearCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceNuclearCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceNuclearRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceNuclearRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceNuclearRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceNuclearNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceNuclearExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceNuclearExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceNuclearExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceNuclearExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceNuclearExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			
			<!-- Area Of Interest Other Clean Technology PP -->
			<tr>
				<th colspan="8"><b><i>Area Of Interest OtherClean PowerPlant</i></b></td>
			</tr>
			<tr>
				 <td colspan="8" align="center"><?php echo $AreaOfInterestOtherCleanTechnologyPP ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Capacity</i></b></td>
			</tr>
			<tr>
				<th colspan="1">< 1 MW</th>
                <th colspan="1">1 - 10 MW </th>
                <th colspan="1">11 - 50 MW</th>
                <th colspan="2">51 - 100 MW</th>
                <th colspan="2">101 - 500 MW</th>
                <th colspan="1">> 501 MW </th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceOtherCleanCapacity1 ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanCapacity2 ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanCapacity3 ; ?></td>
                <td colspan="2"><?php echo $PreferenceOtherCleanCapacity4 ; ?></td>
                <td colspan="2"><?php echo $PreferenceOtherCleanCapacity5 ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanCapacity6 ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Preferred Role</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceOtherCleanRoleIPP ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanRoleTechnologyProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanRoleConsultingServiceProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceOtherCleanRoleFinancingProvider ; ?></td>
                <td colspan="2"><?php echo $PreferenceOtherCleanRoleEPCProvider ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanRoleOMServiceProvider ; ?></td>
			</tr>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Preference</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceOtherCleanNotes ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Roles Experiences</i></b></td>
			</tr>
			<tr>
				<th colspan="1">IPP / Equity Provider</th>
                <th colspan="1">Technology Provider</th>
                <th colspan="1">Consulting Provider </th>
                <th colspan="2">Financing Provider</th>
                <th colspan="2">EPC Service Provider</th>
                <th colspan="1">O&M Service Provider</th>
			</tr>
			<tr>
				<td colspan="1"><?php echo $PreferenceOtherCleanExpRoleIPPCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanExpRoleTechnologyProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceOtherCleanExpRoleFinancingProviderCapacity ; ?></td>
                <td colspan="2"><?php echo $PreferenceOtherCleanExpRoleEPCProviderCapacity ; ?></td>
                <td colspan="1"><?php echo $PreferenceOtherCleanExpRoleOMServiceProviderCapacity ; ?></td>
			</tr>
			<tr>
				<th colspan="8"><b><i>Notes Experiences</i></b></td>
			</tr>
			<tr>
				<td colspan="8"><?php echo $PreferenceOtherCleanExpNotes ; ?></td>
			</tr>
			<tr>
				 <th colspan="8" align="center">--------------------------------------------------------</th>
			</tr>
			
		 	<tr>
				<th colspan="8"><b><i>Project Experience</i></b></td>
			</tr>
			<tr>
				<th><i>Project Name</i></th>
				<th><i>Location</i></th>
				<th><i>Type</i></th>
				<th><i>Capacity (MW)</i></th>
				<th><i>Year COD</i></th>
				<th><i>Tariff (USD cent / kWh)</i></th>
				<th><i>Value (USD)</i></th>
				<th><i>Roles</i></th>
			</tr>
			
				<?php
										$ProjectName =  json_decode(json_encode(json_decode($ProjectName)), True);
										$ProjectLocation = json_decode(json_encode(json_decode($ProjectLocation)), True);
										$ProjectType = json_decode(json_encode(json_decode($ProjectType)), True);
										$ProjectCapacity = json_decode(json_encode(json_decode($ProjectCapacity)), True);
										$ProjectCOD = json_decode(json_encode(json_decode($ProjectCOD)), True);
										$ProjectTariff = json_decode(json_encode(json_decode($ProjectTariff)), True);
										$ProjectValue =  json_decode(json_encode(json_decode($ProjectValue)), True);
										$ProjectRoleIPP =  json_decode(json_encode(json_decode($ProjectRoleIPP)), True);
										$ProjectRoleFinancingProvider = json_decode(json_encode(json_decode($ProjectRoleFinancingProvider)), True);
										$ProjectRoleTechnologyProvider = json_decode(json_encode(json_decode($ProjectRoleTechnologyProvider)), True);
										$ProjectRoleEPCProvider = json_decode(json_encode(json_decode($ProjectRoleEPCProvider)), True);
										$ProjectRoleConsultingServiceProvider =  json_decode(json_encode(json_decode($ProjectRoleConsultingServiceProvider)), True);
										$ProjectRoleOMServiceProvider =  json_decode(json_encode(json_decode($ProjectRoleOMServiceProvider)), True);
										$arrlength = count($ProjectName);
										
										for($x = 0; $x < $arrlength; $x++) { 		
																				
										?>
										
										<tr>
										  <td><?php echo htmlentities($ProjectName[$x]); ?></td>
										  <td><?php echo htmlentities($ProjectLocation[$x]); ?></td>
										  <td><?php echo htmlentities($ProjectType[$x]); ?></td>
										  <td><?php echo htmlentities($ProjectCapacity[$x]); ?></td>
										  <td><?php echo htmlentities($ProjectCOD[$x]); ?></td>
										  <td><?php echo htmlentities($ProjectTariff[$x]); ?></td>
										  <td><?php echo htmlentities($ProjectValue[$x]); ?></td>
										  <td>
												<div class="checkbox">
													<label>
													  <input type="checkbox" name="ProjectRoleIPP[<?php echo $x?>]" value="TRUE"  <?php if($ProjectRoleIPP[$x]==="TRUE"){echo "checked";}?> disabled /> 
													  IPP / Equity Provider 
													</label>
												</div>
												<div class="checkbox">
													<label>
													  <input type="checkbox" name="ProjectRoleFinancingProvider[<?php echo $x?>]" value="TRUE"  <?php if($ProjectRoleFinancingProvider[$x]==="TRUE"){echo "checked";}?> disabled />
													  Financing Provider    
													</label>
												</div>
													<div class="checkbox">
													<label>
													  <input type="checkbox" name="ProjectRoleTechnologyProvider[<?php echo $x?>]" value="TRUE" <?php if($ProjectRoleTechnologyProvider[$x]==="TRUE"){echo "checked";}?> disabled />
													  Technology Provider     
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="ProjectRoleEPCProvider[<?php echo $x?>]" value="TRUE" <?php if($ProjectRoleEPCProvider[$x]==="TRUE"){echo "checked";}?> disabled />
													EPC Service Provider    
													</label>
												</div>
												<div class="checkbox">
													<label>
													 <input type="checkbox" name="ProjectRoleConsultingServiceProvider[<?php echo $x?>]" value="TRUE" <?php if($ProjectRoleConsultingServiceProvider[$x]==="TRUE"){echo "checked";}?> disabled />
													 Consulting Provider       
													</label>
												</div>
												<div class="checkbox">
													<label>
													 <input type="checkbox" name="ProjectRoleOMServiceProvider[<?php echo $x?>]" value="TRUE"  <?php if($ProjectRoleOMServiceProvider[$x]==="TRUE"){echo "checked";}?> disabled />
													 O&M Service Provider    
													</label>
												</div>
								</td>
								</td>
										 
										</tr>
										<?php }?>
		   
      </tbody>
 
 </table>