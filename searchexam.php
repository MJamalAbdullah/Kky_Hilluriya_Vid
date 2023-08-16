<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Exam Papers </title>
  <link rel="stylesheet" href="css/styledis2.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
<!-- <link rel="stylesheet" href="styleser.css">  -->
<!-- icon -->
<link rel="icon" href="I:\xampp\htdocs\hms\picscl/logosmall.png" type="image/gif" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<!-- 880900  style="background-color: black;" -->
<body class="bg-dark">
<div class="container">
    <h1 class="display-4 text-light">Free Exam Paper For Download</h1>
</div>

<div class="container" align="center">
<form action="" method="post">
<input type="text" class="form-control" name="ser" id="ser"  required="require" placeholder="Subject / File Name"><br>
<input type="submit" class="btn btn-secondary btn-hover"  name="bser" value="Search"> &nbsp;&nbsp;
<a href="examshon.php"><input type="button" class="btn btn-secondary btn-hover"  name="reset" value="Clear"></a> &nbsp;&nbsp;
<a href="http://localhost/hms4/indexfk.php#" class="btn btn-secondary btn-hover">Back to Main</a>
</form>
</div>

<br>
<div class="container" align="center">
<?php
include 'connection.php';
if(isset($_POST['bser']))
  {
    $x=0;
    $cate=$_POST['ser'];

    // echo "$cate";

    $sql="SELECT * from papers where subject = '$cate' or file = '$cate' order by id desc";
    $res=mysqli_query($con,$sql);
    if(!$res)
    {
      echo"No Papers Found For Your Paper Please Click Reset to See Papers";
    }

    $sqlc="SELECT count(*) as 'cou' from papers where subject = '$cate' or file = '$cate'";
    $ressc=mysqli_query($con,$sqlc);
    $rowsser=mysqli_fetch_array($ressc);
    $countsc = $rowsser['cou'];

    $storeser = Array();
    $storesub = Array();
    $storedes = Array();
    while ($row = mysqli_fetch_array($res)) {
    $storeser[] =  $row['file'];  
    $storesub[] =  $row['subject']; 
  $storedes[] =  $row['description']; 
    }
    echo" <div id='showOrHideDiv'>";
      echo"<div class='container'>";
    while($x<$countsc)
  {
      $nm=$storeser[$x];
      $nms=$storesub[$x];
      $nmd=$storedes[$x];
      echo"  <div class='card bg-dark'>";
        echo"  <div class='box'>";
          echo" <div class='content'>";
          
            echo"   <h2>HV</h2>";
            echo" <h3>$nms</h3>";
            echo"  <p>$nmd</p>";
            echo"<a href='uploads/$nm' class='btn btnc'>Download</a>";
            echo" </div>";
            echo"  </div>";
            echo" </div>";


      $x++;
  }
  echo" </div>";
  echo"</div>";

  }
  else
  {
    echo " <script>";
    echo " window.location.href='examshon.php'";
    echo " </script>";
  }
  ?>
</div>
</body>
</html>
