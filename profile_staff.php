<?php
    include 'connection.php';
    session_start();
    if (!$_SESSION["username"])
    {
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    <link rel="website icon" type="png" href="./img/icon.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/stylesearch.css">

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body id="page-top">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Admin Dashboard <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="staffin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">          

            <li class="nav-item">
                <a class="nav-link" href="pastpapers_staff.php">
                <i class="bi bi-file-earmark-arrow-up-fill"></i>
                    <span>Paper Upload</span>
                </a>
            </li>

            <!-- Nav Item - request -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-app-indicator"></i>
                    <span>Student Results</span></a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="scheduleindex_front">
                    <i class="bi bi-app-indicator"></i>
                    <span>Events</span></a>
            </li>


            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Date & time  -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="#" role="button">
                                <h3><span class="mr-2 d-none d-lg-inline text-gray-600 small" id="date-time"></span></h3>
                            </a>            
                        </li>
                        <!-- /end date and time -->

                        <div class="topbar-divider d-none d-sm-block"></div>
<!-- ----------------------------------------------------------------------------------------------------------------------------  -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <b>
                                    <?php
                                        $sql="SELECT * FROM user WHERE username='".$_SESSION["username"]."'";
                                        $exe=mysqli_query($con,$sql);

                                        $row=mysqli_fetch_array($exe);
                                            $fname=$row['First_Name'];
                                            $lname=$row['Last_Name'];
                                            $gender=$row['Gender'];
                                            $gender=$row['Gender'];
                                            $dob=$row['dob'];
                                            $email=$row['email'];
                                            $user=$row['username'];
                                            $phone=$row['phone'];
                                            $sid=$row['index_or_staff'];
                                            $NIC=$row['NIC'];
                                        
                                        if ($gender == "Male")
                                        {
                                            echo "Wel Come Back! Mr.  ".$fname." ".$lname;
                                        }
                                        else
                                        {
                                            echo "Wel Come Back! Ms.  ".$fname." ".$lname;
                                        }
                                        
                                    ?>
                                    </b>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/<?php echo $row['image']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile_staff.php" >
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#changepw">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="#" role="button">
                                <i class="bi bi-gear-wide-connected fa-2x"></i>
                            </a>            
                        </li> -->
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
<div class="container rounded bg-white mt-5 mb-5 shadow">
    <div class="row">
        <div class="col-md-5 border-right ">
            <form id="form" enctype="multipart/form-data" method="post">
                <div class="d-flex flex-column align-items-center text-center p-5 py-3"><img height="75%" width="75%" id="img_pre"style="margin-top:50%" width="400px" src="img/<?php echo $row['image']; ?>"><span class="font-weight-bold"><?php echo $fname." ".$lname; ?></span><span class="text-black-50"><?php echo $email; ?></span><span> </span></div>
                <!-- <br> <center><input type="file" id="upload"  multiple accept="image/*"  name="profileimg"/> -->
                <!-- <label for="upload" class="btn btn-lg btn-primary"> <i class="bi bi-image-fill"></i> Choose File</label></center>   -->          
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Firs Name</label><input type="text" name="firstnm" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>" autocomplete="off"></div>
                        <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="lastnm" class="form-control" value="<?php echo $lname;?>" placeholder="Last Name" autocomplete="off"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile" class="form-control" placeholder=" phone number" value="<?php echo $phone;?>" autocomplete="off" onkeypress="funNumber()"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="emailadd" class="form-control" placeholder="Email" value="<?php echo $email;?>" autocomplete="off"></div>
                        <div class="col-md-12"><label class="labels">Index/Staff Number</label><input type="text" name="index" class="form-control" placeholder="Index/Staff Number" value="<?php echo $sid;?>" autocomplete="off"></div>
                        <div class="col-md-12"><label class="labels">NIC</label><input type="text" class="form-control" name="nic" placeholder="NIC" value="<?php echo $NIC;?>" autocomplete="off" onkeypress="funNumber()"></div>
                        <div class="col-md-12"><label class="labels">User Name</label><input type="text" class="form-control" disabled name="uname" placeholder="User Name" value="<?php echo $user;?>" autocomplete="off"></div>
                        <div class="col-md-12"><label class="labels">Gender</label> <br>
                            <!-- <input type="text" class="form-control" placeholder="User Name" value=""> <br> -->
                            <input type="radio" checked="" name="gender" required="require" value="Male" <?php echo $gender == 'Male' ? 'checked' : ''; ?>autocomplete="off"> <label class="labels">Male</label></input>
                            <input type="radio" name="gender" required="require" value="Female"<?php echo $gender == 'Female' ? 'checked' : ''; ?> autocomplete="off"> <label class="labels">Female</label></input>
                        </div>
                        <div class="col-md-12"><label class="labels">Date Of Birth</label><input type="date" name="dobd" class="form-control" placeholder="" value="<?php echo $dob;?>" autocomplete="off"></div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    </div> -->
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="save">Save Profile</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-2">
            <!-- <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div> -->
        </div>
    </div>
</div>
</div>
</div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->

<!-- ---------------------------------------------PHP------------------------------------------------------------------------------------------------ -->
<?php
    if(isset($_POST['save']))
    {
        $firstnm=$_POST['firstnm'];
        $lastnm=$_POST['lastnm'];
        $mobile=$_POST['mobile'];
        $emailadd=$_POST['emailadd'];
        $index=$_POST['index'];
        $nic=$_POST['nic'];
        $gender=$_POST['gender'];
        $dobd=$_POST['dobd'];
        
        $firstnm=$_POST['firstnm'];
        $lastnm=$_POST['lastnm'];
        $mobile=$_POST['mobile'];
        $emailadd=$_POST['emailadd'];
        $index=$_POST['index'];
        $nic=$_POST['nic'];
        $gender=$_POST['gender'];
        $dobd=$_POST['dobd'];
        $dpimg=$_FILES['dp']['name'];
        
        if(isset($_FILES['dp']))
        {
            $file_size = $_FILES['dp']['size'];

            if(!$_FILES['dp']['size'] <= 3072)
            {
                if($dpimg == NULL)
                {
                    $img_data=$row['image'];
                }
                else
                {
                    if ( $row['image']=="male.png" or $row['image']=="female.png" )
                    {
                        $img_data=$dpimg;
                    }
                    else
                    {
                        if($img_path ="img/".$row['image'])
                        {
                            unlink($img_path);
                            $img_data=$dpimg;
                        }
                    }    
                }

                move_uploaded_file($_FILES["dp"]["tmp_name"], "img/".$_FILES["dp"]["name"]);
                
                $sqlup="UPDATE user SET First_Name='$firstnm', Last_Name='$firstnm',dob='$dobd', Gender='$gender',email='$emailadd', phone='$mobile', index_or_staff='$index',NIC='$nic',image='$img_data' WHERE username='$user';";
                $exeup=mysqli_query($con,$sqlup);
            
                if($exeup)
                {
                    echo "<script> alert('Your Profile Updated .'); location.replace('./profile_staff.php'); </script>";
                }
                else
                {
                    die(mysqli_error($con));
                }
            }
            else
            {
                echo "<script> alert('The File Size Is to Large...! Please Upload Lessthen 3MB.'); location.replace('./profile_staff.php') </script>";
            }
        }
        
    }
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->

        <!-- Footer -->                   
        <footer class="sticky-footer bg-white" style="bottom: 0;width: 100%;">
            <div class="container my-auto" align="center">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; <span class="text-primary">Website</span>2022</span>
                <br>
                    <span>Developed BY: &copy; <span class="text-danger">VTA Graphics</span></span>
                </div>
            </div>
        </footer>                 
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php" name="">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php" name="">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?php
        //encrypt data
        $ciphering = "AES-128-CTR";

        // Use OpenSSl Encryption method
        // $iv_length = openssl_cipher_iv_length($ciphering);
        // $options = 0;

        // Non-NULL Initialization Vector for decryption
        $decryption_iv = '1234567891011121';
        
        // Store the decryption key
        $decryption_key = "insi99";
        $options = 0;
        
        // Use openssl_decrypt() function to decrypt the data
        $decryption_pass=openssl_decrypt ($_SESSION['pass'], $ciphering,$decryption_key, $options, $decryption_iv);
?>

<!-- Password Modal-->
<div class="modal fade" id="changepw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Change Password?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <label >Current Password :</label>
                            <input class="form-control" type="password" paceholder="Current Password"  value="<?php //echo $decryption_pass ?>"autocomplete="off" name="name" required required minlength="8" maxlength="16">
                        </div>

                        <div class="form-group">
                            <label >Enter New Password :</label>
                            <input class="form-control" type="password" paceholder="Enter New Password" autocomplete="off" name="desc" required required minlength="8" maxlength="16">
                        </div>

                        <div class="form-group">
                            <label >Re-Enter New Password :</label>
                            <input class="form-control" type="password" paceholder="Re-Enter New Password" name="img" required minlength="8" maxlength="16" >
                            
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="savepw">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['savepw']))
    {
        $cpw=$_POST['name'];
        $npw=$_POST['desc'];
        $rnpw=$_POST['img'];

        if ($decryption_pass == $cpw)
        {
            if($npw == $rnpw)
            {
                //encrypt data
                $ciphering = "AES-128-CTR";
                
                // Use OpenSSl Encryption method
                $iv_length = openssl_cipher_iv_length($ciphering);
                $options = 0;
                
                // Non-NULL Initialization Vector for encryption
                $encryption_iv = '1234567891011121';
                
                // Store the encryption key
                $encryption_key = "insi99";
                
                // Use openssl_encrypt() function to encrypt the data
                $encryptpw = openssl_encrypt($rnpw, $ciphering, $encryption_key, $options, $encryption_iv);

                $sqlpw="UPDATE user SET password='$encryptpw' WHERE username='".$_SESSION["username"]."';";
                $respw=mysqli_query($con,$sqlpw);

                if($respw)
                {
                    echo "<script> alert('Password Successfuly Changed.'); location.replace('./profile.php') </script>"; 
                }

                
            }
            else
            {
                echo "<script> alert('Please Verify The Both Passwords are Same.'); location.replace('./profile.php') </script>";
            }
        }
        else
        {
            echo "<script> alert('Please Verify The Current Password is Correct.'); location.replace('./profile.php') </script>";
        }       
    }
    
?>

      <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li></li>
            
            </ul>


            <!-- Tab panes -->
            <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">

            </div>
            <!-- /.tab-pane -->
            </div>
        </aside>
    <!-- /.control-sidebar -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- search  -->
    <script  src="js/scriptsearch.js"></script>

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    
    <script>
        function display_ct6() {
        var x = new Date()
        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
        hours = x.getHours( ) % 12;
        hours = hours ? 0+hours : 12;
        var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
        x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;

        // date part ///
        var month=x.getMonth()+1;
        var day=x.getDate();
        var year=x.getFullYear();
        if (month <10 ){month='0' + month;}
        if (day <10 ){day='0' + day;}
        var x3= month+'-'+day+'-'+year;

        // time part //
        var hour=x.getHours();
        var minute=x.getMinutes();
        var second=x.getSeconds();
        if(hour <10 ){hour='0'+hour;}
        if(minute <10 ) {minute='0' + minute; }
        if(second<10){second='0' + second;}
        var x3 = x3 + ' ' +  hour+':'+minute+':'+second
        document.getElementById('date-time').innerHTML=x3;

        display_c6();
        }
         function display_c6(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct6()',refresh)
        }
        display_c6()
    </script>
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

</body>
</html>
<?php mysqli_close($con); ?>