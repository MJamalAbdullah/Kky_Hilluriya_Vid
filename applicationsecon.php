<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Account Create</title>
    <link rel="website icon" type="png" href="./img/icon.png">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<style>
    .box {
  /* position: absolute;
  top: 50%;
  left: 50%; */
  /* transform: translate(-50%, -50%); */
}

 select {
  /* background-color: #0563af; */
  background: #fafafa;

  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  /* box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2); */
  -webkit-appearance: button;
  appearance: button;
  outline: none;
  width:100%;
  height:100%;
  color:black;
}

/* .box::before {
  content: "\f13a";
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
} */

/* .box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
} */


</style>

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-20 p-b-20 font-poppins">
        <div class="wrapper wrapper--w780 wrapper--h100">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" style="color:#c40404">Student Registration For New Intake - <span id='head'></span></h2>
                  
                    
                    <form method="POST" name="adduser" action="secondregi.php" enctype="multipart/form-data">
                    <div>
                        <br><br>
                            <u> <font color="green" size="4"> Student Details</u></font> <br><br><br>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="first_name" placeholder="First Name" required="require">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-4" type="text" name="last_name" placeholder="Last Name" required="require">
                                </div>
                            </div>
                        </div>
                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dob" placeholder="Date of Birth" required="require">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" required="require" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" required="require" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <div class="row row-space">
                             <div class="col-2">
                             <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="text" name="addr" placeholder="No.xx, xxxxx Road, Kattankudy - xx" required="require">
                                </div> 
                            </div> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Class Type</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Primary
                                            <input type="radio" checked="checked" name="clst" id="pri" required="require" value="Primary" onclick="handleRadioClick()">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Secondary
                                            <input type="radio" name="clst" required="require" id="sec" value="Secondary" onclick="handleRadioClick()">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        

                        </div>
                        <div class="row row-space">
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Student's Grade</label>
                                    <input class="input--style-4" type="text" name="stgrade" placeholder="01 - 11" required="require" onkeypress="funNumber()">
                                </div>
                            </div> -->

                            <div class="col-2" id="d1" style="display:block;">
                                <div class="input-group">
                                    <label class="label">Grade</label>
                                   
                                    <div class="box">
                                        <select name="stgrade" id="mysel" class="">
                                            <option value="" selected="selected" >Choose Option</option>
                                            <option value="02">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                      
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2" id="d2" style="display:none;">
                                <div class="input-group">
                                    <label class="label">Grade</label>

                                    <div class="box">
                                        <select name="stgrades" id="mysel2" class="">
                                            <option value="" selected="selected">Choose Option</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Student's Image</label>
                                    <input type="file" name="img" class="input--style-4" placeholder="Choose Image" accept="image/*" require="">
                                </div>
                            </div> -->
                            
                        </div>                      
                        <!-- students details end --> <br><br>
                        
                        <div>
                        <u> <font color="green" size="4"> Guardian Details</u></font> <br><br><br>
                        
                        <div class="row row-space">
                           
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="parentname" placeholder="Mohamed Nizar" required="require">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="paemail" autocapitalize="off" autocomplete="off" placeholder="abc@sample.com" required="require">
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="paphone" autocapitalize="off" autocomplete="off"  minlength="10" maxlength="13" placeholder="07XXXXXXXX" required="require" onkeypress="funNumber()">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIC Number</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="nic" autocapitalize="off" autocomplete="off" placeholder="XXXXXXXXXXXXX" minlength="10" maxlength="12" required="require" onkeypress="funNumber()">
                                      
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Occupation</label>
                                    <input class="input--style-4" type="text" name="occup_parent" autocapitalize="off" autocomplete="off" placeholder="Job" required="require">
                                </div>
                            </div>
                          

                        </div>

                    </div>

</div>

<br><br>
                   
                    
                        <div class="p-t-10" align="center">
                            <button class="btn btn--radius-2 btn--blue" name="apply" type="submit">Apply</button>&nbsp&nbsp&nbsp
                            <a href="index.php">
                           <button class="btn btn--radius-2 btn--green" type="button">Cancel</button></a>&nbsp&nbsp&nbsp
                              <!--<button class="btn btn--radius-2 btn--blue" type="button" onclick="clrsel()">reset</button> -->
                        </div>       
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script type="text/javascript">
       function funNumber() {
   if (event.keyCode >= 48 && event.keyCode <= 57) {
  return true;
   }
   else if (event.keyCode >= 45 && event.keyCode <= 46) {
   }
  else {
 	event.returnValue = false;
	return false;
   }
}
           
    </script>
    <script>
        
    </script>
        <script>
window.onload = function(){
    let date =  new Date().getFullYear();
    let ndate= date+1;
    document.getElementById('head').innerHTML = ndate;
};
</script>

<!-- show hide select -->
<script>
const ch1 = document.getElementById('d1');
const ch2 = document.getElementById('d2');

function handleRadioClick() {
  if (document.getElementById('pri').checked) {
    ch1.style.display = 'block';
    ch2.style.display = 'none';
    document.getElementById('mysel2').selectedIndex='-1';
  } else if (document.getElementById('sec').checked) {
    ch2.style.display = 'block';
    ch1.style.display = 'none';
    document.getElementById('mysel').selectedIndex='-1';
  }
}

</script>   
</body>
</html>
