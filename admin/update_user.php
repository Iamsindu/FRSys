<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>FRS- FOOD RECOMMENDATION SYSTEM</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Plugins css -->
    <link href="assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
    <link href="assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="assets/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
    <link href="assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/morris/morris.css" rel="stylesheet">
</head>

<body class="fixed-left">
    <?php
        // $i=1;     
	    require_once 'class/common.class.php';
	    require_once 'class/admin.class.php';
	    //require_once 'class/session.class.php';
        //sessionhelper::checklogin();
        //require_once 'selector.php';
        require_once 'layout/header.php';
        $username = $password = $email_id = $role = $status =  "";
        $admin=new admin; 

        $err[1]=$err[2]=$err[3]=$err[4]="";

        $admin->admin_id = $_GET['id'];

        function test_input($info) {
            $info = trim($info);
            $info = stripslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }

        if(isset($_POST['cmdsubmit']))
        {           
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                if (empty($_POST["username"])) {
                    $err[1] = "Username is required";
                } else {
                    $username = test_input($_POST["username"]);
                    if (!preg_match("/^[a-zA-Z]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$username)) {
                        $err[1] = "Must begin with letters and only _,- and letters are allowed";
                    }
                }

                if (empty($_POST["email_id"])) {
                    $err[2] = "Email is required";
                } else {
                    $email_id = test_input($_POST["email_id"]);
                    if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
                        $err[2] = "Invalid format and please re-enter valid email";
                    }
                }

                if (empty($_POST["role"])) {
                    $err[3] = "Role is required";
                } else {
                    $role = test_input($_POST["role"]);
                }

                if (empty($_POST["status"])) {
                    $err[4] = "Status is required";
                } else {
                    $status = test_input($_POST["status"]);
                }

            }
                
            if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="")  
            {
                $data = $admin->selectadmin();
                $admin->username = $username;
                $admin->email_id = $email_id;
                $admin->role =$role;
                $admin->status = $status;
                $ask = $admin->updateadmin();
                if($ask==="Duplicate")
                {
                    echo "<script>alert('Duplicate Entry')</script>";
                }
                else if($ask)
                {
                    echo "<script>alert('Updated Sucessfully')</script>";
                }
                else
                {
                    echo "<script>alert('Sorry, Can't be updated.')</script>";
                } 
		    
            }
        }   
        $data = $admin->selectadminbyid();
        foreach ($data as $value) {
       
    ?>
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                <li class="breadcrumb-item"><a href="#">User</a></li>
                               
                                <li class="breadcrumb-item active">Update User</li>
                                
                            </ol>
                        </div>
                       
                                    <h4 class="page-title">Update User</h4>
                              
                        
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Username</h6>
                                    <div>
                                        <input type="text" name="username" value="<?php echo $value->username;?>"
                                            class="form-control" placeholder="Name" />
                                            <span class="error"> <?php echo $err[1];?></span>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <h6 class="text-muted fw-400">Password</h6>
                                    <div>
                                        <input type="password" id="pass2" name="password"
                                            value="" class="form-control"
                                            placeholder="Password" />
                                        <span class="error"></span>
                                    </div>
                                    <div class="m-t-10">
                                        <input type="password" value="" class="form-control"
                                            data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                        <span class="error"> </span>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Email</h6>
                                    <div>
                                        <input type="email" name="email_id" value="<?php echo $value->email_id; ?>"
                                            class="form-control" placeholder="Enter email" />
                                            <span class="error"> <?php echo $err[2];?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Role</h6>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="role">
                                        <option disabled selected>Select</option>
                                        <?php if($value->role=='User'){ ?>
                                        <option selected>User</option>
                                        <option>Admin</option>
                                        <option>Editor</option>
                                        <?php } elseif($value->role=='Admin'){  ?>
                                        <option selected>Admin</option>
                                        <option>Editor</option>
                                        <option>User</option>
                                        <?php }else{ ?>
                                        <option selected>Editor</option>
                                        <option>Admin</option>
                                        <option>User</option>
                                        <?php } ?>
                                    </select>
                                    <span class="error"> <?php echo $err[3];?></span>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Status</h6>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="status">
                                        <option disabled selected>Select</option>
                                        <?php if($value->status=='Active'){ ?>
                                        <option selected>Active</option>
                                        <option>Inactive</option>
                                        <?php } else{ ?>
                                        <option selected>Inactive</option>
                                        <option>Active</option>
                                        <?php }  ?>
                                    </select>
                                    <span class="error"> <?php echo $err[4];?></span>
                                </div>
                                <div class="form-group ">
                                    <div>
                                        <button type="submit" name="cmdsubmit"
                                            class="btn btn-primary waves-effect waves-light">
                                            Update User
                                        </button>
                                    </div>
                                </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div> <!-- Page content Wrapper -->
    </div> <!-- content -->
    <footer class="footer">
        © 2020 FRS BY VSCUBE
    </footer>
    </div>
    <!-- End Right content here -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/plugins/timepicker/moment.js"></script>
    <script src="assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
    <script src="assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
    <script src="assets/plugins/colorpicker/jquery-asColor.js" type="text/javascript"></script>
    <script src="assets/plugins/colorpicker/jquery-asGradient.js" type="text/javascript"></script>
    <script src="assets/plugins/colorpicker/jquery-asColorPicker.min.js" type="text/javascript"></script>
    <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript">
    </script>
    <!-- Parsley js -->
    <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('form').parsley();
        });
    </script>
    <!-- Plugins Init js -->
    <script src="assets/pages/form-advanced.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>



    <script src="/assets/plugins/skycons/skycons.min.js"></script>
    <script src="/assets/plugins/raphael/raphael-min.js"></script>
    <script src="/assets/plugins/morris/morris.min.js"></script>

    <script src="/assets/pages/dashborad.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
    <script>
        /* BEGIN SVG WEATHER ICON */
        if (typeof Skycons !== 'undefined') {
            var icons = new Skycons({
                    "color": "#fff"
                }, {
                    "resizeClear": true
                }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for (i = list.length; i--;)
                icons.set(list[i], list[i]);
            icons.play();
        };

        // scroll

        $(document).ready(function () {

            $("#boxscroll").niceScroll({
                cursorborder: "",
                cursorcolor: "#cecece",
                boxzoom: true
            });
            $("#boxscroll2").niceScroll({
                cursorborder: "",
                cursorcolor: "#cecece",
                boxzoom: true
            });

        });
    </script>
</body>
</html>