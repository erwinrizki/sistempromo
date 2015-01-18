<?php include "header.php"; ?>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<h3>Tambah Data Merk</h3><br/><br/>
		<form class="form-horizontal" action="processmerk.php?act=add" method="POST">
			<div class="form-group">
			  <label for="inputEmail" class="col-lg-2 control-label">Merk Kendaraan</label>
			  <div class="col-lg-7">
				<input type="text" class="form-control" id="inputEmail" placeholder="Merk Kendaraan" name="merk" required>
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