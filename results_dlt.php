<?php
    include "connection.php";

    $index=$_GET['did'];

    $sql1="DELETE FROM results WHERE Index_no=$index;";
    $de=mysqli_query($con,$sql1);

    if ($de)
    {
        echo "<script> alert('Record Deleted Successfully.'); location.replace('./results.php') </script>";
    }
    else
    {
        die(mysqli_error($con));
    }
    // header("Location:search dlt up.php");
    mysqli_close($con);
?>