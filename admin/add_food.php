<?php 
	require_once 'class/common.class.php';
    require_once 'class/food.class.php';
    require_once 'class/resturant.class.php';
    require_once 'class/category.class.php';
	require_once 'layout/header.php';
    
    $food=new food;
    
    $err[0] = $err[1]=$err[2]=$err[3]="";
    $fname = $dsc = $price = $vg_nvg = "";

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
            if(empty($_POST["fname"])) {
                $err[0] = "Food name can't be empty";
            } else {
                $fname = test_input($_POST["fname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                    $err[0] = "Only letters and whitespace are allowed";
                }
            }

            if (empty($_POST["dsc"])) {
                $err[1] = "Description is required.";
            } else {
                $dsc = test_input($_POST["dsc"]);
            }

            if(empty($_POST["price"])) {
                $err[2] = "Price is required";
            } else 
            {
                $price = test_input($_POST["price"]);
                if (!preg_match("/^[0-9]*$/",$price)) 
                {
                    $err[2] = "Only numbers are allowed";
                }
            }

            if (empty($_POST["vg_nvg"])) {
                $err[3] = "This field can't be empty.";
            } else {
                $vg_nvg = test_input($_POST["vg_nvg"]);
                if($vg_nvg=="Veg")
                {
                    $vg_nonvg=1;
                }
                else
                {
                    $vg_nonvg=0;
                }
            }
        }

        if($err[0]=="" && $err[1]=="" && $err[2]=="" &&  $err[3]=="")  
        {
            $data=$food->selectfood();
            $food->fname=$fname;
            $food->dsc=$dsc;
            $food->price=$price;
            $food->vg_nvg=$vg_nonvg;            
			$ask =$food->insertwithoutimg();
			if($ask==1)
			{
                echo "<script>alert('Food inserted successfully.')</script>";
                echo '<script> window.location="show_food.php" </script>';
			}	
			else
			{
				echo "<script>alert('Failed to insert food.')</script>";
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
                                            <li class="breadcrumb-item"><a href="#">Food</a></li>
                                            <li class="breadcrumb-item active">Add Food</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Food</h4>
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
                                             <h6 class=" text-muted fw-400">Food Name</h6>
                                            <input type="text" class="form-control" placeholder="Food Name" name="fname" value="<?php echo $fname;?>"/>
                                            <span class="error"> <?php echo $err[0];?></span>
                                        </div>
                                        <div class="form-group">
                                             <h6 class=" text-muted fw-400">Description</h6>
                                            <div>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Add Detail about food only 225 chars." name="dsc" value="<?php echo $dsc;?>"></textarea>
                                                <span class="error"> <?php echo $err[1];?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h6 class="text-muted fw-400">Price</h6>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Item Price" name="price" value="<?php echo $price;?>"/>
                                                <span class="error"> <?php echo $err[2];?></span>
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
                                        
                                       <div class="form-group">
                                             <h6 class="text-muted fw-400">Upload Photos</h6>
                                            <div>
                                                 <input name="" type="file" multiple="multiple">
                                            </div>
                                        </div> 
                                              
                                        <div class="form-group">    
                                            <h6 class="text-muted fw-400">Resturant</h6>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="rest_id">
                                                <option disabled selected>Select</option>
                                                <?php
                                                    $resturant = new resturant;
                                                    $data = $resturant->selectresturant();
                                                    foreach ($data as $value)
                                                { ?>
                                                <option value="<?php echo $value->rest_id; ?>"><?php echo $value->rest_name;?></option>   
                                        
                                                <?php  
								                }
                                                ?>      
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h6 class="text-muted fw-400">Category</h6>
                                            <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" name="cat_id">
                                                <option disabled selected>Select</option> 
                                                <?php
                                                    $category = new category;
                                                    $datas = $category->selectcategory();
                                                    foreach ($datas as $values)
                                                { ?>
                                                <option value="<?php echo $values->cat_id; ?>"><?php echo $values->catname; ?></option>    
                                        
                                                <?php  
								                    }
							                    ?>
                                            </select> 
                                        </div>
                                         <div class="form-group ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                                            Add Food
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