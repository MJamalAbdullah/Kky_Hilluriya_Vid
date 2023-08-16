<?php
    include 'connection.php';
    
    $id=$_GET['uid'];

    $sql1="SELECT * FROM papers WHERE ID='$id';";
    $exe=mysqli_query($con,$sql1);
    $row=mysqli_fetch_assoc($exe);
        $status1=$row['status'];
    
    if ( $status1 == '1')
    {
        $sql="UPDATE papers SET  status = 0 WHERE id='$id';";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script> alert(' Successfuly Disable.'); location.replace('./pastpapers.php') </script>";
        }
        else
        {
            die(mysqli_error($con));
        }
    }
    elseif ($status1 == '0')
    {
        $sql="UPDATE papers SET status = 1 WHERE id='$id';";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script> alert(' Successfuly Enable.'); location.replace('./pastpapers_staff.php') </script>";
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
