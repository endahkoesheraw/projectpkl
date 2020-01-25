<?php error_reporting(0); ?>
	
	<script>
		function GeothermalFunction() {
		  var checkBox = document.getElementById("GeothermalPP");
		  var GeothermalForm = document.getElementById("GeothermalForm");
		  if (checkBox.checked == true){
			GeothermalForm.style.display = "block";
		  } else {
			GeothermalForm.style.display = "none";
		  }
		}
	</script>
	<style>
	#table-mod{
    border-collapse:collapse;
	}
	#td-mod{
		position:relative;
		width:11%;
		padding: 0px;
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
				 EoI Submission IPPPPPPPPPPPPP
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-book"></i>  EoI Submission</a></li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
			
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
                        </div>    
                    <?php } ?>
           <div class="box box-info">
			
			
			<div class="box-header with-border">
                <h3 class="box-title">EoI Submission Application Form</h3>
				<br>  <small><i>Kindly fill out the form below to express your interest in participating in the prequalification process </i></small></br>
              </div>
			  
			  
			  <?php  
			  
				$uid=null;
				foreach ($data->result_object() as $lihat)
				{
				$uid = encrypt_url($lihat->UId);
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
						
			  
			  <div class="box-header with-border">
					<a href="<?php echo base_url(); ?>create_eoi_form_ipp" class="btn btn-success <?php if($uid!=null){echo "disabled";} ?>" ><i class="fa fa-plus-circle"></i> Create</a>
					<a href="<?php echo base_url(); ?>update_eoi_formipp" class="btn btn-warning <?php if($uid==null){echo "disabled";} ?>" ><i class="fa fa-refresh"></i> Update</a>
					  <a  href="<?php echo base_url().'delete_eoi_formipp/delete_eoiipp/'.$uid; ?>"  onclick="return confirm('Are you sure you want to delete this item?');"  class="btn btn-danger <?php if($uid==null){echo "disabled";}?>" title="Hapus"><i  class="fa fa-trash"  ></i> Delete</a>
					
              </div>
				
			    <div class="box-body">
			  
			<!--Contact Person 1-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Participant Information</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
			</div>
        
              
				<!-- form start -->
                <?php echo form_open_multipart('create_eoi_formipp/proses'); ?>
			<div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label>Company Name</label>
                         <input type="text" class="form-control" name="BasicCompanyLegalEntityName" value ="<?php echo htmlentities($BasicCompanyLegalEntityName);?>"  disabled placeholder="Company Name" />
                  </div>
				   <div class="form-group">
                    <label>Company Code</label>&nbsp<small><i>(Required but not mandatory)</i></small>
                         <input type="text" class="form-control" name="BasicCompanyCode" value ="<?php echo htmlentities($BasicCompanyCode);?>"  disabled  placeholder="Company Code" maxlength = "4"/>
                  </div>
				  <div class="form-group">
                  <label>Company Address</label>
                  <textarea class="form-control" rows="3" name="BasicCompayAddress" placeholder="Company Address" disabled><?php echo htmlentities($BasicCompayAddress);?></textarea>
				  </div>
				  <div class="form-group">
                    <label>Web Address</label>
                         <input type="text" class="form-control" name="BasicCompanyWebAddress" value ="<?php echo htmlentities($BasicCompanyWebAddress);?>"  disabled  placeholder="Web Address" />
                  </div>			 
              </div>
			  
               <!-- /.col -->
              <div class="col-md-6">		 
				 <div class="form-group">
                    <label>Company Year Established</label>
                         <input type="text"  onkeypress="validate(event)" class="form-control" name="BasicCompanyYearEstablished" value ="<?php echo htmlentities($BasicCompanyYearEstablished);?>"  disabled placeholder="Company Year Established" />
                  </div>
				   <div class="form-group">
                    <label>Company Country of Establishment</label>
                         <input type="text" class="form-control" name="BasicCompanyCountryOfEstablishment" value ="<?php echo htmlentities($BasicCompanyCountryOfEstablishment);?>"  disabled placeholder="Company Country of Establishment" />
                  </div>
				   <div class="form-group">
						<label>Company Status</label>
						<select class="form-control select2" name="LonglistCompatibilityLegitimacy" disabled>
					  <option>- Select Company Status -</option>
					  <option value="1" <?php if($LonglistCompatibilityLegitimacy=="1"){echo "selected";} ?>>No Information</option>
					  <option value="2" <?php if($LonglistCompatibilityLegitimacy=="2"){echo "selected";} ?>>Individual Company</option>
					  <option value="3" <?php if($LonglistCompatibilityLegitimacy=="3"){echo "selected";} ?>>Private Company</option>
					  <option value="4" <?php if($LonglistCompatibilityLegitimacy=="4"){echo "selected";} ?>>Publicly Listed Company</option>
					  <option value="5" <?php if($LonglistCompatibilityLegitimacy=="5"){echo "selected";} ?>>State Owned Company</option>
                </select>
              </div>
			  <div class="form-group">
					<label for="berkas">Company Profile </label>
						</br><a target="_blank" class="btn btn-block btn-success btn-sm" href="<?php echo base_url().'uploads/'.htmlentities($UploadCompanyProfile); ?>" <?php if($UploadCompanyProfile==""){echo "disabled";}?>>Click Here to Download </a>
				</div>
				<div class="form-group">
					<label for="berkas">Signed EOI </label>
					</br><a target="_blank" class="btn btn-block btn-success btn-sm" href="<?php echo base_url().'uploads/'.htmlentities($UploadSignedEOI); ?>" <?php if($UploadSignedEOI==""){echo "disabled";}?>>Click Here to Download </a>
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
                         <input type="text" class="form-control" name="BasicCompanyContactPerson1Name" value ="<?php echo htmlentities($BasicCompanyContactPerson1Name);?>" disabled placeholder="Contact Person Name" />
					</div>
				    <div class="form-group">
						<label>Contact Person Position</label>
							 <input type="text" class="form-control" name="BasicCompanyContactPerson1Position" value ="<?php echo htmlentities($BasicCompanyContactPerson1Position);?>" disabled placeholder="Contact Person Position" />
					</div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	  <div class="form-group">
                    <label>Contact Person Telephone Number</label>
                         <input type="text" class="form-control" onkeypress="validate(event)" name="BasicCompanyContactPerson1TelephoneNumber" value ="<?php echo htmlentities($BasicCompanyContactPerson1TelephoneNumber);?>" disabled  placeholder="Contact Person Telephone Number" />
				</div>
			   <div class="form-group">
                    <label>Contact Person Email</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson1EmailAdress" placeholder="Contact Person Email"  value ="<?php echo htmlentities($BasicCompanyContactPerson1EmailAdress);?>" disabled />
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
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2Name" placeholder="Contact Person Name" value ="<?php echo htmlentities($BasicCompanyContactPerson2Name);?>" disabled />
              </div>
			   <div class="form-group">
                    <label>Contact Person Position</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2Position" placeholder="Contact Person Position" value ="<?php echo htmlentities($BasicCompanyContactPerson2Position);?>" disabled />
              </div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	 <div class="form-group">
                    <label>Contact Person Telephone Number</label>
                         <input type="text" class="form-control" onkeypress="validate(event)" name="BasicCompanyContactPerson2TelephoneNumber" placeholder="Contact Person Telephone Number" value ="<?php echo htmlentities($BasicCompanyContactPerson2TelephoneNumber);?>" disabled />
				</div>
				<div class="form-group">
                    <label>Contact Person Email</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2EmailAdress" placeholder="Contact Person Email" value ="<?php echo htmlentities($BasicCompanyContactPerson2EmailAdress);?>" disabled />
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
                         <input type="text" class="form-control" name="BasicCompanyLegalEntityNameInIndonesia" placeholder="Company Indonesia Name" value ="<?php echo htmlentities($BasicCompanyLegalEntityNameInIndonesia);?>" disabled />
					 </div>
				    <div class="form-group">
						<label>Company Indonesia Address</label>
							 <textarea class="form-control" rows="3" name="BasicCompayAddressInIndonesia" placeholder="Company Indonesia Address" disabled><?php echo htmlentities($BasicCompayAddressInIndonesia);?></textarea>
					</div>
				    <div class="form-group">
						<label>Contact Person Name</label>
							 <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaName" placeholder="Contact Person Name" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaName);?>" disabled />
					</div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	  <div class="form-group">
                    <label>Contact Person Position </label>
                         <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaPosition" placeholder="Contact Person Position" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaPosition);?>" disabled />
              </div>	
			  <div class="form-group">
                    <label>Contact Person Telephone Number </label>
                         <input type="text" class="form-control" onkeypress="validate(event)" name="BasicCompanyContactPersonIndonesiaTelephoneNumber" placeholder="Contact Person Telephone Number" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaTelephoneNumber);?>" disabled  />
              </div>	
			  <div class="form-group">
                    <label>Contact Person Email </label>
                         <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaEmailAdress" placeholder="Contact Person Email" value ="<?php echo htmlentities($BasicCompanyContactPersonIndonesiaEmailAdress);?>" disabled  />
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
						<select class="form-control select2" name="LonglistCapitalTotalAsset" style="width: 100%;" disabled>
							 <option>- Select Total Asset -</option>
							<option value="" <?php if($LonglistCapitalTotalAsset==""){echo "selected";} ?>> - Select Total Asset -</option>
							<option value="1" <?php if($LonglistCapitalTotalAsset=="1"){echo "selected";} ?>> < 10 Million USD</option>
							<option value="2" <?php if($LonglistCapitalTotalAsset=="2"){echo "selected";} ?>> 10 - 45 Million USD</option>
							<option value="3" <?php if($LonglistCapitalTotalAsset=="3"){echo "selected";} ?>> > 45 Million USD</option>
							</select>
					  </div>
					  
					   <div class="form-group">
						<label>EBITDA</label>
						<select class="form-control select2" name="LonglistCapitalEBITDA" disabled>
						<option>- Select EBITDA -</option>
						  <option value="" <?php if($LonglistCapitalEBITDA==""){echo "selected";} ?>> - Select EBITDA -</option>
						  <option value="1" <?php if($LonglistCapitalEBITDA=="1"){echo "selected";} ?>> < 5 Million USD </option>
						  <option value="2" <?php if($LonglistCapitalEBITDA=="2"){echo "selected";} ?>> 5 - 10 Million USD</option>
						  <option value="3" <?php if($LonglistCapitalEBITDA=="3"){echo "selected";} ?>> 10 MillionUSD</option>
						  </select>
					</div>
					
					<div class="form-group">
						<label>Credit Rating</label>
						<select class="form-control select2" name="LonglistCapitalCreditRating" disabled>
						<option>- Select Credit Rating -</option>
						  <option value="" <?php if($LonglistCapitalCreditRating==""){echo "selected";} ?>> - Select Credit Rating -</option>
						  <option value="1" <?php if($LonglistCapitalCreditRating=="1"){echo "selected";} ?>>DnB Rating < 1A or equal</option>
						  <option value="2" <?php if($LonglistCapitalCreditRating=="2"){echo "selected";} ?>>DnB Rating 1A - 3A or equal</option>
						  <option value="3" <?php if($LonglistCapitalCreditRating=="3"){echo "selected";} ?>>DnB Rating 4A - 5A or equal</option>
						  </select>
					</div>
					 
              </div>




			  
			  <div class="col-md-6">
			  
				  <div class="form-group">
					<label>DSCR </label>
                         <input type="text" id="txtQty" class="form-control" name="LonglistCapitalDSCR" value ="<?php echo htmlentities($LonglistCapitalDSCR);?>" disabled placeholder="DSCR" />
                  </div>
				 
				  
				  <div class="form-group">
					<label for="berkas"> Upload Audited Financial Statement for the last 2 years (2018, 2017)</label>
					</br><a target="_blank" class="btn btn-block btn-success btn-sm" href="<?php echo base_url().'uploads/'.htmlentities($UploadFinancialStatement); ?>" <?php if($UploadFinancialStatement==""){echo "disabled";}?>>Click Here to Download  </a>
				</div>
			 </div>  
		</div>
		
		<!--PLN DPT-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">PLN DPT</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
		</div>

		<div class="form-group">
					<label>Are you registered as PLN's DPT?</label>
					<div class="row">	
				<div class="col-md-12">
				<div class="form-group">
                 
				 <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestHydroelectricPowerPlant" value="1" id="Yes" <?php if($AreaOfInterestHydroelectricPowerPlant=="1"){echo "checked";} ?> disabled  />
                      Yes
                    </label>
				  </div>
				  
				  <div class="row">	
				<div class="col-md-12">
				<div class="form-group">
                 
				 <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestHydroelectricPowerPlant" value="1" id="No" <?php if($AreaOfInterestHydroelectricPowerPlant=="1"){echo "checked";} ?> disabled  />
                      No
                    </label>
                  </div>		 
				
				</div>
				  
				

		 </br>
			<!--Area Of Interset-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Area of Interest</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
		</div>
		
				<div class="row">	
				<div class="col-md-12">
				<div class="form-group">
                 
				 <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestHydroelectricPowerPlant" value="1" id="HydroelectricPP" <?php if($AreaOfInterestHydroelectricPowerPlant=="1"){echo "checked";} ?> disabled  />
                      Coal Fired
                    </label>
                  </div>
				  
				<!-- Start Hydroelectric Power Plant (PP)-->
				  <div class="box box-info" id="HydroelectricForm" <?php if($AreaOfInterestHydroelectricPowerPlant!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Hydroelectric Power Plant (PP)</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceHydroelectricCapacity1" value="1" <?php if($PreferenceHydroelectricCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity2" value="1" <?php if($PreferenceHydroelectricCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity3" value="1" <?php if($PreferenceHydroelectricCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity4" value="1" <?php if($PreferenceHydroelectricCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity5" value="1" <?php if($PreferenceHydroelectricCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity6" value="1" <?php if($PreferenceHydroelectricCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleIPP" value="1" <?php if($PreferenceHydroelectricRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleTechnologyProvider" value="1"  <?php if($PreferenceHydroelectricRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleConsultingServiceProvider" value="1" <?php if($PreferenceHydroelectricRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleFinancingProvider" value="1" <?php if($PreferenceHydroelectricRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleEPCProvider" value="1"<?php if($PreferenceHydroelectricRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleOMServiceProvider" value="1"<?php if($PreferenceHydroelectricRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceHydroelectricNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceHydroelectricNotes);; ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceHydroelectricExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceHydroelectricExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceHydroelectricExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceHydroelectricExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceHydroelectricExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceHydroelectricExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceHydroelectricExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceHydroelectricExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceHydroelectricExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceHydroelectricExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceHydroelectricExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceHydroelectricExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
				<!-- EOF Coal Fired -->

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestGeothermalPP" value="1" id="GeothermalPP" <?php if($AreaOfInterestGeothermalPP=="1"){echo "checked";} ?> disabled />
                      Mine Mouth
                    </label>
                  </div>
				  
				<!-- Geothermal Form -->
				   <div class="box box-info" id="GeothermalForm" <?php if($AreaOfInterestGeothermalPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Geothermal PP</h3>
					</div>
						<div class="box-body">
						
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceGeothermalCapacity1" value="1" <?php if($PreferenceGeothermalCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity2" value="1" <?php if($PreferenceGeothermalCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity3" value="1" <?php if($PreferenceGeothermalCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity4" value="1" <?php if($PreferenceGeothermalCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity5" value="1" <?php if($PreferenceGeothermalCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity6" value="1" <?php if($PreferenceGeothermalCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleIPP" value="1" <?php if($PreferenceGeothermalRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleTechnologyProvider" value="1"  <?php if($PreferenceGeothermalRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleConsultingServiceProvider" value="1" <?php if($PreferenceGeothermalRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleFinancingProvider" value="1" <?php if($PreferenceGeothermalRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleEPCProvider" value="1"<?php if($PreferenceGeothermalRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleOMServiceProvider" value="1"<?php if($PreferenceGeothermalRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceGeothermalNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceGeothermalNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceGeothermalExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceGeothermalExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceGeothermalExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceGeothermalExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceGeothermalExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceGeothermalExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceGeothermalExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceGeothermalExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceGeothermalExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceGeothermalExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceGeothermalExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceGeothermalExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceGeothermalExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceGeothermalExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
					</div>
				
				  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestSolarPhotovoltaicPP" value="1" id="SolarPhotovoltaicPP" <?php if($AreaOfInterestSolarPhotovoltaicPP=="1"){echo "checked";} ?> disabled />
                      Gas Fired / Combined Cycle
                    </label>
                  </div>
				  
				<!-- Gas Fired / Combined Cycle Form -->
				  <div class="box box-info" id="SolarPhotovoltaicForm" <?php if($AreaOfInterestSolarPhotovoltaicPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Solar Photovoltaic PP</h3>
					</div>
					
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity1" value="1" <?php if($PreferenceSolarPhotovoltaicCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity2" value="1" <?php if($PreferenceSolarPhotovoltaicCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity3" value="1" <?php if($PreferenceSolarPhotovoltaicCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity4" value="1" <?php if($PreferenceSolarPhotovoltaicCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity5" value="1" <?php if($PreferenceSolarPhotovoltaicCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity6" value="1" <?php if($PreferenceSolarPhotovoltaicCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleIPP" value="1" <?php if($PreferenceSolarPhotovoltaicRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleTechnologyProvider" value="1"  <?php if($PreferenceSolarPhotovoltaicRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleConsultingServiceProvider" value="1" <?php if($PreferenceSolarPhotovoltaicRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleFinancingProvider" value="1" <?php if($PreferenceSolarPhotovoltaicRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleEPCProvider" value="1"<?php if($PreferenceSolarPhotovoltaicRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleOMServiceProvider" value="1"<?php if($PreferenceSolarPhotovoltaicRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceSolarPhotovoltaicNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceSolarPhotovoltaicNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceSolarPhotovoltaicExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceSolarPhotovoltaicExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceSolarPhotovoltaicExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
					</div>

					<!--EOF Gas Fired -->
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestSolarThermalPP" value="1" id="SolarThermalPP" <?php if($AreaOfInterestSolarThermalPP=="1"){echo "checked";} ?> disabled />
                      Waste To Energy
                    </label>
                  </div>
				  
				  
				<!-- Waste to Energy Form -->
				  <div class="box box-info" id="SolarThermalForm" <?php if($AreaOfInterestSolarThermalPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Gas Fire/ Combined Cycle</h3>
					</div>
					
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceSolarThermalCapacity1" value="1" <?php if($PreferenceSolarThermalCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity2" value="1" <?php if($PreferenceSolarThermalCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity3" value="1" <?php if($PreferenceSolarThermalCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity4" value="1" <?php if($PreferenceSolarThermalCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity5" value="1" <?php if($PreferenceSolarThermalCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity6" value="1" <?php if($PreferenceSolarThermalCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleIPP" value="1" <?php if($PreferenceSolarThermalRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleTechnologyProvider" value="1"  <?php if($PreferenceSolarThermalRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleConsultingServiceProvider" value="1" <?php if($PreferenceSolarThermalRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleFinancingProvider" value="1" <?php if($PreferenceSolarThermalRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleEPCProvider" value="1"<?php if($PreferenceSolarThermalRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleOMServiceProvider" value="1"<?php if($PreferenceSolarThermalRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceSolarThermalNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceSolarThermalNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarThermalExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceSolarThermalExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarThermalExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarThermalExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarThermalExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarThermalExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarThermalExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarThermalExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSolarThermalExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSolarThermalExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceSolarThermalExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceSolarThermalExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>

				<!-- EOF Waste -->
				  				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestWindPowerPP" value="1" id="WindPowerPP" <?php if($AreaOfInterestWindPowerPP=="1"){echo "checked";} ?> disabled />
                      Diesel Power
                    </label>
                  </div>
				  
				  <!-- Diesel POwer Form -->
				  <div class="box box-info" id="WindPowerForm" <?php if($AreaOfInterestWindPowerPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Waste To Energy</h3>
					</div>
											
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceWindPowerCapacity1" value="1" <?php if($PreferenceWindPowerCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity2" value="1" <?php if($PreferenceWindPowerCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity3" value="1" <?php if($PreferenceWindPowerCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity4" value="1" <?php if($PreferenceWindPowerCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity5" value="1" <?php if($PreferenceWindPowerCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity6" value="1" <?php if($PreferenceWindPowerCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleIPP" value="1" <?php if($PreferenceWindPowerRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleTechnologyProvider" value="1"  <?php if($PreferenceWindPowerRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleConsultingServiceProvider" value="1" <?php if($PreferenceWindPowerRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleFinancingProvider" value="1" <?php if($PreferenceWindPowerRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleEPCProvider" value="1"<?php if($PreferenceWindPowerRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleOMServiceProvider" value="1"<?php if($PreferenceWindPowerRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceWindPowerNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceWindPowerNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWindPowerExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceWindPowerExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWindPowerExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWindPowerExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWindPowerExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWindPowerExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWindPowerExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWindPowerExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWindPowerExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWindPowerExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWindPowerExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWindPowerExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceWindPowerExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceWindPowerExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
				<!-- EOF Diesel power-->
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestEnergyStoragePumpedPP" value="1" id="EnergyStoragePP" <?php if($AreaOfInterestEnergyStoragePumpedPP=="1"){echo "checked";} ?> disabled />
                      Biomass, Biogass, Bioful energy
                    </label>
                  </div>
				  			  
				<!-- Biomas Form -->
				  <div class="box box-info" id="EnergyStorageForm" <?php if($AreaOfInterestEnergyStoragePumpedPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Diesel Power</h3>
					</div>
										
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceEnergyStorageCapacity1" value="1" <?php if($PreferenceEnergyStorageCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity2" value="1" <?php if($PreferenceEnergyStorageCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity3" value="1" <?php if($PreferenceEnergyStorageCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity4" value="1" <?php if($PreferenceEnergyStorageCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity5" value="1" <?php if($PreferenceEnergyStorageCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity6" value="1" <?php if($PreferenceEnergyStorageCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleIPP" value="1" <?php if($PreferenceEnergyStorageRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleTechnologyProvider" value="1"  <?php if($PreferenceEnergyStorageRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleConsultingServiceProvider" value="1" <?php if($PreferenceEnergyStorageRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleFinancingProvider" value="1" <?php if($PreferenceEnergyStorageRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleEPCProvider" value="1"<?php if($PreferenceEnergyStorageRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleOMServiceProvider" value="1"<?php if($PreferenceEnergyStorageRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceEnergyStorageNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceEnergyStorageNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceEnergyStorageExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceEnergyStorageExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceEnergyStorageExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceEnergyStorageExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceEnergyStorageExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceEnergyStorageExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceEnergyStorageExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceEnergyStorageExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceEnergyStorageExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceEnergyStorageExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceEnergyStorageExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceEnergyStorageExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
				  

				<!-- end biomas -->
				  <div class="checkbox">
					<label>
					  <input type="checkbox" name="AreaOfInterestSeaEnergyPP" value="1" id="SeaEnergyPP" <?php if($AreaOfInterestSeaEnergyPP=="1"){echo "checked";} ?> disabled />
                      Nuclear Energy
                    </label>
                  </div>
				  
				  
				<!-- Nuclear Form -->
				   <div class="box box-info" id="SeaEnergyForm" <?php if($AreaOfInterestSeaEnergyPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Biomass, Biogas, Bioful Energy</h3>
					</div>
											
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceSeaEnergyCapacity1" value="1" <?php if($PreferenceSeaEnergyCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity2" value="1" <?php if($PreferenceSeaEnergyCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity3" value="1" <?php if($PreferenceSeaEnergyCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity4" value="1" <?php if($PreferenceSeaEnergyCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity5" value="1" <?php if($PreferenceSeaEnergyCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity6" value="1" <?php if($PreferenceSeaEnergyCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleIPP" value="1" <?php if($PreferenceSeaEnergyRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleTechnologyProvider" value="1"  <?php if($PreferenceSeaEnergyRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleConsultingServiceProvider" value="1" <?php if($PreferenceSeaEnergyRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleFinancingProvider" value="1" <?php if($PreferenceSeaEnergyRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleEPCProvider" value="1"<?php if($PreferenceSeaEnergyRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleOMServiceProvider" value="1"<?php if($PreferenceSeaEnergyRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceSeaEnergyNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceSeaEnergyNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSeaEnergyExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceSeaEnergyExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSeaEnergyExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSeaEnergyExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSeaEnergyExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSeaEnergyExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSeaEnergyExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSeaEnergyExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceSeaEnergyExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceSeaEnergyExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceSeaEnergyExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceSeaEnergyExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestWastetoEnergyPP" value="1" id="WastetoEnergyPP" <?php if($AreaOfInterestWastetoEnergyPP=="1"){echo "checked";} ?> disabled />
                      Coal Gasification
                    </label>
                  </div>
				  
				  <!-- COal Form -->
				  <div class="box box-info" id="WastetoEnergyForm" <?php if($AreaOfInterestWastetoEnergyPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Waste to Energy PP</h3>
					</div>
											
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceWasteToEnergyCapacity1" value="1" <?php if($PreferenceWasteToEnergyCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity2" value="1" <?php if($PreferenceWasteToEnergyCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity3" value="1" <?php if($PreferenceWasteToEnergyCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity4" value="1" <?php if($PreferenceWasteToEnergyCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity5" value="1" <?php if($PreferenceWasteToEnergyCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity6" value="1" <?php if($PreferenceWasteToEnergyCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleIPP" value="1" <?php if($PreferenceWasteToEnergyRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleTechnologyProvider" value="1"  <?php if($PreferenceWasteToEnergyRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleConsultingServiceProvider" value="1" <?php if($PreferenceWasteToEnergyRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleFinancingProvider" value="1" <?php if($PreferenceWasteToEnergyRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleEPCProvider" value="1"<?php if($PreferenceWasteToEnergyRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleOMServiceProvider" value="1"<?php if($PreferenceWasteToEnergyRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceWasteToEnergyNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceWasteToEnergyNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWasteToEnergyExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceWasteToEnergyExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWasteToEnergyExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWasteToEnergyExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWasteToEnergyExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWasteToEnergyExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceWasteToEnergyExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceWasteToEnergyExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestNuclearEnergyPP" value="1" id="NuclearEnergyPP" <?php if($AreaOfInterestNuclearEnergyPP=="1"){echo "checked";}?> disabled />
                      Others
                    </label>
                  </div>
				  
				  
				<!-- Nuclear Form -->
				  <div class="box box-info" id="NuclearEnergyForm" <?php if($AreaOfInterestNuclearEnergyPP!="1"){echo "style=\"display:none\"";} ?>>
					<div class="box-header">
					  <h3 class="box-title">Nuclear Energy</h3>
					</div>
											
					<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceNuclearCapacity1" value="1" <?php if($PreferenceNuclearCapacity1=="1"){echo "checked";} ?> disabled  />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity2" value="1" <?php if($PreferenceNuclearCapacity2=="1"){echo "checked";} ?> disabled  />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity3" value="1" <?php if($PreferenceNuclearCapacity3=="1"){echo "checked";} ?> disabled  />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity4" value="1" <?php if($PreferenceNuclearCapacity4=="1"){echo "checked";} ?> disabled />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity5" value="1" <?php if($PreferenceNuclearCapacity5=="1"){echo "checked";} ?> disabled  />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity6" value="1" <?php if($PreferenceNuclearCapacity6=="1"){echo "checked";} ?> disabled  />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleIPP" value="1" <?php if($PreferenceNuclearRoleIPP=="1"){echo "checked";} ?> disabled  />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleTechnologyProvider" value="1"  <?php if($PreferenceNuclearRoleTechnologyProvider=="1"){echo "checked";} ?> disabled />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleConsultingServiceProvider" value="1" <?php if($PreferenceNuclearRoleConsultingServiceProvider=="1"){echo "checked";} ?> disabled />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleFinancingProvider" value="1" <?php if($PreferenceNuclearRoleFinancingProvider=="1"){echo "checked";} ?> disabled />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleEPCProvider" value="1"<?php if($PreferenceNuclearRoleEPCProvider=="1"){echo "checked";} ?> disabled />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleOMServiceProvider" value="1"<?php if($PreferenceNuclearRoleOMServiceProvider=="1"){echo "checked";} ?> disabled  />
								  O&M Service Provider 
								</label>
							</div>
						 </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceNuclearNotes" placeholder="Notes Preference" disabled><?php echo htmlentities($PreferenceNuclearNotes); ?></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceNuclearExpRoleIPPCapacity" placeholder="Experience: ____ MW"  value ="<?php echo $PreferenceNuclearExpRoleIPPCapacity?>" disabled />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceNuclearExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceNuclearExpRoleConsultingServiceProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceNuclearExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceNuclearExpRoleTechnologyProviderCapacity?>" disabled  />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceNuclearExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceNuclearExpRoleFinancingProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceNuclearExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceNuclearExpRoleEPCProviderCapacity?>" disabled  />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" id="txtQty" class="form-control" name="PreferenceNuclearExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" value ="<?php echo $PreferenceNuclearExpRoleOMServiceProviderCapacity?>" disabled  />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceNuclearExpNotes" placeholder="Notes Experiences" disabled><?php echo htmlentities($PreferenceNuclearExpNotes); ?></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
	
				  
              </div>
		</div>
		</div>
				
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
						  <th>Type</th>
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

										for($x = 0; $x < $arrlength; $x++) { ?>
										<tr>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectName[<?php echo $x?>]" placeholder="Project Name" class="input-block-level"  id="input-mod" disabled /><?php echo htmlentities($ProjectName[$x]); ?></textarea></td>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectLocation[<?php echo $x?>]"  placeholder="Location" class="input-block-level"  id="input-mod" disabled /><?php echo htmlentities($ProjectLocation[$x]); ?></textarea></td>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectType[<?php echo $x?>]"  placeholder="Type" class="input-block-level"  id="input-mod" disabled /><?php echo htmlentities($ProjectType[$x]); ?></textarea></td>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectCapacity[<?php echo $x?>]"  placeholder="Capacity" class="input-block-level"  id="input-mod" disabled /><?php echo htmlentities($ProjectCapacity[$x]); ?></textarea></td>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectCOD[<?php echo $x?>]"  placeholder="Year COD" class="input-block-level"  id="input-mod" disabled /><?php echo htmlentities($ProjectCOD[$x]); ?></textarea></td>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectTariff[<?php echo $x?>]"  placeholder="Tariff" class="input-block-level"  id="input-mod"  disabled /><?php echo htmlentities($ProjectTariff[$x]); ?></textarea></td>
										  <td id="td-mod"><textarea style="resize: none;" class="form-control" name="ProjectValue[<?php echo $x?>]"  placeholder="Value" class="input-block-level"  id="input-mod" disabled /><?php echo htmlentities($ProjectValue[$x]); ?></textarea></td>
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
										</tr>
										<?php }?>
                        </tbody>
                    </table>
					
					
			</div>
			</div>
   
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	 </div>
	 
 </section>
	

		