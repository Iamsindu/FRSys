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
	    require_once 'class/common.class.php';
        require_once 'class/similar.class.php';
	    require_once 'layout/header.php';
        
        $similar = new similar;
        $sim_id = $food1 = $food2 = $food3 = $food4 ="";
        $err[1]=$err[2]=$err[3]="";


	    if(isset($_POST['submit']))
	    {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["sim_id"])) {
                    $err[1] = "ID is required";
                } else {
                    $sim_id = test_input($_POST["sim_id"]);
                    if (!preg_match("/^[0-9 ]*$/",$sim_id)) {
                        $err[1] = "Only numbers and whitespaces are allowed";
                    } 
                }

                if(empty($_POST["food1"])) {
                    $err[2] = "Item Name can't be empty";
                } else {
                    $food1 = test_input($_POST["food1"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$food1)) {
                        $err[2] = "Only letters and whitespace are allowed";
                    }
                }

                if(empty($_POST["food2"])) {
                    $err[3] = "Item Name can't be empty";
                } else {
                    $food2 = test_input($_POST["food2"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$food2)) {
                        $err[3] = "Only letters and whitespace are allowed";
                    }
                }
            }
		
            if($err[1]=="" && $err[2]=="" && $err[3]=="")  
            {
                $data=$similar->selectsimilar();
                $similar->sim_id=$sim_id;
                $similar->food1=$food1;
                $similar->food2=$food2;
                $similar->food3=$food3;
                $similar->food4=$food4;
                $ask=$similar->insertsimilar();
			    if($ask==1)
			    {
				    echo "<script>alert('Yay, Similar Items inserted successfully.')</script>";
			    }	
			    else
			    {
				    echo "<script>alert('Sorry! Failed to insert similar items.')</script>";
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
                <!-- Top Bar End -->
                <div class="page-content-wrapper ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                            <li class="breadcrumb-item"><a href="#">Item</a></li>
                                            <li class="breadcrumb-item active">Add Item</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Similar Item<h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">ID</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="sim_id" value="<?php echo $sim_id;?>"/>
                                                    <span class="error"> <?php echo $err[1];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 1</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food1"  value="<?php echo $food1;?>"/>
                                                    <span class="error"> <?php echo $err[2];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 2</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food2"  value="<?php echo $food2;?>" />
                                                    <span class="error"> <?php echo $err[3];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 3</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food3" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 4</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food4" />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div>
                                                    <button type="submit"  name="submit" class="btn btn-primary waves-effect waves-light">
                                                        Add Similar Items
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