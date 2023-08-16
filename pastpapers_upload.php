<?php
    include 'session.php';

    if(isset($_POST['save']))
    {
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $img_count=count($_FILES["img"]['name']);

        for($x=0; $x<$img_count; $x++)
        {
            $img=$_FILES["img"]['name'][$x];
            move_uploaded_file($_FILES["img"]["tmp_name"][$x], "pdf/".$_FILES["img"]["name"][$x]);

            $sql="INSERT INTO papers (subject,by_upload,description,file,status) VALUES ('$name','".$_SESSION["username"]."','$desc','$img','1');";        
            $res=mysqli_query($con,$sql);   
        }

        if($res)
        {
            echo "<script> alert('File Uploaded Successfully.'); location.replace('./pastpapers.php') </script>";
        }
        else
        {
            die(mysqli_error($con));
        }
    }
?>