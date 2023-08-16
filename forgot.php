<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
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
					<h3 class="text-dark fw-bolder fs-4 mb-2">Forget Password ?</h3>

					<div class="fw-normal text-muted mb-4">
						Enter your email to reset your password.
					</div>  

					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
					</div>  

					<button type="submit" class="btn btn-primary submit_btn my-4" name="sub">Submit</button>
                    <a href="login.php" class="btn btn-danger submit_btn my-4 ms-3">Cancel
						<!-- <button type="submit" class="btn btn-danger submit_btn my-4 ms-3">Cancel</button>  -->
					</a>
				</form>
			</div>
		</div>
	</section>
</body>
</html>

<?php
//include require phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
// //define name spacess
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "connection.php";
	if(isset($_POST['sub']))
	{
		$email=$_POST['mail'];

		$sql="select * from user where email='$email'";
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			$fname=$row['First_Name'];
			$lname=$row['Last_Name'];
			$dob=$row['dob'];
			$gender=$row['Gender'];
			// $email=$row['email'];
			$phone=$row['phone'];
			$uname=$row['username'];
			$encryptpw=$row['password'];
			$usertype=$row['usertype'];
			$indexn=$row['index_or_staff'];
			$nic=$row['NIC'];
			$image=$row['image'];
		
			$sqlv="select * from verification where email='$email'";
		$resv=mysqli_query($con,$sqlv);
		$rowv=mysqli_fetch_array($resv);
		$omail=$rowv['email'];
			if($omail==$email)
			{
				echo("<script>") ;
						echo('alert("Please Try Again Later...")');
						// echo " window.location.href='forgot.php'";
						echo("</script>") ;
			}
			else
			{

			

		$verification_code = substr(number_format(time()*rand(),0,'',''),0,6);

		$sql2="insert into verification (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,pin) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','$image',$verification_code)";
		

		$res2=mysqli_query($con,$sql2);

		if($res2)
		{
			$mail=new PHPMailer();

			//set mailer to use smtp
			$mail->isSMTP();
		
			//define smtp host
			$mail->Host="smtp.gmail.com";
			//enable smtp authentications
			$mail->SMTPAuth="true";
		
			// set type of encryption (SSL/tLS)
			$mail->SMTPSecure="tls";
		
			//set port to connect smtp
			$mail->Port="587";
			//set  gmail user name
			$mail->Username="rminsimam1234@gmail.com";
			//set email password
			$mail->Password="hrmtjevmijlnvbbj";
			//set email subject
			$mail->Subject="Password Reset Verification Mail";
			//set sender email
			$mail->setFrom("rminsimam1234@gmail.com",'Insi');
			//using html codes
			$mail->isHTML(true);
			//attachment
			// $mail->addAttachment('C:\Users\abans\Desktop\bootstrap website\8.jpg');
			//email body
			$mail->Body="<h1>User Verification</h1><br>Your Verification PIN is - $verification_code";
		
			//add recipient
			$mail->addAddress($email);
		
			//finally send maail
				if($mail->Send()){

				echo("<script>") ;
				echo('alert("Verification mail has been sent...")');
				echo("</script>") ;
		
			
			
		
			//closing smtp connection
				$mail->smtpClose();

				echo " <script>";
				echo " window.location.href='resetpeoc.php?mail=$email'";
				echo " </script>";
				
				}
				else
				{
					echo("<script>") ;
					echo('alert("Verification mail not sended... Please Try Again Later...")');
					// echo " window.location.href='forgot.php'";
					echo("</script>") ;
			
				
				
			
				//closing smtp connection
				$mail->smtpClose();

				echo " <script>";
				echo " window.location.href='forgot.php'";
				echo " </script>";
				}

			}
			else
			{
						echo("<script>") ;
						echo('alert("Please Try Again Later...")');
						// echo " window.location.href='forgot.php'";
						echo("</script>") ;
			}


			echo " <script>";
			echo " window.location.href='forgot.php'";
			echo " </script>";
		}
		}
		else
		{
					echo("<script>") ;
					echo('alert("This mail address is not found... Please Try Again With Correct Mail...")');
					// echo " window.location.href='forgot.php'";
					echo("</script>") ;
		}

	}



?>


    


				