<?php include "ceksesi.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>E-Promosi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="theme/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="theme/css/bootstrap.min.css" rel="stylesheet">
	<script src="theme/js/jquery-1.10.2.min.js"></script>
	<script type='text/javascript'>
	   
	 </script>
  </head>
  <body>
		<div class="navbar navbar-inverse navbar-fixed-top">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">E-Promosi</a>
		  </div>
		  <div class="navbar-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Promosi <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="promosibaru.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;Buat Promosi Baru</a></li>
				  <li><a href="daftarpromosi.php"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;&nbsp;Lihat Promosi Terkirim</a></li>
				</ul>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Master Data <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="datapelanggan.php">Master Pelanggan</a></li>
				  <li><a href="datamerk.php">Master Merk</a></li>
				</ul>
			  </li>
			  <li>
				<a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;Logout</a>
			  </li>
			</ul>
		  </div>
		</div>
		
		