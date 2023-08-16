<?php
    include 'connection.php';

    if (isset($_POST['save']))
    {
        $sclin = $_POST['sclin'];
        $exin = $_POST['exin'];
        $nic = $_POST['nic'];
        $year = $_POST['year'];

        $tamil = $_POST['tamil'];
        $english = $_POST['english'];
        $maths = $_POST['maths'];
        $science = $_POST['science'];
        $history = $_POST['history'];
        $islam = $_POST['islam'];
        $first_re = $_POST['first_re'];
        $third_re = $_POST['third_re'];
        $sec_re = $_POST['sec_re'];

        $first = $_POST['first'];
        $third = $_POST['third'];
        $sec = $_POST['sec'];

        $sql1="SELECT *  FROM students WHERE index_no=$sclin ";
        $exe1=mysqli_query($con,$sql1);

        // if($exe1)
        // {
        //     echo"<script> alert('Results Added'); location.replace('results.php');</script>"; 
        // }

        // $row=mysqli_fetch_array($exe1);
        // $osclin=$row['index_no'];
        if(mysqli_num_rows($exe1)==1)
        {

       
    
       
            $sql="INSERT INTO results (id,Index_no,Exam_index,NIC,year,Tamil,English,Mathematics,Science,History,Islam,first,first_re,second,sec_re,third,third_re) VALUES (null,'$sclin','$exin','$nic','$year','$tamil','$english','$maths','$science','$history','$islam','$first','$first_re','$sec','$sec_re','$third','$third_re');";
            $exe=mysqli_query($con,$sql);

            if($exe)
            {
                echo"<script> alert('Results Added'); location.replace('results.php');</script>";
            }
            
            else
            {
                echo"<script> alert('The Index Number Doesn't Exist'); location.replace('results.php'); </script>";
    
        }
        // echo"location.replace('results.php')";
        }
        else
        {
            echo"<script> alert('Invalid Index Number.. Try With Correct Index Number'); location.replace('results.php');</script>"; 
        }
        // echo"location.replace('results.php')";
    }
?>