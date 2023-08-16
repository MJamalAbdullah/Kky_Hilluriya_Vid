<?php
   include 'connection.php';

   $id=$_GET['did'];

   $sql="DELETE FROM messages WHERE id=$id;";
   $res=mysqli_query($con,$sql);



   if($res)
   {
       echo "<script> alert('Message Deleted Successfully.'); location.replace('./message.php') </script>";
   }
   else
   {
       echo "<script> alert('Message Not Deleted.'); location.replace('./message.php') </script>";
   }
?>