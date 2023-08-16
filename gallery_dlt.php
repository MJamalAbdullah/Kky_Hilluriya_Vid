<?php
    include 'connection.php';

    $id=$_GET['did'];

    $sql1="SELECT * FROM gallery WHERE id=$id;";
    $res1=mysqli_query($con,$sql1);

    $row=mysqli_fetch_array($res1);

        $img_path ="gallery_img/".$row['image'];

    $sql="DELETE FROM gallery WHERE id=$id;";
    $res=mysqli_query($con,$sql);



    if($res)
    {
        unlink($img_path);
        echo "<script> alert('File Deleted Successfully.'); location.replace('./gallery.php') </script>";
    }
    else
    {
        echo "<script> alert('File Not Deleted.'); location.replace('./gallery.php') </script>";
    }
?>