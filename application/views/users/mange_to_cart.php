<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('header.php'); ?>
</head>
<body>  
<div class="container">
    <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">
        	 
<?php if(count($product_data)): $a=0;?>

	<?php foreach ($product_data as  $value): ?>
		 
          <h5 class="mb-4">Cart (<span><?= ++$a; ?></span> items)  </h5>

          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="<?= $value->imageUrl; ?>" alt="Sample">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5><?= $value->title; ?></h5>
                    <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                    <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <input type="number" class=" form-control iteam_quantity" min="1" max="10" onchange="mysum()" name="quantity">
                      <input type="hidden" value="<?=$value->price?>" class="iteam_price">
                    </div> 	
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <?= anchor('#','Remove item ','class="btn btn-primary"'); ?>
                  </div>
                  <p class="mb-0"><span><strong id="summary">Rs:<?= $value->price; ?></strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">
      <?php endforeach; ?>
  <?php endif; ?>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Expected shipping delivery</h5>

          <p class="mb-0"> <?= $value->dateTime; ?></p>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
 

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Total amount
              <span id="grand_total"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong>$53.98</strong></span>
            </li>
          </ul>
           <?= anchor('admin/buy_order/'.$value->id,'Buy','class="btn btn-primary"'); ?>

        </div>
      </div>
    </div>
    <!--Grid column-->
  </div>
</div>
<script>
	var gt=0;
	var iprice = document.getElementsByClassName('iteam_price');
	var iqut = document.getElementsByClassName('iteam_quantity');
	 
	// var total = document.getElementsByClassName('total');
	var grtotal = document.getElementById('grand_total');
	 function mysum()
	 {
	 	  gt=0;
	 for (i = 0; i < iprice.length; i++) 
	   {
	 		 (iprice[i].value)*(iqut[i].value);
	 		gt=gt+(iprice[i].value)*(iqut[i].value);
	 	}
	 	grtotal.innerText=gt;
	 }
	 mysum();
</script>
  <?php include('footer.php'); ?>
</body>
</html>
