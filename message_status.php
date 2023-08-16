<?php
    function update(){

        include 'connection.php';

        $sql="UPDATE messages SET read_status=1;";
        $exe=mysqli_query($con,$sql);
    }
?>