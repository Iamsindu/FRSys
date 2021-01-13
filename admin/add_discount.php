<?php
	    require_once 'class/common.class.php';
        require_once 'class/discount.class.php';
        require_once 'layout/header.php';
    
        $discounts=new discount;
    
        $err[1]=$err[2]=$err[3]=$err[4]="";
        $discount = $rels_date = $exp_date = $event= "";

        function test_input($info) {
            $info = trim($info);
            $info = stripslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }

        if(isset($_POST['cmdsubmit']))
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                if (empty($_POST["rels_date"])) {
                    $err[1] = "Release date is required";
                } else {
                    $rels_date = test_input($_POST["rels_date"]);
                }

                if (empty($_POST["exp_date"])) {
                    $err[2] = "Expiry Date is required";
                }  else {
                    $exp_date = test_input($_POST["exp_date"]);
                }
                
                if(empty($_POST["discount"])) {
                    $err[3] = "Discount Rate is required";
                } else {
                    $disc = test_input($_POST["discount"]);
                    if (!preg_match("/^[0-9]*$/",$disc)) {
                        $err[3] = "Only numbers are allowed";
                    }
                    if (strlen($disc) != 2) {  
                        $err[3] = "Discount Rate must contain only 2 digits.";  
                    }  
                }

                if(!empty($_POST["event"])) {
                    $event = test_input($_POST["event"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$event)) {
                        $err[4] = "Only letters and whitespace are allowed";
                    }
                }
            }
        
            if($err[1]=="" && $err[2]=="" && $err[3]=="" && $err[4]=="")  
            {
                //echo "discount".$disc."release date".$rels_date."xp date".$exp_date."evnet".$event;
                $discounts->discount=$disc;
                $rels_date=date_create($rels_date);
                $exp_date=date_create($exp_date);
                $discounts->rels_date=date_format($rels_date,"Y-m-d");
                $discounts->exp_date=date_format($exp_date,"Y-m-d");
                $discounts->event=$event;
                //$discounts->rest_id = $_SESSION['admin'];
		        $ask =$discounts->insertdiscount();
			    if($ask==1)
			    {
                    echo "<script>alert('Food Discount added successfully')</script>";
                    echo '<script> window.location="show_discount.php" </script>';
			    } else {
				    echo "<script>alert('Failed to add food discount.')</script>";
			    }
            }
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
                            <div class="form-group ">
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Discount</span>

                                    <input type="text" id="example-input3-group1" name="discount" class="form-control"
                                        required placeholder="Discount must be 2 Numeric Digit">
                                    <span class="error"> <?php echo $err[3];?></span>
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Valid Date</h6>

                                <div>
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="text" class="form-control" placeholder="Manufactured Date"
                                            name="rels_date" />
                                        <span class="error"> <?php echo $err[1];?></span>
                                        <input type="text" class="form-control" placeholder="Expiry Date"
                                            name="exp_date" />
                                        <span class="error"> <?php echo $err[2];?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Event</h6>
                                <div>
                                    <input type="text" class="form-control" name="event"
                                        placeholder="Event must not contain special character or space" />
                                    <span class="error"> <?php echo $err[4];?></span>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"
                                        name="cmdsubmit">
                                        Add Discount
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
<?php 
    require_once 'layout/footer.php';
    ?>