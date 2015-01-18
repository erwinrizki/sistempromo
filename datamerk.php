<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Data Merk</h3>
		<?php 
			session_start();
			if(isset($_SESSION['insert'])) {
				echo "<div class='alert alert-dismissable alert-success' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				Data Merk Berhasil Ditambahkan</div>";
				$_SESSION['insert'] = null;
			}
			
			if(isset($_SESSION['delete'])) {
				echo "<div class='alert alert-dismissable alert-success' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				Data Merk Berhasil Dihapus</div>";
				$_SESSION['delete'] = null;
			}
			
			if(isset($_SESSION['update'])) {
				echo "<div class='alert alert-dismissable alert-success' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
				Update Data Merk Berhasil</div>";
				$_SESSION['update'] = null;
			}
			
			if(isset($_SESSION['ada'])) {
				echo "<div class='alert alert-dismissable alert-danger' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span>
				Data Merk Sudah Ada!</div>";
				$_SESSION['ada'] = null;
			}
		?>
		<br/>
		<a href="tambahmerk.php" role="button" class="btn btn-success">
			<span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Tambah Data</a>&nbsp;&nbsp;
		
		<br/><br/>
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>No</th>
			  <th>Merk Kendaraan</th>
			  <th><center>Aksi</center></th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				include "koneksi.php";
				
				$tampil = "SELECT * FROM merk";
				$qtampil = mysql_query($tampil);
				$no = 1;
				while($hasil = mysql_fetch_array($qtampil)) {
					$id = $hasil['id_merk'];
					$nama = $hasil['nama_merk'];
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $nama ?></td>
				<td>
					<div style='margin-right:-200px; margin-left:+50px'>
					<a href="detailmerk.php?id=<?php echo $id; ?>" role="button" class="btn btn-info">
					  <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Detail&nbsp;
					</a>&nbsp;&nbsp;
					
					<a href="#myModal_<?php echo $id; ?>" role="button" class="btn btn-danger" data-toggle="modal">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</a>
						
					<div id="myModal_<?php echo $id; ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Konfirmasi Hapus Data Merk</h4>
								</div>
								<div class="modal-body">
									<p>Anda Yakin Ingin Menghapus?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
									<a href="processmerk.php?act=del&id=<?php echo $id; ?>" type="button" class="btn btn-primary">Ya</a>
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