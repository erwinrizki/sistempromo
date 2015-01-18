<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Detail Promosi</h3><br/><br/>
		<?php 
			include "koneksi.php";
			
			$id = $_GET['id'];
			$tampil = "SELECT * FROM promosi AS pro
						INNER JOIN pelanggan AS pel ON pel.id_pelanggan=pro.id_pelanggan
						INNER JOIN merk AS m ON m.id_merk=pro.id_merk
						WHERE id_promosi='$id'";
			$qtampil = mysql_query($tampil);
			$hasil = mysql_fetch_array($qtampil);
			$id = $hasil['id_promosi'];
			$isi = $hasil['isi_promosi'];
			$merk = $hasil['nama_merk'];
			$nama = $hasil['nama_pelanggan'];
			$alamat = $hasil['alamat_pelanggan'];
			$hp = $hasil['nomer_hp'];
			$tgl = $hasil['tanggal_kirim'];
		?>
			<table class="table">
				<tr>
					<td><b>Isi Promo</b></td>
					<td>:</td>
					<td><?php echo $isi ?></td>
				</tr>
				<tr>
					<td><b>Nama Pelanggan</b></td>
					<td>:</td>
					<td><?php echo $nama ?></td>
				</tr>
				<tr>
					<td><b>Alamat Pelanggan</b></td>
					<td>:</td>
					<td><?php echo $alamat ?></td>
				</tr>
				<tr>
					<td><b>Nomer HP</b></td>
					<td>:</td>
					<td><?php echo $hp ?></td>
				</tr>
				<tr>
					<td><b>Merk Kendaraan</b></td>
					<td>:</td>
					<td><?php echo $merk ?></td>
				</tr>
				<tr>
					<td><b>Tanggal Kirim<b></td>
					<td>:</td>
					<td><?php echo $tgl ?></td>
				</tr>
			</table>
	</div>
	</div>
	
	<footer>
		<p>Copyright &copy; 2015</p>
	</footer>
</div>
	<script src="theme/js/jquery-1.10.2.min.js"></script>
	<script src="theme/js/bootstrap.min.js"></script>
	<script src="theme/js/bootswatch.js"></script>
</body>
</html>