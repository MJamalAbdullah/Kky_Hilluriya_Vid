
<?php
include "connection.php";

//include require phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
// //define name spacess
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 $in=$_GET['in'];
 


	
		
		
$sqlr="select * from resend where ind='$in'";
	$resr=mysqli_query($con,$sqlr);

	if($rowr=mysqli_fetch_array($resr))
	{
		$verification_code1=$rowr['pin'];
		$email1=$rowr['mail'];
		
	}


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
        $mail->Subject="Verification Mail";
        //set sender email
        $mail->setFrom("rminsimam1234@gmail.com",'Insi');
        //using html codes
        $mail->isHTML(true);
        //attachment
        $mail->addAttachment('img/C:\Users\abans\Desktop\bootstrap website\8.jpg');
        //email body
        $mail->Body="<h1>User Verification</h1><br>Your Verification PIN is - $verification_code1";
    
        //add recipient
        $mail->addAddress($email1);
    
        //finally send maail
        if($mail->Send()){

            echo("<script>") ;
            echo('alert("Verification Mail is Successfully Re-sended...")');
            // echo " window.location.href='email_verification.php'";
            echo("</script>") ;
    
        }
		else{
			echo("<script>") ;
			echo('alert("You Are Not Register Successfully... Try Again...")');
			echo " window.location.href='email_verification.php'";
			echo("</script>") ;
			}
        
    
        //closing smtp connection
        $mail->smtpClose();
        
        echo("<script>") ;
        // echo('alert("Verification Mail is Successfully Sended...")');
        echo " window.location.href='email_verification.php?index=$in'";
        echo("</script>") ;
    
   
	


?>