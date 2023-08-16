<?php
    include 'connection.php';
    
    $id=$_GET['did'];
    $sql="SELECT * FROM user WHERE ID='$id';";
    $exe1=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($exe1);
        // $type = $row['usertype'];
        $img_path="img/".$row['image'];
    
    if ($row['usertype']=='ADMIN')
    {
        echo "<script> alert('Can Not Delete The Account Because  ".$row['usertype'].".'); location.replace('./user_view.php') </script>";     
    }
    else
    {
        $sql1="DELETE FROM user WHERE ID='$id';";
        $exe=mysqli_query($con,$sql1);

        if($exe)
        {
            unlink($img_path);
            echo "<script> alert('User Deleted.'); location.replace('./user_view.php') </script>";
        }
    }
    mysqli_close($con)
?>
