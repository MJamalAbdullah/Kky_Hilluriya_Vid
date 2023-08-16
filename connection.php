<?php

    $host="Localhost";
    $user="root";
    $pw = "";
    $db = "dbscldraft";

    $con=mysqli_connect($host,$user,$pw,$db);

    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>