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
	 tr:nth-of-type(odd) {
      background-color: #cccccc;
    }
    </style>
 <table border="1" width="100%">
 
      <thead>
			<tr>
				<th align="left" colspan="216"><h1><b><i>EOI REPORT - REKAPITULASI PREFERENSI PESERTA </i></b></h1></td>
			</tr>
			<tr>
				<th align="left" colspan="216"><b><i><?php echo "Print Date: ". date("d-m-Y H:i:s");?></i></b></td>
			</tr>
			<tr >
				<th rowspan="2"><i>No</i></th>
				<th rowspan="2"><i>Basic Company Legal Entity Name</i></th>
				<th colspan="4"><i>Financial Criteria</i></th>
				<th colspan="21"><i>Area Of Interset Hydroelectric PP</i></th>
				<th colspan="21"><i>Area Of Interest Geothermal PP</i></th>
				<th colspan="21"><i>Area Of Interest Solar Photovoltaic PP </i></th>
				<th colspan="21"><i>Area Of Interest Solar Thermal lPP</i></th>
				<th colspan="21"><i>Area Of Interest Wind Power PP</i></th>
				<th colspan="21"><i>Area Of Interest Energy Storage Pumped PP</i></th>
				<th colspan="21"><i>Area Of Interest Sea Energy PP</i></th>
				<th colspan="21"><i>Area Of Interest Waste to Energy PP</i></th>
				<th colspan="21"><i>Area Of Interest Nuclear Energy PP</i></th>
				<th colspan="21"><i>Area Of Interest Other Clean Technology PP</i></th>
			</tr>
           <tr>
				<!-- Participant Information-->				
				<!-- Financial Criteria -->
                <th>Longlist Capital Total Asset</th>
                <th>Longlist Capital Credit Rating</th>
                <th>Longlist Capital EBITDA</th>
                <th>Longlist Capital DSCR</th>
				
				<!-- Area Of Interset Hydroelectric PP -->
				<th>Area Of Interest Hydroelectric PowerPlant</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider</th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider</th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider</th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider(MW)</th>
                <th>EPC Service Provider </th>
                <th>O&M Service Provider</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Geothermal PP -->
				<th>Area Of Interest Area Of Interest Geothermal PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider </th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider </th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider(MW)</th>
                <th>EPC Service Provider (MW)</th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Solar Photovoltaic PP -->
				<th>Area Of Interest Area Of Interest Solar Photovoltaic PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider </th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider </th>
                <th>EPC Service Provider </th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider(MW)</th>
                <th>EPC Service Provider </th>
                <th>O&M Service Provider</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Solar Thermal PP -->
				<th>Area Of Interest Area Of Interest Solar Thermal PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider </th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider</th>
                <th>EPC Service Provider </th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider</th>
                <th>Financing Provider(MW)</th>
                <th>EPC Service Provider (MW)</th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Wind Power PP -->
				<th>Area Of Interest Area Of Interest Wind Power PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider </th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider</th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider</th>
                <th>Financing Provider(MW)</th>
                <th>EPC Service Provider (MW)</th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Energy Storage Pumped PP -->
				<th>Area Of Interest Area Of Interest Energy Storage Pumped PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider</th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider</th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider</th>
                <th>Financing Provider (MW)</th>
                <th>EPC Service Provider (MW) </th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Energy Sea Energy PP -->
				<th>Area Of Interest Area Of Interest Energy Sea Energy PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider </th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider</th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider</th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider (MW)</th>
                <th>EPC Service Provider (MW)</th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Waste to Energy PP -->
				<th>Area Of Interest Area Of Interest Waste to Energy PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider</th>
                <th>Technology Provider</th>
                <th>Consulting Provider </th>
                <th>Financing Provider </th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider</th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider (MW)</th>
                <th>EPC Service Provider (MW)</th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Nuclear Energy PP -->
				<th>Area Of Interest Area Of Interest Nuclear Energy PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider </th>
                <th>Technology Provider </th>
                <th>Consulting Provider </th>
                <th>Financing Provider </th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider (MW)</th>
                <th>EPC Service Provider </th>
                <th>O&M Service Provider</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
				
				<!-- Area Of Interset Area Of Interest Other Clean Technology PP -->
				<th>Area Of Interest Area Of Interest Other Clean Technology PP</th>
                <th>< 1 MW</th>
                <th>1 - 10 MW </th>
                <th>11 - 50 MW</th>
                <th>51 - 100 MW</th>
                <th>101 - 500 MW</th>
                <th>> 501 MW </th>
				<!--Preferred Role-->
				<th>IPP / Equity Provider</th>
                <th>Technology Provider</th>
                <th>Consulting Provider</th>
                <th>Financing Provider</th>
                <th>EPC Service Provider</th>
                <th>O&M Service Provider </th>
				<!--Notes Preference-->
				<th>Notes Preference</th>
				<!--Roles Experiences-->
				<th>IPP / Equity Provider (MW)</th>
                <th>Consulting Provider (MW)</th>
                <th>Technology Provider (MW)</th>
                <th>Financing Provider (MW)</th>
                <th>EPC Service Provider (MW) </th>
                <th>O&M Service Provider (MW)</th>
				<!--Notes Experience-->
				<th>Notes Experiences</th>
	
           </tr>
 
      </thead>
 
      <tbody>
           <?php $i=1;foreach ($data->result_object() as $lihat) { 
				 $BasicCompanyLegalEntityName=$lihat->BasicCompanyLegalEntityName;
				 
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
				
		   ?>
 
           <tr>
				<!-- Participant Information-->
				<td><?php echo $i; ?> </td>
                <td><?php echo $BasicCompanyLegalEntityName; ?></td>
				<!-- Financial Criteria-->			
                <td>
					<?php 
						if($LonglistCapitalTotalAsset=="1"){echo "USD 0 - 1 Billion";}
						else if($LonglistCapitalTotalAsset=="2"){echo "USD 1 - 2.5 Billion";}
						else if($LonglistCapitalTotalAsset=="3"){echo "USD 2.5 - 5 Billion";}
						else if($LonglistCapitalTotalAsset=="4"){echo "USD 5 - 10 Billion";}
						else if($LonglistCapitalTotalAsset=="5"){echo "USD 10 Billion";}
						else {echo "None";}
					?>
				</td>
                <td>
					<?php 
						if($LonglistCapitalCreditRating=="1"){echo "DnB Rating 1A4 - 1A4 or equal";}
						else if($LonglistCapitalCreditRating=="2"){echo "DnB Rating 2A4 - 2A1 or equal";}
						else if($LonglistCapitalCreditRating=="3"){echo "DnB Rating 3A4 - 3A1 or equal";}
						else if($LonglistCapitalCreditRating=="4"){echo "DnB Rating 4A4 - 4A1 or equal";}
						else if($LonglistCapitalCreditRating=="5"){echo "DnB Rating 5A4 - 5A1 or equal";}
						else {echo "None";}

					?>
				</td>
                <td>
					<?php 
						if($LonglistCapitalEBITDA=="1"){echo "< USD 10 Million";}
						else if($LonglistCapitalEBITDA=="2"){echo "USD 10 - 25 Million";}
						else if($LonglistCapitalEBITDA=="3"){echo "USD 25 - 50 Million";}
						else if($LonglistCapitalEBITDA=="4"){echo "USD 50 - 100 Million";}
						else if($LonglistCapitalEBITDA=="5"){echo "USD 100 Million";}
						else {echo "None";}

					?>
				</td>
                <td><?php echo $LonglistCapitalDSCR ; ?></td>
				
				<!-- Area Of Interset Hydroelectric PP -->
                <td><?php echo $AreaOfInterestHydroelectricPowerPlant ; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceHydroelectricCapacity1 ; ?></td>
                <td><?php echo $PreferenceHydroelectricCapacity2 ; ?></td>
                <td><?php echo $PreferenceHydroelectricCapacity3 ; ?></td>
                <td><?php echo $PreferenceHydroelectricCapacity4 ; ?></td>
                <td><?php echo $PreferenceHydroelectricCapacity5 ; ?></td>
                <td><?php echo $PreferenceHydroelectricCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceHydroelectricRoleIPP ; ?></td>
                <td><?php echo $PreferenceHydroelectricRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceHydroelectricRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceHydroelectricRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceHydroelectricRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceHydroelectricRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceHydroelectricNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceHydroelectricExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceHydroelectricExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceHydroelectricExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceHydroelectricExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceHydroelectricExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceHydroelectricExpNotes ; ?></td>
				
				<!-- Area Of Interset Geothermal Power Plant (PP) -->
                <td><?php echo $AreaOfInterestGeothermalPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceGeothermalCapacity1 ; ?></td>
                <td><?php echo $PreferenceGeothermalCapacity2 ; ?></td>
                <td><?php echo $PreferenceGeothermalCapacity3 ; ?></td>
                <td><?php echo $PreferenceGeothermalCapacity4 ; ?></td>
                <td><?php echo $PreferenceGeothermalCapacity5 ; ?></td>
                <td><?php echo $PreferenceGeothermalCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceGeothermalRoleIPP ; ?></td>
                <td><?php echo $PreferenceGeothermalRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceGeothermalRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceGeothermalRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceGeothermalRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceGeothermalRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceGeothermalNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceGeothermalExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceGeothermalExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceGeothermalExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceGeothermalExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceGeothermalExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceGeothermalExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceGeothermalExpNotes ; ?></td>
				
				<!-- Area Of Interset Solar Photovolitaic Power Plant (PP) -->
                <td><?php echo $AreaOfInterestSolarPhotovoltaicPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceSolarPhotovoltaicCapacity1 ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicCapacity2 ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicCapacity3 ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicCapacity4 ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicCapacity5 ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceSolarPhotovoltaicRoleIPP ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceSolarPhotovoltaicNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceSolarPhotovoltaicExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceSolarPhotovoltaicExpNotes ; ?></td>
				
				<!-- Area Of Interset Solar Thermal Power Plant (PP) -->
                <td><?php echo $AreaOfInterestSolarThermalPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceSolarThermalCapacity1 ; ?></td>
                <td><?php echo $PreferenceSolarThermalCapacity2 ; ?></td>
                <td><?php echo $PreferenceSolarThermalCapacity3 ; ?></td>
                <td><?php echo $PreferenceSolarThermalCapacity4 ; ?></td>
                <td><?php echo $PreferenceSolarThermalCapacity5 ; ?></td>
                <td><?php echo $PreferenceSolarThermalCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceSolarThermalRoleIPP ; ?></td>
                <td><?php echo $PreferenceSolarThermalRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceSolarThermalRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceSolarThermalRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceSolarThermalRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceSolarThermalRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceSolarThermalNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceSolarThermalExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarThermalExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarThermalExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarThermalExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSolarThermalExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceSolarThermalExpNotes ; ?></td>
				
				<!-- Area Of Interset Wind Power Plant (PP) -->
                <td><?php echo $AreaOfInterestWindPowerPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceWindPowerCapacity1 ; ?></td>
                <td><?php echo $PreferenceWindPowerCapacity2 ; ?></td>
                <td><?php echo $PreferenceWindPowerCapacity3 ; ?></td>
                <td><?php echo $PreferenceWindPowerCapacity4 ; ?></td>
                <td><?php echo $PreferenceWindPowerCapacity5 ; ?></td>
                <td><?php echo $PreferenceWindPowerCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceWindPowerRoleIPP ; ?></td>
                <td><?php echo $PreferenceWindPowerRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceWindPowerRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceWindPowerRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceWindPowerRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceWindPowerRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceWindPowerNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceWindPowerExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceWindPowerExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWindPowerExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWindPowerExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWindPowerExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWindPowerExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceWindPowerExpNotes ; ?></td>
				
				<!-- Area Of Interset Energy Storage Pumped Power Plant (PP) -->
                <td><?php echo $AreaOfInterestEnergyStoragePumpedPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceEnergyStorageCapacity1 ; ?></td>
                <td><?php echo $PreferenceEnergyStorageCapacity2 ; ?></td>
                <td><?php echo $PreferenceEnergyStorageCapacity3 ; ?></td>
                <td><?php echo $PreferenceEnergyStorageCapacity4 ; ?></td>
                <td><?php echo $PreferenceEnergyStorageCapacity5 ; ?></td>
                <td><?php echo $PreferenceEnergyStorageCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceEnergyStorageRoleIPP ; ?></td>
                <td><?php echo $PreferenceEnergyStorageRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceEnergyStorageRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceEnergyStorageRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceEnergyStorageRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceEnergyStorageRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceEnergyStorageNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceEnergyStorageExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceEnergyStorageExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceEnergyStorageExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceEnergyStorageExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceEnergyStorageExpRoleOMServiceProviderCapacity ; ?></td>		
				<!--Notes Experience-->
				<td><?php echo $PreferenceEnergyStorageExpNotes ; ?></td>				

				<!-- Area Of Interset Sea Energy Power Plant (PP) -->
                <td><?php echo $AreaOfInterestSeaEnergyPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceSeaEnergyCapacity1 ; ?></td>
                <td><?php echo $PreferenceSeaEnergyCapacity2 ; ?></td>
                <td><?php echo $PreferenceSeaEnergyCapacity3 ; ?></td>
                <td><?php echo $PreferenceSeaEnergyCapacity4 ; ?></td>
                <td><?php echo $PreferenceSeaEnergyCapacity5 ; ?></td>
                <td><?php echo $PreferenceSeaEnergyCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceSeaEnergyRoleIPP ; ?></td>
                <td><?php echo $PreferenceSeaEnergyRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceSeaEnergyRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceSeaEnergyRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceSeaEnergyRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceSeaEnergyRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceSeaEnergyNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceSeaEnergyExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSeaEnergyExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSeaEnergyExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSeaEnergyExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceSeaEnergyExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceSeaEnergyExpNotes ; ?></td>

				<!-- Area Of Interset Waste to Energy Power Plant (PP) -->
                <td><?php echo $AreaOfInterestWastetoEnergyPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceWasteToEnergyCapacity1 ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyCapacity2 ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyCapacity3 ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyCapacity4 ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyCapacity5 ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceWasteToEnergyRoleIPP ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceWasteToEnergyNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceWasteToEnergyExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceWasteToEnergyExpNotes ; ?></td>
				
				<!-- Area Of Interset Nuclear Energy Power Plant (PP) -->
                <td><?php echo $AreaOfInterestNuclearEnergyPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceNuclearCapacity1 ; ?></td>
                <td><?php echo $PreferenceNuclearCapacity2 ; ?></td>
                <td><?php echo $PreferenceNuclearCapacity3 ; ?></td>
                <td><?php echo $PreferenceNuclearCapacity4 ; ?></td>
                <td><?php echo $PreferenceNuclearCapacity5 ; ?></td>
                <td><?php echo $PreferenceNuclearCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceNuclearRoleIPP ; ?></td>
                <td><?php echo $PreferenceNuclearRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceNuclearRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceNuclearRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceNuclearRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceNuclearRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceNuclearNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceNuclearExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceNuclearExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceNuclearExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceNuclearExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceNuclearExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceNuclearExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceNuclearExpNotes ; ?></td>

				<!-- Area Of Interset Other Clean Energy Power Plant (PP) -->
                <td><?php echo $AreaOfInterestOtherCleanTechnologyPP; ?></td>
				<!-- Preferred Capacity -->
                <td><?php echo $PreferenceOtherCleanCapacity1 ; ?></td>
                <td><?php echo $PreferenceOtherCleanCapacity2 ; ?></td>
                <td><?php echo $PreferenceOtherCleanCapacity3 ; ?></td>
                <td><?php echo $PreferenceOtherCleanCapacity4 ; ?></td>
                <td><?php echo $PreferenceOtherCleanCapacity5 ; ?></td>
                <td><?php echo $PreferenceOtherCleanCapacity6 ; ?></td>
				<!--Preferred Role-->
                <td><?php echo $PreferenceOtherCleanRoleIPP ; ?></td>
                <td><?php echo $PreferenceOtherCleanRoleTechnologyProvider ; ?></td>
                <td><?php echo $PreferenceOtherCleanRoleConsultingServiceProvider ; ?></td>
                <td><?php echo $PreferenceOtherCleanRoleFinancingProvider ; ?></td>
                <td><?php echo $PreferenceOtherCleanRoleEPCProvider ; ?></td>
                <td><?php echo $PreferenceOtherCleanRoleOMServiceProvider ; ?></td>
				<!--Notes Preference-->
				<td><?php echo $PreferenceOtherCleanNotes ; ?></td>
				<!--Roles Experiences-->
                <td><?php echo $PreferenceOtherCleanExpRoleIPPCapacity ; ?></td>
                <td><?php echo $PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity ; ?></td>
                <td><?php echo $PreferenceOtherCleanExpRoleTechnologyProviderCapacity ; ?></td>
                <td><?php echo $PreferenceOtherCleanExpRoleFinancingProviderCapacity ; ?></td>
                <td><?php echo $PreferenceOtherCleanExpRoleEPCProviderCapacity ; ?></td>
                <td><?php echo $PreferenceOtherCleanExpRoleOMServiceProviderCapacity ; ?></td>
				<!--Notes Experience-->
				<td><?php echo $PreferenceOtherCleanExpNotes ; ?></td>
				
				
				
           </tr>
           <?php $i++; } ?>
      </tbody>
 
 </table>