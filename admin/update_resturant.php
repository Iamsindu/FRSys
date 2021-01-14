<?php    
    require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
    require_once 'layout/header.php';

	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    //$a[2]=1;
    $resturant=new resturant;
    $resturant->rest_id = $_GET['id'];
    
    $err[1]=$err[2]=$err[3]=$err[4]=$err[5]=$err[6]=$err[7]=$err[8]="";
    

    
	if(isset($_POST['submit']))
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
                $err[3] = "Email is required";
            } else {
                $email_id = test_input($_POST["email_id"]);
                if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
                    $err[3] = "Invalid format and please re-enter valid email";
                }
            }

            if (empty($_POST["phone_no"])) {  
                $err[4]="Phone no is required";  
            } else {  
                $phone_no = test_input($_POST["phone_no"]);  
                if (!preg_match ("/^[0-9]*$/", $phone_no) ) {  
                    $err[4] = "Only numeric value is allowed.";  
                }
                if (strlen ($phone_no) != 10) {  
                $err[4] = "Mobile no must contain 10 digits.";  
                }
            }  

            if (empty($_POST["status"])) {
                $err[5] = "Status is required";
            } else {
                $status = test_input($_POST["status"]);
            }

           
            $open_time = $_POST["open_time"];
            $close_time = $_POST["close_time"];
            

            if (empty($_POST["delivery"])) {
                $err[6] = "Delivery option must be entered.";
            } else {
                $delivery = test_input($_POST["delivery"]);
            }

            if (empty($_POST["take_away"])) {
                $err[8] = "Take Away option must be entered.";
            } else {
                $takeaway = test_input($_POST["take_away"]);
            }

            if (empty($_POST["dsc"])) {
                $err[6] = "Description must be entered.";
            } else {
                $dsc = test_input($_POST["dsc"]);
            }
            
        

	
		if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="" && $err[5]=="" && $err[6] == "" && $err[7]=="")  {
            
            $resturant->rest_name=$rest_name;
            $resturant->email_id=$email_id;
            $resturant->phone_no=$phone_no;
            $resturant->status=$status;
            $resturant->delivery=$delivery;
            $resturant->takeaway=$takeaway;
            $open_time=date_create($open_time);
            $close_time=date_create($close_time);
            $resturant->open_time=date_format($open_time,"H:i:s");
            $resturant->close_time=date_format($close_time,"H:i:s");
            $resturant->dsc=$dsc;
			$ask =$resturant->updaterestaurant();
			if($ask==1)
			{
                echo "<script>alert('Resturant Updated successfully.')</script>";
                //echo '<script> window.location.href = "add_resturant_category.php?id='.$rest_name.'"; </script>';
			}	
			else
			{
				echo "<script>alert('Failed to Update resturant.')</script>";
			}
		}
    }
    $data = $resturant->selectrestaurantbyid();
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
                         <form method="POST" action=" ">
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Resturant Name</h6>
                                 <div>
                                     <input type="text" class="form-control" placeholder="Resturant Name"
                                         name="rest_name" value="<?php echo $value->rest_name;?>" />
                                     <span class="error"> <?php echo $err[1];?></span>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">E-Mail</h6>
                                 <div>
                                     <input type="email" value="<?php echo $value->email_id; ?>" class="form-control"
                                         parsley-type="email" placeholder="Enter a valid e-mail" name="email_id" />
                                     <span class="error"> <?php echo $err[3];?></span>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Phone no</h6>
                                 <div>
                                     <input type="text" class="form-control" value="<?php echo $value->phone_no; ?>"
                                         placeholder="number" name="phone_no" />
                                     <span class="error"> <?php echo $err[4];?></span>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Status</h6>
                                 <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                     name="status">
                                     <option disabled selected>Select</option>
                                     <option>Open</option>
                                     <option>Close</option>
                                     <option>Event</option>
                                 </select>
                                 <span class="error"> <?php echo $err[5]; ?> </span>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Open Time</h6>
                                 <div class="input-group clockpicker " data-placement="bottom" data-align="top"
                                     data-autoclose="true">
                                     <input type="text" class="form-control" placeholder="Update Open Time" name="open_time">
                                     <div class="input-group-append">
                                         <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Closed Time</h6>
                                 <div class="input-group clockpicker " data-placement="bottom" data-align="top"
                                     data-autoclose="true">
                                     <input type="text" class="form-control" placeholder="Update Closed Time" name="close_time">
                                     <div class="input-group-append">
                                         <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Delivery</h6>
                                 <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                     name="delivery">
                                     <option disabled selected>Select</option>
                                     <option value="1">Yes</option>
                                     <option value="2">No</option>
                                 </select>
                                 <span class="error"> <?php echo $err[6]; ?> </span>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Take Away</h6>
                                 <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                     name="take_away">
                                     <option disabled selected>Select</option>
                                     <option value="1">Yes</option>
                                     <option value="2">No</option>
                                 </select>
                                 <span class="error"> <?php echo $err[8]; ?> </span>
                             </div>
                             <div class="form-group">
                                 <h6 class="text-muted fw-400">Discription</h6>
                                 <div>
                                     <textarea id="textarea" class="form-control" maxlength="225" rows="3"
                                         placeholder="Add Detail about food only 225 chars." name="dsc"
                                         ><?php echo $value->dsc; ?></textarea>
                                     <span class="error"> <?php echo $err[7];?></span>
                                 </div>
                             </div>
                             <div class="form-group ">
                                 <div>
                                     <button type="submit" class="btn btn-primary waves-effect waves-light"
                                         name="submit">
                                         Add Resturant
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