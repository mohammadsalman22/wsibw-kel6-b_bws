<?php 
session_start();
if (isset($_SESSION['nama'])) {
 header('location: home.php');
}else{
$user = (isset($_SESSION['user_input']))? $_SESSION['user_input'] : '';
$pass = (isset($_SESSION['pass_input']))? $_SESSION['pass_input'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="action_login.php">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user" placeholder="Nama">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass" placeholder="Sandi">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

				</form>
				<?php
				   if(isset($_SESSION['alert']) || isset($_SESSION['alert_user']) || isset($_SESSION['alert_pass'])){
				     echo (isset($_SESSION['alert']))? $_SESSION['alert'] : '';
				     echo (isset($_SESSION['alert_user']))? $_SESSION['alert_user'] : '';
				     echo (isset($_SESSION['alert_pass']))? $_SESSION['alert_pass'] : '';
				    unset($_SESSION['alert']); 
				    unset($_SESSION['alert_pass']); 
				    unset($_SESSION['alert_pass']); 
				   }else{
				    unset($_SESSION['alert_user']);
				    unset($_SESSION['alert_pass']); 
			   }?>
			</div>
		</div>
	</div>
	
	<?php } ?>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>