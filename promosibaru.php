<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Tambah Promosi Baru</h3><br/><br/>
		<form class="form-horizontal" action="processpromosi.php?act=add" method="POST">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Isi Promosi</label>
			  <div class="col-lg-7">
				<textarea rows="5" class="form-control" name="pesan" required></textarea>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Merk Kendaraan</label>
			  <div class="col-lg-7">
				<select name="merk" class="form-control" required>
					<option value="">-Pilih Merk Kendaraan-</option>
					<?php 
						include "koneksi.php";
						
						$tampil = "SELECT * FROM merk";
						$qtampil = mysql_query($tampil);
						while($hasil = mysql_fetch_array($qtampil)) {
							$id = $hasil['id_merk'];
							$nama = $hasil['nama_merk'];
					?>
							<option value="<?php echo $id; ?>" ><?php echo $nama; ?></option>
					<?php
						}
					?>
				</select>
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-lg-7 col-lg-offset-2">
				<button type="reset" class="btn btn-default">Cancel</button>
				<button type="submit" class="btn btn-primary">Kirim Promosi</button>
			  </div>
			</div>
		</form>
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