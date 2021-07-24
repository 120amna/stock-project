<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('header.php'); ?>
	 <?= link_tag('Assets/css/bootstrap.min.css'); ?>
</head>
<body>  
	<div class="container">
    <div class="row" style="margin-left:850px; margin-top: 10px;">
      <div class="col-sm-6">
        
<?= anchor('user/product_iteams','Add Product','class="btn btn-primary"'); ?>
      </div>
    </div>
    <?php if($msg = $this->session->flashdata('msg')):
         $msg_class = $this->session->flashdata('msg_class')
       ?>
          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
              <div class="alert <?= $msg_class; ?>">
                <?= $msg; ?>
              </div>
            </div>
            
          </div>
      <?php endif; ?>
       <?php if($product_iteams_msg = $this->session->flashdata('product_iteams')):
         $msg_class = $this->session->flashdata('product_iteams_class')
       ?>
          <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
              <div class="alert <?= $msg_class; ?>">
                <?= $product_iteams_msg; ?>
              </div>
            </div>
            
          </div>
      <?php endif; ?>
     <div class="row">
		<div class="col-sm-12">
      <?= $this->pagination->create_links(); ?>
  <table class="table .table-striped  table-hover" style="margin-top:10px;">
          <thead class="bg-primary" style="color:white;">
              <tr>
                <th>SR.NO</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan="3">Action</th>
              </tr>
          </thead>
    <tbody>
      	<?php if(count($product_list)): $x=0; ?>
      		<?php foreach ($product_list as $data):  ?>
        <tr>
            <td><?= ++$x; ?></td>
            <td><?= $data->title; ?></td>
            <td><?= $data->description; ?></td>
            <td><?= $data->price; ?></td>
            <td><?= anchor('admin/product_id/'.$data->id,'Add Image','class="btn btn-primary"'); ?></td>
            <td><?= anchor('admin/one_row_data/'.$data->id,'Edit','class="btn btn-primary"'); ?></td>
            <td><button class="btn btn-danger">Delete</button></td>
        </tr>
          <?php endforeach; ?>
          <?php else: ?>
          	<tr>
          		<td>Data Not Available</td>
          	</tr>
        <?php endif; ?>
    </tbody>
</table>
     </div>
    </div>  
 </div>
 <?php include('footer.php'); ?>
</body>
</html>