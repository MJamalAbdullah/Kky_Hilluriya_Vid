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
    if(isset($_POST['send']))
    {
        $fn=$_POST['FullName'];
        $email=$_POST['Email'];
        $pn=$_POST['PhoneNumber'];
        $msg=$_POST['Message'];

        $sql="insert into messages (fullname,mail,phone,msg) values ('$fn','$email','$pn','$msg')";
        $res=mysqli_query($con,$sql);

        if($res)
        {
            echo("<script>") ;
            echo('alert("Your Feedback is Successfully Sended...")');
            echo("</script>") ;
            // echo "Added";
        }
        else
        {
            echo("<script>") ;
            echo('alert("Your Feeaback is Not Sended Successfully...")');
            echo("</script>") ;
            // echo "Not Added";
        }

        mysqli_close($con);
       

        echo " <script>";
        echo " window.location.href='index.php'";
        echo " </script>";
    }

    if(isset($_POST['btm']))
    {

        $msg=$_POST['msgd'];
        $email=$_POST['useremail'];
       
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
       $mail->Subject="User Feedback";
       //set sender email
       $mail->setFrom("rminsimam1234@gmail.com",'Insi');
       //using html codes
       $mail->isHTML(true);
       //attachment
       $mail->addAttachment('img/C:\Users\abans\Desktop\bootstrap website\8.jpg');
       //email body
       $mail->Body="<h1>Messagge From a User</h1><br><br><p align='justyfy'>$msg</p><b><br>Sender Email --></b> $email";
   
       //add recipient
       $mail->addAddress('rminsimam1234@gmail.com');
   
       //finally send maail
       if($mail->Send()){

        echo("<script>") ;
        echo('alert("Your Message is Successfully Sended to Our Develpers...")');
        echo("</script>") ;
   
       
       
   
       //closing smtp connection
       $mail->smtpClose();

       echo " <script>";
       echo " window.location.href='index.php'";
       echo " </script>";
    
    }
    else
    {
        echo("<script>") ;
        echo('alert("Your Message is Not Sended to Our Develpers... Please Try Again...")');
        echo("</script>") ;
   
       
       
   
       //closing smtp connection
       $mail->smtpClose();

       echo " <script>";
       echo " window.location.href='index.php'";
       echo " </script>";
    }
}







?>