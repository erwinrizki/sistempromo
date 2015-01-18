
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Promosi</title>

    <!-- Bootstrap core CSS -->
    <link href="theme/css/bootstrap.css" rel="stylesheet">
	<link href="theme/css/bootstrap.min.css" rel="stylesheet">
	<script src="theme/js/jquery-1.10.2.min.js"></script>

    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      
    <![endif]-->
  </head>

  <body>

    <div class="container">
	  <div class="col-md-6 col-md-offset-3">
      <form class="form-signin" action="validasilogin.php" method="POST">
        <h2 class="form-signin-heading">Login Disini</h2>
		<?php 
			session_start();
			if(isset($_SESSION['salah'])) {
				echo "<div class='alert alert-dismissable alert-danger' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span>
				Kombinasi Username dan Password Salah!</div>";
				session_destroy();
			}
			
			if(isset($_SESSION['login'])) {
				echo "<div class='alert alert-dismissable alert-danger' role='alert'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span>
				Maaf Anda Belum Login, Silahkan Login Terlebih Dahulu</div>";
				session_destroy();
			}
		?>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
		<br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>
      </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
