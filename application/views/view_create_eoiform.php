	<script>
		function HydroelectricFunction() {
		  var checkBox = document.getElementById("HydroelectricPP");
		  var HydroelectricForm = document.getElementById("HydroelectricForm");
		  if (checkBox.checked == true){
			HydroelectricForm.style.display = "block";
		  } else {
			HydroelectricForm.style.display = "none";
		  }
		}
		
		function GeothermalFunction() {
		  var checkBox = document.getElementById("GeothermalPP");
		  var GeothermalForm = document.getElementById("GeothermalForm");
		  if (checkBox.checked == true){
			GeothermalForm.style.display = "block";
		  } else {
			GeothermalForm.style.display = "none";
		  }
		}
		
		function SolarPhotovoltaicFunction() {
		  var checkBox = document.getElementById("SolarPhotovoltaicPP");
		  var SolarPhotovoltaicForm = document.getElementById("SolarPhotovoltaicForm");
		  if (checkBox.checked == true){
			SolarPhotovoltaicForm.style.display = "block";
		  } else {
			SolarPhotovoltaicForm.style.display = "none";
		  }
		}
		
		function SolarThermalFunction() {
		  var checkBox = document.getElementById("SolarThermalPP");
		  var SolarThermalForm = document.getElementById("SolarThermalForm");
		  if (checkBox.checked == true){
			SolarThermalForm.style.display = "block";
		  } else {
			SolarThermalForm.style.display = "none";
		  }
		}
		
		function WindPowerFunction() {
		  var checkBox = document.getElementById("WindPowerPP");
		  var WindPowerlForm = document.getElementById("WindPowerForm");
		  if (checkBox.checked == true){
			WindPowerlForm.style.display = "block";
		  } else {
			WindPowerlForm.style.display = "none";
		  }
		}
		
		function EnergyStorageFunction() {
		  var checkBox = document.getElementById("EnergyStoragePP");
		  var EnergyStorageForm = document.getElementById("EnergyStorageForm");
		  if (checkBox.checked == true){
			EnergyStorageForm.style.display = "block";
		  } else {
			EnergyStorageForm.style.display = "none";
		  }
		}
		
		function SeaEnergyFunction() {
		  var checkBox = document.getElementById("SeaEnergyPP");
		  var SeaEnergyForm = document.getElementById("SeaEnergyForm");
		  if (checkBox.checked == true){
			SeaEnergyForm.style.display = "block";
		  } else {
			SeaEnergyForm.style.display = "none";
		  }
		}
		
		function WastetoEnergyFunction() {
		  var checkBox = document.getElementById("WastetoEnergyPP");
		  var WastetoEnergyForm = document.getElementById("WastetoEnergyForm");
		  if (checkBox.checked == true){
			WastetoEnergyForm.style.display = "block";
		  } else {
			WastetoEnergyForm.style.display = "none";
		  }
		}
		
		function NuclearEnergyFunction() {
		  var checkBox = document.getElementById("NuclearEnergyPP");
		  var NuclearEnergyForm = document.getElementById("NuclearEnergyForm");
		  if (checkBox.checked == true){
			NuclearEnergyForm.style.display = "block";
		  } else {
			NuclearEnergyForm.style.display = "none";
		  }
		}
		
		function OtherCleanEnergyFunction() {
		  var checkBox = document.getElementById("OtherCleanEnergyPP");
		  var OtherCleanEnergyForm = document.getElementById("OtherCleanEnergyForm");
		  if (checkBox.checked == true){
			OtherCleanEnergyForm.style.display = "block";
		  } else {
			OtherCleanEnergyForm.style.display = "none";
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
				Create EoI Submission
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
                <h3 class="box-title">EoI Submission Application Form</h3>
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
                <?php echo form_open_multipart('create_eoi_form/proses'); ?>
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
					<h3 class="box-title">Financial Criteria</h3>
					&nbsp<small><b><i>*) Required</i></b></small>
             </div>
			</div>
			
			<div class="row">	
				<div class="col-md-6">
					   <div class="form-group">
						<label>Total Asset </label>
						<select class="form-control select2" name="LonglistCapitalTotalAsset" style="width: 100%;" required>
							 <option value="" selected="selected">- Select Total Asset -</option>
							<option value="1">USD 0 - 1 Billion</option>
							<option value="2">USD 1 - 2.5 Billion</option>
							<option value="3">USD 2.5 - 5 Billion</option>
							<option value="4">USD 5 - 10 Billion</option>
							<option value="5"> > USD 10 Billion</option>
						</select>
					  </div>
					  
					  <div class="form-group">
						<label>EBITDA </label>
						<select class="form-control select2" name="LonglistCapitalEBITDA" style="width: 100%;" required>
							<option value="" selected="selected">- Select EBITDA -</option>
							<option value="1">< USD 10 Million </option>
							<option value="2">USD 10 - 25 Million</option>
							<option value="3">USD 25 - 50 Million</option>
							<option value="4">USD 50 - 100 Million</option>
							<option value="5">> USD 100 Million</option>
						</select>
					  </div>
					  
					  <div class="form-group">
						<label>Credit Rating </label>
						<select class="form-control select2" name="LonglistCapitalCreditRating" style="width: 100%;" required>
							 <option value="" selected="selected">- Select Credit Rating -</option>
							<option value="1">DnB Rating 1A4 - 1A4 or equal</option>
							<option value="2">DnB Rating 2A4 - 2A1 or equal</option>
							<option value="3">DnB Rating 3A4 - 3A1 or equal</option>
							<option value="4">DnB Rating 4A4 - 4A1 or equal</option>
							<option value="5">DnB Rating 5A4 - 5A1 or equal</option>
						</select>
				  </div>
              </div>
			  
			  <div class="col-md-6">
			  
				  <div class="form-group">
					<label>DSCR </label>
                         <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="LonglistCapitalDSCR" placeholder="DSCR" maxlength="255" required />
                  </div>
				 
				  
				  <div class="form-group">
					<label for="berkas">Upload Financial Statement </br>For The Past 3 Years (2015, 2016, 2017) </label><small> *) Pdf format, Max size 50 MB</small>
					<input onchange="ValidateSize50(this)" type="file"  name="UploadFinancialStatement" placeholder="Upload Financial Statement "  class="single-input"  accept=".pdf" required>
				</div>
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
                      <input type="checkbox" name="AreaOfInterestHydroelectricPowerPlant" value="1" id="HydroelectricPP" onclick="HydroelectricFunction()" />
                      Hydroelectric Power Plant (PP)
                    </label>
                  </div>
				  
				<!-- Start Hydroelectric Power Plant (PP)-->
				  <div class="box box-info" id="HydroelectricForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Hydroelectric Power Plant (PP)</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceHydroelectricCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceHydroelectricRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceHydroelectricNotes" placeholder="Notes Preference" maxlength="10000" ></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceHydroelectricExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceHydroelectricExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceHydroelectricExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceHydroelectricExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceHydroelectricExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceHydroelectricExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceHydroelectricExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>				
					</div>
				</div>
				<!-- EOF Hydroelectric Power Plant (PP) -->

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestGeothermalPP" value="1" id="GeothermalPP" onclick="GeothermalFunction()" />
                      Geothermal PP
                    </label>
                  </div>
				  
				<!-- Geothermal Form -->
				  <div class="box box-info" id="GeothermalForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Geothermal PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceGeothermalCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceGeothermalCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceGeothermalRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceGeothermalNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceGeothermalExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceGeothermalExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceGeothermalExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceGeothermalExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceGeothermalExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceGeothermalExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceGeothermalExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				

				  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="AreaOfInterestSolarPhotovoltaicPP" value="1" id="SolarPhotovoltaicPP" onclick="SolarPhotovoltaicFunction()"/>
                      Solar Photovoltaic PP
                    </label>
                  </div>
				  
				<!-- Solar Photovoltaic Form -->
				  <div class="box box-info" id="SolarPhotovoltaicForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Solar Photovoltaic PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarPhotovoltaicRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceSolarPhotovoltaicNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleConsultingServiceProviderCapac" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarPhotovoltaicExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceSolarPhotovoltaicExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestSolarThermalPP" value="1" id="SolarThermalPP" onclick="SolarThermalFunction()"/>
                      Solar Thermal PP
                    </label>
                  </div>
				  
				<!-- SolarThermal Form -->
				  <div class="box box-info" id="SolarThermalForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Solar Thermal PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceSolarThermalCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSolarThermalRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceSolarThermalNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarThermalExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarThermalExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarThermalExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarThermalExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarThermalExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text"  onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSolarThermalExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceSolarThermalExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestWindPowerPP" value="1" id="WindPowerPP" onclick="WindPowerFunction()"/>
                      Wind Power PP
                    </label>
                  </div>
				  
				  <!-- WindPower Form -->
				  <div class="box box-info" id="WindPowerForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Wind Power PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceWindPowerCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWindPowerCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWindPowerRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceWindPowerNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWindPowerExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWindPowerExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWindPowerExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWindPowerExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWindPowerExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWindPowerExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceWindPowerExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestEnergyStoragePumpedPP" value="1" id="EnergyStoragePP" onclick="EnergyStorageFunction()"/>
                      Energy Storage / Pumped PP
                    </label>
                  </div>
				  			  
				<!-- EnergyStorage Form -->
				  <div class="box box-info" id="EnergyStorageForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Energy Storage / Pumped PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceEnergyStorageCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceEnergyStorageRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceEnergyStorageNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceEnergyStorageExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceEnergyStorageExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceEnergyStorageExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceEnergyStorageExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceEnergyStorageExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceEnergyStorageExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceEnergyStorageExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
					<label>
					  <input type="checkbox" name="AreaOfInterestSeaEnergyPP" value="1" id="SeaEnergyPP" onclick="SeaEnergyFunction()"/>
                      Sea Energy PP
                    </label>
                  </div>
				  
				  
				<!-- SeaEnergy Form -->
				  <div class="box box-info" id="SeaEnergyForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Sea Energy PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceSeaEnergyCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceSeaEnergyRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceSeaEnergyNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSeaEnergyExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSeaEnergyExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSeaEnergyExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSeaEnergyExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSeaEnergyExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceSeaEnergyExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceSeaEnergyExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestWastetoEnergyPP" value="1" id="WastetoEnergyPP" onclick="WastetoEnergyFunction()"/>
                      Waste to Energy PP
                    </label>
                  </div>
				  
				  				<!-- WasteToEnergy Form -->
				  <div class="box box-info" id="WastetoEnergyForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Waste to Energy PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceWasteToEnergyCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceWasteToEnergyRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceWasteToEnergyNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWasteToEnergyExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWasteToEnergyExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWasteToEnergyExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWasteToEnergyExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWasteToEnergyExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceWasteToEnergyExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceWasteToEnergyExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestNuclearEnergyPP" value="1" id="NuclearEnergyPP" onclick="NuclearEnergyFunction()"/>
                      Nuclear Energy PP
                    </label>
                  </div>
				  
				  
				<!-- Nuclear Form -->
				  <div class="box box-info" id="NuclearEnergyForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Nuclear Energy PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceNuclearCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceNuclearCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceNuclearRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceNuclearNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceNuclearExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceNuclearExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceNuclearExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceNuclearExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceNuclearExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceNuclearExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceNuclearExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>	
					
					</div>
				</div>
				  
				  <div class="checkbox">
                    <label>
					  <input type="checkbox" name="AreaOfInterestOtherCleanTechnologyPP" value="1" id="OtherCleanEnergyPP" onclick="OtherCleanEnergyFunction()"/>
                      Other Clean Technology / non PP
                    </label>
                  </div>
				  
				  
				<!-- OtherClean Form -->
				  <div class="box box-info" id="OtherCleanEnergyForm" style="display:none">
					<div class="box-header">
					  <h3 class="box-title">Other Clean Technology / non PP</h3>
					</div>
						<div class="box-body">
						<label>Preferred Capacity: </label>
						  <div class="checkbox">
								<label>
								 <input type="checkbox" name="PreferenceOtherCleanCapacity1" value="1" />
									< 1 MW
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanCapacity2" value="1" />
									1 - 10 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanCapacity3" value="1" />
									11 - 50 MW    
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanCapacity4" value="1 " />
									51 - 100 MW        
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanCapacity5" value="1" />
									101 - 500 MW       
								</label>
								&nbsp
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanCapacity6" value="1" />
									> 501 MW       
								</label>
						 </div>
						
						<!-- Preferred Capacity -->
						<label>Preferred Role: </label>
							
						<div class="row">	
							<div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanRoleIPP" value="1" />
								  IPP / Equity Provider
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanRoleTechnologyProvider" value="1" />
								  Technology Provider     
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanRoleConsultingServiceProvider" value="1" />
								  Consulting Provider
								</label>
							</div>
						  </div>
						  
						 <div class="col-md-6">
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanRoleFinancingProvider" value="1" />
								  Financing Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanRoleEPCProvider" value="1" />
								  EPC Service Provider    
								</label>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="PreferenceOtherCleanRoleOMServiceProvider" value="1" />
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
						  <textarea class="form-control" rows="10" name="PreferenceOtherCleanNotes" placeholder="Notes Preference" maxlength="10000"></textarea>
						  </div>
					  </div> 
					</div>
				
					<!-- Roles Experiences -->
					<label>Roles Experiences: </label>
					<div class="row">	
						<div class="col-md-6">
						<div class="form-group">
							<label>IPP / Equity Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceOtherCleanExpRoleIPPCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Consulting Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceOtherCleanExpRoleConsultingServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>Technology Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceOtherCleanExpRoleTechnologyProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
						<div class="col-md-6">
						<div class="form-group">
							<label>Financing Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceOtherCleanExpRoleFinancingProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>EPC Service Provider </label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceOtherCleanExpRoleEPCProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
						<div class="form-group">
							<label>O&M Service Provider</label>
								 <input type="text" onkeypress="return isNumberKey(event,this)" class="form-control" name="PreferenceOtherCleanExpRoleOMServiceProviderCapacity" placeholder="Experience: ____ MW" />
						</div>
					  </div> 
					</div>
					
					<!--Notes Experiences -->
					<div class="row">	
						<div class="col-md-12">
						<div class="form-group">
						  <label>Notes Experiences: </label>
						  <textarea class="form-control" rows="10" name="PreferenceOtherCleanExpNotes" placeholder="Notes Experiences" maxlength="10000"></textarea>
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
									window.setTimeout(function(){window.location.href = "<?php base_url();?>eoi_form"},3000);
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
	