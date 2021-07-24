<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <?= link_tag('Assets/css/bootstrap.min.css'); ?>
   <link rel="stylesheet" type="text/css" href="">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">STOCK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"> 
          <?= anchor('user/user_sing_in','Sing In','class="nav-link active"'); ?>
        </li>
        <li class="nav-item"> 
          <?= anchor('user/user_login','Login','class="nav-link active"'); ?>
        </li>
        <li class="nav-item"> 
          <?= anchor('admin/welcome','Product List','class="nav-link active"'); ?>
        </li>
        <li class="nav-item"> 
          <?= anchor('admin/mange_to_cart','Mange Cart','class="nav-link active"'); ?>
        </li>
         
        <li class="nav-item"> <?php if($this->session->userdata('id')){ ?>
          <?= anchor('admin/logout','Logout','class="nav-link active btn btn-sm btn-danger"'); ?>
        </li>
      <?php } ?>
      </ul>
      <?php if($this->session->userdata('id')){ ?>
        
      <div class="col-sm-1">
 
        <?= anchor('admin/cart','Cart','class="btn btn-info"'); ?>
      </div>
    <?php } ?>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="Assets/css/bootstrap.min.js"></script>  -->
</body>
</html>