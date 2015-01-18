<?php
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	include "koneksi.php";
	
	$kon = mysql_connect('localhost', 'root', 'apem', true);
	mysql_select_db('gammu', $kon);
	
	$aksi = $_GET['act'];
	
	if($aksi == "add") {
		$merk = $_POST['merk'];
		$pesan = $_POST['pesan'];
		
		$tampil = "SELECT * FROM pelanggan WHERE id_merk='$merk'";
		$qtampil = mysql_query($tampil, $koneksi);
		//var_dump($qtampil);
		if(mysql_num_rows($qtampil) > 0) {
			while($hasil = mysql_fetch_array($qtampil)) {
				$idpel = $hasil['id_pelanggan'];
				$nomer = $hasil['nomer_hp'];
				$timestamp = date('Y-m-d G:i:s');
				
				$tambah = "INSERT INTO outbox(DestinationNumber,TextDecoded,CreatorID) VALUES('$nomer', '$pesan', 'Gammu')";
				$qtambah = mysql_query($tambah, $kon);
				
				$tam = "INSERT INTO promosi VALUES(null, '$pesan', '$merk', '$idpel', '$timestamp')";
				$qtam = mysql_query($tam, $koneksi);
				
				$_SESSION['kirim'] = 'sukses';
				echo "<script>location.replace('daftarpromosi.php')</script>";
			}
		} else {
			$_SESSION['kosong'] = 'sukses';
			echo "<script>location.replace('daftarpromosi.php')</script>";
		}
	} else if($aksi == "del") {
		$id = $_GET['id'];
		
		$hapus = "DELETE FROM promosi WHERE id_promosi='$id'";
		$qhapus = mysql_query($hapus, $koneksi);
		
		$_SESSION['delete'] = 'sukses';
		echo "<script>location.replace('daftarpromosi.php')</script>";
	} else {
		echo "<script>location.replace('datapelanggan.php')</script>";
	}
?>