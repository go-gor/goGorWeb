<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="UTF-8">
	<!-- Latest compiled and minified JavaScript -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<!-- material css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/roboto.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/material-fullpalette.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/ripples.min.css'); ?>">
	
	
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	
	<script src="<?php echo base_url('assets/js/material.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/ripples.min.js'); ?>"></script>
	
    <script>
      $.material.init();
    </script>
	
	<!-- Runbbit css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/runbbit.css'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Runbbit favicon -->
	<link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>" sizes="16x16">
	
	<title>GoGor - Runbbit</title>
</head>

<body>

	<div class="container-fluid">
	
		<div class="row">
	  		<div class="col-xs-3 col-lg-3">
	  			<h4>Runbbit</h4>
	  		</div>
	  		<div class="col-xs-9 col-lg-9 pull-right">
	  			<h4 align="right">
	  			<?php 
	  			foreach ($menu as $item => $link){
	  				echo"<span style='margin-right: 30px;'> <a href='".site_url($link)."'>".$item."</a></span>";
	  			}  			
	  			?>
	  			</h4>
	  		</div>
	  		<br />
	  		<hr>
		</div>