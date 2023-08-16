<?php
    include 'connection.php';
    
    $id=$_GET['uid'];

    $sql1="SELECT * FROM index_page WHERE ID='$id';";
    $exe=mysqli_query($con,$sql1);
    $row=mysqli_fetch_assoc($exe);
        $status1=$row['status'];
    
    if ( $status1 == '1')
    {
        $sql="UPDATE index_page SET  status = 0 WHERE ID='$id';";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script> alert(' Successfuly Disable.'); location.replace('./index_page.php') </script>";
        }
        else
        {
            die(mysqli_error($con));
        }
    }
    elseif ($status1 == '0')
    {
        $sql="UPDATE index_page SET status = 1 WHERE ID='$id';";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script> alert(' Successfuly Enable.'); location.replace('./index_page.php') </script>";
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
