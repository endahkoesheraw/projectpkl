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
      <?php } exit(); ?>
           