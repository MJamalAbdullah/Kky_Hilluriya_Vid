<?php
    include 'connection.php';

    if(isset($_POST['save']))
    {
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $img_count=count($_FILES["img"]['name']);

        if(isset($_FILES["img"]))
        {
            for($x=0; $x<$img_count; $x++)
            {
                $file_size = $_FILES['img']['size'][$x];

                if(!$file_size < 3072)
                {
                    $img=$_FILES["img"]['name'][$x];
                    move_uploaded_file($_FILES["img"]["tmp_name"][$x], "gallery_img/".$_FILES["img"]["name"][$x]);

                    $sql="INSERT INTO gallery (title,description,image,status) VALUES ('$name','$desc','$img','1');";        
                    $res=mysqli_query($con,$sql);                           
                }
                else
                {
                    echo "<script> alert('The File Size Is to Large...! Please Upload Lessthen 3MB.'); location.replace('./gallery.php') </script>";
                }
            }
        }

        if($res)
        {
            echo "<script> alert('File Uploaded Successfully.'); location.replace('./gallery.php') </script>";
        }
        else
        {
            die(mysqli_error($con));
        }
    }
?>