<?php
   include 'connection.php';

   $id=$_GET['did'];

   $sql1="SELECT * FROM index_page WHERE id=$id;";
   $res1=mysqli_query($con,$sql1);

   $row=mysqli_fetch_array($res1);

       $img_path ="index_page_img/".$row['image'];

   $sql="DELETE FROM index_page WHERE id=$id;";
   $res=mysqli_query($con,$sql);



   if($res)
   {
       unlink($img_path);
       echo "<script> alert('File Deleted Successfully.'); location.replace('./index_page.php') </script>";
   }
   else
   {
       echo "<script> alert('File Not Deleted.'); location.replace('./index_page.php') </script>";
   }
?>