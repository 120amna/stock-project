<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('header.php'); ?>
</head>
<body>  
	<div class="container">
		<div class="col-lg-12" style="margin-top: 50px;">
				<?= form_open_multipart('admin/upload_image'); ?>
				<?= form_hidden('productId',$id); ?>
				<?= form_hidden('status',1); ?>
				  <?= form_label('UPLOAD IMAGE'); ?>:-
				<?php echo form_upload(['name'=>'userfile']); ?><br><br>
				<?php if(isset($upload_error)){ echo $upload_error; }; ?>
				<?= form_submit(['type'=>'submit','value'=>'SUBMIT']); ?>
       <div>
<div>
</body>
</html>