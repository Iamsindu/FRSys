<?php    
    require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    require_once 'layout/header.php';

	$resturant=new resturant;
    
    $rest_name =  $phone_no = $email_id = $status = $delivery= $open_time= $close_time="";
    $err[1]=$err[2]=$err[3]=$err[4]=$err[5]=$err[6]="";
    
    $resturant->rest_id = $_GET['id'];

    function test_input($info) {
        $info = trim($info);
        $info = stripslashes($info);
        $info = htmlspecialchars($info);
        return $info;
    }

	if(isset($_POST['submit']))
	{
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if(empty($_POST["rest_name"])) {
                $err[1] = "Restaurant name can't be empty";
            } else {
                $rest_name = test_input($_POST["rest_name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$rest_name)) {
                    $err[1] = "Only letters and whitespace are allowed";
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

            if (empty($_POST["phone_no"])) {  
                $err[3]="Phone no is required";  
            } else {  
                $phone_no = test_input($_POST["phone_no"]);  
                if (!preg_match ("/^[0-9]*$/", $phone_no) ) {  
                    $err[3] = "Only numeric value is allowed.";  
                }
                if (strlen ($phone_no) != 10) {  
                $err[3] = "Mobile no must contain 10 digits.";  
                }
            }  

            if (empty($_POST["status"])) {
                $err[4] = "Status is required";
            } else {
                $status = test_input($_POST["status"]);
            }

            if (empty($_POST["delivery"])) {
                $err[5] = "Delivery option must be entered.";
            } else {
                $delivery = test_input($_POST["delivery"]);
            }
        }
	
        if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="" && $err[5]=="")  
        {            
            $resturant->rest_name=$rest_name;
            $resturant->email_id=$email_id;
            $resturant->phone_no=$phone_no;
            $resturant->status=$status;
            $resturant->open_time=$open_time;
            $resturant->close_time=$close_time;
            $resturant->delivery=$delivery;
			$ask =$resturant->updateresturant();
            if($ask==="Duplicate")
            {
                echo "<script>alert('Duplicate Entry')</script>";
            }
            else if($ask)
			{
				echo "<script>alert('Resturant updated successfully.')</script>";
			}	
			else
			{
				echo "<script>alert('Failed to update resturant.')</script>";
			}
		}
    }

    $data = $resturant->selectresturantbyid();
    foreach ($data as $value) {
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
                                            <li class="breadcrumb-item active">Update Resturant</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Resturant</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="POST" action="">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Resturant Name</h6>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Resturant Name" name="rest_name" value="<?php echo $value->rest_name; ?>"
                                                    <span class="error"> <?php echo $err[1];?></span>
                                                </div>
                                            </div>
                                               
                                                <div class="form-group">
                                                    <h6 class="text-muted fw-400">E-Mail</h6>
                                                    <div>
                                                        <input type="email"  
                                                        value="<?php echo $value->email_id; ?>"
                                                        class="form-control" parsley-type="email" placeholder="Enter a valid e-mail" name="email_id"/>
                                                        <span class="error"> <?php echo $err[2];?></span>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                               <h6 class="text-muted fw-400">Phone no</h6>
                                               <div>
                                                    <input type="text" class="form-control"  value="<?php echo $value->phone_no; ?>" placeholder="number" name="phone_no"/>
                                                    <span class="error"> <?php echo $err[3];?></span>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <h6 class="text-muted fw-400">Status</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status">
                                                    <option disabled selected>Select</option>
                                                    <?php if($value->status=='Open'){ ?>
                                                    <option selected>Open</option>
                                                    <option >Close</option>
                                                    <option >Event</option> 
                                                    <?php } elseif($value->status=='Close'){  ?>
                                                    <option selected>Close</option>
                                                    <option >Open</option>
                                                    <option >Event</option> 
                                                    <?php }else{ ?>
                                                    <option selected>Event</option>
                                                    <option >Open</option>
                                                    <option >Close</option>
                                                    <?php } ?>
                                                </select>
                                                <span class="error"> <?php echo $err[4]; ?> </span>
                                            </div>
                                             <div class="form-group">
                                                <h6 class="text-muted fw-400">Open Time</h6>
                                                <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" name="open_time" value="<?php echo $value->open_time; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Closed Time</h6>
                                                <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" name="close_time" value="<?php echo $value->close_time; ?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <h6 class="text-muted fw-400">Delivery</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="delivery">
                                                    <option disabled selected>Select</option>
                                                    <?php if($value->delivery=='Yes'){ ?>
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    <?php } else{ ?>
                                                    <option selected value="0">No</option>
                                                    <option value="1">Yes</option>
                                                    <?php }  ?>
                                                </select>
                                                <span class="error"> <?php echo $err[5]; ?> </span>
                                            </div>
                                            <h6 class="text-muted fw-400">Location</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h6 class="text-muted fw-400">City</h6>
                                                        <div>
                                                        <input type="text" class="form-control" placeholder="City"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Street</h6>
                                                <div>
                                                <input type="text" class="form-control" placeholder="Street"/>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                             <div class="form-group ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                                            Update Resturant
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
            <?php 
            require_once 'layout/footer.php';
            ?>