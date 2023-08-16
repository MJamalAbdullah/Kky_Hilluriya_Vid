<?php
    include "connection.php";
    $id=$_GET['id'];
    $sql1="DELETE FROM students WHERE index_no=$id;";
    $de=mysqli_query($con,$sql1);

    $sql2="DELETE FROM guardians WHERE index_no=$id;";
    $gde=mysqli_query($con,$sql2);

    if ($de && $gde)
    {
        echo "<script> alert('Record Deleted Successfully.'); location.replace('./student_data_view.php') </script>";
    }
    else
    {
        die(mysqli_error($con));
    }
    // header("Location:search dlt up.php");
    mysqli_close($con);
?>