<?php

//include require phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
// //define name spacess
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['apply']))
{

    include "connection.php";

 $fname=$_POST['first_name'];                                                   
 $lname=$_POST['last_name'];
 $dob=$_POST['dob'];
 $gender=$_POST['gender'];
 $gradep=$_POST['stgrade'];
 $grades=$_POST['stgrades'];
 $addr=$_POST['addr'];
 $parname=$_POST['parentname'];
 $email = $_POST['paemail'];
 $phone = $_POST['paphone'];
 $occu=$_POST['occup_parent'];

 $nic=$_POST['nic'];
 $clst=$_POST['clst'];
 $yr = date ("Y")+1;
 
    if($grades=="")
    {
        $grade=$gradep;
    }
    else if($gradep=="")
    {
        $grade=$grades;
    }
    else
    {
        echo("<script>window.alert('Please Select The Class')</script>");
        echo " <script>";
         echo " window.location.href='applicationsecon.php'";
         echo " </script>";
    }
//    $img = $_FILES["img"];
 
   //exit if no file uploaded 
//    if (!isset($img))
//    {
//        echo("<script>window.alert('No file Uploaded.')</script>");
//        echo " <script>";
//         echo " window.location.href='applicationsecon.php'";
//         echo " </script>";
//    }
 
   //exit if image file is zero bytes 
//    if(filesize($img["tmp_name"])<=0){
//        echo("<script>window.alert('No Content')</script>");
//        echo " <script>";
//         echo " window.location.href='applicationsecon.php'";
//         echo " </script>";
//    }
 
   //exit if is not a valid image file 
//    $img_type=exif_imagetype($img['tmp_name']);
//    if (!$img_type)
//    {
//        echo("<script>window.alert('Uploaded File is Not an Image')</Script>");
//        echo " <script>";
//         echo " window.location.href='applicationsecon.php'";
//         echo " </script>";
//    }
 
   // Move the temp image file to the images/dirctory  
//    move_uploaded_file(
       //temp image location
    //    $img['tmp_name'],
 
       //new image location
    //    __DIR__ ."/img/". $img['name'] 
   // );

   
 
   //end image upload
 
    $image=$img['name'];
    
 
    $sql1="insert into applicationsecon (first_nm,last_nm,dob,gender,address,email,contact_no,parent_nm,parent_occu,grade,apply,parent_nic,image,yr) values ('$fname','$lname','$dob','$gender','$addr','$email','$phone','$parname','$occu','$grade','$clst','$nic','$image','$yr')";
    $res=mysqli_query($con,$sql1);


//  $verification_code = substr(number_format(time()*rand(),0,'',''),0,6);
 if ($res)
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
       $mail->Subject="Confirmation Mail";
       //set sender email
       $mail->setFrom("rminsimam1234@gmail.com",'Insi');
       //using html codes
       $mail->isHTML(true);
       //attachment
    //    $mail->addAttachment('C:\Users\abans\Desktop\bootstrap website\8.jpg');
       //email body
       $mail->Body="<h1>Application Registration Successfull</h1><br> <h3>Dear Sir / Madom...</h3> <br><p align='justify'>        Your application of registering your child to Grade - $grade has been successfully registered
       </p> <p align='justify'>        This is a confirmation email to certify that you registered successfully </p> <p align='justify'>        If we select your child we will conduct you soon. </p>
       <p align='center'>Thank You... </p><p>The Principal </p>BT/BC/Hiluriya Vidyalaya Kattankudy </p>";
   
       //add recipient
       $mail->addAddress($email);
   
       //finally send maail
       if($mail->Send()){

        echo("<script>") ;
        echo('alert("Your Application Successfully Sended...")');
        echo("</script>") ;
   
       }
       else
       {
        echo("<script>") ;
        echo('alert("Your Record is Not Added...")');
        echo("</script>") ;
       }
       
       
       //closing smtp connection
       $mail->smtpClose();
    
     
 }
 else{
   echo("<script>") ;
   echo('alert("Can Not Register")');
   echo("</script>") ;
// echo"Error! Not Send...";
    
    
   
   
 }
 mysqli_close($con);
        // echo " <script>";
        // echo " window.location.href='user_regi.php'";
        // echo " </script>";

        echo " <script>";
        echo " window.location.href='applicationsecon.php'";
        echo " </script>";
 

}




?>