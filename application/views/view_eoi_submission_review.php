<?php //error_reporting(0); ?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->	
        <section class="content-header">
          <h1>
           Review EoI Submission
          </h1>
          <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-user"></i> Administrator</a></li>
            <li><a href="<?php echo base_url()."eoi_submission_admin"; ?>"><i class="fa fa-users"></i> Review EoI Submission</a></li>
          </ol>
        </section>
	
		    <!-- Main content -->
    <section class="content">	
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
			<div class="box-header with-border" align="right">
					<div class="btn-group">
					  <button type="button" class="btn btn-info"><i  class="fa fa-file-excel-o"  ></i> Export</button>
					  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo base_url().'export_excel_eoi/export_identitas';?>">Identitas</a></li>
						<li><a href="<?php echo base_url().'export_excel_eoi/export_preferensi';?>">Preferensi</a></li>
						<li><a href="<?php echo base_url().'export_excel_eoi/export_pengalaman';?>">Pengalaman</a></li>
					  </ul>
					</div>
              </div>
			
           <div class="box box-info">
              <div class="box-header with-border">
              <h3 class="box-title">EoI Submission List</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th width="10px">No</th>
					<th>Company Code</th>
					<th>Name</th>
					<th>Address</th>
					<th>Country Of Establishment</th>
					<th>Year Established</th>
                    <th width="5%">Action</th>
                </tr>
                </thead>
                <tbody>
                      	<?php  
						$i=1;
						foreach ($data->result_object() as $lihat)
						{				
						$CompanyID =encrypt_url($lihat->CompanyID) ;
						$UId =encrypt_url($lihat->UId) ;
						$BasicCompanyCode =$lihat->BasicCompanyCode ;
						$BasicCompanyLegalEntityName =$lihat->BasicCompanyLegalEntityName ;
						$BasicCompayAddress =$lihat->BasicCompayAddress;
						$BasicCompanyCountryOfEstablishment =$lihat->BasicCompanyCountryOfEstablishment;
						$BasicCompanyYearEstablished =$lihat->BasicCompanyYearEstablished;
                      	?>
						
                    	<tr>
                    	<td><?php echo $i ?></td> 
                    	<td><?php echo $BasicCompanyCode ?></td> 
						<td><?php echo $BasicCompanyLegalEntityName ?></td> 
						<td><?php echo $BasicCompayAddress ?></td> 
						<td><?php echo $BasicCompanyCountryOfEstablishment ?></td>                   		
						<td><?php echo $BasicCompanyYearEstablished ?></td>           
						 <td align="center">
                          <div class="btn-group" role="group">
                            <a class="btn btn-sm btn-primary" href="<?= base_url().'eoi_submission_review/eoi_submission_prev/'.$CompanyID; ?>" title="Preview"><i class="fa fa-search"></i></a>
						</div>
						</td>
                    	</tr>
                    <?php $i++;} ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->	  
    </section>
    <!-- /.content -->  
      </div><!-- /.content-wrapper -->
