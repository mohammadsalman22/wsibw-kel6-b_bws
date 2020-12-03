<!DOCTYPE html>
<html>
<head>
	<title>Halaman Masuk</title>
	<link rel="stylesheet" type="text/css" href="assets/font-aw/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<style type="text/css">
		.alert{
			position: relative;
		    padding: .75rem 1.25rem;
		    border: 1px solid transparent;
		}
		.alert-danger{
		    color: #721c24;
		    background-color: #f8d7da;
		    border-color: #f5c6cb;
		}
		.alert-success{
		    color: #155724;
		    background-color: #d4edda;
		    border-color: #c3e6cb;
		}
	</style>
</head>
<body>
	<div class="container">
	<?php session_start();
		if (isset($_SESSION['alert'])) {
			if (isset($_SESSION['alert']['success'])) {
				?>
				<div class="alert alert-success">
					<?=$_SESSION['alert']['success']?>
				</div>
				<?php
			}else if($_SESSION['alert']['danger']){
				?>
				<div class="alert alert-danger">
					<?=$_SESSION['alert']['danger']?>
				</div>
				<?php
			}
		}
		session_unset();
		session_destroy(); 
	?>
			<div class="right">
			<div class="head">
				<h3>Login</h3>
			</div>
				<form id="box-login" method="POST" action="act_login.php" autocomplete="off">
						<div class="user">
							<input type="text" name="username" placeholder="Username">
						</div>
						<div class="user1">
							<input type="password" name="password" placeholder="Password">
						</div>
					<input type="hidden" name="aksi" value="masuk">
					<input type="submit" value="Masuk" name="submit">
					<a href="register.php">daftar</a>
				</form>
			</div>
		
		</div>
</body>
</html>