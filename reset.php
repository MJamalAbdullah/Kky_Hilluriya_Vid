<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pin Verification</title>
	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="website icon" type="png" href="img/logosmall.png">
	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <section class="wrapper">
		<div class="container">
			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
				<div class="logo">
					<br>
					<img src="img/logobig.jpg" class="img-fluid" alt="logo" width="130" height="200">

					<br>
				</div>
				<br>
				<form class="rounded bg-white shadow p-5" method="post" action="">
					<h3 class="text-dark fw-bolder fs-4 mb-2">Pin Verification !!</h3>

					<div class="fw-normal text-muted mb-4">
						Verify Your Pin to Reset Your Password.
					</div>  

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" name="pw" placeholder="New Password" minlength="10" maxlength="12"  require='required' onkeyup="chkpw()">
						<label for="floatingInput">Enter Your New Password</label>
					</div>
                    <div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput1" name="pw2" placeholder="Re-Enter Password" minlength="10" maxlength="12" require='required' onkeyup="chkpw()">
						<label for="floatingInput1">Re - Enter Your New Password</label><br>
						<span id="status" style="color:green;">&nbsp</span><span id="status1" style="color:red;">&nbsp</span>
					</div>
					<!-- <div class="form-floating mb-3">
						<input type="checkbox" class="form-check-input" id="ch1" name="ch1">&nbsp I am Sure to Change My Password
						
					</div>   -->

					<button type="submit" class="btn btn-primary submit_btn my-4" name="confirm">Confirm</button>
                    <a href="login.php"> <button type="submit" class="btn btn-danger submit_btn my-4 ms-3">Cancel</button> </a>
					
				</form>
			</div>
		</div>
	</section>
	<script>
		function chkpw()
		{

		
		let st1=document.getElementById('floatingInput').value;
		let st2=document.getElementById('floatingInput1').value;

		if(st1===st2)
		{
			document.getElementById('status').innerHTML="Password in Two Field is Correct";
			document.getElementById('status1').innerHTML="";
		}
		else
		{
			document.getElementById('status1').innerHTML="Password in Two Field is Incorrect";
			document.getElementById('status').innerHTML="";
			
		}
	}
	</script>
</body>
</html>

<?php
	include "connection.php";
	$mail=$_GET['mail'];
	if(isset($_POST['confirm']))
	{
		$s1=$_POST['pw'];
		$s2=$_POST['pw2'];

		   //encrypt data
		   $ciphering = "AES-128-CTR";
    
		   // Use OpenSSl Encryption method
		   $iv_length = openssl_cipher_iv_length($ciphering);
		   $options = 0;
		   
		   // Non-NULL Initialization Vector for encryption
		   $encryption_iv = '1234567891011121';
		   
		   // Store the encryption key
		   $encryption_key = "insi99";
		   
		   // Use openssl_encrypt() function to encrypt the data
		   $encryptpw = openssl_encrypt($s2, $ciphering,
					   $encryption_key, $options, $encryption_iv);

		if($s1==$s2)
		{
			$sql="update user set password='$encryptpw' where email='$mail'";
			$res=mysqli_query($con,$sql);
			if($res)
			{
				echo "<script> alert('Your Password Has Been Changed Please Login Again!!.'); window.location.href='login.php'; </script>";
			}
			else
			{
				echo "<script> alert('Your Password Not Changed Try Again!!.');  </script>";
				
			}
		}
	}

?>