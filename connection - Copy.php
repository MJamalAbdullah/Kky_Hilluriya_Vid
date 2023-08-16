<?php

    $host="fdb29.awardspace.net";
    $user="4237056_hilluriya";
    $pw = "hilluriya2023";
    $db = "4237056_hilluriya";

    $con=mysqli_connect($host,$user,$pw,$db);

    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>