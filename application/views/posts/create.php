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
			<h3>Yeni post</h3>
			<!-- Login Form -->
			<form method="post" action="<?= base_url('index.php/post/store'); ?>" enctype="multipart/form-data">
				<input type="text" id="title" class="second" name="title" placeholder="Başlıq">
				<input type="text" id="content" class="second" name="content" placeholder="Məzmun">
				<input type="text" id="tags" class="second" name="tags" placeholder="Etiketlər">
				<input type="file" id="image" class="second" name="image" placeholder="">
				<input type="submit" class="fourth" value="Əlavə et">
			</form>
		</div>
	</div>
</body>