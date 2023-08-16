<?php
    include "connection.php";
    $id=$_GET['id'];
    $sql1="DELETE FROM staff WHERE staff_no=$id;";
    $de=mysqli_query($con,$sql1);

    if ($de)
    {
        echo "<script> alert('Record Deleted Successfully.'); location.replace('./staff_view.php') </script>";
    }
    else
    {
        die(mysqli_error($con));
    }
    // header("Location:search dlt up.php");
    mysqli_close($con);
?>