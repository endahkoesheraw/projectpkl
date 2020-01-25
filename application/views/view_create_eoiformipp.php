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
		
		function CoalGasificationFunction() {
		  var checkBox = document.getElementById("CoalGasification");
		  var WastetoEnergyForm = document.getElementById("CoalGasificationForm");
		  if (checkBox.checked == true){
				CoalGasificationForm.style.display = "block";
		  } else {
				CoalGasificationForm.style.display = "none";
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
				Create EoI Submission IPP
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-book"></i>  Create EoI Submission</a></li>
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
        
              
				<!-- form start -->
                <?php echo form_open_multipart('create_eoi_formipp/proses'); ?>
			<div class="row">
				<div class="col-md-6">
                  <div class="form-group">
                    <label>Company Name </label>
                         <input type="text" class="form-control" name="BasicCompanyLegalEntityName" placeholder="Company Name" maxlength="100" required />
                  </div>
				   <div class="form-group">
                    <label>Company Code</label>&nbsp<small><i>(Required but not mandatory)</i></small>
                         <input type="text" class="form-control" name="BasicCompanyCode" placeholder="Company Code" maxlength = "4" />
                  </div>
				  <div class="form-group">
                  <label>Company Address</label>
                  <textarea class="form-control" rows="3" name="BasicCompayAddress" placeholder="Company Address" maxlength="255" required></textarea>
				  </div>
				  <div class="form-group">
                    <label>Web Address</label>
                         <input type="text" class="form-control" name="BasicCompanyWebAddress" placeholder="Web Address" maxlength="50" required />
                  </div>			 
              </div>
               <!-- /.col -->
              <div class="col-md-6">		 
				 <div class="form-group">
                    <label>Company Year Established</label>
                         <input type="text"  id="txtNum" class="form-control" name="BasicCompanyYearEstablished" placeholder="Company Year Established" maxlength = "4" required />
                  </div>
				   <div class="form-group">
                    <label>Company Country of Establishment</label>
                         <input type="text" class="form-control" name="BasicCompanyCountryOfEstablishment" placeholder="Company Country of Establishment" maxlength="255" required />
                  </div>
				   <div class="form-group">
                <label>Company Status</label>
                <select class="form-control select2" name="LonglistCompatibilityLegitimacy" required>
                      <option selected="selected">- Select Company Status -</option>
					  <option value="1" >No Information</option>
					  <option value="2" >Individual Company</option>
					  <option value="3">Private Company</option>
					  <option value="4">Publicly Listed Company</option>
					  <option value="5">State Owned Company</option>
                </select>
              </div>
			  <div class="form-group">
					<label for="berkas">Upload Company Profile </label><small> *) Pdf format, Max size 20 MB</small>
						<input onchange="ValidateSize20(this)" type="file"  name="UploadCompanyProfile" class="single-input" placeholder="Upload Company Profile" accept=".pdf" required>
				</div>
				<div class="form-group">
					<label for="berkas">Upload Signed EOI </label><small> *) Pdf format, Max size 3 MB</small>
					<input onchange="ValidateSize(this)" type="file"  name="UploadSignedEOI"  class="single-input" placeholder="Upload Signed EOI " accept=".pdf" required>
				</div>
			  <div class="form-group">
			      <input type="hidden" class="form-control" name="UId" placeholder="User Id"  value="<?php echo $this->session->userdata('id');?>"/>
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
                         <input type="text" class="form-control" name="BasicCompanyContactPerson1Name" placeholder="Contact Person Name" maxlength="100" required />
					</div>
				    <div class="form-group">
						<label>Contact Person Position</label>
							 <input type="text" class="form-control" name="BasicCompanyContactPerson1Position" placeholder="Contact Person Position" maxlength="100" required />
					</div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	  <div class="form-group">
                    <label>Contact Person Telephone Number</label>
                         <input type="text" class="form-control" id="txtNum" name="BasicCompanyContactPerson1TelephoneNumber" placeholder="Contact Person Telephone Number" maxlength="100"  required />
				</div>
			   <div class="form-group">
                    <label>Contact Person Email</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson1EmailAdress" placeholder="Contact Person Email" maxlength="100" required />
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
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2Name" placeholder="Contact Person Name" maxlength="100" required />
              </div>
			   <div class="form-group">
                    <label>Contact Person Position</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2Position" placeholder="Contact Person Position" maxlength="100" required />
              </div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	 <div class="form-group">
                    <label>Contact Person Telephone Number</label>
                         <input type="text" class="form-control" id="txtNum" name="BasicCompanyContactPerson2TelephoneNumber" placeholder="Contact Person Telephone Number" maxlength="100" required />
				</div>
				<div class="form-group">
                    <label>Contact Person Email</label>
                         <input type="text" class="form-control" name="BasicCompanyContactPerson2EmailAdress" placeholder="Contact Person Email" maxlength="100" required />
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
                         <input type="text" class="form-control" name="BasicCompanyLegalEntityNameInIndonesia" placeholder="Company Indonesia Name" maxlength="100" />
					 </div>
				    <div class="form-group">
						<label>Company Indonesia Address</label>
							 <textarea class="form-control" rows="3" name="BasicCompayAddressInIndonesia" placeholder="Company Indonesia Address" maxlength="255" ></textarea>
					</div>
				    <div class="form-group">
						<label>Contact Person Name</label>
							 <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaName" placeholder="Contact Person Name" maxlength="100" />
					</div>
              </div>
               <!-- /.col -->
              <div class="col-md-6">
			 	  <div class="form-group">
                    <label>Contact Person Position </label>
                         <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaPosition" placeholder="Contact Person Position" maxlength="100" />
              </div>	
			  <div class="form-group">
                    <label>Contact Person Telephone Number </label>
                         <input type="text" class="form-control" id="txtNum" name="BasicCompanyContactPersonIndonesiaTelephoneNumber" placeholder="Contact Person Telephone Number" maxlength="100" />
              </div>	
			  <div class="form-group">
                    <label>Contact Person Email </label>
                         <input type="text" class="form-control" name="BasicCompanyContactPersonIndonesiaEmailAdress" placeholder="Contact Person Email" maxlength="100"  />
              </div>		
             </div>
		</div>
		
			</br>
			<!--Financial Criteria-->
			<div class="box box-success">
			 <div class="box-header with-border">
					<h3 class="box-title">Financial Criteria IPP</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
			</div>
			
			<div class="row">	
				<div class="col-md-6">
					   <div class="form-group">
						<label>Total Asset </label>
						<select class="form-control select2" name="LonglistCapitalTotalAssetIPP" style="width: 100%;" required>
							 <option value="" selected="selected">- Select Total Asset -</option>
							<option value="1"> < 10 Million USD</option>
							<option value="2"> 10 - 45 Million USD</option>
							<option value="3"> > 45 Million USD</option>
						</select>
					  </div>
					  
					  <div class="form-group">
						<label>EBITDA </label>
						<select class="form-control select2" name="LonglistCapitalEBITDAIPP" style="width: 100%;" required>
							<option value="" selected="selected">- Select EBITDA -</option>
							<option value="1"> < 5 Million USD </option>
							<option value="2"> 5 - 10 Million USD</option>
							<option value="3"> > 10 Million USD</option>
						</select>
					  </div>
					  
					  <div class="form-group">
						<label>Credit Rating IPP </label>
						<select class="form-control select2" name="LonglistCapitalCreditRatingIPP" style="width: 100%;" required>
							 <option value="" selected="selected">- Select Credit Rating -</option>
							<option value="1">DnB Rating < 1A or equal</option>
							<option value="2">DnB Rating 1A - 3A or equal</option>
							<option value="3">DnB Rating < 4A or equal</option>
						</select>
				  </div>
         </div>
			  
			  <div class="col-md-6">
				  <div class="form-group">
					<label>DSCR </label>
            <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="LonglistCapitalDSCR" placeholder="DSCR" maxlength="255" required />
        </div>
				 

				  <div class="form-group">
					<label for="berkas"> Upload Audited Financial Statement <br> For the last 2 years (2018, 2017) </label><small> *) Pdf format, Max size 50 MB</small>
					<input onchange="ValidateSize50(this)" type="file"  name="UploadFinancialStatement" placeholder="Upload Financial Statement "  class="single-input"  accept=".pdf" required>
				</div>
			 </div>  
		</div>
		
         </br>
         <!--PLN DPT-->
			<!-- <div class="box box-success">
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
                      <input type="checkbox" name="AreaOfInterestCoalFired" value="1" id="CoalFired" onclick="CoalFiredFunction()" />
                      Coal Fired
                    </label>
                  </div>
				  
				<!-- Coal Fired Form -->
				  <div class="box box-info" id="CoalFiredForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Coal Fired</h3>
					</div>
						
						<!-- Preferred -->
						<label>Preferred Role: </label>
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredLender" value="1" />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredManufacturer" value="1" />
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalFiredConsultant" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceCoalFiredNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
					</div>
				</div>
                

				  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestMineMouth" value="1" id="MineMouth" onclick="MineMouthFunction()"/>
                    Mine Mouth
                    </label>
                  </div>
				  
				<!-- MainMOuth Form -->
				  <div class="box box-info" id="MineMouthForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Mine Mouth</h3>
					</div>

						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthLender" value="1" />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthManufacturer" value="1" />
								  Manufacturer
								</label>
              </div>
              <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceMineMouthConsultant" value="1" />
								  Consultant
								</label>
						  </div>
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceMineMouthNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestGasFiredCombinedCycle" value="1" id="GasFiredCombinedCycle" onclick="GasFiredCombinedCycleFunction()"/>
                      Gas Fired
                    </label>
                  </div>
				  
				<!-- Gas Fired Form -->
				  <div class="box box-info" id="GasFiredCombinedCycleForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Gas Fired</h3>
					</div>
						<div class="box-body">
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleLender" value="1" />
								  Lender    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleLender" value="1" />
								  Lender    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleManufacturer" value="1" />
								  Manufacturer
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCyclePrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGasFiredCombinedCycleConsultant" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceGasFiredCombinedCycleNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
            </div>	
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestWasteToEnergy" value="1" id="WasteToEnergy" onclick="WasteToEnergyFunction()"/>
                      Waste to Energy
                    </label>
                  </div>
				  
				  <!-- Waste To Energy Form -->
				  <div class="box box-info" id="WasteToEnergyForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Waste to Energy</h3>
					</div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>

            <div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyLender" value="1" />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyLender" value="1" />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyManufacturer" value="1" />
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyConsultant" value="1" />
								  Consultant
								</label>
						</div>
					</div>

					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceWasteToEnergyNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
          </div>       
					</div>
				</div>
				  

				  <div class="checkbox">
            <label>
					  <input type="checkbox" name="AreaOfInterestDieselPower" value="1" id="DieselPower" onclick="DieselPowerFunction()"/>
            Diesel Power
            </label>
          </div>
				  			  
				<!-- Diesel Power Form -->
				  <div class="box box-info" id="DieselPowerForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Diesel Power</h3>
					</div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
              <div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerLender" value="1" />
								  Lender    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerManufacturer" value="1" />
								  Manufacturer
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceDieselPowerConsultant" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceDieselPowerNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				</div>
				<!-- EOF diesel Form -->


				  
				  <div class="checkbox">
					<label>
					  <input type="checkbox" name="AreaOfInterestBiomassBiogasBioful" value="1" id="BiomassBiogasBioful" onclick="BiomassBiogasBiofulFunction()"/>
                      Biomass, Biogas, Bioful Energy
                    </label>
                  </div>
				  
				<!-- Biomas Form -->
				  <div class="box box-info" id="BiomassBiogasBiofulForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Biomass, Biogas, Bioful Energy</h3>
					</div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulLender" value="1" />
								  Lender    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulManufacturer" value="1" />
								  Manufacturer
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceBiomassBiogasBiofulConsultant" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceBiomassBiogasBiofulNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
          </div>	
					
					</div>
				</div>
				<!-- EOF BIOMAS  -->

				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestNuclearEnergy" value="1" id="NuclearEnergy" onclick="NuclearEnergyFunction()"/>
                      Nuclear Energy
                    </label>
                  </div>
				  
				  	<!-- WasteToEnergy Form -->
				  <div class="box box-info" id="NuclearEnergyForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Nuclear Energy</h3>
                    </div>
                    
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyLender" value="1" />
								  Lender     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyManufacturer" value="1" />
								  Manufacturer
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearEnergyConsultant" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceNuclearEnergyNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>        
					</div>
				</div>

				<!-- EOF NUCLEAR -->
				  


				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestCoalGasification" value="1" id="CoalGasification" onclick="CoalGasificationFunction()"/>
                    Coal Gasification
                    </label>
                  </div>
				<!-- Nuclear Form -->
				  <div class="box box-info" id="CoalGasificationForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Coal Gasification</h3>
					</div>
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationInvestor" value="1" />
								  Investor
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationEPC" value="1" />
								  EPC Contractor     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationLender" value="1" />
								  Lender    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationManufacturer" value="1" />
								  Manufacturer
								</label>
                            </div>
                            <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationLandOwner" value="1" />
								  Land Owner     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationOperationMaintenance" value="1" />
								  Operation n Maintenance   
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationPrimaryEnergy" value="1" />
								  Primary Energy
								</label>
                </div>
                <div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceCoalGasificationConsultant" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceCoalGasificationNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 		
					</div>
				</div>
				 <!-- EOF COAL GASIFICATION --> 


				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestOthers" value="1" id="Others" onclick="OthersFunction()"/>
                      Others
                    </label>
                  </div>
				<!-- OtherClean Form -->
				  <div class="box box-info" id="OthersForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Others</h3>
					</div>
						  
					<label>Preferred Role: </label>
							
							<div class="row">	
								<div class="col-md-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersInvestor" value="1" />
										Investor
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersEPC" value="1" />
										EPC Contractor     
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersLender" value="1" />
										Lender     
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersManufacturer" value="1" />
										Manufacturer
									</label>
															</div>
															<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersLandOwner" value="1" />
										Land Owner     
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersOperationMaintenance" value="1" />
										Operation n Maintenance   
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersPrimaryEnergy" value="1" />
										Primary Energy
									</label>
															</div>
															<div class="checkbox">
									<label>
										<input type="checkbox" name="PreferenceOthersConsultant" value="1" />
										Consultant
									</label>
															</div>
					
						
					</div>
					
					<!-- Notes Preference -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Preference:</label>
						  <textarea class="form-control" rows="10" name="PreferenceOthersNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
            </div>
        	</div>
				</div>
		</div>
  </div>
</div>
		<!-- ENd Of Area Of inTerSt  -->
				
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
						  <th>Capacity (MW) <br><small><i>*) Numeric</i></small></th>
						  <th>Year COD<br><small><i>*) Numeric</i></small></th>
						  <th>Tariff (USD cent / kWh)<br><small><i>*) Numeric</i></small></th>
						  <th>Value (USD)<br><small><i>*) Numeric</i></small></th>
						  <th>Roles</th>
						</tr>
						</thead>
                        <tbody id="itemlist">
                            <tr>
                                <td id="td-mod"><input name="ProjectName[0]" placeholder="Project Name" class="form-control" class="input-block-level"  id="input-mod"/></td>
                                <td id="td-mod"><input name="ProjectLocation[0]" placeholder="Location" class="form-control" class="input-block-level" id="input-mod"/></td>
                                <td id="td-mod">
								<select class="input-block-level" id="input-mod" name="ProjectType[0]" style="width: 100%;" required>
									 <option selected="selected">- Select Type-</option>
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
                                <td id="td-mod"><input name="ProjectCapacity[0]" onkeypress="return isNumberKey(event,this)" placeholder="Capacity" class="form-control" class="input-block-level" id="input-mod"/></td>
                                <td id="td-mod"><input name="ProjectCOD[0]" onkeypress="validate(event)"placeholder="Year COD" class="form-control" class="input-block-level" id="input-mod" maxlength="4" onpaste="return false"/></td>
                                <td id="td-mod"><input name="ProjectTariff[0]"onkeypress="return isNumberKey(event,this)" placeholder="Tariff" class="form-control" class="input-block-level" id="input-mod"/></td>
                                <td id="td-mod"><input name="ProjectValue[0]" onkeypress="return isNumberKey(event,this)" placeholder="USD" class="form-control" class="input-block-level" id="input-mod" /></td>
                
                                <td>
								<div class="checkbox">
									<label>
									  <input type="checkbox" name="ProjectRoleIPP[0]" value="TRUE" />
									  IPP / Equity Provider 
									</label>
								</div>
								<div class="checkbox">
									<label>
									  <input type="checkbox" name="ProjectRoleFinancingProvider[0]" value="TRUE" />
									  Financing Provider    
									</label>
								</div>
									<div class="checkbox">
									<label>
									  <input type="checkbox" name="ProjectRoleTechnologyProvider[0]" value="TRUE" />
									  Technology Provider     
									</label>
								</div>
								<div class="checkbox">
									<label>
									<input type="checkbox" name="ProjectRoleEPCProvider[0]" value="TRUE" />
									EPC Service Provider    
									</label>
								</div>
								<div class="checkbox">
									<label>
									 <input type="checkbox" name="ProjectRoleConsultingServiceProvider[0]" value="TRUE" />
									 Consulting Provider       
									</label>
								</div>
								<div class="checkbox">
									<label>
									 <input type="checkbox" name="ProjectRoleOMServiceProvider[0]" value="TRUE" />
									 O&M Service Provider    
									</label>
								</div>
								</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7"></td>
								<td>
                                    <button class="btn btn-small btn-default" onclick="additem(); return false"><i class="fa fa-plus"></i></button>
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
									window.setTimeout(function(){window.location.href = "<?php base_url();?>eoi_formipp"},3000);
								});
							</script>
                        </div>    
                    <?php } ?>
			</div>
			</div>
		   
		   <div class="row">	
				<div class="col-md-12">
					<button type="submit" name="simpan" id="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
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
<!--Decimal Character-->
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

<!-- 3 MB -->
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

<!-- 20 MB -->
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
                ProjectCOD.setAttribute('class', 'form-control');
                ProjectCOD.setAttribute('maxlength', '4');
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
            }
    </script>
	