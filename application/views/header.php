<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>CHIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" type="image/x-icon" href="assets/favicon.png"> -->
	
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js" ></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/validate.js"></script>
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/datatable/datatables.css">
	
	<script src="<?php echo base_url();?>assets/datatable/datatables.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	label{
		font-family: Montserrat-Regular;
	}
	.error{
		color: red;
		font-size: 12px;
		display: block;
		text-align: left;
	}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">M-CHIT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>index.php/Chit/chit_list">புதிய சீட்டு </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Customer/customer_list">பயனர்கள்  </a>
          <a class="dropdown-item" href="<?php echo base_url()?>index.php/Chit/chitamount_list">சீட்டு தொகைககள் </a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
