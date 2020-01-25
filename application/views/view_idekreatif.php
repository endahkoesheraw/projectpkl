
	<script> 
		$(function() { 

		var bar = $('.bar');
		var percent = $('.percent');
		var status = $('#status');

		$('form').ajaxForm({
			beforeSend: function() {
				status.empty();
				var percentVal = '0%';
				bar.width(percentVal);
				percent.html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				bar.width(percentVal);
				percent.html(percentVal);
			},
			complete: function(xhr) {
				status.html(xhr.responseText);
				location.reload(); 
			}
		});
	}); 
	</script>

<!--================ Start Element Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-right">
					<h1>Ide Kreatif</h1>
					<div class="page_link">
						<a href="<?php echo base_url(); ?>">Home</a>
						<a href="<?php echo base_url(); ?>ide_kreatif">Ide Kreatif</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Element Banner Area =================-->


	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Lomba Ide Kreatif K3</h3>
			<p class="sample-text">
				<br>Syarat & Ketentuan Lomba:</br>
			<ul class="unordered-list">
				<li>Kategori Lomba: Perorangan merupakan Karyawan PJB, anak Perusahaan, Perusahaan Afiliasi & Kontraktor Tetap.</li>
				<li>Buatlah maksimum 3 Ide Kreative yang berkaitan dengan peningkatan :</li>
					<ul>
						<li>Budaya K3.</li>
						<li>Keamanan dan Keselamatan Unit.</li>
						<li>Keamanan dan Keselamatan Kerja.</li>
					</ul>
				<li>Upload Ide Kreatif melalui safetycompetition2019.ptpjb.com.</li>
				<li>Batas pengumupan ide kreatif sampai dengan 25 januari 2019.</li>
				<li>Keputusan juri bersifat mutlak dan tidak bisa diganggu gugat.</li>
			</ul>
			</p>
		</div>
	</section>
	
	
	
	<!-- End Sample Area -->
	<!-- Start Button -->
	<section class="button-area">
		<div class="container border-top-generic">
			<h3 class="text-heading title_color">Upload Ide Kreatif</h3> <small>*Lengkapi Form Dibawah Ini</small>
				
				<!-- form start -->
				<form action="<?php echo base_url()?>ide_kreatif/finsert_idekreatif" enctype="multipart/form-data" class="form-horizontal" method="post">
					
                <input type="hidden" name="user_id" placeholder="Nama Talent"  value="<?php echo $this->session->userdata('id');?>"  /> 
				
				<div class="mt-10">
					<input type="text" name="judul_ide" class="single-input" placeholder="Judul Ide"/> 
				</div>
				<div class="mt-10">
					<textarea rows="4" cols="50"  class="single-input" name="latarbelakang_ide" placeholder="Latar Belakang Ide"  ></textarea>
				</div>
				<div class="mt-10">
					<textarea rows="4" cols="50"  class="single-input"  name="tujuan_ide" placeholder="Tujuan dan Manfaat Ide" ></textarea>
				</div>
				<div class="mt-10">
					<textarea rows="4" cols="50" class="single-input"  name="deskripsi_ide" placeholder="Deskripsi Ide"></textarea>
				</div>		
				<div class="progress" style="display:none">
					<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"> 0% </div>
					</div>
					<div class="progress">
						<div class="bar"></div >
						<div class="percent"></div >
				   </div>
				   <div id="status"></div>
				   	<?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
							
							<script>
								// redirect  script after 3 seconds
								window.setTimeout(function() {
									window.location.href = '<?php echo base_url();?>';}, 3000);
							</script>
                        </div>    
                    <?php } else if ($this->session->flashdata('result_sukses')) {?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong>
                            <?php echo $this->session->flashdata('result_sukses'); ?>
                        </div>    
                    <?php } ?>
				<div class="mt-10">
					  <button type="reset" name="reset" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Reset</button>
					  <button type="submit" name="simpan" class="btn btn-primary btn-sm" onClick="this.disabled=true; this.value='Sending…'; "><i class="fa fa-save"></i> Simpan</button>
				 </div>
               
				</form>

