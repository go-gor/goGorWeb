<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">

<title>GoGor - Runbbit</title>

<link href="<?=base_url(); ?>css/login.css" rel="stylesheet" type="text/css" />

</head>
 <?php  $session_data = $this->session->userdata('logged_in'); ?>
<body>

	<div align="right">Participe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Entrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?php echo site_url('main/logout')?>'>Logout</a></div>
	<hr></hr>

	<div align="right">olá <?php echo $session_data['username'];  ?></div>
<div style="padding: 100px 0 0 10%;">
	<div id="Area-caixa">
	
	<H3>Runbbit</H3>
	
	</div>
</div>

</body>
</html>
