<?php
	session_start();
	include "koneksi.php";
	
	$aksi = $_GET['act'];
	
	if($aksi == "add") {
		$nama = $_POST['merk'];
		
		$tampil = "SELECT * FROM merk WHERE nama_merk='$nama'";
		$qtampil = mysql_query($tampil);
		
		if(mysql_num_rows($qtampil) > 0) {
			$_SESSION['ada'] = 'sukses';
			echo "<script>location.replace('datamerk.php');</script>";
		} else {
			$tambah = "INSERT INTO merk VALUES(null, '$nama')";
			$qtambah = mysql_query($tambah);
			$_SESSION['insert'] = 'sukses';
			echo "<script>location.replace('datamerk.php');</script>";
		}
	} else if($aksi == "del") {
		$id = $_GET['id'];
		
		$hapus = "DELETE FROM merk WHERE id_merk='$id'";
		$qhapus = mysql_query($hapus);
		
		$_SESSION['delete'] = 'sukses';
		echo "<script>location.replace('datamerk.php')</script>";
	} else if($aksi == "update") {
		$id = $_POST['idmerk'];
		$nama = $_POST['merk'];
		
		$tampil = "SELECT * FROM merk WHERE nama_merk='$nama'";
		$qtampil = mysql_query($tampil);
		
		if(mysql_num_rows($qtampil) > 0) {
			$_SESSION['ada'] = 'sukses';
			echo "<script>location.replace('datamerk.php');</script>";
		} else {
			$update = "UPDATE merk SET nama_merk='$nama' WHERE id_merk='$id'";
			$qupdate = mysql_query($update);
			$_SESSION['update'] = 'sukses';
			echo "<script>location.replace('datamerk.php');</script>";
		}
	} else {
		echo "<script>location.replace('datamerk.php')</script>";
	}
?>