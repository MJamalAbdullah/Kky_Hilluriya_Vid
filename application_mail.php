<?php
    //include require phpmailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    // //define name spacess
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['reply']))
    {
        $email_id=$_POST['mail'];
        $refno=$_POST['refno'];
        $date=$_POST['date'];
        $venue=$_POST['venue'];
        $msg=$_POST['msg'];

        $dear= "<h2>Dear Sir/Madame</h2>";
        $fp="<h2 align='justify'> We are Happy to Inform You That Your Daughter/Son Selectd for Interview</h2>";
        $date="<h2 align='left'>Interview Date :<b>".$date."</b></h2>";
        $venue="<h2 align='left'>Venue :<b>".$venue."</b></h2>";
        $refno="<h2 align='left'>Reference No :<b>".$refno."</b></h2>";
        $msg="<h2 align='left'></b>".$msg."</b></h2><br>";
        $footer="<h2 align='left'>The Pricipal</h2><h3 align='left'>BT/BC/Kattankudy Hilluriya Vidayalayam</h3><br>";

        $body=$dear.$fp.$date.$venue.$refno.$msg.$footer;

    

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
        $mail->Subject="Response For Your Application";
        //set sender email
        $mail->setFrom("rminsimam1234@gmail.com",'Insi');
        //using html codes
        $mail->isHTML(true);
        //attachment
        $mail->addAttachment('');
        //email body
        $mail->Body="$body";

        //add recipient
        $mail->addAddress($email_id);

        //finally send maail
        if($mail->Send()){

            echo "<script> alert('Mail Delivered.'); location.replace('./application.php') </script>";
        }
        else
        {
            echo "<script> alert('Mail Not Delivered.'); location.replace('./application.php') </script>";
        }


        //closing smtp connection
        $mail->smtpClose();
    }
?>