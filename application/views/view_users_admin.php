<?php error_reporting(0); ?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->	
        <section class="content-header">
          <h1>
           Manage Users
          </h1>
          <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-user"></i> Administrator</a></li>
            <li><a href="<?php echo base_url()."users_admin"; ?>"><i class="fa fa-users"></i> Manage Users</a></li>
          </ol>
        </section>
	
		    <!-- Main content -->
    <section class="content">	
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
			 <div class="box-header with-border" align="right">
					  <a  href="<?php echo base_url().'export_excel_eoi/export_users'; ?>"  class="btn btn-info"><i  class="fa fa-file-excel-o"  ></i> Export</a>	
              </div>
			
           <div class="box box-info">
              <div class="box-header with-border">
              <h3 class="box-title">Users List</h3>
				
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
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Position</th>
					<th>Company</th>
                    <th>Status</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                <tbody>
                      	<?php  
						$i=1;
						foreach ($data->result_object() as $lihat)
						{				
						$id =encrypt_url($lihat->id) ;
						$name =$lihat->name ;
						$phone =$lihat->phone;
						$email =$lihat->email;
						$position = $lihat->position; 
						$company=$lihat->company ;
						$status= $lihat->status ;
                      	?>
						
                    	<tr>
                    	<td><?php echo $i ?></td> 
                    	<td><?php echo $name ?></td> 
						<td><?php echo $phone ?></td> 
						<td><?php echo $email ?></td> 
						<td><?php echo $position ?></td> 
						<td><?php echo $company ?></td> 
						<td><?php echo $status ?></td>
						<td align="center">
							<div class="btn-group" role="group">
								<a class="btn btn-sm btn-primary" href="<?= base_url().'update_eoi_from_user/update/'.$id; ?>" title="Update EoI Submission From Users"><i class="fa fa-book"></i></a>
							</div>
							<div class="btn-group" role="group">
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url().'delete_eoi_form/delete_users/'.$id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"  title="Delete"><i class="fa fa-trash"></i></a>
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
