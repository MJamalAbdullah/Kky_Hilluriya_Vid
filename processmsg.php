<?php

include "connection.php";
// if(isset($_POST['send']))
// {


extract($_POST);

$data = '';

foreach($_POST as $k => $v) {
    if(empty($data)) {
        $data .= "$k ='$v'";
    } else {
        $data .= ", $k='$v'";
    }
}

$sql = "INSERT INTO messages set $data";
$results = mysqli_query($con, $sql);

if($results) {
    echo "Message Status : Message Sended Successfully...";
} else {
    echo "Message Status : Message Sending has failed, Please Try Again...".mysqli_error($con);
}

// }

// if(isset($_POST['btm']))
// {
//     $msg=$_POST['msgd'];
//     $email=$_POST['useremail'];
   
//    $mail=new PHPMailer();

//    //set mailer to use smtp
//    $mail->isSMTP();

//    //define smtp host
//    $mail->Host="smtp.gmail.com";
//    //enable smtp authentications
//    $mail->SMTPAuth="true";

//    // set type of encryption (SSL/tLS)
//    $mail->SMTPSecure="tls";

//    //set port to connect smtp
//    $mail->Port="587";
//    //set  gmail user name
//    $mail->Username="rminsimam1234@gmail.com";
//    //set email password
//    $mail->Password="hrmtjevmijlnvbbj";
//    //set email subject
//    $mail->Subject="User Feedback";
//    //set sender email
//    $mail->setFrom("rminsimam1234@gmail.com",'Insi');
//    //using html codes
//    $mail->isHTML(true);
//    //attachment
//    $mail->addAttachment('img/C:\Users\abans\Desktop\bootstrap website\8.jpg');
//    //email body
//    $mail->Body="<h1>Messagge From a User</h1><br><br><p align='justyfy'>$msg</p><b><br>Sender Email --></b> $email";

//    //add recipient
//    $mail->addAddress('rminsimam1234@gmail.com');

//    //finally send maail
//    $mail->smtpClose();
//    if($mail->Send()){

//     echo("Your Message is Successfully Sended to Our Develpers...") ;
//     // echo('alert("Your Message is Successfully Sended to Our Develpers...")');
//     // echo("</script>") ;

   
   

//    //closing smtp connection
// //    $mail->smtpClose();

// //    echo " <script>";
// //    echo " window.location.href='indexfk.php'";
// //    echo " </script>";

// }
// else
// {
//     echo("Your Message is Not Sended to Our Develpers... Please Try Again...") ;
//     // echo('alert("Your Message is Not Sended to Our Develpers... Please Try Again...")');
//     // echo("</script>") ;

   
   

//    //closing smtp connection
   

// //    echo " <script>";
// //    echo " window.location.href='indexfk.php'";
// //    echo " </script>";
// }
// }
