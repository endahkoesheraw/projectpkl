<?php error_reporting(0); ?>
	
	<script>
		function CoalFiredFunction() {
		  var checkBox = document.getElementById("CoalFired");
		  var CoalFiredForm = document.getElementById("CoalFiredForm");
		  if (checkBox.checked == true){
			CoalFiredForm.style.display = "block";
		  } else {
			CoalFiredForm.style.display = "none";
		  }
		}
		
		function MineMouthFunction() {
		  var checkBox = document.getElementById("MineMouth");
		  var MineMouthForm = document.getElementById("MineMouthForm");
		  if (checkBox.checked == true){
			MineMouthForm.style.display = "block";
		  } else {
			MineMouthForm.style.display = "none";
		  }
		}
		
		function GasFiredCombinedCycleFunction() {
		  var checkBox = document.getElementById("GasFiredCombinedCycle");
		  var SolarPhotovoltaicForm = document.getElementById("GasFiredCombinedCycleForm");
		  if (checkBox.checked == true){
				GasFiredCombinedCycleForm.style.display = "block";
		  } else {
				GasFiredCombinedCycleForm.style.display = "none";
		  }
		}
		
		function WasteToEnergyFunction() {
		  var checkBox = document.getElementById("WasteToEnergy");
		  var WasteToEnergyForm = document.getElementById("WasteToEnergyForm");
		  if (checkBox.checked == true){
				WasteToEnergyForm.style.display = "block";
		  } else {
				WasteToEnergyForm.style.display = "none";
		  }
		}
		
		function DieselPowerFunction() {
		  var checkBox = document.getElementById("DieselPower");
		  var DieselPowerForm = document.getElementById("DieselPowerForm");
		  if (checkBox.checked == true){
				DieselPowerForm.style.display = "block";
		  } else {
				DieselPowerForm.style.display = "none";
		  }
		}
		
		function BiomassBiogasBiofulFunction() {
		  var checkBox = document.getElementById("BiomassBiogasBioful");
		  var BiomassBiogasBiofulForm = document.getElementById("BiomassBiogasBiofulForm");
		  if (checkBox.checked == true){
				BiomassBiogasBiofulForm.style.display = "block";
		  } else {
				BiomassBiogasBiofulForm.style.display = "none";
		  }
		}
		
		function NuclearEnergyFunction() {
		  var checkBox = document.getElementById("NuclearEnergy");
		  var SeaEnergyForm = document.getElementById("NuclearEnergyForm");
		  if (checkBox.checked == true){
				NuclearEnergyForm.style.display = "block";
		  } else {
				NuclearEnergyForm.style.display = "none";
		  }
		}
		
		function CoalGasificationCombinedCycleFunction() {
		  var checkBox = document.getElementById("CoalGasificationCombinedCycle");
		  var CoalGasificationCombinedCycleForm = document.getElementById("CoalGasificationCombinedCycleForm");
		  if (checkBox.checked == true){
				CoalGasificationCombinedCycleForm.style.display = "block";
		  } else {
				CoalGasificationCombinedCycleForm.style.display = "none";
		  }
		}
		
		function OthersFunction() {
		  var checkBox = document.getElementById("Others");
		  var OthersForm = document.getElementById("OthersForm");
		  if (checkBox.checked == true){
				OthersForm.style.display = "block";
		  } else {
				OthersForm.style.display = "none";
		  }
		}
	</script>
	
	<script> 
	$(function() { 

		var bar = $('.bar');
		var percent = $('.percent');
		var status = $('#status');
		var submit = $('#submit');

		$('form').ajaxForm({
			beforeSend: function() {
				status.empty();
				var percentVal = '0%';
				bar.width(percentVal);
				submit.prop('disabled', true);
				submit.html('Please Wait ...')
				percent.html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				bar.width(percentVal);
				percent.html(percentVal);
			},
			complete: function(xhr) {
				//submit.prop('disabled', false);
				status.html(xhr.responseText);
				setTimeout(function(){location.reload()}, 3000);
			}
		});
	}); 
	</script>


	<style>
	#table-mod{
    border-collapse:collapse;
	}
	#td-mod{
		position:relative;
		width:11%;
		padding: 1px;
	}
	#input-mod{
		position:absolute;
		background-color: transparent;
		border: 0px solid;
		height:100%;
	}
	</style>
	
	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
				Create & Update EoI Submission
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-book"></i> Create & Update EoI Submission</a></li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
			
		<div class="row">
        <div class="col-md-12">	
           <div class="box box-info">
			<div class="box-header with-border">
                <h3 class="box-title">EoI Submission Application Form IPP</h3>
				<br>  <small><i>Kindly fill out the form below to express your interest in participating in the prequalification process </i></small></br>
              </div>
			  
			  
			  <div class="box-header with-border">
					<button class="btn btn-warning ?>" onclick="goBack()"><i class="fa fa-undo"></i> Go Back</button>
              </div>


              <div class="box-body">
			  
			<!--Contact Person 1-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Participant Information</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
			</div>
			 <?php  
				
				foreach ($data->result_object() as $lihat)
				{
				$uid = $lihat->UId;
				$BasicCompanyCode = $lihat->BasicCompanyCode;
				$BasicCompanyCountryOfEstablishment = $lihat->BasicCompanyCountryOfEstablishment;
				$BasicCompanyLegalEntityName = $lihat->BasicCompanyLegalEntityName;
				$BasicCompayAddress = $lihat->BasicCompayAddress;
				$BasicCompanyYearEstablished = $lihat->BasicCompanyYearEstablished;
				$BasicCompanyWebAddress = $lihat->BasicCompanyWebAddress;
				$BasicCompanyLegalEntityNameInIndonesia = $lihat->BasicCompanyLegalEntityNameInIndonesia;
				$BasicCompayAddressInIndonesia = $lihat->BasicCompayAddressInIndonesia;
				$BasicCompanyContactPerson1Name = $lihat->BasicCompanyContactPerson1Name;
				$BasicCompanyContactPerson1Position = $lihat->BasicCompanyContactPerson1Position;
				$BasicCompanyContactPerson1TelephoneNumber = $lihat->BasicCompanyContactPerson1TelephoneNumber;
				$BasicCompanyContactPerson1EmailAdress = $lihat->BasicCompanyContactPerson1EmailAdress;
				$BasicCompanyContactPerson2Name = $lihat->BasicCompanyContactPerson2Name;
				$BasicCompanyContactPerson2Position = $lihat->BasicCompanyContactPerson2Position;
				$BasicCompanyContactPerson2TelephoneNumber = $lihat->BasicCompanyContactPerson2TelephoneNumber;
				$BasicCompanyContactPerson2EmailAdress = $lihat->BasicCompanyContactPerson2EmailAdress;
				$BasicCompanyContactPersonIndonesiaName = $lihat->BasicCompanyContactPersonIndonesiaName;
				$BasicCompanyContactPersonIndonesiaPosition = $lihat->BasicCompanyContactPersonIndonesiaPosition;
				$BasicCompanyContactPersonIndonesiaTelephoneNumber = $lihat->BasicCompanyContactPersonIndonesiaTelephoneNumber;
				$BasicCompanyContactPersonIndonesiaEmailAdress = $lihat->BasicCompanyContactPersonIndonesiaEmailAdress;

				$LonglistCapitalCreditRating = $lihat->LonglistCapitalCreditRating;
				$LonglistCapitalEBITDA = $lihat->LonglistCapitalEBITDA;
				$LonglistCapitalDSCR = $lihat->LonglistCapitalDSCR;
				$LonglistCapitalTotalAsset = $lihat->LonglistCapitalTotalAsset;
				$LonglistCompatibilityLegitimacy = $lihat->LonglistCompatibilityLegitimacy;

				$UploadCompanyProfile = $lihat->UploadCompanyProfile;
				$UploadSignedEOI = $lihat->UploadSignedEOI;
				$UploadFinancialStatement = $lihat->UploadFinancialStatement;
				$PreferenceCoalFiredRoleInvestor 							= $lihat ->PrefenrenceCoalFiredRoleInvestor;
				$PreferenceCoalFiredRoleEPC 									= $lihat ->PrefenrenceCoalFiredRoleEPC;
				$PreferenceCoalFiredRoleLender 												= $lihat ->PreferenceCoalFiredRoleLender;
				$PreferenceCoalFiredRoleManufacturer 					= $lihat ->PreferenceCoalFiredRoleManufacturer;
				$PreferenceCoalFiredRoleLandOwner 						= $lihat ->PreferenceCoalFiredRoleLandOwner;
				$PreferenceCoalFiredRoleOperationMaintenance 	= $lihat ->PreferenceCoalFiredRoleOperationMaintenance;
				$PreferenceCoalFiredRolePrimaryEnergy 				= $lihat ->PreferenceCoalFiredRolePrimaryEnergy;
				$PreferenceCoalFiredRoleConsultant 						= $lihat ->PreferenceCoalFiredRoleConsultant;
				$PreferenceCoalFiredNotes 								= $lihat ->PreferenceCoalFiredNotes;
				
				$PreferenceMineMouthRoleInvestor 							= $lihat ->PrefenrenceMineMouthRoleInvestor;
				$PreferenceMineMouthRoleEPC 									= $lihat ->PrefenrenceMineMouthRoleEPC;
				$PreferenceMineMouthRoleLender 												= $lihat ->PreferenceMineMouthRoleLender;
				$PreferenceMineMouthRoleManufacturer 					= $lihat ->PreferenceMineMouthRoleManufacturer;
				$PreferenceMineMouthRoleLandOwner 						= $lihat ->PreferenceMineMouthRoleLandOwner;
				$PreferenceMineMouthRoleOperationMaintenance 	= $lihat ->PreferenceMineMouthRoleOperationMaintenance;
				$PreferenceMineMouthRolePrimaryEnergy 				= $lihat ->PreferenceMineMouthRolePrimaryEnergy;
				$PreferenceMineMouthRoleConsultant 						= $lihat ->PreferenceMineMouthRoleConsultant;
				$PreferenceMineMouthNotes 								= $lihat ->PreferenceMineMouthNotes;
				
				$PreferenceGasFiredCombinedCycleRoleInvestor 							= $lihat ->PrefenrenceGasFiredCombinedCycleRoleInvestor;
				$PreferenceGasFiredCombinedCycleRoleEPC 									= $lihat ->PrefenrenceGasFiredCombinedCycleRoleEPC;
				$PreferenceGasFiredCombinedCycleRoleLender 												= $lihat ->PreferenceGasFiredCombinedCycleRoleLender;
				$PreferenceGasFiredCombinedCycleRoleManufacturer 					= $lihat ->PreferenceGasFiredCombinedCycleRoleManufacturer;
				$PreferenceGasFiredCombinedCycleRoleLandOwner 						= $lihat ->PreferenceGasFiredCombinedCycleRoleLandOwner;
				$PreferenceGasFiredCombinedCycleRoleOperationMaintenance 	= $lihat ->PreferenceGasFiredCombinedCycleRoleOperationMaintenance;
				$PreferenceGasFiredCombinedCycleRolePrimaryEnergy 				= $lihat ->PreferenceGasFiredCombinedCycleRolePrimaryEnergy;
				$PreferenceGasFiredCombinedCycleRoleConsultant 						= $lihat ->PreferenceGasFiredCombinedCycleRoleConsultant;
				$PreferenceGasFiredCombinedCycleNotes 								= $lihat ->PreferenceGasFiredCombinedCycleNotes;
				
				$PreferenceWasteToEnergyRoleInvestor 							= $lihat ->PrefenrenceWasteToEnergyRoleInvestor;
				$PreferenceWasteToEnergyRoleEPC 									= $lihat ->PrefenrenceWasteToEnergyRoleEPC;
				$PreferenceWasteToEnergyRoleLender 												= $lihat ->PreferenceWasteToEnergyRoleLender;
				$PreferenceWasteToEnergyRoleManufacturer 					= $lihat ->PreferenceWasteToEnergyRoleManufacturer;
				$PreferenceWasteToEnergyRoleLandOwner 						= $lihat ->PreferenceWasteToEnergyRoleLandOwner;
				$PreferenceWasteToEnergyRoleOperationMaintenance 	= $lihat ->PreferenceWasteToEnergyRoleOperationMaintenance;
				$PreferenceWasteToEnergyRolePrimaryEnergy 				= $lihat ->PreferenceWasteToEnergyRolePrimaryEnergy;
				$PreferenceWasteToEnergyRoleConsultant 						= $lihat ->PreferenceWasteToEnergyRoleConsultant;
				$PreferenceWasteToEnergyNotes 								= $lihat ->PreferenceWasteToEnergyNotes;
				
				$PreferenceDieselPowerRoleInvestor 							= $lihat ->PrefenrenceDieselPowerRoleInvestor;
				$PreferenceDieselPowerRoleEPC 									= $lihat ->PrefenrenceDieselPowerRoleEPC;
				$PreferenceDieselPowerRoleLender 												= $lihat ->PreferenceDieselPowerRoleLender;
				$PreferenceDieselPowerRoleManufacturer 					= $lihat ->PreferenceDieselPowerRoleManufacturer;
				$PreferenceDieselPowerRoleLandOwner 						= $lihat ->PreferenceDieselPowerRoleLandOwner;
				$PreferenceDieselPowerRoleOperationMaintenance 	= $lihat ->PreferenceDieselPowerRoleOperationMaintenance;
				$PreferenceDieselPowerRolePrimaryEnergy 				= $lihat ->PreferenceDieselPowerRolePrimaryEnergy;
				$PreferenceDieselPowerRoleConsultant 						= $lihat ->PreferenceDieselPowerRoleConsultant;
				$PreferenceDieselPowerNotes 								= $lihat ->PreferenceDieselPowerNotes;
				
				$PreferenceBiomassBiogasBiofulRoleInvestor 							= $lihat ->PrefenrenceBiomassBiogasBiofulRoleInvestor;
				$PreferenceBiomassBiogasBiofulRoleEPC 									= $lihat ->PrefenrenceBiomassBiogasBiofulRoleEPC;
				$PreferenceBiomassBiogasBiofulRoleLender 												= $lihat ->PreferenceBiomassBiogasBiofulRoleLender;
				$PreferenceBiomassBiogasBiofulRoleManufacturer 					= $lihat ->PreferenceBiomassBiogasBiofulRoleManufacturer;
				$PreferenceBiomassBiogasBiofulRoleLandOwner 						= $lihat ->PreferenceBiomassBiogasBiofulRoleLandOwner;
				$PreferenceBiomassBiogasBiofulRoleOperationMaintenance 	= $lihat ->PreferenceBiomassBiogasBiofulRoleOperationMaintenance;
				$PreferenceBiomassBiogasBiofulRolePrimaryEnergy 				= $lihat ->PreferenceBiomassBiogasBiofulRolePrimaryEnergy;
				$PreferenceBiomassBiogasBiofulRoleConsultant 						= $lihat ->PreferenceBiomassBiogasBiofulRoleConsultant;
				$PreferenceBiomassBiogasBiofulNotes 								= $lihat ->PreferenceBiomassBiogasBiofulNotes;
				
				$PreferenceNuclearEnergyRoleInvestor 							= $lihat ->PrefenrenceNuclearEnergyRoleInvestor;
				$PreferenceNuclearEnergyRoleEPC 									= $lihat ->PrefenrenceNuclearEnergyRoleEPC;
				$PreferenceNuclearEnergyRoleLender 												= $lihat ->PreferenceNuclearEnergyRoleLender;
				$PreferenceNuclearEnergyRoleManufacturer 					= $lihat ->PreferenceNuclearEnergyRoleManufacturer;
				$PreferenceNuclearEnergyRoleLandOwner 						= $lihat ->PreferenceNuclearEnergyRoleLandOwner;
				$PreferenceNuclearEnergyRoleOperationMaintenance 	= $lihat ->PreferenceNuclearEnergyRoleOperationMaintenance;
				$PreferenceNuclearEnergyRolePrimaryEnergy 				= $lihat ->PreferenceNuclearEnergyRolePrimaryEnergy;
				$PreferenceNuclearEnergyRoleConsultant 						= $lihat ->PreferenceNuclearEnergyRoleConsultant;
				$PreferenceNuclearEnergyNotes 								= $lihat ->PreferenceNuclearEnergyNotes;
				
				$PreferenceCoalGasificationRoleInvestor 						= $lihat ->PrefenrenceCoalGasificationRoleInvestor;
				$PreferenceCoalGasificationRoleEPC 									= $lihat ->PrefenrenceCoalGasificationRoleEPC;
				$PreferenceCoalGasificationRoleLender 												= $lihat ->PreferenceCoalGasificationRoleLender;
				$PreferenceCoalGasificationRoleManufacturer 				= $lihat ->PreferenceCoalGasificationRoleManufacturer;
				$PreferenceCoalGasificationRoleLandOwner 						= $lihat ->PreferenceCoalGasificationRoleLandOwner;
				$PreferenceCoalGasificationRoleOperationMaintenance = $lihat ->PreferenceCoalGasificationRoleOperationMaintenance;
				$PreferenceCoalGasificationRolePrimaryEnergy 				= $lihat ->PreferenceCoalGasificationRolePrimaryEnergy;
				$PreferenceCoalGasificationRoleConsultant 					= $lihat ->PreferenceCoalGasificationRoleConsultant;
				$PreferenceCoalGasificationNotes 								= $lihat ->PreferenceCoalGasificationNotes;
				
				$PreferenceOthersRoleInvestor 						= $lihat ->PrefenrenceOthersRoleInvestor;
				$PreferenceOthersRoleEPC 									= $lihat ->PrefenrenceOthersRoleEPC;
				$PreferenceOthersRoleLender 												= $lihat ->PreferenceOthersRoleLender;
				$PreferenceOthersRoleManufacturer 				= $lihat ->PreferenceOthersRoleManufacturer;
				$PreferenceOthersRoleLandOwner 						= $lihat ->PreferenceOthersRoleLandOwner;
				$PreferenceOthersRoleOperationMaintenance = $lihat ->PreferenceOthersRoleOperationMaintenance;
				$PreferenceOthersRolePrimaryEnergy 				= $lihat ->PreferenceOthersRolePrimaryEnergy;
				$PreferenceOthersRoleConsultant 					= $lihat ->PreferenceOthersRoleConsultant;
				$PreferenceOthersNotes 								= $lihat ->PreferenceOthersNotes;
				
				
				$AreaOfInterestCoalFired                = $lihat ->AreaOfInterestCoalFired;
				$AreaOfInterestMineMouth                = $lihat ->AreaOfInterestMineMouth;
				$AreaOfInterestGasFiredCombinedCycle    = $lihat ->AreaOfInterestGasFiredCombinedCycle;
				$AreaOfInterestWasteToEnergy            = $lihat ->AreaOfInterestWasteToEnergy;
				$AreaOfInterestDieselPower              = $lihat ->AreaOfInterestDieselPower;
				$AreaOfInterestBiomassBiogasBioful      = $lihat ->AreaOfInterestBiomassBiogasBioful;
				$AreaOfInterestNuclearEnergy            = $lihat ->AreaOfInterestNuclearEnergy;
				$AreaOfInterestCoalGasification         = $lihat ->AreaOfInterestCoalGasification;
				$AreaOfInterestOthers                   = $lihat ->AreaOfInterestOthers;

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
			
        
              
				<!-- form start -->
                <?php echo form_open_multipart('update_eoi_from_user/proses'); ?>
				<!-- form start -->
			<div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label>Company Name</label>
                         <input type="text" class="form-control" name="BasicCompanyLegalEntityName" value ="<?php echo htmlentities($BasicCompanyLegalEntityName);?>"   placeholder="Company Name" maxlength="100" required />
                  </div>
				   <div class="form-group">
                    <label>Company Code</label>&nbsp<small><i>(Required but not mandatory)</i></small>
                         <input type="text" class="form-control" name="BasicCompanyCode" value ="<?php echo htmlentities($BasicCompanyCode);?>"  placeholder="Company Code" maxlength = "4"  />
                  </div>
				  <div class="form-group">
                  <label>Company Address</label>
                  <textarea class="form-control" rows="3" name="BasicCompayAddress" placeholder="Company Address" maxlength="255" required ><?php echo htmlentities($BasicCompayAddress);?></textarea>
				  </div>
				  <div class="form-group">
                    <label>Web Address</label>
                         <input type="text" class="form-control" name="BasicCompanyWebAddress" maxlength="100" value ="<?php echo htmlentities($BasicCompanyWebAddress);?>"    placeholder="Web Address" required />
                  </div>			 
              </div>
			  
               <!-- /.col -->
              <div class="col-md-6">		 
				 <div class="form-group">
                    <label>Company Year Established</label>
                         <input type="text"  id="txtNum" class="form-control" name="BasicCompanyYearEstablished" value ="<?php echo htmlentities($BasicCompanyYearEstablished);?>"   placeholder="Company Year Established" maxlength = "4" required/>
                  </div>
				   <div class="form-group">
                    <label>Company Country of Establishment</label>
                         <input type="text" class="form-control" name="BasicCompanyCountryOfEstablishment" value ="<?php echo htmlentities($BasicCompanyCountryOfEstablishment);?>" maxlength="255" placeholder="Company Country of Establishment" required />
                  </div>
				   <div class="form-group">
						<label>Company Status</label>
						<select class="form-control select2" name="LonglistCompatibilityLegitimacy"required >
					  <option value="1" <?php if($LonglistCompatibilityLegitimacy=="1"){echo "selected";} ?>>No Information</option>
					  <option value="2" <?php if($LonglistCompatibilityLegitimacy=="2"){echo "selected";} ?>>Individual Company</option>
					  <option value="3" <?php if($LonglistCompatibilityLegitimacy=="3"){echo "selected";} ?>>Private Company</option>
					  <option value="4" <?php if($LonglistCompatibilityLegitimacy=="4"){echo "selected";} ?>>Publicly Listed Company</option>
					  <option value="5" <?php if($LonglistCompatibilityLegitimacy=="5"){echo "selected";} ?>>State Owned Company</option>
                </select>
              </div>
			  	<div class="form-group">
					<label for="berkas">Upload Company Profile </label><small> *) Pdf format, Max size 20 MB</small>
						<input onchange="ValidateSize20(this)" type="file"  name="UploadCompanyProfile" class="single-input" placeholder="Upload Company Profile" accept=".pdf">
						<input type="hidden"  name="UploadCompanyProfileOld" value="<?php echo $UploadCompanyProfile;?>">
						<a target="_blank"href="<?php echo base_url().'uploads/'.htmlentities($UploadCompanyProfile); ?>"><?php echo $UploadCompanyProfile;?> </a>
				</div>
				<div class="form-group">
					<label for="berkas">Upload Signed EOI </label><small> *) Pdf format, Max size 3 MB</small>
					<input onchange="ValidateSize(this)" type="file"  name="UploadSignedEOI"  class="single-input" placeholder="Upload Signed EOI " accept=".pdf">
					<input type="hidden"  name="UploadSignedEOIOld" value="<?php echo $UploadSignedEOI;?>">
					<a target="_blank" href="<?php echo base_url().'uploads/'.htmlentities($UploadSignedEOI); ?>"><?php echo $UploadSignedEOI;?></a>
				</div>
			  <div class="form-group">
			      <input type="hidden" class="form-control" name="UId" placeholder="User Id"  value="<?php echo $user_id;?>"/>
			 </div>		
             </div>
		</div>
		</br>
			<!--Contact Person 1-->
			<div class="box box-success">
			 <div class="box-header with-border">
						<h3 class="box-title">Contact Person 1</h3>
						&nbsp<small><b><i>*) Required</i></b></small>
			 </div>
			</div>
			
			<div class="row">	
				<div class="col-md-6">
					<div class="form-group">
                    <label>Contact Person Name</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson1Name" value ="<?php echo htmlentities($BasicCompanyContactPerson1Name);?>" maxlength="100" placeholder="Contact Person Name" required />
					</div>
				    <div class="form-group">
						<label>Contact Person Position</label>
							 <input type="text" class="form-control" name="BasicCompanyContactPerson1Position" value ="<?php echo htmlentities($BasicCompanyContactPerson1Position);?>"  maxlength="100" placeholder="Contact Person Position" required />
					</div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	  <div class="form-group">
                    <label>Contact Person Telephone Number</label>
                         <input type="text" class="form-control" id="txtNum"  name="BasicCompanyContactPerson1TelephoneNumber" maxlength="100" value ="<?php echo htmlentities($BasicCompanyContactPerson1TelephoneNumber);?>"   placeholder="Contact Person Telephone Number" required />
				</div>
			   <div class="form-group">
                    <label>Contact Person Email</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson1EmailAdress" placeholder="Contact Person Email"  maxlength="100" value ="<?php echo htmlentities($BasicCompanyContactPerson1EmailAdress);?>" required />
              </div>
             </div>
		</div>
		
		
		</br>
		<!--IContact Person 2-->
		<div class="box box-success">
			<div class="box-header with-border">
					<h3 class="box-title">Contact Person 2</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
		</div>

		<div class="row">	
				<div class="col-md-6">
					<div class="form-group">
                    <label>Contact Person Name</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2Name" placeholder="Contact Person Name" maxlength="100" value ="<?php echo htmlentities($BasicCompanyContactPerson2Name);?>" required />
              </div>
			   <div class="form-group">
                    <label>Contact Person Position</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2Position" placeholder="Contact Person Position" maxlength="100" value ="<?php echo htmlentities($BasicCompanyContactPerson2Position);?>"  required />
              </div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	 <div class="form-group">
                    <label>Contact Person Telephone Number</label>
                         <input type="text" class="form-control" id="txtNum" name="BasicCompanyContactPerson2TelephoneNumber" maxlength="100" placeholder="Contact Person Telephone Number" value ="<?php echo htmlentities($BasicCompanyContactPerson2TelephoneNumber);?>" required />
				</div>
				<div class="form-group">
                    <label>Contact Person Email</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2EmailAdress" placeholder="Contact Person Email" maxlength="100" value ="<?php echo htmlentities($BasicCompanyContactPerson2EmailAdress);?>" required />
				</div>	
             </div>
		</div>	

		</br>
		<!--Indonesia Representative-->
		<div class="box box-success">
		 <div class="box-header with-border">
				<h3 class="box-title">Indonesia Representative</h3>
          </div>
		</div>
		
		<div class="row">	
				<div class="col-md-6">
					  <div class="form-group">
						 <label>Company Indonesia Name</label>
                         <input type="text" class="form-control" name="BasicCompanyLegalEntityNameInIndonesia" placeholder="Company Indonesia Name" maxlength="100" value ="<?php echo htmlentities($BasicCompanyLegalEntityNameInIndonesia);?>"  />
					 </div>
				    <div class="form-group">
						<label>Company Indonesia Address</label>
							 <textarea class="form-control" rows="3" name="BasicCompayAddressInIndonesia" maxlength="255" placeholder="Company Indonesia Address"><?php echo htmlentities($BasicCompayAddressInIndonesia);?></textarea>
					</div>
				    <div class="form-group">
						<label>Contact Person Name</label>
							 <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaName" maxlength="100" placeholder="Contact Person Name" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaName);?>" />
					</div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	  <div class="form-group">
                    <label>Contact Person Position </label>
                         <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaPosition" maxlength="100" placeholder="Contact Person Position" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaPosition);?>" />
              </div>	
			  <div class="form-group">
                    <label>Contact Person Telephone Number </label>
                         <input type="text" class="form-control" id="txtNum" name="BasicCompanyContactPersonIndonesiaTelephoneNumber" maxlength="100" placeholder="Contact Person Telephone Number" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaTelephoneNumber);?>" />
              </div>	
			  <div class="form-group">
                    <label>Contact Person Email </label>
                         <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaEmailAdress" maxlength="100" placeholder="Contact Person Email" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaEmailAdress);?>"  />
              </div>		
             </div>
		</div>
		
			</br>
			<!--Financial Criteria-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Financial Criteria</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
			</div>
		
		<div class="row">	
				<div class="col-md-6">
					   <div class="form-group">
						<label>Total Asset </label>
						<select class="form-control select2" name="LonglistCapitalTotalAssetIPP" style="width: 100%;" required >
							<option value="" <?php if($LonglistCapitalTotalAsset==""){echo "selected";} ?>> - Select Total Asset -</option>
							<option value="1" <?php if($LonglistCapitalTotalAsset=="1"){echo "selected";} ?>> < 10 Million USD </option>
							<option value="2" <?php if($LonglistCapitalTotalAsset=="2"){echo "selected";} ?>> 10 - 45 Million USD </option>
							<option value="3" <?php if($LonglistCapitalTotalAsset=="3"){echo "selected";} ?>> > 45 Million USD </option>
						</select>
					  </div>
					  
					   <div class="form-group">
						<label>EBITDA</label>
						<select class="form-control select2" name="LonglistCapitalEBITDAIPP" required >
						  <option value="" <?php if($LonglistCapitalEBITDA==""){echo "selected";} ?>> - Select EBITDA -</option>
						  <option value="1" <?php if($LonglistCapitalEBITDA=="1"){echo "selected";} ?>> < 5 Million USD </option>
						  <option value="2" <?php if($LonglistCapitalEBITDA=="2"){echo "selected";} ?>> 5 - 10 Million USD </option>
						  <option value="3" <?php if($LonglistCapitalEBITDA=="3"){echo "selected";} ?>> > 10 Million USD</option>
						</select>
					</div>
					
					<div class="form-group">
						<label>Credit Rating</label>
						<select class="form-control select2" name="LonglistCapitalCreditRating" required >
						  <option value="" <?php if($LonglistCapitalCreditRating==""){echo "selected";} ?>> - Select Credit Rating -</option>
						  <option value="1" <?php if($LonglistCapitalCreditRating=="1"){echo "selected";} ?>>DnB Rating < 1A or equal</option>
						  <option value="2" <?php if($LonglistCapitalCreditRating=="2"){echo "selected";} ?>>DnB Rating 1A - 3A or equal</option>
						  <option value="3" <?php if($LonglistCapitalCreditRating=="3"){echo "selected";} ?>>DnB Rating < 4A or equal</option>
						</select>
					</div>
					 
              </div>
			  
			  <div class="col-md-6">
			  
				  <div class="form-group">
					<label>DSCR </label>
          <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="LonglistCapitalDSCR" value ="<?php echo htmlentities($LonglistCapitalDSCR);?>" maxlength="255" placeholder="DSCR" required />
          </div>
				 
				  
				  <div class="form-group">
					<label for="berkas">Upload Audited Financial Statement </br>For the last 2 years (2018, 2017) </label><small> *) Pdf format, Max size 50 MB</small>
					<input onchange="ValidateSize50(this)" type="file"  name="UploadFinancialStatement" placeholder="Upload Financial Statement "  class="single-input"  accept=".pdf">
					<input type="hidden"  name="UploadFinancialStatementOld" value="<?php echo $UploadFinancialStatement;?>">
					<a target="_blank" href="<?php echo base_url().'uploads/'.$UploadFinancialStatement; ?>"><?php echo $UploadFinancialStatement;?> </a>
					</div>
				</div>
			 </div> 

			
			<!--PLN DPT-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">PLN DPT</h3>
					&nbsp<small><b><i></i></b></small>
             </div>
        </div>
        
        <div class="form-group">
					<label>Are you registered as PLN's DPT?</label>
					<div class="row">	
				<div class="col-md-12">
	            <div class="form-group">  
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestHydroelectricPowerPlant" value="1" id="HydroelectricPP" onclick="HydroelectricFunction()" />
                      Yes
                    </label>
                  </div>
                
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestHydroelectricPowerPlant" value="1" id="HydroelectricPP" onclick="HydroelectricFunction()" />
                      No
                    </label>
                  </div>

                  <div class="form-group">
					<label for="berkas"> Upload Evidence </label><small> *) Pdf format, Max size 50 MB</small>
					<input onchange="ValidateSize50(this)" type="file"  name="UploadFinancialStatement" placeholder="Upload Financial Statement "  class="single-input"  accept=".pdf" required>
				</div>
		
		 </br>
			<!--Area Of Interset-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Area of Interest</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
		</div>
		<!-- Start Update Check EOI IPP-->

		<div class="row">	
				<div class="col-md-12">
				<div class="form-group">
 
        <div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestCoalFired" value="1" id="CoalFired" <?php if($AreaOfInterestCoalFired=="1"){echo "checked";} ?> onclick="CoalFiredFunction()" />
               Coal Fired
              </label>
            </div>
				  
				<!-- Coal Fired Form Sudah -->
				  <div class="box box-info" id="CoalFiredForm" <?php if($AreaOfInterestCoalFired=="0"||$AreaOfInterestCoalFired==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Coal Fired</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleInvestor" value="1" <?php if($PreferenceCoalFiredRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleEPC" value="1" <?php if($PreferenceCoalFiredRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleLender" value="1" <?php if($PreferenceCoalFiredRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleManufacturer" value="1" <?php if($PreferenceCoalFiredRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleLandOwner" value="1" <?php if($PreferenceCoalFiredRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleOperationMaintenance" value="1" <?php if($PreferenceCoalFiredRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRolePrimaryEnergy" value="1" <?php if($PreferenceCoalFiredRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredRoleConsultant" value="1" <?php if($PreferenceCoalFiredRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceCoalFiredNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceOthersNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					</div>
				</div>

				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestMineMouth" value="1" id="MineMouth" <?php if($AreaOfInterestMineMouth=="1"){echo "checked";} ?> onclick="MineMouthFunction()" />
               Mine Mouth
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="MineMouthForm" <?php if($AreaOfInterestMineMouth=="0"||$AreaOfInterestMineMouth==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">MineMouth</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleInvestor" value="1" <?php if($PreferenceMineMouthRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleEPC" value="1" <?php if($PreferenceMineMouthRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleLender" value="1" <?php if($PreferenceMineMouthRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleManufacturer" value="1" <?php if($PreferenceMineMouthRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleLandOwner" value="1" <?php if($PreferenceMineMouthRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleOperationMaintenance" value="1" <?php if($PreferenceMineMouthRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRolePrimaryEnergy" value="1" <?php if($PreferenceMineMouthRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthRoleConsultant" value="1" <?php if($PreferenceMineMouthRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceMineMouthNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceMineMouthNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					</div>
				</div>
        
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestGasFiredCombinedCycle" value="1" id="GasFiredCombinedCycle" <?php if($AreaOfInterestGasFiredCombinedCycle=="1"){echo "checked";} ?> onclick="GasFiredCombinedCycleFunction()" />
               Gas Fired / Combined Cycle 
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="GasFiredCombinedCycleForm" <?php if($AreaOfInterestGasFiredCombinedCycle=="0"||$AreaOfInterestGasFiredCombinedCycle==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Coal Fired / Combined Cycle</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleInvestor" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleEPC" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleLender" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleManufacturer" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleLandOwner" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleOperationMaintenance" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRolePrimaryEnergy" value="1" <?php if($PreferenceGasFiredCombinedCycleRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleRoleConsultant" value="1" <?php if($PreferenceGasFiredCombinedCycleRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceGasFiredCombinedCycleNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceGasFiredCombinedCycleNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					</div>
				</div>
        
				<!-- WASTE TO ENERGY -->
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestWasteToEnergy" value="1" id="WasteToEnergy" <?php if($AreaOfInterestWasteToEnergy=="1"){echo "checked";} ?> onclick="WasteToEnergyFunction()" />
               Waste To Energy
              </label>
            </div>
				  
				<!-- WASTE TO eNERGYForm -->
				  <div class="box box-info" id="WasteToEnergyForm" <?php if($AreaOfInterestWasteToEnergy=="0"||$AreaOfInterestWasteToEnergy==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Waste To Energy</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleInvestor" value="1" <?php if($PreferenceWasteToEnergyRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleEPC" value="1" <?php if($PreferenceWasteToEnergyRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleLender" value="1" <?php if($PreferenceWasteToEnergyRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleManufacturer" value="1" <?php if($PreferenceWasteToEnergyRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleLandOwner" value="1" <?php if($PreferenceWasteToEnergyRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleOperationMaintenance" value="1" <?php if($PreferenceWasteToEnergyRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRolePrimaryEnergy" value="1" <?php if($PreferenceWasteToEnergyRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleConsultant" value="1" <?php if($PreferenceWasteToEnergyRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceWasteToEnergyNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceWasteToEnergyNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
					</div>
				</div>


        <!-- dIESEL pOWER -->
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestDieselPower" value="1" id="DieselPower" <?php if($AreaOfInterestDieselPower=="1"){echo "checked";} ?> onclick="DieselPowerFunction()" />
               Diesel Power
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="DieselPowerForm" <?php if($AreaOfInterestDieselPower=="0"||$AreaOfInterestDieselPower==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Diesel Power</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleInvestor" value="1" <?php if($PreferenceDieselPowerRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleEPC" value="1" <?php if($PreferenceDieselPowerRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleLender" value="1" <?php if($PreferenceDieselPowerRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleManufacturer" value="1" <?php if($PreferenceDieselPowerRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleLandOwner" value="1" <?php if($PreferenceDieselPowerRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleOperationMaintenance" value="1" <?php if($PreferenceDieselPowerRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRolePrimaryEnergy" value="1" <?php if($PreferenceDieselPowerRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerRoleConsultant" value="1" <?php if($PreferenceDieselPowerRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceDieselPowerNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceDieselPowerNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					</div>
				</div>


        <!-- bIOMASS BIOGAS BIOFUL -->
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestBiomassBiogasBioful" value="1" id="BiomassBiogasBioful" <?php if($AreaOfInterestBiomassBiogasBioful=="1"){echo "checked";} ?> onclick="BiomassBiogasBiofulFunction()" />
               Biomass Biogas Bioful 
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="BiomassBiogasBiofulForm" <?php if($AreaOfInterestBiomassBiogasBioful=="0"||$AreaOfInterestBiomassBiogasBioful==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Biomass Biogas Bioful</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleInvestor" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleEPC" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleLender" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleManufacturer" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleLandOwner" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleOperationMaintenance" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRolePrimaryEnergy" value="1" <?php if($PreferenceBiomassBiogasBiofulRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulRoleConsultant" value="1" <?php if($PreferenceBiomassBiogasBiofulRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceBiomassBiogasBiofulNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceBiomassBiogasBiofulNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
					</div>
				</div>
        
				<!-- Nuclear ENERGY -->
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestNuclearEnergy" value="1" id="NuclearEnergy" <?php if($AreaOfInterestNuclearEnergy=="1"){echo "checked";} ?> onclick="NuclearEnergyFunction()" />
               Nuclear Energy
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="NuclearEnergyForm" <?php if($AreaOfInterestNuclearEnergy=="0"||$AreaOfInterestNuclearEnergy==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Nuclear Energy</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleInvestor" value="1" <?php if($PreferenceNuclearEnergyRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleEPC" value="1" <?php if($PreferenceNuclearEnergyRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleLender" value="1" <?php if($PreferenceNuclearEnergyRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleManufacturer" value="1" <?php if($PreferenceNuclearEnergyRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleLandOwner" value="1" <?php if($PreferenceNuclearEnergyRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleOperationMaintenance" value="1" <?php if($PreferenceNuclearEnergyRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRolePrimaryEnergy" value="1" <?php if($PreferenceNuclearEnergyRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyRoleConsultant" value="1" <?php if($PreferenceNuclearEnergyRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceNuclearEnergyNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceNuclearEnergyNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					</div>
				</div>
        
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestCoalGasification" value="1" id="CoalGasification" <?php if($AreaOfInterestCoalGasification=="1"){echo "checked";} ?> onclick="CoalGasificationFunction()" />
               Coal Gasification
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="CoalGasificationForm" <?php if($AreaOfInterestCoalGasification=="0"||$AreaOfInterestCoalGasification==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Coal Gasification</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleInvestor" value="1" <?php if($PreferenceCoalGasificationRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleEPC" value="1" <?php if($PreferenceCoalGasificationRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleLender" value="1" <?php if($PreferenceCoalGasificationRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleManufacturer" value="1" <?php if($PreferenceCoalGasificationRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleLandOwner" value="1" <?php if($PreferenceCoalGasificationRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleOperationMaintenance" value="1" <?php if($PreferenceCoalGasificationRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRolePrimaryEnergy" value="1" <?php if($PreferenceCoalGasificationRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationRoleConsultant" value="1" <?php if($PreferenceCoalGasificationRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceCoalGasificationNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceCoalGasificationNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					</div>
				</div>
        
				<div class="checkbox">
          <label>
              <input type="checkbox" name="AreaOfInterestOthers" value="1" id="Others" <?php if($AreaOfInterestOthers=="1"){echo "checked";} ?> onclick="OthersFunction()" />
               Others
              </label>
            </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="OthersForm" <?php if($AreaOfInterestOthers=="0"||$AreaOfInterestOthers==null){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Others</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleInvestor" value="1" <?php if($PreferenceOthersRoleInvestor=="1"){echo "checked";} ?> />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleEPC" value="1" <?php if($PreferenceOthersRoleEPC=="1"){echo "checked";} ?> />
								  EPC Contractor     
								</label>
								<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleLender" value="1" <?php if($PreferenceOthersRoleLender=="1"){echo "checked";} ?> />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleManufacturer" value="1" <?php if($PreferenceOthersRoleManufacturer=="1"){echo "checked";} ?>/>
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleLandOwner" value="1" <?php if($PreferenceOthersRoleLandOwner=="1"){echo "checked";} ?> />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleOperationMaintenance" value="1" <?php if($PreferenceOthersRoleOperationMaintenance=="1"){echo "checked";} ?>/>
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRolePrimaryEnergy" value="1" <?php if($PreferenceOthersRolePrimaryEnergy=="1"){echo "checked";} ?> />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOthersRoleConsultant" value="1" <?php if($PreferenceOthersRoleConsultant=="1"){echo "checked";} ?>/>
								  Consultant
								</label>
							</div>
						  </div>
						  
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceOthersNotes" placeholder="Notes Preference" maxlength="10000"><?php echo htmlentities($PreferenceOthersNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
					</div>
				</div>
			      </div>
            </div>
		</div>
		
				
		<!-- END Update Check EOI IPP-->
		
			</br>
			<!--Project Experience-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Project Experience</h3>
             </div>
			</div>
			
			<div class="row">	
			<div class="col-md-12">
					<table class="table table-bordered">
					 <thead>
                        <tr>
						  <th>Project Name</th>
						  <th>Location</th>
						  <th width="15%">Type</th>
						  <th>Capacity (MW)<br><small><i>*) Numeric</i></small></th>
						  <th>Year COD<br><small><i>*) Numeric</i></small></th>
						  <th>Tariff (USD cent / kWh)<br><small><i>*) Numeric</i></small></th>
						  <th>Value (USD)<br><small><i>*) Numeric</i></small></th>
						  <th>Roles</th>
						</tr>
						</thead>
                        <tbody id="itemlist">
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
										if($arrlength==null){
											$arrlength++;
										}
										
										$x=0;
										for($x = 0; $x < $arrlength; $x++) { ?>
										<tr>
										  <td id="td-mod"><input class="form-control" name="ProjectName[<?php echo $x?>]" placeholder="Project Name" class="input-block-level"  id="input-mod" value="<?php echo htmlentities($ProjectName[$x]); ?>"  /></td>
										  <td id="td-mod"><input class="form-control" name="ProjectLocation[<?php echo $x?>]"  placeholder="Location" class="input-block-level"  id="input-mod" value="<?php echo htmlentities($ProjectLocation[$x]); ?>"  /></td>
										  <td id="td-mod">
										  <select class="input-block-level" id="input-mod" name="ProjectType[<?php echo $x?>]"  style="width: 100%;" required>
										  <?php echo htmlentities($ProjectType[$x]); ?>
											<option selected="selected" value="<?php echo $ProjectType[$x]; ?>"><?php if($ProjectType[$x]==null){echo "- Select Type -";} else{echo $ProjectType[$x];} ?></option>
											<option value="Geothermal PP">Geothermal PP</option>
											<option value="Solar Photovoltaic PP">Solar Photovoltaic PP</option>
											<option value="Solar Thermal PP">Solar Thermal PP</option>
											<option value="Wind Power PP">Wind Power PP</option>
											<option value="Energy Storage / Pumped PP">Energy Storage / Pumped PP</option>
											<option value="Sea Energy PP">Sea Energy PP</option>
											<option value="Waste to Energy PP">Waste to Energy PP</option>
											<option value="Nuclear Energy PP">Nuclear Energy PP</option>
											<option value="Other Clean Technology / non PP">Other Clean Technology / non PP</option>
											<option value="Hydroelectric PP">Hydroelectric PP</option>
										</select>
										  </td>
										  <td id="td-mod"><input class="form-control" name="ProjectCapacity[<?php echo $x?>]"  placeholder="Capacity" onkeypress="return isNumberKey(event,this)" class="input-block-level"  id="input-mod" value="<?php echo htmlentities($ProjectCapacity[$x]); ?>"  /></td>
										  <td id="td-mod"><input class="form-control" name="ProjectCOD[<?php echo $x?>]"  placeholder="Year COD" onkeypress="return isNumberKey(event,this)" maxlength="4" class="input-block-level"  id="input-mod" value="<?php echo htmlentities($ProjectCOD[$x]); ?>" onpaste="return false" /></td>
										  <td id="td-mod"><input class="form-control" name="ProjectTariff[<?php echo $x?>]"  placeholder="Tariff" onkeypress="return isNumberKey(event,this)" class="input-block-level"  id="input-mod" value="<?php echo htmlentities($ProjectTariff[$x]); ?>"  /></td>
										  <td id="td-mod"><input class="form-control" name="ProjectValue[<?php echo $x?>]"  placeholder="Value" onkeypress="return isNumberKey(event,this)" class="input-block-level"  id="input-mod" value="<?php echo htmlentities($ProjectValue[$x]); ?>"  /></td>
										  <td>
												<div class="checkbox">
													<label>
													  <input type="checkbox" name="ProjectRoleIPP[<?php echo $x?>]" value="TRUE"  <?php if($ProjectRoleIPP[$x]==="TRUE"){echo "checked";}?>  /> 
													  IPP / Equity Provider 
													</label>
												</div>
												<div class="checkbox">
													<label>
													  <input type="checkbox" name="ProjectRoleFinancingProvider[<?php echo $x?>]" value="TRUE"  <?php if($ProjectRoleFinancingProvider[$x]==="TRUE"){echo "checked";}?>  />
													  Financing Provider    
													</label>
												</div>
													<div class="checkbox">
													<label>
													  <input type="checkbox" name="ProjectRoleTechnologyProvider[<?php echo $x?>]" value="TRUE" <?php if($ProjectRoleTechnologyProvider[$x]==="TRUE"){echo "checked";}?>  />
													  Technology Provider     
													</label>
												</div>
												<div class="checkbox">
													<label>
													<input type="checkbox" name="ProjectRoleEPCProvider[<?php echo $x?>]" value="TRUE" <?php if($ProjectRoleEPCProvider[$x]==="TRUE"){echo "checked";}?>  />
													EPC Service Provider    
													</label>
												</div>
												<div class="checkbox">
													<label>
													 <input type="checkbox" name="ProjectRoleConsultingServiceProvider[<?php echo $x?>]" value="TRUE" <?php if($ProjectRoleConsultingServiceProvider[$x]==="TRUE"){echo "checked";}?>  />
													 Consulting Provider       
													</label>
												</div>
												<div class="checkbox">
													<label>
													 <input type="checkbox" name="ProjectRoleOMServiceProvider[<?php echo $x?>]" value="TRUE"  <?php if($ProjectRoleOMServiceProvider[$x]==="TRUE"){echo "checked";}?>  />
													 O&M Service Provider    
													</label>
												</div>
								</td>
										</tr>
										<?php }?>
                        </tbody>
						  <tfoot>
                            <tr>
                                <td colspan="7"></td>
								<td>
									 <input type="hidden" id="number" value="<?php echo $x ?>"/>
                                    <button class="btn btn-small btn-default" onclick="additem(<?php echo $x?>); return false"><i class="fa fa-plus"></i></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
					
					
			</div>
			</div>
           
		   	 </br>
			<!--Indonesia Representative-->
			<div class="box box-success">
			 <div class="box-header">
					<div class="checkbox">
                    <label>
                      <input type="checkbox" name="confirmation" required>
                      I certify that all information provided as part of this application is true and correct. If there are any differences in the information provided between this application and the EOI, the information provided within the EOI will prevail.
					  <p><br>Notes: Please provide all information in Indonesia or English</br></p>
                    </label>
                  </div>
             </div>
			</div>
			
			<!--Progress Bar -->
		    <div class="row">	
				<div class="col-md-12">
					<div class="progress">
						<div class="bar"></div >
						<div class="percent"></div >
				   </div>
				   <div id="status"></div>
				</div>
			</div>
			
		 <!-- Validation Message-->
		   <div class="row">	
				<div class="col-md-12">
			 	<?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>    
                    <?php } else if ($this->session->flashdata('result_sukses')) {?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong>
                            <?php echo $this->session->flashdata('result_sukses'); ?>
							<script>
								$(document).ready(function() {
									window.setTimeout(function(){window.location.href = "<?php echo base_url().'users_admin'?>"},3000);
								});
							</script>
                        </div>    
                    <?php } ?>
			</div>
			</div>
		   
		   <div class="row">	
				<div class="col-md-12">
					<button type="submit" id="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
					<button type="reset" name="reset" class="btn btn-warning"><i class="fa  fa-eraser"></i> Reset</button>
			</div>
			</div>

			
                <?php echo form_close(); ?>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	 </div>
	 
 </section>
 <script>
	 function goBack() {
		window.history.back();
	}
 </script>
 <script>
function isNumberKey(evt, obj) {

            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
</script>
<script>
	function validate(ev) {
		if (event.shiftKey == true) {
                event.preventDefault();
            }
		
		if (!ev) {
			ev = window.event;
		}

		if (!ev.ctrlKey && ev.key.length === 1 && (isNaN(+ev.key) || ev.key === " ")) {
			return ev.preventDefault();
		}
	}
</script>
<script>
$(function () {
        $("input[id*='txtNum']").keydown(function (event) {
	
             if (event.shiftKey == true) {
                event.preventDefault();
            }

             if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 ) {

			 }else {
                event.preventDefault();
            }

        });
    });
</script>
<script>
	function validate(ev) {
		
		if (ev.shiftKey == true) {
                event.preventDefault();
            }
		
		if (!ev) {
			ev = window.event;
		}

		if (!ev.ctrlKey && ev.key.length === 1 && (isNaN(+ev.key) || ev.key === " ")) {
			return ev.preventDefault();
		}
	}
</script>
<script>
$(function () {
        $("input[id*='txtQty']").keydown(function (event) {


            if (event.shiftKey == true) {
                event.preventDefault();
            }

            if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

            } else {
                event.preventDefault();
            }
            
            if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
                event.preventDefault();

        });
    });
</script>

<script type="text/javascript">
function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 3) {
            alert('File size Exceeds 3 MB');
			$(file).val(''); 
        } else {
        }
    }
</script>

<script type="text/javascript">
function ValidateSize20(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 20) {
            alert('File size Exceeds 20 MB');
			$(file).val(''); 
        } else {
        }
    }
</script>

<!-- 50 MB -->
<script type="text/javascript">
function ValidateSize50(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 50) {
            alert('File size Exceeds 50 MB');
			$(file).val(''); 
        } else {
        }
    }
</script>

<script type="text/javascript">

        function isNumberKey(evt, obj) {

            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
</script>
 <script>
            var i = 1;
            function additem() {
				var i = parseInt(document.getElementById('number').value, 10);
				i = isNaN(i) ? 0 : i;
				
				//menentukan target append
                var itemlist = document.getElementById('itemlist');
                
				//membuat element
                var row = document.createElement('tr');
                var VarDivConsulting = document.createElement('div');
				VarDivConsulting.setAttribute('class', 'checkbox');
				
				 var VarDivEPC = document.createElement('div');
				VarDivEPC.setAttribute('class', 'checkbox');
				
				var VarDivOMService = document.createElement('div');
				VarDivOMService.setAttribute('class', 'checkbox');
				
				var VarDivFinancing = document.createElement('div');
				VarDivFinancing.setAttribute('class', 'checkbox');
				
				var VarDivTechnology = document.createElement('div');
				VarDivTechnology.setAttribute('class', 'checkbox');
				
				var VarDivIPP = document.createElement('div');
				VarDivIPP.setAttribute('class', 'checkbox');
				
				
				var VarLabelConsulting = document.createElement('label');
				var VarLabelIPP = document.createElement('label');
				var VarLabelFinancing = document.createElement('label');
				var VarLabelTechnology = document.createElement('label');
				var VarLabelOMService = document.createElement('label');
				var VarLabelEPC = document.createElement('label');
				
                var VarProjectName= document.createElement('td');
				VarProjectName.setAttribute('id', 'td-mod');
				
                var VarProjectLocation = document.createElement('td');
				VarProjectLocation.setAttribute('id', 'td-mod');
				
                var VarProjectType = document.createElement('td');
				VarProjectType.setAttribute('id', 'td-mod');
				
                var VarProjectCapacity = document.createElement('td');
				VarProjectCapacity.setAttribute('id', 'td-mod');
				
                var VarProjectCOD = document.createElement('td');
				VarProjectCOD.setAttribute('id', 'td-mod');
				
                var VarProjectTariff = document.createElement('td');
				VarProjectTariff.setAttribute('id', 'td-mod');
				
                var VarProjectValue = document.createElement('td');
				VarProjectValue.setAttribute('id', 'td-mod');
				
				var VarProjectExpTable = document.createElement('td');
				
                var aksi = document.createElement('td');
 
				//meng append element
                itemlist.appendChild(row);
                row.appendChild(VarProjectName);
                row.appendChild(VarProjectLocation);
                row.appendChild(VarProjectType);
                row.appendChild(VarProjectCapacity);
                row.appendChild(VarProjectCOD);
                row.appendChild(VarProjectTariff);
                row.appendChild(VarProjectValue);
                row.appendChild(VarProjectExpTable);
                row.appendChild(aksi);
 
				//membuat element input
				var ProjectName = document.createElement('input');
                ProjectName.setAttribute('name', 'ProjectName[' + i + ']');
                ProjectName.setAttribute('class', 'form-control');
                ProjectName.setAttribute('id', 'input-mod');
				ProjectName.setAttribute('placeholder', 'Project  Name'); 
				
                var ProjectLocation = document.createElement('input');
                ProjectLocation.setAttribute('name', 'ProjectLocation[' + i + ']');
                ProjectLocation.setAttribute('class', 'form-control');
				ProjectLocation.setAttribute('id', 'input-mod');
				ProjectLocation.setAttribute('placeholder', 'Location'); 
				
				/*
                var ProjectType = document.createElement('input');
                ProjectType.setAttribute('name', 'ProjectType[' + i + ']');
                ProjectType.setAttribute('class', 'form-control');
				ProjectType.setAttribute('id', 'input-mod');
                ProjectType.setAttribute('placeholder', 'Type'); 
				*/
				
				var ProjectType = document.createElement('select');
                ProjectType.setAttribute('name', 'ProjectType[' + i + ']');
                ProjectType.setAttribute('class', 'form-control');
				ProjectType.setAttribute('id', 'input-mod');
                ProjectType.setAttribute('placeholder', 'Type'); 
				
				var ProjectTypeOpt0 = document.createElement('option');
				ProjectTypeOpt0.innerHTML = '<option selected="selected">- Select Type-</option>';
				var ProjectTypeOpt1 = document.createElement('option');
				ProjectTypeOpt1.innerHTML = '<option value="Geothermal PP">Geothermal PP</option>';
				var ProjectTypeOpt2 = document.createElement('option');
				ProjectTypeOpt2.innerHTML = '<option value="Solar Photovoltaic PP">Solar Photovoltaic PP</option>';
				var ProjectTypeOpt3 = document.createElement('option');
				ProjectTypeOpt3.innerHTML = '<option value="Solar Thermal PP">Solar Thermal PP</option>';
				var ProjectTypeOpt4 = document.createElement('option');
				ProjectTypeOpt4.innerHTML = '<option value="Wind Power PP">Wind Power PP</option>';
				var ProjectTypeOpt5 = document.createElement('option');
				ProjectTypeOpt5.innerHTML = '<option value="Energy Storage / Pumped PP">Energy Storage / Pumped PP</option>';
				var ProjectTypeOpt6 = document.createElement('option');
				ProjectTypeOpt6.innerHTML = '<option value="Sea Energy PP">Sea Energy PP</option>';
				var ProjectTypeOpt7 = document.createElement('option');
				ProjectTypeOpt7.innerHTML = '<option value="Waste to Energy PP">Waste to Energy PP</option>';
				var ProjectTypeOpt8 = document.createElement('option');
				ProjectTypeOpt8.innerHTML = '<option value="Nuclear Energy PP">Nuclear Energy PP</option>';
				var ProjectTypeOpt9 = document.createElement('option');
				ProjectTypeOpt9.innerHTML = '<option value="Other Clean Technology / non PP">Other Clean Technology / non PP</option>';
				var ProjectTypeOpt10 = document.createElement('option');
				ProjectTypeOpt10.innerHTML = '<option value="Hydroelectric PP">Hydroelectric PP</option>';
				
				
				var ProjectCapacity = document.createElement('input');
                ProjectCapacity.setAttribute('name', 'ProjectCapacity[' + i + ']');
                ProjectCapacity.setAttribute('onkeypress', 'return isNumberKey(event,this)');
                ProjectCapacity.setAttribute('class', 'form-control');
				ProjectCapacity.setAttribute('id', 'input-mod');
                ProjectCapacity.setAttribute('placeholder', 'Capacity'); 
				
				var ProjectCOD = document.createElement('input');
                ProjectCOD.setAttribute('name', 'ProjectCOD[' + i + ']');
                ProjectCOD.setAttribute('onkeypress', 'validate(event)');
				ProjectCOD.setAttribute('onpaste', 'return false');
				ProjectCOD.setAttribute('maxlength', '4');
                ProjectCOD.setAttribute('class', 'form-control');
				ProjectCOD.setAttribute('id', 'input-mod');
                ProjectCOD.setAttribute('placeholder', 'Year COD'); 
				
				var ProjectTariff = document.createElement('input');
                ProjectTariff.setAttribute('name', 'ProjectTariff[' + i + ']');
                ProjectTariff.setAttribute('onkeypress', 'return isNumberKey(event,this)');
                ProjectTariff.setAttribute('class', 'form-control');
				ProjectTariff.setAttribute('id', 'input-mod');
                ProjectTariff.setAttribute('placeholder', 'Tariff'); 
				
				var ProjectValue = document.createElement('input');
                ProjectValue.setAttribute('name', 'ProjectValue[' + i + ']');
                ProjectValue.setAttribute('onkeypress', 'return isNumberKey(event,this)');
                ProjectValue.setAttribute('class', 'form-control');
				ProjectValue.setAttribute('id', 'input-mod');
                ProjectValue.setAttribute('placeholder', 'USD'); 
				
				var ProjectRoleFinancingProvider= document.createElement('input');
                ProjectRoleFinancingProvider.setAttribute('type', 'checkbox');
                ProjectRoleFinancingProvider.setAttribute('name', 'ProjectRoleFinancingProvider[' + i + ']');
                ProjectRoleFinancingProvider.setAttribute('value', 'TRUE');
				
				var ProjectRoleEPCProvider= document.createElement('input');
                ProjectRoleEPCProvider.setAttribute('type', 'checkbox');
                ProjectRoleEPCProvider.setAttribute('name', 'ProjectRoleEPCProvider[' + i + ']');
                ProjectRoleEPCProvider.setAttribute('value', 'TRUE');
				
				var ProjectRoleConsultingServiceProvider= document.createElement('input');
                ProjectRoleConsultingServiceProvider.setAttribute('type', 'checkbox');
                ProjectRoleConsultingServiceProvider.setAttribute('name', 'ProjectRoleConsultingServiceProvider[' + i + ']');
                ProjectRoleConsultingServiceProvider.setAttribute('value', 'TRUE');
				
				var ProjectRoleIPP= document.createElement('input');
                ProjectRoleIPP.setAttribute('type', 'checkbox');
                ProjectRoleIPP.setAttribute('name', 'ProjectRoleIPP[' + i + ']');
                ProjectRoleIPP.setAttribute('value', 'TRUE');
                
				var ProjectRoleOMServiceProvider= document.createElement('input');
                ProjectRoleOMServiceProvider.setAttribute('type', 'checkbox');
                ProjectRoleOMServiceProvider.setAttribute('name', 'ProjectRoleOMServiceProvider[' + i + ']');
                ProjectRoleOMServiceProvider.setAttribute('value', 'TRUE');
				
				var ProjectRoleTechnologyProvider= document.createElement('input');
                ProjectRoleTechnologyProvider.setAttribute('type', 'checkbox');
                ProjectRoleTechnologyProvider.setAttribute('name', 'ProjectRoleTechnologyProvider[' + i + ']');
                ProjectRoleTechnologyProvider.setAttribute('value', 'TRUE');

                var hapus = document.createElement('span');
 
				// mengappend element input
				VarProjectName.appendChild(ProjectName);
                VarProjectLocation.appendChild(ProjectLocation);
                VarProjectType.appendChild(ProjectType);
                ProjectType.appendChild(ProjectTypeOpt0);
                ProjectType.appendChild(ProjectTypeOpt1);
                ProjectType.appendChild(ProjectTypeOpt2);
                ProjectType.appendChild(ProjectTypeOpt3);
                ProjectType.appendChild(ProjectTypeOpt4);
                ProjectType.appendChild(ProjectTypeOpt5);
                ProjectType.appendChild(ProjectTypeOpt6);
                ProjectType.appendChild(ProjectTypeOpt7);
                ProjectType.appendChild(ProjectTypeOpt8);
                ProjectType.appendChild(ProjectTypeOpt9);
                ProjectType.appendChild(ProjectTypeOpt10);
                VarProjectCapacity.appendChild(ProjectCapacity);
                VarProjectCOD.appendChild(ProjectCOD);
                VarProjectTariff.appendChild(ProjectTariff);
                VarProjectValue.appendChild(ProjectValue);
				
				VarProjectExpTable.appendChild(VarDivIPP);
                VarDivIPP.appendChild(VarLabelIPP);
				VarLabelIPP.appendChild(ProjectRoleIPP);
				VarLabelIPP.innerHTML+="IPP / Equity Provider ";
				
				VarProjectExpTable.appendChild(VarDivFinancing);
                VarDivFinancing.appendChild(VarLabelFinancing);
				VarLabelFinancing.appendChild(ProjectRoleFinancingProvider);
				VarLabelFinancing.innerHTML+="Financing Provider";
				
				VarProjectExpTable.appendChild(VarDivTechnology);
                VarDivTechnology.appendChild(VarLabelTechnology);
				VarLabelTechnology.appendChild(ProjectRoleTechnologyProvider);
				VarLabelTechnology.innerHTML+="Technology Provider";
				
				VarProjectExpTable.appendChild(VarDivEPC);
                VarDivEPC.appendChild(VarLabelEPC);
				VarLabelEPC.appendChild(ProjectRoleEPCProvider);
				VarLabelEPC.innerHTML+="EPC Provider";
				
				VarProjectExpTable.appendChild(VarDivConsulting);
                VarDivConsulting.appendChild(VarLabelConsulting);
				VarLabelConsulting.appendChild(ProjectRoleConsultingServiceProvider);
				VarLabelConsulting.innerHTML+="Consulting Provider";
				
				VarProjectExpTable.appendChild(VarDivOMService);
                VarDivOMService.appendChild(VarLabelOMService);
				VarLabelOMService.appendChild(ProjectRoleOMServiceProvider);
				VarLabelOMService.innerHTML+="O&M Service Provider";
				
	
                aksi.appendChild(hapus);
 
                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="fa fa-trash"></i></button>';
				//membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
 
                i++;
				document.getElementById('number').value = i;
            }
    </script>
	