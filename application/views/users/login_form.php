<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('header.php'); ?>
	<?= link_tag('Assets/css/bootstrap.min.css'); ?>
</head>
<body>
<div class="container">
<h1>ADMIN</h1>
<?php if($error = $this->session->flashdata('Login Failed')): ?>
    		<div class="row">
    			<div class="col-sm-5">
    				<div class="alert alert-danger">
    				<?= $error; ?>
    			    </div>
    			</div>
    		</div>
    		<?php endif; ?>
<?= form_open('admin/login'); ?>     
	<div class="row">
		<div class="col-sm-5">
			<div class="form-group">
			<?= form_label('USER NAME'); ?>
	<?= form_input(['class'=>'form-control','type'=>'text','placeholder'=>'USER NAME','name'=>'userName','value'=>set_value('userName')]); ?>
	         </div>    
		</div>
		<div class="col-sm-5 mt-4 text-danger">
			<?= form_error('userName'); ?>
		</div>
		
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="form-group">
				<?= form_label('Password'); ?>
				<?= form_password(['class'=>'form-control','type'=>'password','placeholder'=>'password','name'=>'password']); ?>
	        </div>
		</div>	
		 <div class="col-sm-5 mt-4 text-danger">
		         	<?= form_error('password'); ?>
		         </div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="form-group">
				<?= form_hidden('status',1); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<div class="form-group">
				<br>
				<?= form_submit(['class'=>'form-control btn btn-primary','type'=>'submit','value'=>'Login']); ?>
	        </div>
		</div>	
	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>