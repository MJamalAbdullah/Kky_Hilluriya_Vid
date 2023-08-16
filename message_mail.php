<?php
    //include require phpmailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    // //define name spacess
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['replay']))
    {
        $email_id=$_POST['mail'];
        $msg=$_POST['msg'];

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
        $mail->Subject="Reply For Your FeedBack";
        //set sender email
        $mail->setFrom("rminsimam1234@gmail.com",'Insi');
        //using html codes
        $mail->isHTML(true);
        //attachment
        $mail->addAttachment('');
        //email body
        $mail->Body="$msg";

        //add recipient
        $mail->addAddress($email_id);

        //finally send maail
        if($mail->Send()){

            echo "<script> alert('Mail Delivered.'); location.replace('./message.php') </script>";
        }
        else
        {
            echo "<script> alert('Mail Not Delivered.'); location.replace('./message.php') </script>";
        }


        //closing smtp connection
        $mail->smtpClose();
    }
?>