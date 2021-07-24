<!DOCTYPE html>
<html>
<head>
	<title></title> 
	<?php include('header.php'); ?>
</head>
<body>
	<h1>PRODUCT</h1>
 <div class="container">
 	<?= form_open('admin/product_iteams'); ?>
 	<div class="row">
 		<div class="col-sm-5">
 			 <div class="form-group">
 			<?= form_label('TITLE'); ?>
	<?= form_input(['class'=>'form-control','type'=>'text','placeholder'=>'TITLE','name'=>'title','value'=>set_value('title')]); ?>
	         </div>
 		</div>
 		<div class="col-sm-5" style="color: red; margin-top: 30px;">
 			 <div class="form-group">
 			     <?= form_error('title'); ?>
 			  </div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-5">
 			<div class="form-group">
 			<?= form_label('DESCRIPTION'); ?>
	<?= form_input(['class'=>'form-control','type'=>'text','placeholder'=>'DESCRIPTION','name'=>'description','value'=>set_value('description')]); ?> 				
 			</div>
 		</div>
 		<div class="col-sm-5" style="color: red; margin-top: 30px;">
 			<div class="form-group">
 				<?= form_error('description'); ?>
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-5">
 			<div class="form-group">
 				<?= form_label('PRICE'); ?>
	 <?= form_input(['class'=>'form-control','type'=>'text','placeholder'=>'PRICE','name'=>'price','value'=>set_value('price')]); ?>
 			</div>
 		</div>
 		<div class="col-sm-5" style="color: red; margin-top: 30px;">
 			<div class="form-group">
 				<?= form_error('price'); ?>
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-5">
 			<div class="form-group">
 				<?= form_hidden('status','1'); ?>
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-5">
 			<div class="form-group">
 				<br>
          	 <?= form_submit(['class'=>'form-control btn btn-primary','type'=>'submit','value'=>'Submit']); ?>
 			</div>
 		</div>
 	</div>
 	
 </div>
</body>
</html>