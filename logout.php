<?php
	session_start();
	
	$_SESSION['user'] = '';
	session_destroy();
	echo "<script>location.replace('index.php');</script>";
?>