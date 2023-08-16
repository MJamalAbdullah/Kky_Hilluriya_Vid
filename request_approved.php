<?php
    include 'connection.php';
    
    $id=$_GET['uid'];

    $sql="UPDATE user SET usertype='Staff' WHERE index_or_staff='$id';";
    $res= mysqli_query($con,$sql);

    $sql1="DELETE FROM request WHERE index_or_staff='$id';";
    $res1= mysqli_query($con,$sql1);

    if($res and $res1)
    {
        echo "<script> alert('User Request Had Been Approved'); location.replace('request.php');</script>";
    }
    else
    {
        echo "<script> alert('User Request Not Approved'); location.replace('request.php');</script>";
    }


?>