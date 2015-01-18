<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Tambah Data Pelanggan</h3><br/><br/>
		<form class="form-horizontal" action="processpelanggan.php?act=add" method="POST">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Nama Pelanggan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" placeholder="Nama Pelanggan" name="nama" required>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Alamat Pelanggan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" placeholder="Alamat Pelanggan" name="alamat" required>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Nomer HP Pelanggan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" placeholder="Nomer HP Pelanggan" name="nomer" required>
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
				<button type="submit" class="btn btn-primary">Submit</button>
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