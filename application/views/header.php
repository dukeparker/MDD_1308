<!DOCTYPE html>
<html lang="en">
	
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title><?php echo $title; ?></title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-responsive.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">

</head>

<body>
<div id="wrapper">

<?php
	
	$login = site_url('/auth');
	$join = site_url('/join');
	$profile = site_url('/profile');
	$home = site_url('/index');
	$logout = site_url('/logout');

?>
	
	<div class="container">
	
		<nav>
			<img src="<?php echo base_url('img/topline.jpg'); ?>" alt="topline" width="109" height="173">
			<p><a href="<?php echo $login; ?>" class="btn btn-primary btn-block">Sign In</a></p>
			<p><a href="<?php echo $join; ?>" class="btn btn-block">Join Up</a></p>
			<p><a href="<?php echo $home; ?>" class="btn btn-block">Home</a></p>
			<p><a href="<?php echo $profile; ?>" class="btn btn-block">MyTopLine</a></p>
			<p><a href="<?php echo $logout; ?>">Log Out</a></p>		
		</nav>
		
		<header>
			<h1>TopLine Press</h1>
			<h2>Check out today's top headlines.</h2>
			<h3>Powered by NYTimes.com</h3>
		</header>