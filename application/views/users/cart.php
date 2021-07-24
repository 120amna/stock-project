 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<?php include('header.php'); ?>
 </head>
 <body>
 <div class="container mt-3">
 	<div class="row">
 		<?php foreach ($user_data as $value) { ?>
 		<div class="col-sm-3">
				<div class="card">
				<img class="card-img-top" src="<?= $value->imageUrl;?>" height="190">
				<div class="card-body text-center">
				<h5 class="card-title">Name:-<?= $value->title; ?></h5>
				<h5 class="card-title">Price:-<?= $value->price; ?></h5>
				<?= anchor('admin/cart','Add Cart','class="btn btn-primary"'); ?>
				</div>
				</div>
			</div>
		<?php } ?>
 	</div>
 </div> 
 <?php include('footer.php'); ?>
 </body>
 </html>