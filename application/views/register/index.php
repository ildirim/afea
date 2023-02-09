<!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="afea">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">
	<link href="<?= base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<title> Afea Group </title>

	<!-- <script src="<?= base_url();?>/jquery-3.4.1.min.js"></script> -->
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="row">
		<div id="formContent">
			<h3>Qeydiyyat</h3>
			<!-- Login Form -->
			<form method="post" action="<?= base_url('index.php/register/registerUser'); ?>">
				<input type="text" id="name" class="second" name="name" placeholder="Ad">
				<input type="text" id="surname" class="second" name="surname" placeholder="Soyad">
				<input type="text" id="email" class="second" name="email" placeholder="Email">
				<input type="password" id="password" class="third" name="password" placeholder="Şifrə">
				<input type="submit" class="fourth" value="Qeydiyyat">
			</form>
		</div>
	</div>
</body>