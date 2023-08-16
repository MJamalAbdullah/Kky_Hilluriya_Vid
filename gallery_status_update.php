<?php
    include 'connection.php';
    
    $id=$_GET['uid'];

    $sql1="SELECT * FROM gallery WHERE ID='$id';";
    $exe=mysqli_query($con,$sql1);
    $row=mysqli_fetch_assoc($exe);
        $status1=$row['status'];
    
    if ( $status1 == '1')
    {
        $sql="UPDATE gallery SET  status = 0 WHERE ID='$id';";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script> alert(' Successfuly Disable.'); location.replace('./gallery.php') </script>";
        }
        else
        {
            die(mysqli_error($con));
        }
    }
    elseif ($status1 == '0')
    {
        $sql="UPDATE gallery SET status = 1 WHERE ID='$id';";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script> alert(' Successfuly Enable.'); location.replace('./gallery.php') </script>";
        }
        else
        {
            die(mysqli_error($con));
        }
    }
    else
    { }
    mysqli_close($con)
?>
