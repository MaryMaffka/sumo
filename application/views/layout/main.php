<!DOCTYPE html>
<html>
<head>
<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="root" />
<meta name="copyright" content="Mantis-a [http://www.mantisa.cz/]" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?=base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<script src="<?=base_url();?>lib/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/apprise-1.5.full.js"></script>
<link rel="stylesheet" href="<?=base_url();?>css/apprise.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>css/formCss.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>css/style.css" type="text/css" media="screen, projection, tv" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
<div id="top"></div>
	<div class="wrapper">
	
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul class="menu cleaning-box">
		<div id="sMenu">
			<li><a href="http://sumo-ua.com/" class="active">Home</a></li>
			<li><a href="<?=base_url();?>regist/">Регистрация</a></li>
			<li><a href="<?=base_url();?>">Login</a></li>
			<li><a href="<?=base_url();?>auth/loadPersPage">Portfolio</a></li>
		</div>  
		</ul>
          
 
<?php
$this->load->view($data['view'],$data);  
 ?>

