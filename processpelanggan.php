<?php
	session_start();
	include "koneksi.php";
	
	$aksi = $_GET['act'];
	
	if($aksi == "add") {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nomer = $_POST['nomer'];
		$merk = $_POST['merk'];
		
		$tampil = "SELECT * FROM pelanggan WHERE nama_pelanggan='$nama'";
		$qtampil = mysql_query($tampil);
		
		if(mysql_num_rows($qtampil) > 0) {
			$_SESSION['ada'] = 'sukses';
			echo "<script>location.replace('datapelanggan.php');</script>";
		} else {
			$tambah = "INSERT INTO pelanggan VALUES(null, '$nama', '$alamat', '$nomer', '$merk')";
			$qtambah = mysql_query($tambah);
			$_SESSION['insert'] = 'sukses';
			echo "<script>location.replace('datapelanggan.php');</script>";
		}
	} else if($aksi == "del") {
		$id = $_GET['id'];
		
		$hapus = "DELETE FROM pelanggan WHERE id_pelanggan='$id'";
		$qhapus = mysql_query($hapus);
		
		$_SESSION['delete'] = 'sukses';
		echo "<script>location.replace('datapelanggan.php')</script>";
	} else if($aksi == "update") {
		$id = $_POST['idpel'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nomer = $_POST['nomer'];
		$merk = $_POST['merk'];
		$lama = $_POST['lama'];
		
		$tampil = "SELECT * FROM pelanggan WHERE nama_pelanggan='$nama'";
		$qtampil = mysql_query($tampil);
		
		if(mysql_num_rows($qtampil) > 0 && $lama!=$nama) {
			$_SESSION['ada'] = 'sukses';
			echo "<script>location.replace('datapelanggan.php');</script>";
		} else {
			$tambah = "UPDATE pelanggan SET nama_pelanggan='$nama', alamat_pelanggan='$alamat',
						nomer_hp='$nomer', id_merk='$merk' WHERE id_pelanggan='$id'";
			$qtambah = mysql_query($tambah);
			$_SESSION['update'] = 'sukses';
			echo "<script>location.replace('datapelanggan.php');</script>";
		}
	} else {
		echo "<script>location.replace('datapelanggan.php')</script>";
	}
?>