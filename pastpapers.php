<?php
    include 'session.php';
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

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
   
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>

</head>

<body id="page-top">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Admin Dashboard <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Pannel
            </div> -->

            <!-- Nav Item - students Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#students"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-person-fill"></i>
                    <span>Students</span>
                </a>
                <div id="students" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Students:</h6>
                        <a class="collapse-item" href="students_reg.php"><i class="bi bi-person-add"></i> <span>Student Registeration</span></a>
                        <a class="collapse-item" href="student_data_view.php"><i class="bi bi-people"></i> <span>Student Record View</span></a>
                        <a class="collapse-item" href="student_update_sea.php"><i class="bi bi-pencil-square"></i> <span>Students Edit</span>  </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Guardians Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#guardians"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-person-fill"></i>
                    <span>Guardians</span>
                </a>
                <div id="guardians" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Guardians:</h6>
                        <a class="collapse-item" href="guardians_view.php"><i class="bi bi-people"></i> <span>Guardians Record View</span></a>
                        <a class="collapse-item" href="guardians_update_sear.php"><i class="bi bi-pencil-square"></i> <span>Guardians Edit</span>  </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - staff Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#staff"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-person-fill"></i>
                    <span>Staffs</span>
                </a>
                <div id="staff" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Staffs:</h6>
                        <a class="collapse-item" href="staff_reg.php"><i class="bi bi-person-add"></i> <span>Staff Registeration</span></a>
                        <a class="collapse-item" href="staff_view.php"><i class="bi bi-people"></i> <span>Staff Record View</span></a>
                        <a class="collapse-item" href="staff_update_sea.php"><i class="bi bi-pencil-square"></i> <sapn>Staff Edit</sapn></a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

             <!-- Nav Item - applicatiaon -->
             <li class="nav-item">
                <a class="nav-link" href="pastpapers.php">
                <i class="bi bi-file-earmark-arrow-up-fill"></i>
                    <span>Paper Upload</span>
                </a>
            </li>

            <!-- Nav Item - applicatiaon -->
            <li class="nav-item">
                <a class="nav-link" href="message.php">
                <i class="bi bi-envelope-open-fill"></i>
                    <span>Feedbacks</span>
                </a>
            </li>

            <!-- Nav Item - applicatiaon -->
            <li class="nav-item">
                <a class="nav-link" href="results.php">
                <i class="bi bi-input-cursor-text"></i>
                    <span>Ordinary Results Managed</span>
                </a>
            </li>

            <!-- Nav Item - applicatiaon -->
            <li class="nav-item">
                <a class="nav-link" href="application.php">
                <i class="bi bi-input-cursor-text"></i>
                    <span>Application</span>
                </a>
            </li>

            <!-- Nav Item - events -->
            <li class="nav-item">
                <a class="nav-link" href="events.php">
                    <i class="bi bi-calendar-event"></i>
                    <span>Events</span></a>
            </li>

            <!-- Nav Item - gallery -->
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">
                    <i class="bi bi-image-fill"></i>
                    <span>Gallery</span></a>
            </li>

            <!-- Nav Item - request -->
            <li class="nav-item">
                <a class="nav-link" href="request.php">
                    <i class="bi bi-app-indicator"></i>
                    <span>Requset</span></a>
            </li>

            <!-- Nav Item - request -->
            <li class="nav-item">
                <a class="nav-link" href="index_page.php">
                    <i class="bi bi-gear-wide"></i>
                    <span>Index Page Settings</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - staff Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-people-fill"></i>
                    <span>Users</span>
                </a>
                <div id="user" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Management:</h6>
                        <a class="collapse-item" href="user_reg.php"><i class="bi bi-person-vcard-fill"></i> <span>Account Create</span></a>
                        <a class="collapse-item" href="user_view.php"><i class="bi bi-binoculars-fill"></i> <span>User View</span></a>
                        <!-- <a class="collapse-item" href="staff_update_sea.php"><i class="bi bi-pencil-square"></i> <sapn>Staff Edit</sapn></a> -->
                    </div>
                </div>
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
   <?php
        $sql1="SELECT * FROM messages WHERE read_status=0;";
        $exe1=mysqli_query($con,$sql1);

        $count=mysqli_num_rows($exe1);


    ?>
<!-- ----------------------------------------------------------------------------------------------------------------------------  -->


                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"><?php echo $count ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Feedbacks
                                </h6>
                                <?php
                                    while($row=mysqli_fetch_array($exe1))
                                    {
                                        echo"<a class='dropdown-item d-flex align-items-center' href='message_replay.php?id=".$row['id']."'>";
                                ?>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><?php echo $row['Message']; ?></div>
                                                <div class="small text-gray-500"><?php echo $row['FullName']; ?></div>
                                            </div>
                                        </a>
                                <?php
                                    }
                                ?>
                                <a class="dropdown-item text-center small text-gray-500" href="message.php">Read More Messages</a>
                            </div>
                        </li>
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
                                <a class="dropdown-item" href="profile.php" >
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
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- Modal -->
    <div id='gallery'class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Upload?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>
                <form action="pastpapers_upload.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Subject :</label>
                            <input class="form-control" type="text" paceholder="Name" autocomplete="off" name="name" required>
                        </div>

                        <div class="form-group">
                            <label >Description :</label>
                            <input class="form-control" type="text" paceholder="Description" autocomplete="off" name="desc" required>
                        </div>

                        <div class="form-group">
                            <label >File :</label>
                            <input class="form-control" type="File" multiple paceholder="Image" id="img" accept=".pdf,.zip" name="img[]" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="save" >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- End Modal -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallery">
                    ADD 
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                    $sql="SELECT * FROM papers;";
                    $res=mysqli_query($con,$sql);

                    if(mysqli_num_rows($res) > 0)
                    {
                ?>       
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Visible Status</th>
                        </tr>                    
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($res))
                            {
                                $id=$row['id'];
                                $status=$row['status'];
                        ?>
                                <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                    <td> <?php echo $row['subject']; ?> </td>
                                    <td> <?php echo $row['description']; ?> </td>
                                    <td> <a href="pdf/<?php echo $row['file'];?>" target="_blank"><?php echo $row['file'];?></a></td>
                                    <!-- <td> <img class="img-profile " alt="Image" src="pdf/<?php //echo $row['image'];?>" width="100px" height="100px"> </td> -->
                                    <td> <?php echo"<a href='pastpapers_edit.php?uid=$id' class='btn btn-success'>EDIT</a>"?></td>
                                    <td> <?php echo "<a href='paper_dlt.php?did=$id' class='btn btn-danger btn-md'>DELETE</a>"?></td>
                                    <td>
                                        <?php
                                            if ($status=='1')
                                            {
                                                echo"<a href='papers_status_update.php?uid=$id' class='btn btn-md btn-success'>Show</a>";
                                            }
                                            else
                                            {
                                                echo"<a href='papers_status_update.php?uid=$id' class='btn btn-md btn-danger'>Hide</a>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <?php

                    }
                    else
                    {
                        echo"No Records Found!";
                    }
                ?>
            </div>
        </div>
    </div>
</div> <!-- Container Fluid -->
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
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
                    echo "<script> alert('Password Successfuly Changed.'); location.replace('./pastpapers.php') </script>"; 
                }

                
            }
            else
            {
                echo "<script> alert('Please Verify The Both Passwords are Same.'); location.replace('./pastpaers.php') </script>";
            }
        }
        else
        {
            echo "<script> alert('Please Verify The Current Password is Correct.'); location.replace('./pastpapers.php') </script>";
        }       
    }
    
?>

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
    <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- search  -->
    <script  src="js/scriptsearch.js"></script>
    
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
    
</body>
</html>

