<?php          
	require_once 'class/common.class.php';
    require_once 'class/category.class.php';
    require_once 'class/food_category.class.php';
    require_once 'class/food.class.php';
	require_once 'layout/header.php';
    $fcategory=new food_category;
    
    

	if(isset($_POST['cmdsubmit']))	{
        
        
        $checkbox1 = $_POST['catt'];
        $fcategory->food_id= $_POST['food_id'];
        foreach($checkbox1 as $chk1)  
           {  
                $fcategory->cat_id=$chk1;
                $ask=$fcategory->insertfood_category();
           }       
        
        
			if($ask==1){
                echo "<script>alert('Category inserted successfully')</script>";
                echo '<script> window.location="show_category.php" </script>';
			} else {
				echo "<script>alert('Failed to insert category.')</script>";
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
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active">Add Food Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add food Category</h4>
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
                                <h6 class="text-muted fw-400">Food</h6>
                                <select class="select2 form-control mb-3 custom-select"
                                    style="width: 100%; height:36px;" name="food_id">
                                    <option disabled selected>Select</option>
                                    <?php
                                                    $food = new food;
                                                    $data = $food->selectfood();
                                                    foreach ($data as $value)
                                                { ?>
                                    <option value="<?php echo $value->food_id; ?>"><?php echo $value->fname;?></option>

                                    <?php  
								                }
                                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Category</h6>
                                <div>
                                    <?php
                                                 $a= 'customCheck';
                                                 $b=1;
                                                   $category = new category;
                                                   $datas = $category->selectcategory();
                                                   foreach ($datas as $values)
                                               {
                                                 ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?php echo $a.$b;?>"
                                            data-parsley-multiple="groups" data-parsley-mincheck="2"
                                            value="<?php echo $values->cat_id; ?>" name="catt[]">
                                        <label class="custom-control-label"
                                            for="<?php echo $a.$b;?>"><?php echo $values->catname; ?></label>
                                    </div>

                                    <?php  
                                         $b++;
								         }
							            ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div>
                                    <button type="submit" name="cmdsubmit"
                                        class="btn btn-primary waves-effect waves-light">
                                        Add Category
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