<?php
	session_start();
	
	if(!isset($_SESSION['user'])) {
		$_SESSION['login'] = 'sukses';
		echo "<script>location.replace('index.php');</script>";
	}
?>