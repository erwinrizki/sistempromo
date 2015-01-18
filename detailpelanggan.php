<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Detail Data Pelanggan</h3><br/><br/>
		<?php 
			include "koneksi.php";
			
			$id = $_GET['id'];
			$tampil = "SELECT * FROM pelanggan WHERE id_pelanggan='$id'";
			$qtampil = mysql_query($tampil);
			$hasil = mysql_fetch_array($qtampil);
			
			$idpel = $hasil['id_pelanggan'];
			$nama = $hasil['nama_pelanggan'];
			$alamat = $hasil['alamat_pelanggan'];
			$nomer = $hasil['nomer_hp'];
			$merk = $hasil['id_merk'];
		?>
		<form class="form-horizontal" action="processpelanggan.php?act=update" method="POST">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Nama Pelanggan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" value="<?php echo $nama; ?>" placeholder="Nama Pelanggan" name="nama" required>
				<input type="hidden" value="<?php echo $idpel; ?>" name="idpel" />
				<input type="hidden" value="<?php echo $nama ?>" name="lama" />
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Alamat Pelanggan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" value="<?php echo $alamat; ?>" placeholder="Alamat Pelanggan" name="alamat" required>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Nomer HP Pelanggan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" value="<?php echo $nomer; ?>" placeholder="Nomer HP Pelanggan" name="nomer" required>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Merk Kendaraan</label>
			  <div class="col-lg-7">
				<select name="merk" class="form-control" required>
					<option value="">-Pilih Merk Kendaraan-</option>
					<?php 
						include "koneksi.php";
						
						$tampil2 = "SELECT * FROM merk";
						$qtampil2 = mysql_query($tampil2);
						while($hasil = mysql_fetch_array($qtampil2)) {
							$idm = $hasil['id_merk'];
							$namam = $hasil['nama_merk'];
					?>
							<option value="<?php echo $idm; ?>" <?php if($idm == $merk) echo 'selected'; ?> ><?php echo $namam; ?></option>
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