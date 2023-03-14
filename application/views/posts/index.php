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
	<div class="container mt-3">
	    <h2>Postlar</h2>
	    <div class="d-flex">
	    	<input class="form-control" id="myInput" type="text" placeholder="Search..">
	    	<a href="<?= base_url('index.php/post/create'); ?>" class="btn btn-sm btn-primary">Yeni post</a>
	    </div>
	    <br>
	    <table class="table table-bordered">
	        <thead>
	            <tr>
	                <th>Başlıq</th>
	                <th>Məzmun</th>
	                <th>Etiketlər</th>
	                <th>Şəkil</th>
	                <th>Tarix</th>
	            </tr>
	        </thead>
	        <tbody id="myTable">
	        	<?php foreach($posts as $post): ?>
		            <tr>
		                <td><?=$post->title; ?></td>
		                <td><?=$post->tags; ?></td>
		                <td><img src="<?=$post->image; ?>"></td>
		                <td><?=date('d-m-Y H:i:s', strtotime($post->created_at)); ?></td>
		            </tr>
	            <?php endforeach; ?>
	        </tbody>
	    </table>
	</div>
</body>