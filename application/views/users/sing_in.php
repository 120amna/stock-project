<!DOCTYPE html>
<html>
<head>
	<title></title> 
	<?php include('header.php'); ?>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-5" >
				<?= form_open('admin/sing_in'); ?>
				<div class="form-group">
						<?= form_label('USER NAME'); ?>
						<?= form_input(['class'=>'form-control','type'=>'text','placeholder'=>'USER NAME','name'=>'userName','value'=>set_value('userName')]); ?>
						<?= form_hidden('status','1'); ?>
	            </div>
			</div>
			<div class="col-sm-5 mt-4 text-danger">
				<?= form_error('userName'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 ">
				<div class="form-group">
					<?= form_label('EMAIL'); ?>
					<?= form_input(['class'=>'form-control','type'=>'text','placeholder'=>'EMAIL','name'=>'email', 'value'=>set_value('email')]);?>
				</div>
			</div>
			<div class="col-sm-5 mt-4 text-danger">
				<?= form_error('email'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="form-group"> 
						<?= form_label('PASSWORD'); ?>
						<?= form_password(['class'=>'form-control','type'=>'password','placeholder'=>'PASSWORD','name'=>'password']); ?>
				</div>
			</div>
			<div class="col-sm-5 mt-4 text-danger">
				<?= form_error('password'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5">
				<div class="form-group">
					 <br>
	 <?= form_submit(['class'=>'form-control btn btn-primary','type'=>'submit','value'=>'SING IN']); ?>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
 </body>
</html>