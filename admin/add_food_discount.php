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
        require_once 'class/discount_food.class.php';
        require_once 'class/food.class.php';
        require_once 'layout/header.php';
    
        $fooddisc=new fooddisc;
    
        $err[1]=$err[2]=$err[3]=$err[4]="";
        $food_id = $dis_id = $rel_date = $exp_date = "";

        if(isset($_POST['cmdsubmit']))
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["food_id"])) {
                    $err[1] = "food id is required";
                } else {
                    $food_id = test_input($_POST["food_id"]);
                }

                if (empty($_POST["rel_date"])) {
                    $err[2] = "rel_date is required";
                } else {
                    $rel_date = test_input($_POST["rel_date"]);
                }

                if (empty($_POST["exp_date"])) {
                    $err[3] = "exp_date is required";
                }  else {
                    $exp_date = test_input($_POST["exp_date"]);
                }

                if (empty($_POST["dis_id"])) {
                    $err[4] = "dis_id is required";
                } else {
                    $dis_id = test_input($_POST["dis_id"]);
                }
            }
        
            if($err[1]=="" && $err[2]=="" && $err[3]=="" && $err[4]=="")  {
                $data= $fooddisc->selectfooddisc();
                $fooddisc->food_id=$food_id;
                $fooddisc->rel_date=$rel_date;
                $fooddisc->exp_date=$exp_date;
		        $fooddisc->date=date('Y-m-d H:i:s');
                $fooddisc->dis_id=$dis_id;
		        $ask =$fooddisc->insertfooddisc();
			    if($ask==1)
			    {
				    echo "<script>alert('Food Discount added successfully')</script>";
			    } else {
				    echo "<script>alert('Failed to add food discount.')</script>";
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
                                            <li class="breadcrumb-item"><a href="#">Food</a></li>
                                            <li class="breadcrumb-item active">Food Discount</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Food Discount</h4>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                             <div class="form-group">
                                                <h6 class="text-muted fw-400">Food</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="food_id">
                                                    <option disabled selected>Select</option>
                                                    <?php
                                                        $food = new food;
                                                        $datas = $food-> selectfood();
                                                        foreach($datas as $values)
                                                        { ?>
                                                        <option value="<?php echo $values->food_id ?>"><?php echo $values-> fname; ?></option>
                                                        <?php  
								                        }
							                        ?>
                                                </select>
                                                <span class="error"> <?php echo $err[1];?></span>
                                            </div>
                                           <div class="form-group">
                                                    <h6 class="text-muted fw-400">Valid Date</h6>

                                                    <div>
                                                        <div class="input-daterange input-group" id="date-range">
                                                            <input type="text" class="form-control" placeholder="Manufactured Date" name="rel_date"/> 
                                                            <span class="error"> <?php echo $err[2];?></span>
                                                            <input type="text" class="form-control" placeholder="Expiry Date" name="exp_date" />
                                                            <span class="error"> <?php echo $err[3];?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <h6 class="text-muted fw-400">Discount</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="dis_id">
                                                    <option disabled selected>Select</option>
                                                    <option>5%</option>
                                                    <option>10%</option>
                                                    <option>15%</option>
                                                    <option>20%</option>
                                                </select>
                                                <span class="error"> <?php echo $err[4];?></span>
                                            </div>
                                             <div class="form-group ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="cmdsubmit">
                                                            Add Food Discount
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