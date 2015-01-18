<?php 
	session_start();
	include "koneksi.php";
	
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	$mdpass = md5($pass);
	
	$tampil = "SELECT * FROM admin WHERE username='$user' AND password='$mdpass'";
	$qtampil = mysql_query($tampil);
	
	if(mysql_num_rows($qtampil) > 0) {
		$_SESSION['user'] = 'aktif';
		echo "<script>location.replace('datapelanggan.php');</script>";
	} else {
		$_SESSION['salah'] = 'sukses';
		echo "<script>location.replace('index.php')</script>";
	}
?>