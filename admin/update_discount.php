<?php 
	require_once 'class/common.class.php';
	require_once 'class/discount.class.php';
	require_once 'layout/header.php';
    
    $discount=new discount;
    
    $rate = $special = "";
    $err[1]=$err[2]="";

    $discount->dis_id = $_GET['id'];

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
            if(empty($_POST["rate"])) {
                $err[1] = "Discount Rate is required";
            } else {
                $rate = test_input($_POST["rate"]);
                if (!preg_match("/^[0-9]*$/",$rate)) {
                    $err[1] = "Only numbers are allowed";
                }
                if (strlen($rate) != 2) {  
                    $err[1] = "Discount Rate must contain only 2 digits.";  
                }  
            }

            if(empty($_POST["special"])) {
                $err[2] = "Special Event can't be empty";
            } else {
                $special = test_input($_POST["special"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$special)) {
                    $err[2] = "Only letters and whitespace are allowed";
                }
            }
        }
		
        if($err[1]=="" && $err[2]=="" )  
        {
            $discount->rate=$rate;
            $discount->special=$special;
            $ask =$discount->updatediscount();
            if($ask==="Duplicate")
            {
                echo "<script>alert('Duplicate Entry')</script>";
            }
            else if($ask)
            {
                echo "<script> alert('Discount updated successfully') </script>";
            } 
            else {
                echo "<script> alert('Failed to update discount.') </script>";    
            }
        }
    }

    $data = $discount->selectdiscountbyid();
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
                                <li class="breadcrumb-item"><a href="#">Discount</a></li>
                                <li class="breadcrumb-item active"> Update Discount</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Update Discount</h4>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Rate</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-percent"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Discount rate" name="rate"
                                            style="width:80%" value="<?php echo $value->rate; ?>" />
                                        <span class="error"> <?php echo $err[1];?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Special Event</h6>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Event" name="special"
                                        value="<?php echo $value->special; ?>"/>
                                        <span class="error"> <?php echo $err[2];?></span>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"
                                            name="cmdsubmit">
                                            Update Discount
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