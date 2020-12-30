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
    $i=1;     
	require_once 'class/common.class.php';
	require_once 'class/admin.class.php';
	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    //$a[2]=1;
    // $note=[];
    $username = $password = $email_id = $role = $status =  "";

    require_once 'layout/header.php';
    $admin=new admin; 
    
    $err[1]=$err[2]=$err[3]=$err[4]=$err[5]="";
	
        if(isset($_POST['cmdsubmit'])){
            echo "<br>"."hit";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $err[1] = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$username)) {
              $err[1] = "Must begin with letters and only _,- and letters are allowed";
            }
        }
          
        
        if(empty($_POST["password"])){
            $err[2] = "Password can't be empty.";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#",$password)) {
                $err[2] = "apply strong password please";
            }
        }
        
        if (empty($_POST["email_id"])) {
            $err[3] = "Email is required";
        } else {
            $email_id = test_input($_POST["email_id"]);
            // check if e-mail address is well-formed
            if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
                $err[3] = "Invalid format and please re-enter valid email";
            }
        }

        if (empty($_POST["role"])) {
            $err[4] = "Role is required";
        } else {
            $role = test_input($_POST["role"]);
        }

        if (empty($_POST["status"])) {
            $err[5] = "Status is required";
        } else {
            $status = test_input($_POST["status"]);
        }
    }
		if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="" && $err[5]=="")  {
            $data = $admin->selectadmin();
            foreach ($data as $value)
            {
                $comp = strcmp($username,$value->username);
            }
            $admin->username = $username;
            $admin->email_id = $email_id;
            $admin->role =$role;
            $admin->status = $status;
            $admin->salt = uniqid();
            $admin->date=date('Y-m-d H:i:s');
			$admin->password= sha1($admin->salt.$password);
			$ask =$admin->insertadmin();
			if($ask==1)
			{
				echo "<script> alert('inserted successfully') </script>";
			}	
			else
			{
                if($comp!=0)
                {
                    echo "<script> alert('Failed to insert') </script>";
                }
                else
                {
                    echo "<script> alert('Duplicate') </script>";
                }
			}
		}
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

 ?>	
                <div class="page-content-wrapper ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                            <li class="breadcrumb-item active">Add Admin</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"> Add Admin</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Username</h6>
                                                <div>
                                                    <input type="text" name="username" value="<?php echo $username;?>" class="form-control" required placeholder="Name" />
                                                    <span class="error"> <?php echo $err[1];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Password</h6>
                                                <div>
                                                    <input type="password" id="pass2" name="password" value="<?php echo $password;?>"  class="form-control" required placeholder="Password" />
                                                    <span class="error"> <?php echo $err[2];?></span>
                                                </div>
                                                <div class="m-t-10">
                                                    <input type="password" value="<?php echo $password;?>" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                                    <span class="error"> <?php echo $err[2];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Email</h6>
                                                <div>
                                                    <input type="email" name="email_id" value="<?php echo $email_id; ?>" class="form-control" required placeholder="Enter email" />
                                                    <span class="error"> <?php echo $err[3];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Role</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role" required>
                                                    <option disabled selected>Select</option>
                                                    <option>Admin</option>
                                                    <option>Editor</option>
                                                    <option>User</option>
                                                </select>
                                                <span class="error"> <?php echo $err[4]; ?> </span>  
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Status</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status" required >
                                                    <option disabled selected>Select</option>
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <div>
                                                    <button type="submit" name="cmdsubmit" class="btn btn-primary waves-effect waves-light">
                                                        Add Admin
                                                    </button>
                                                </div>
                                            </div>
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
    <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <!-- Parsley js -->
    <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
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

        $(document).ready(function() {

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