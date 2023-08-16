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

$ind=$_GET['index'];


// $ind = !empty($_GET['index']) ? $_GET['index'] : '';


 if(isset($_POST["Verify"]))
 {
	$code= $_POST["code"];
	$sql1="select * from verification where pin=$code";

	$res1=mysqli_query($con,$sql1);

	$row=mysqli_fetch_array($res1);
	$fname=$row['First_Name'];
	$lname=$row['Last_Name'];
	$dob=$row['DOB'];
	$gender=$row['Gender'];
	$email=$row['email'];
	$phone=$row['phone'];
	$uname=$row['username'];
	$encryptpw=$row['password'];
	$usertype=$row['usertype'];
	$indexn=$row['index_or_staff'];
	$nic=$row['NIC'];
	$image=$row['image'];

	

		if (mysqli_num_rows($res1)==1)
		{
			if($usertype=="Staff")
			{
				$sql3="insert into request (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,u_status) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','$image',1)";
				$res3=mysqli_query($con,$sql3);

				$usertype="Requested Staff";
				$sql2="insert into user (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,u_status) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','$image',1)";
				$res2=mysqli_query($con,$sql2);
			}
			else
			{
				$sql2="insert into user (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,u_status) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','$image',1)";
				$res2=mysqli_query($con,$sql2);
			}
			
				if ($res2 || $res3)
				{
					// echo"<script>";
					// echo'alert("Your Account Successfully Created.")';
					// echo "location.replace('./login.php')";
					// echo("</script>");
					echo "<script> alert('Your Account Has been Created Please Login!!.'); location.replace('login.php'); </script>";
				}
				else
				{
					echo"<script>";
					echo'alert("Your Record Not Added Successfully.")';
					echo("</script>");
				}
			echo " <script>";
        	echo " window.location.href='user_regi.php'";
        	echo " </script>";
			
		}
		else
		{
			echo"<script>";
			echo'alert("verification code failed.")';
			echo("</script>");
			echo " <script>";
        echo " window.location.href='email_verification.php?index=$ind'";
        echo " </script>";
			
		}



 }
// $email=$_POST["email"];
// $verification_code= $_POST["code"];

// //connect with database

// 	$conn= mysqli_connect("localhost","root","","school");

// 	//email verify
// 	$sql="UPDATE users SET email_varifaction_at = NOW() where verification_code ='".$verification_code."'";

// 	$result =mysqli_query($conn, $sql);

// 	if(mysqli_affected_rows($conn) == 0)
// 	{
// 		die("verification code failed.");
// 	}
// 	echo "<p> Your can Login now";
// 	exit();

//}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pin Verification</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<form method="POST">
	<!-- <input type="hidden" name="email" value="" required> --> 
	 <?php //echo $_GET['email'];?> <center>
	 <h2 class="display-5">Email verification</h2></center><br>

	 <div class="row">
	 <div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h3 align="center" class="display-8">Enter Your PIN Number</h3>
<table align="center" cellpadding="5">
	
	<tr align="center">
	<td>
	<input type="text" name="code" placeholder="Ender verification code" required="required" class="form-control" autocomplete="off">

<td>
	<input type="submit" name="Verify" value="Verify Email" class="btn btn-sm btn-primary"></form>
	<tr>
<td></td>
	</tr>
	<tr><td></td><tr><td></td><tr><td></td><tr><td></td><tr><td></td><tr><td></td>
<tr>
	<td align="center">Didn't Get Your Email?... <td> <a href="resend.php?in=<?php echo $ind;?>" class="btn btn-sm btn-outline-success">Resend</a>
	<!-- &nbsp&nbsp&nbsp&nbsp -->
	

</table>
<br><br><br><br>



	
</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>



