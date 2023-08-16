<?php
    session_start();
	include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="website icon" type="png" href="./img/icon.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utillog.css">
	<link rel="stylesheet" type="text/css" href="css/mainlog.css">
<!--===============================================================================================-->
	<style>
		.field-icon {
			float: right;
			margin-left: -25px;
			margin-top: -35px;
			position: relative;
			z-index: 2;
		}
	</style>
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--===============================================================================================-->
</head>
<body>
	<div class="container-flued">
		
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<span class="field-icon"><a class="btn btn-close" href="index.php"></a></span>
				<form class="login100-form validate-form" method="post" action="login.php" name="frmUser">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username" autocomplete="off">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password" autocomplete="off" id="password-field">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="forgot.php" style="font-size: 15px;">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>
					</div>

					<?php
						if (isset($_POST['login']))
						{
							$unm = $_POST['username'];
							$pass =$_POST['pass'];

							$sql="SELECT * FROM user WHERE username='$unm';";
							$exe=mysqli_query($con,$sql);

							$row=mysqli_fetch_array($exe);
								$_SESSION['username']=$row['username'];
								$_SESSION["pass"] = $row['password'];
								$_SESSION['status'] = $row['u_status'];
								$_SESSION['type'] = $row['usertype'];
							
							//encrypt data
    						$ciphering = "AES-128-CTR";

							// Use OpenSSl Encryption method
							// $iv_length = openssl_cipher_iv_length($ciphering);
							// $options = 0;
							
							// Non-NULL Initialization Vector for decryption
							$decryption_iv = '1234567891011121';
							  
							// Store the decryption key
							$decryption_key = "insi99";
							$options = 0;
							  
							// Use openssl_decrypt() function to decrypt the data
							$decryption_pass=openssl_decrypt ($_SESSION['pass'], $ciphering,$decryption_key, $options, $decryption_iv);

							// echo $_SESSION['username']."??????????".$decryption_pass;

							if (!$_SESSION['status'] == '0')
							{
								if ($_SESSION['type'] == 'ADMIN' or $_SESSION['type'] == 'ADMINN' )
								{
									if ($_SESSION['username']== $unm)
									{
										if ($decryption_pass==$pass)
										{
											if(isset($_SESSION["username"]))
											{
												// header("Location:index.php");
												echo "<script> location.replace('./admin.php') </script>";
											}
										}
										else
										{
											echo "<script> alert('Please Verify Your Password.'); location.replace('./login.php') </script>";
										}
									}
									else
									{
										echo "<script> alert('Please Verify Your Username.'); location.replace('./login.php') </script>";
									}
								}
								elseif ($_SESSION['type'] == 'Management Assistant' or $_SESSION['type'] == 'Development Officer')
								{
									if ($_SESSION['username']== $unm)
									{
										if ($decryption_pass==$pass)
										{
											if(isset($_SESSION["username"]))
											{
												// header("Location:index.php");
												echo "<script> location.replace('./ma-do.php') </script>";
											}
										}
										else
										{
											echo "<script> alert('Please Verify Your Password.'); location.replace('./login.php') </script>";
										}
									}
									else
									{
										echo "<script> alert('Please Verify Your Username.'); location.replace('./login.php') </script>";
									}
								}
								elseif ($_SESSION['type'] == 'Requested Staff' or $_SESSION['type'] == 'Staff' )
								{
									if ($_SESSION['username']== $unm)
									{
										if ($decryption_pass==$pass)
										{
											if(isset($_SESSION["username"]))
											{
												// header("Location:index.php");
												echo "<script> location.replace('./staffin.php') </script>";
											}
										}
										else
										{
											echo "<script> alert('Please Verify Your Password.'); location.replace('./login.php') </script>";
										}
									}
									else
									{
										echo "<script> alert('Please Verify Your Username.'); location.replace('./login.php') </script>";
									}
								}
								else
								{
									if ($_SESSION['username']== $unm)
									{
										if ($decryption_pass==$pass)
										{
											if(isset($_SESSION["username"]))
											{
												// header("Location:index.php");
												echo "<script> location.replace('./studentin.php') </script>";
											}
										}
										else
										{
											echo "<script> alert('Please Verify Your Password.'); location.replace('./login.php') </script>";
										}
									}
									else
									{
										echo "<script> alert('Please Verify Your Username.'); location.replace('./login.php') </script>";
									}
								}
							}
							else
							{
								echo "<script> alert('Your Account Was Disable BY Principal. Please Contact Principal'); location.replace('./login.php') </script>";
							}
						}
					?>


					<!--<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div> 
				/////////////////////////////////////////////////////////
				<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>-->

				<br><br><br>

					<div align="center" class="">
						<span class="">
							Haven't An Account Sign Up Here...
						</span>
						<br><br>

						<a href="./user_regi.php" class="btn btn-outline-success btn-sm ">Sign Up </a>				<!--txt2 -->
						&nbsp&nbsp&nbsp 
						<!-- <a href="C:\Users\abans\Desktop\Bluetooth2\Web Project Group\index.html" class="btn btn-outline-danger btn-sm ">Cancel </a>				txt2 -->
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</div>
<script>
	$(".toggle-password").click(function() {

	$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
	input.attr("type", "text");
	} else {
	input.attr("type", "password");
	}
	});
</script>
</body>
</html>