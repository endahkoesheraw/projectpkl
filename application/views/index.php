<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PT PJB - EXPRESSION OF INTEREST (EoI)</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url('favicon.ico')?>">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	
		<style>
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url('../../assets/img/pageLoader.gif') 50% 50% no-repeat rgb(249,249,249);  
			opacity: .8;
		}
		</style>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut("slow");
		});
		</script>
		
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/js/plugins/morris/morris.css'); ?>" rel="stylesheet">
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet" type="text/css" />
			<!-- Date Picker -->
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?> " rel="stylesheet" type="text/css">
		  <!-- DataTables -->
		<link href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Style.css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>"
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script> 
		
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/css/skins/_all-skins.min.css'); ?>" rel="stylesheet" type="text/css" />
		<!-- Progress Bar -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-mod.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script> 
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script> 
		<script src="<?php echo base_url(); ?>assets/js/jquery.form.js"></script> 

		
  </head>

    <body class="fixed hold-transition skin-blue sidebar-mini">
		<!--<div class="loader"></div>-->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href=<?php echo base_url() ?> class="logo"><img src="<?php echo base_url('assets/img/logo.png'); ?>" /></a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>				   
                    </a>
					
			<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				  <!-- LogOut-->
				  <li>
					<a href="<?php echo site_url('logout'); ?>" class="dropdown-toggle" > Logout
						<i class="fa fa-sign-out"></i>
					</a>
				  </li>
				  <!-- EOF LogOut -->
			</ul>
			</div>
            </nav>
		
				
            </header>
			
             <!-- Left side column. contains the sidebar -->
				<aside class="main-sidebar" style="background:#116b85 url(<?php echo base_url();?>/assets/img/admin_kipasturbin.jpg) no-repeat -650px top;">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
					</br>

				    <ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li class="<?php if($page == 'view_home'){echo 'active';} ?>">
						<a href="<?php echo base_url(); ?>">
							<i class="fa fa-laptop"></i> <span>Home</span>
						</a>
					</li>
				<?php 
					$roles=$this->session->userdata('roles'); 
					if ($roles=="REGULAR"){ //regular role
				?>
					<li class="<?php if($page == 'view_eoiform'){echo 'active';} ?>">
						<a href="<?php echo base_url(); ?>eoi_form">
							<i class="fa fa-book"></i> <span>EoI Submission EBT</span>
						</a>
					</li>
					<li class="<?php if($page == 'view_eoiformipp'){echo 'active';} ?>">
						<a href="<?php echo base_url(); ?>eoi_formipp">
							<i class="fa fa-book"></i> <span>IPP</span>
						</a>
					</li>
				<?php } 
				else if ($roles=="ADMINISTRATOR"){ //admin role?>
				<li class="treeview <?php if($page == 'view_eoi_submission_admin' || $page == 'view_users_admin'){echo 'active';} ?>">
					<a href="#">
						<i class="fa fa-user"></i>
							<span>Administrator</span>
							<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li  class="<?php if($page == 'view_users_admin'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>users_admin"><i class="fa fa-users"></i>Manage Users</a></li>
					<li  class="<?php if($page == 'view_eoi_submission_admin'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>eoi_submission_admin"><i class="fa fa-book"></i>Manage EoI Submission</a></li>
				  </ul>
				</li>
				<?php } else{ //admin role
				?>
				<li class="treeview <?php if($page == 'view_eoi_submission_review' || $page == 'view_users_review'){echo 'active';} ?>">
					<a href="#">
						<i class="fa fa-user"></i>
							<span>Reviewer</span>
							<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li  class="<?php if($page == 'view_users_review'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>users_review"><i class="fa fa-users"></i>Review Users</a></li>
					<li  class="<?php if($page == 'view_eoi_submission_review'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>eoi_submission_review"><i class="fa fa-book"></i>Review EoI Submission</a></li>
				  </ul>
				</li>
				<?php } ?>
				<li class="treeview <?php if($page == 'view_change_password'){echo 'active';} ?>">
					<a href="#">
						<i class="fa fa-gears"></i>
							<span>Setting</span>
							<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li  class="<?php if($page == 'view_change_password'){echo 'active';} ?>"><a href="<?php echo base_url(); ?>change_password"><i class="fa fa-key"></i> Change Password</a></li>
				  </ul>
				</li>


				<!-- EOF -->
				  </ul>

                </section>
                <!-- /.sidebar -->
            </aside>
			
			 <?php $this->load->view($page); ?>

            
			<footer class="main-footer">
			
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2018 <a href="#">PT PJB</a>.</strong>
				
            </footer>
		

		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $(function () {
			$("#example1").DataTable({          
			'paging'      : true,
		   'lengthChange': true,
		   'searching'   : true,
		   'ordering'    : true,
		   'info'        : true,
		   'autoWidth'   : false
			});
		  });
		</script>
		<!-- EOF -->
		

		
		<!-- DataTables -->
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
		<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>	
		
		
        <!-- FastClick -->
        <script src="<?php echo base_url('assets/js/plugins/fastclick/fastclick.min.js'); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.min.js'); ?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>

        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js'); ?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url('assets/js/plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>

		<script>
		//Date picker
		$('#datepicker').datepicker({
		  autoclose: true
		})
		
		 //Date range picker
		$('#reservation').daterangepicker()
		</script>
		

	</div><!-- ./wrapper -->
    </body>

</html>