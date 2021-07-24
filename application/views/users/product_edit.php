<!DOCTYPE html>
<html>
<head>
<?php include('header.php'); ?>
	<?php link_tag('Assets/css/bootstrap.min.css'); ?>
	<title></title>
</head>
<body>   
	<div class="container">
<h1 style="text-align: center; color:blue;">Edit Product</h1>
			<?= form_open("admin/product_update/{$product_data->id}"); ?>
	<div class="row">
		<div class="col-sm-4">
					<div class="form-group"> 
					 <?= form_label('Title'); ?>
						<?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'TITLE','name'=>'title','value'=>set_value('title',$product_data->title)]); ?>
					</div>
	    </div>
	    <div class="col-sm-4"  style="margin-top:30px; color:red;">
	    	<?= form_error('title'); ?>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-4">
					<div class="form-group"> 
					 <?= form_label('Description'); ?>
						<?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'Description','name'=>'description','value'=>set_value('description',$product_data->description)]); ?>
					</div>
	    </div>
	    <div class="col-sm-4" style="margin-top:30px; color:red;">
	    	<?= form_error('description'); ?>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-4">
					<div class="form-group"> 
					 <?= form_label('Price'); ?>
						<?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'Price','name'=>'price','value'=>set_value('price',$product_data->price)]); ?>
					</div>
	    </div>
	    <div class="col-sm-4" style="margin-top:30px; color:red;">
	    	<?= form_error('price'); ?>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-4">
					<div class="form-group"> 
					 <br>
						<?php echo form_submit(['class'=>'form-control btn btn-primary','type'=>'submit','value'=>'Update']); ?>
					</div>
	    </div>
	</div>
</div>
	
 </div>
</body>
</html>