<?php 
	require_once 'class/common.class.php';
    require_once 'class/food.class.php';
	require_once 'layout/header.php';
    
    $food=new food;
    $err[0] = $err[1]=$err[3]="";
    $fname = $dsc  = $vg_nvg = "";
    //require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    $food->food_id = $_GET['id'];

   
    
	if(isset($_POST['submit']))
	{
        
            
                $fname = $_POST["fname"];
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                    $err[0] = "Only letters and whitespace are allowed";
                }
            

            
                $dsc = $_POST["dsc"];
           

            // if(empty($_POST["price"])) {
            //     $err[2] = "Price is required";
            // } else 
            // {
            //     $price = test_input($_POST["price"]);
            //     if (!preg_match("/^[0-9]*$/",$price)) 
            //     {
            //         $err[2] = "Only numbers are allowed";
            //     }
            // }

            
                $vg_nvg = $_POST["vg_nvg"];
                if($vg_nvg=="Veg")
                {
                    $vg_nonvg=1;
                }
                else
                {
                    $vg_nonvg=0;
                }
            
        
       
            
            $food->fname=$fname;
            $food->dsc=$dsc;
            $food->vg_nvg=$vg_nonvg;
            $food->date = date('Y-m-d H:i:s');          
			$ask =$food->updatefood();
			if($ask==1)
			{
                echo "<script>alert('Food updated successfully.')</script>";
                echo '<script> window.location.href = "show_food.php"; </script>';
			}	
			else
			{
				echo "<script>alert('Failed to Update food.')</script>";
			}
        
        }
    $data = $food->selectfoodbyid();
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
                                            <li class="breadcrumb-item"><a href="#">Food</a></li>
                                            <li class="breadcrumb-item active">Update Food</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Food</h4>
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
                                             <h6 class=" text-muted fw-400">Food Name</h6>
                                            <input type="text" class="form-control" placeholder="Food Name" name="fname" value="<?php echo $value->fname;?>"/>
                                            <span class="error"> <?php echo $err[0];?></span>
                                        </div>
                                        <div class="form-group">
                                             <h6 class=" text-muted fw-400">Description</h6>
                                            <div>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Add Detail about food only 225 chars." name="dsc"><?php echo $value->dsc;?></textarea>
                                                <span class="error"> <?php echo $err[1];?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h6 class="text-muted fw-400">Veg/Non-Veg</h6>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="vg_nvg">
                                                <option disabled selected>Select</option>
                                                <option>Veg</option>
                                                <option>Non Veg</option>
                                            </select>
                                            <span class="error"> <?php echo $err[3];?></span>
                                        </div>
                                        
                                         <div class="form-group ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                                            Update Food
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
                <?php } ?>
            </div> <!-- content -->
            <?php 
    require_once 'layout/footer.php';
    ?>