<?php
    include 'connection.php';
    
    if (isset($_POST['search']))
    {
        $id=$_POST['indexn'];
        $sql="SELECT * FROM results WHERE Index_no=$id;";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($res);

        $sql1="SELECT * FROM students WHERE Index_no=$id;";
        $res1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_array($res1);

        if (mysqli_num_rows($res)==0 and mysqli_num_rows($res1)==0)
        {
            print("<h1 style='color:red; font-weight:bold;' align='center'> No matching records found</h1>");
        }
        else 
        {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT/BC/Hiluriya Vidyalaya</title>
    <link rel="stylesheet" href="print.css"  media="print">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<style>
    .sclname{
        color: #880900;
        font-size: 3.2vw;
    }
    .th{
        font-size: 2.8vw;
        /* 30px */
    }
    .hd1{
        font-size: 2.5vw;
        /* 18px */
    }
    .hd2{
        font-size:2.3vw ;
        /* 17px */
    }
    .dtl{
        font-size:2.1vw ;
        /* 14px */
    }
    .tt{
        font-size: 2vw;
        /* 13px */
    }
</style>

<!-- bootsrap icon -->
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
  </svg> -->

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        
        <br>
        <div align="right"><button onclick='window.print()' class='btn btn-sm btn-primary' id='print-btn'><span class="material-symbols-outlined">
            print</span></button></div>
        <!-- <i class="fa fa-hdd-o" aria-hidden="true"> <i>-->
            <!-- <i class="bi bi-download"></i> -->
    
    <!-- <center><img src="D:\hms\picscl\Logo size 1.jpg" alt="" srcset="" width="20%" height="19%">      -->
        <center><img src="img/icon.png" alt="Logo" srcset="" width="100px" height="110px">
    <br>
    <h1 class="display-6"><span class="sclname"> BT/BC/Hiluriya Vidyalaya <br> Kattankudy - 03</h1></span> <br><br>
        <h1 class=""><span class="th">Ordinary Level Result Sheet - <?php echo $row['year']; ?><?php  ?></span><br><br>
    </h1></center><span class="dtl">
        <table cellpadding="6" class="tt" style="border: none;" >
            <tr><td><b>Full Name :-</b></td> <td><?php echo $row1['first_nm']." ".$row1['last_nm']; ?></td> </tr>
            <tr><td><b>School Index No :-</b></td> <td><?php echo $row1['index_no']; ?></td> </tr>
            <tr><td><b>Exam Index No :- </b></td> <td><?php echo $row['Exam_index']; ?></td> </tr>
            <tr><td><b>NIC No :- </b></td> <td><?php echo $row['NIC']; ?></td> </tr>
            <tr><td><b>Year :-</b></td> <td><?php echo $row['year']; ?></td> </tr>
    
   
            <!-- height: 75%; -->
     
</table>
<br><br></span>   
    <table align="center" cellpadding="2" border="3" class="table" style="width:100%;height: 30%;">
        <tr align="center" class="hd1" valign="middle">
            <th width="10%">NO.</th>
            <th>SUBJECT</th>
            <th width="10%">GRADE</th>
        </tr>
        <tr align="center" valign="middle" class="hd2">
            <td><b>01</b></td>
            <td><b>Tamil</b></td>
            <td><b><?php echo $row['Tamil']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>02</b></td>
            <td><b>English</b></td>
            <td><b><?php echo $row['English']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>03</b></td>
            <td><b>Mathematics</b></td>
            <td><b><?php echo $row['Mathematics']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>04</b></td>
            <td><b>Science</b></td>
            <td><b><?php echo $row['Science']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>05</b></td>
            <td><b>History</b></td>
            <td><b><?php echo $row['History']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>06</b></td>
            <td><b>Islam</b></td>
            <td><b><?php echo $row['Islam']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>07</b></td>
            <td><b><?php echo $row['first']; ?>l</b></td>
            <td><b><?php echo $row['first_re']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>08</b></td>
            <td><b><?php echo $row['second']; ?></b></td>
            <td><b><?php echo $row['sec_re']; ?></b></td>
        </tr>
        <tr align="center" class="hd2" valign="middle">
            <td><b>09</b></td>
            <td><b><?php echo $row['third']; ?></b></td>
            <td><b><?php echo $row['third_re']; ?></b></td>
        </tr>

    </table>
    <br><br><br>
    <table align="right" cellpadding="4" class="tt">
        <tr align="Center"><td><b>This is a Digital Copy From Website</b></td></tr>
        <tr align="Center"><td><b>No Signature Required</b></td></tr>

    </table>
   
    <br><br><br><br><br><br>
    <div align="center">
    <table cellpadding="3" width="100%">
        <tr align="center">
            <th colspan="3"> School Details</th>
        </tr>
        <tr align="center"><td>&nbsp;</td></tr>
        <tr align="center">
        <th>
            <i class="fa fa-phone me-2"></i> +94 (65) 22 48 348
        </th>
        
        <th>
            <i class="fa fa-envelope me-2"></i> hilurians@gmail.com
        </th>
        
        <th>
            <i class="bi bi-pin-map me-2"></i> Old Road, Kattankudy - 03.
        </th>
    </tr>
    </table>
</div>
<?php
        }
    }
?>
   
</div>
<br>
</body>
</html>


