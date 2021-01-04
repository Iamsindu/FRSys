 <?php
	    require_once 'class/common.class.php';
        require_once 'class/discount_food.class.php';
        require_once 'class/discount.class.php';
        require_once 'class/food.class.php';
        require_once 'layout/header.php';
    
        $fooddisc=new fooddisc;
    
        $err[1]=$err[2]=$err[3]=$err[4]="";
        $food_id = $dis_id = $rel_date = $exp_date = "";

        function test_input($info) {
            $info = trim($info);
            $info = stripslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }

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
        
            if($err[1]=="" && $err[2]=="" && $err[3]=="" && $err[4]=="")  
            {
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
                                                        <option value="<?php echo $values->food_id ?>"><?php echo $values->fname; ?></option>
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
                                                <h6 class="text-muted fw-400">Discount</h6>
                                                <div class="form-group">
                                                
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="dis_id">
                                                    <option disabled selected>Select</option>
                                                    <?php
                                                        $discount = new discount;
                                                        $info = $discount-> selectdiscount();
                                                        foreach($info as $values)
                                                        { ?>
                                                        <option value="<?php echo $values->dis_id ?>"><?php echo $values->rate; ?></option>
                                                        <?php  
								                        }
							                        ?>
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
            <?php 
    require_once 'layout/footer.php';
    ?>