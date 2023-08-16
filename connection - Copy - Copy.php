<?php

    $host="localhost";
    $user="ictlk_hill";
    $pw = "hilldb@1234";
    $db = "ictlk_hill";

    $con=mysqli_connect($host,$user,$pw,$db);

    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>