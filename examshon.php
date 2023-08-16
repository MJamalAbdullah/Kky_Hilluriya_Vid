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

  

  <form action="searchexam.php" method="post">
  <input type="text" class="form-control" name="ser" id="ser" required="require" placeholder="Subject / File Name"><br>
  <input type="submit" class="btn btn-secondary btn-hover"  name="bser" value="Search"> &nbsp;&nbsp;
  <input type="submit" class="btn btn-secondary btn-hover"  name="reset" value="Clear" onclick="location.reload()"> &nbsp;&nbsp;
  <a href="index.php" class="btn btn-secondary btn-hover">Back to Main</a>
  </form>


</div>
<!-- echo"<a href='uploads/$nm' class='btn btnc'>Download</a>"; -->
  <!-- php -->
  <br><br>
  <div>
  <?php
 
  include "connection.php";

$sql2="SELECT * from papers where status = 1 order by id desc;";
  $res2=mysqli_query($con,$sql2);
  if(!$res2)
  {
    echo"No Papers Found";
  }

  $sqlcn="SELECT COUNT(*) as 'countc2' FROM papers WHERE status = 1";
  $rescn=mysqli_query($con,$sqlcn);
  $rowsn=mysqli_fetch_array($rescn);
  $countscn = $rowsn['countc2'];

  $storen = Array();
  $storesub = Array();
  $storedes = Array();
  while ($row1 = mysqli_fetch_array($res2)) {
  $storen[] =  $row1['file'];  
  $storesub[] =  $row1['subject']; 
  $storedes[] =  $row1['description']; 
  }

  echo" <div id='showOrHideDiv2'>";
  echo"<div class='container'>";
    $y=0;
    
  while($y<$countscn)
{
    $nmn=$storen[$y];
    $nms=$storesub[$y];
   $nmd=$storedes[$y];
   
      echo"  <div class='card bg-dark'>";
        echo"  <div class='box'>";
          echo" <div class='content'>";
          
            echo"   <h2>HV</h2>";
            echo" <h3>$nms</h3>";
            echo"  <p>$nmd</p>";
            echo"<a href='pdf/$nmn' class='btn btnc'>Download</a>";
            echo" </div>";
            echo"  </div>";
            echo" </div>";


    $y++;
}
echo"  </div>";
echo"  </div>";




 



?>
</div>



    <script  src="script.js"></script>

 
</body>
</html>

