<?php
	    require_once 'class/common.class.php';
        require_once 'class/discount.class.php';
        require_once 'layout/header.php';
    
        $discounts=new discount;
    
        $err[1]=$err[2]="";
        $discount = $rels_date = $exp_date = $event= "";

        $discounts->discount_id = $_GET['id'];

        

        if(isset($_POST['cmdsubmit']))
        {
                $rels_date = $_POST["rels_date"];
                $exp_date =$_POST["exp_date"];
                $disc = $_POST["discount"];
                if (!preg_match("/^[0-9]*$/",$disc)) {
                    $err[1] = "Only numbers are allowed";
                }
                if (strlen($disc) != 2) {  
                    $err[1] = "Discount Rate must contain only 2 digits.";  
                }
                if(!empty($_POST["event"])) {
                    $event = $_POST["event"];
                    if (!preg_match("/^[a-zA-Z ]*$/",$event)) {
                        $err[2] = "Only letters and whitespace are allowed";
                    }
                }
            
    
            if($err[1]=="" && $err[2]=="" )  
            {
                echo "discount".$disc."release date".$rels_date."xp date".$exp_date."evnet".$event;
                $discounts->discount=$disc;
                $rels_date=date_create($rels_date);
                $exp_date=date_create($exp_date);
                $discounts->rels_date=date_format($rels_date,"Y-m-d");
                $discounts->exp_date=date_format($exp_date,"Y-m-d");
                $discounts->event=$event;
                //$discounts->rest_id = $_SESSION['admin'];
		        $ask =$discounts->updatediscount();
			    if($ask==1)
			    {
                    echo "<script>alert(' Discount Updated successfully')</script>";
                    echo '<script> window.location="show_discount.php" </script>';
			    } else {
				    echo "<script>alert('Failed to add discount.')</script>";
			    }
            }
        }
    $data = $discounts->selectdiscountbyid();
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
                        <form method="POST" action="">
                            <div class="form-group ">
                                <div class="input-group mt-2">
                                    <span class="input-group-text">Discount</span>

                                    <input type="text" id="example-input3-group1" name="discount" class="form-control"
                                        required value="<?php echo $value->discount; ?>">
                                    <span class="error"> <?php echo $err[1];?></span>
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
                                        <span class="error"> </span>
                                        <input type="text" class="form-control" placeholder="Expiry Date"
                                            name="exp_date" />
                                        <span class="error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Event</h6>
                                <div>
                                    <input type="text" class="form-control" name="event"
                                        value="<?php echo $value->event; ?>" />
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