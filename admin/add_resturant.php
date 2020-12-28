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
    <!-- Loader -->
    
    <?php    
	require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
    require_once 'layout/header.php';
	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    //$a[2]=1;
	$resturant=new resturant;
	$err=[];
	if(isset($_POST['submit']))
	{
		if(isset($_POST['rest_name'])&& !empty($_POST['rest_name']))
		{
			$resturant->rest_name = $_POST['rest_name'];
		}
		else
		{
			$err[0]="Resturant Field cannot be empty";
		}
		if (isset($_POST['phone_no'])&& !empty($_POST['phone_no']))
		 {
			$resturant->phone_no= $_POST['phone_no'];
		}
		else
		{
			$err[1]="Phone Number must be Entered";
		}
		if (isset($_POST['email_id'])&& !empty($_POST['email_id']))
		 {
			$resturant->email_id= $_POST['email_id'];
		
		}
		else
		{
			$err[2]="Email must be entered";
		}
		if(isset($_POST['password'])&& !empty($_POST['password']))
		{
			$password= $_POST['password'];
		}
		else
		{
			$err[3]="Password cannot be empty";
		}
		if(isset($_POST['status']))
		{
			$resturant->status= $_POST['status'];
		}
		else
		{
			$err[4]="default status will be Inactive";
		}
		// if(isset($_POST['open_time'])&& !empty($_POST['open_time']))
		// {
		// 	$resturant->open_time= $_POST['open_time'];
		// }
		// else
		// {
		// 	$err[5]="Opening time should be inserted";
        // }
        // if(isset($_POST['close_time'])&& !empty($_POST['close_time']))
		// {
		// 	$resturant->close_time= $_POST['close_time'];
		// }
		// else
		// {
		// 	$err[5]="Close time should be inserted";
        // }
        if(isset($_POST['delivery'])&& !empty($_POST['delivery']))
		{
			$resturant->delivery= $_POST['delivery'];
		}
		else
		{
			$err[5]="Delivery should be inserted";
        }
		if(count($err)==0)
		{
            $resturant->date=date('Y-m-d H:i:s');
			$resturant->salt = uniqid();
			$resturant->password= sha1($resturant->salt.$password);
			$ask =$resturant->insertresturant();
			if($ask==1)
			{
				echo "<<script>alert('inserted successfully')</script>";
			}	
			else
			{
				echo "<<script>alert('Failed to insert')</script>";
			}
		}
	}
 ?>	
                <!-- Top Bar End -->
                <div class="page-content-wrapper ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                            <li class="breadcrumb-item"><a href="#">Resturant</a></li>
                                            <li class="breadcrumb-item active">Add Resturant</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Resturant</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form action="#" method="POST">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Resturant Name</h6>
                                                <div>
                                                <input type="text" class="form-control" required placeholder="Resturant Name" name="rest_name"/>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                    <h6 class="text-muted fw-400">Password</h6>
                                                    <div>
                                                        <input type="password" id="pass2" class="form-control" required
                                                                placeholder="Password" name="password"/>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <input type="password" class="form-control" required
                                                                data-parsley-equalto="#pass2"
                                                                placeholder="Re-Type Password"/>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                    <h6 class="text-muted fw-400">E-Mail</h6>

                                                    <div>
                                                        <input type="email" class="form-control" required
                                                                parsley-type="email" placeholder="Enter a valid e-mail" name="email_id"/>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                               <h6 class="text-muted fw-400">Phone no</h6>
                                               <div>
                                                <input type="text" class="form-control" required   placeholder="number" name="phone_no"/>
                                            </div>
                                            </div>
                                             <div class="form-group">
                                                <h6 class="text-muted fw-400">Status</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status">
                                                    <option>Select</option>
                                                    <option >Open</option>
                                                    <option >Close</option>
                                                    <option >Event</option>                                                  
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <h6 class="text-muted fw-400">Open Time</h6>
                                                <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="01:35" name="open_time">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Closed Time</h6>
                                                <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" value="18:35" name="close_time">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <h6 class="text-muted fw-400">Delivery</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="delivery">
                                                    <option>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <h6 class="text-muted fw-400">Location</h6>
                                            <div class="row">
                                                 
                                                <div class="col-md-6">
                                           
                                          <div class="form-group">
                                                
                                                <h6 class="text-muted fw-400">City</h6>
                                                <div>
                                                <input type="text" class="form-control" required placeholder="City"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <h6 class="text-muted fw-400">Street</h6>
                                                <div>
                                                <input type="text" class="form-control" required placeholder="Street"/>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                            
                                           
                                            <!-- <div class="form-group">
                                                <h6 class="text-muted fw-400">Upload Photos</h6>
                                                <div>
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>  -->
                                             <div class="form-group ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                                            Add Resturant
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