<?php
include "connection.php";

//include require phpmailer files
// require 'includes/PHPMailer.php';
// require 'includes/SMTP.php';
// require 'includes/Exception.php';
// //define name spacess
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

$mail=$_GET['mail'];


// $ind = !empty($_GET['index']) ? $_GET['index'] : '';


 if(isset($_POST["Verify"]))
 {
	$code= $_POST["code"];
	$sql1="select * from verification where email='$mail' and pin=$code";
	$res1=mysqli_query($con,$sql1);


	if (mysqli_num_rows($res1)==1)
		{
		
			
			
		
					
					echo "<script> alert('Your Pin Has been Verified Please Fill These Columns!!.'); window.location.href='reset.php?mail=$mail'; </script>";
				}
				else
				{
					echo"<script>";
					echo'alert("Your Pin Has been Verified... Try Again With Correct Verififcation Number.")';
					echo("</script>");
				}
			echo " <script>";
        	// echo " window.location.href='login.php'";
        	echo " </script>";
			
		}
	


	

?>
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
						<input type="text" class="form-control" id="floatingInput" name="code" placeholder="XXXXXX" require='required' onkeypress="funNumber()" maxlength="6">
						<label for="floatingInput">Enter Your PIN Number</label>
					</div>  

					<button type="submit" class="btn btn-primary submit_btn my-4" name="Verify">Verify</button>
                    <a href="login.php"> <button type="submit" class="btn btn-danger submit_btn my-4 ms-3">Cancel</button> </a>
					<br><center>
					<td align="center">Didn't Get Your Verification Pin?... <td> <a href="resendotp.php?uemail=<?php echo $mail;?>" class="btn btn-success submit_btn my-4 ms-3">Resend</a></center>
				</form>
			</div>
		</div>
	</section>
	<script type="text/javascript">
   function funNumber() {
if (event.keyCode >= 48 && event.keyCode <= 57) {
return true;
}
else if (event.keyCode >= 45 && event.keyCode <= 46) {
}
else {
event.returnValue = false;
return false;
}
}
       
</script>
</body>
</html>



