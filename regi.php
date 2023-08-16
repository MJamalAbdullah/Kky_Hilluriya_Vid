<?php

//include require phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
// //define name spacess
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['singup']))
{

    include "connection.php";

    $fname=$_POST['first_name'];                                                   
    $lname=$_POST['last_name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $indexn=$_POST['index'];
    $nic=$_POST['nic'];
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['st_type'];
    $img1 = $_FILES["img"]['name']; 

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
    $encryptpw = openssl_encrypt($password, $ciphering,
                $encryption_key, $options, $encryption_iv);
    
    // Display the encrypted string
    //echo "Encrypted String: " . $encryption . "\n";
    
    // Non-NULL Initialization Vector for decryption
    // $decryption_iv = '1234567891011121';
    
    // // Store the decryption key
    // $decryption_key = "insi99";
    
    // // Use openssl_decrypt() function to decrypt the data
    // $decryption=openssl_decrypt ($encryption, $ciphering, 
    //         $decryption_key, $options, $decryption_iv);

            //end of encrypt
    
        //Add image upload
    //$img = !empty($_POST['img']) ? $_POST['img'] : '';  
    
    //exit if is not a valid image file 
    
    // Move the temp image file to the images/dirctory  
    //new image location
        // __DIR__ ."/images/". $img['name'] 
         //temp image location

   
    
    //end image upload
    
        //$image=$img1['name'];
        $verification_code = substr(number_format(time()*rand(),0,'',''),0,6);
        // $img_count=count($_FILES["img"]['name']);
        
        if($img1 == "")
        {
             if($gender =='Female')
             {
               
                $sql1="INSERT into verification (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,pin) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','female.png',$verification_code);";
                $res=mysqli_query($con,$sql1);
            }
            else
            {
                $sql1="INSERT into verification (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,pin) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','male.png',$verification_code);";
                $res=mysqli_query($con,$sql1);
             }
        }
        if($img1 != "")
        {
            if(!$file_size < 5000)
            {
                move_uploaded_file($_FILES["img"]["tmp_name"], "img/".$_FILES["img"]["name"]);
                $sql1="INSERT into verification (First_Name,Last_Name,DOB,Gender,email,phone,username,password,usertype,index_or_staff,NIC,image,pin) values ('$fname','$lname','$dob','$gender','$email','$phone','$uname','$encryptpw','$usertype','$indexn','$nic','$image',$verification_code);";
                $res=mysqli_query($con,$sql1);
            }
            else
            {
                echo "<script> alert('The File Size Is to Large...! Please Upload Lessthen 5MB.'); location.replace('./user_regi.php') </script>";
            }
        }
        
        
        $sqlre="insert into resend (ind,mail,pin) values ('$indexn','$email',$verification_code)";
        $resr=mysqli_query($con,$sqlre);


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
        $mail->Subject="Verification Mail";
        //set sender email
        $mail->setFrom("rminsimam1234@gmail.com",'Insi');
        //using html codes
        $mail->isHTML(true);
        //attachment
        $mail->addAttachment('img/C:\Users\abans\Desktop\bootstrap website\8.jpg');
        //email body
        $mail->Body="<h1>User Verification</h1><br>Your Verification PIN is - $verification_code";
    
        //add recipient
        $mail->addAddress($email);
    
        //finally send maail
        if($mail->Send()){

            echo("<script>") ;
            echo('alert("Verification Mail is Successfully Sended...")');
            echo("</script>") ;
    
        }
        else
        {
            echo"Error! Not Send...";
        }
        
    
        //closing smtp connection
        $mail->smtpClose();
        
        
    }
    else{
    echo("<script>") ;
    echo('alert("You Are Not Register Successfully... Try Again...")');
    echo " window.location.href='user_regi.php'";
    echo("</script>") ;
    
   
    }
    mysqli_close($con);
            // echo " <script>";
            // echo " window.location.href='user_regi.php'";
            // echo " </script>";

            echo " <script>";
            echo " window.location.href='email_verification.php?index=$indexn'";
            echo " </script>";
    

}
?>