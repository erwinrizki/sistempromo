<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Daftar Promosi Terkirim</h3>
		<?php 
			session_start();
			if(isset($_SESSION['delete'])) {
				echo "<div class='alert alert-dismissable alert-success' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				Data Promosi Berhasil Dihapus</div>";
				$_SESSION['delete'] = null;
			}
			
			if(isset($_SESSION['kirim'])) {
				echo "<div class='alert alert-dismissable alert-success' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				Pengiriman Promosi Berhasil</div>";
				$_SESSION['kirim'] = null;
			}
			
			if(isset($_SESSION['kosong'])) {
				echo "<div class='alert alert-dismissable alert-danger' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span>
				Promosi Gagal Dikirim, Tidak Ada Pelanggan Terdaftar di Merk Tersebut!</div>";
				$_SESSION['kosong'] = null;
			}
		?>
		<br/>
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>No</th>
			  <th>Isi Promosi</th>
			  <th>Merk Kendaraan</th>
			  <th>Nomer HP</th>
			  <th>Tanggal Kirim</th>
			  <th><center>Aksi</center></th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				include "koneksi.php";
				
				$tampil = "SELECT * FROM promosi AS pro
							INNER JOIN pelanggan AS pel ON pel.id_pelanggan=pro.id_pelanggan
							INNER JOIN merk AS m ON m.id_merk=pro.id_merk
							ORDER BY tanggal_kirim DESC";
				$qtampil = mysql_query($tampil);
				$no = 1;
				while($hasil = mysql_fetch_array($qtampil)) {
					$id = $hasil['id_promosi'];
					$isi = $hasil['isi_promosi'];
					$merk = $hasil['nama_merk'];
					$hp = $hasil['nomer_hp'];
					$tgl = $hasil['tanggal_kirim'];
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $isi ?></td>
				<td><?php echo $merk ?></td>
				<td><?php echo $hp ?></td>
				<td><?php echo $tgl ?></td>
				<td>
					<div style='margin-right:-90px; margin-left:+30'>
					<a href="detailpromosi.php?id=<?php echo $id ?>" role="button" class="btn btn-info">
					  <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Detail&nbsp;
					</a>&nbsp;&nbsp;
					
					<a href="#myModal_<?php echo $id; ?>" role="button" class="btn btn-danger" data-toggle="modal">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</a>
						
					<div id="myModal_<?php echo $id; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Konfirmasi Hapus Promosi</h4>
								</div>
								<div class="modal-body">
									<p>Anda Yakin Ingin Menghapus?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
									<a href="processpromosi.php?act=del&id=<?php echo $id; ?>" type="button" class="btn btn-primary">Ya</a>
								</div>
							</div>
						</div>
					</div>
					</div>
				</td>
			</tr>
			<?php	
					$no++;
				}
			?>
		  </tbody>
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