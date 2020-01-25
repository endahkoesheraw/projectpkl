<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arsepe HAPUA</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">  
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">        
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet"> 

    </head>
	<?php
	//check time
	 date_default_timezone_set('Asia/Jakarta');
	 $time = date("H");
	?>
     <body class=<?php if ($time >= "6" && $time <= "18") {echo "login-page-morning";} else {echo "login-page-night";} ?> >
        <div class="login-box">
		<div class="login-logo">
		<center><a href=<?php echo base_url() ?> class="logo"><img src="<?php echo base_url('assets/img/arsepe.png'); ?>" /></a></center>
            </div><!-- /.login-logo -->
		<div class="login-box-body">
                <p class="login-box-msg">Forgot Password?</p>
				
				<form action="<?php echo site_url('email/proses'); ?>" method="post">
					<?php
                    if (validation_errors() || $this->session->flashdata('result_activate_success')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_activate_success'); ?>
                        </div>    
                    <?php } ?>
					
                    <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="Email" required />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                  <div class="row">
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
						</div><!-- /.col -->
				</div>
                </form>                

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script> 
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script>       
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>