

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Change Password  
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-gears"></i> Setting</a></li>
              <li class="active">Change Password</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
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
                <h3 class="box-title">Change Password</h3>
				<br>  <small><i>You can change your password for security reasons, it's a good idea to use a strong password that you're not using elsewhere</i></small></br>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('change_password/proses'); ?>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Current Password</label>
                         <input type="password" class="form-control" name="password_lama" placeholder="Password" required />
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                         <input type="password" class="form-control" name="password_baru" placeholder="Password" required />
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">Re-Type Password</label>
                         <input type="password" class="form-control" name="passconf" placeholder="Re-Type Password" required>
                  </div>		
				  <div class="form-group">
                      <input type="hidden" class="form-control" name="user_id" placeholder="User Id"  value="<?php echo $this->session->userdata('id');?>" required/>
                  </div>				  
	
      		 
	
                  <a href="<?php echo base_url(); ?>admin/fkelola_pengguna" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Cancel</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>
		