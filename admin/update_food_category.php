<?php          
	require_once 'class/common.class.php';
    require_once 'class/food.class.php';
    require_once 'class/resturant.class.php';
    require_once 'class/category.class.php';
    require_once 'layout/header.php';
   
    $fcategory=new food;
    $resturant = new resturant;
    $category =  new category;
    $fcategory->food_id = $_GET['id'];
    //$fname=$fcategory->fname;
    //$resturant->rest_id = $_SESSION['rest_id'];
    $resturant->rest_id = 2;
    $fcategory->delete_foodcategory();
    
	if(isset($_POST['cmdsubmit']))	{
        
        
        $checkbox1 = $_POST['catt'];
        $fcategory->food_id= $_POST['food_id'];
        //echo $fcategory->food_id."food_id";
        foreach($checkbox1 as $chk1)  
           {  
                $fcategory->cat_id=$chk1;
                $ask=$fcategory->insert_food_category();
           }       
           //$fcategory->rest_id = $_SESSION['rest_id'];
        //    $fcategory->rest_id = 2;
        //    $askk=$fcategory->insert_restfood();
        
			if($ask==1 && $askk == 1){
                echo "<script>alert('Category inserted successfully')</script>";
                echo '<script> window.location.href = "add_food_photo.php?id='.$fname.'"; </script>';
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
                                 <h6 class="text-muted fw-400">Food Name</h6>
                                 <div>
                                    <?php
                                         $data = $fcategory->selectfoodbyname();
                                         foreach ($data as $value){
                                    ?>
                                     <input type="text" class="form-control" value="<?php echo $fname;?>"  disabled/>
                                     <input type="hidden" name="food_id" value="<?php echo $value->food_id; ?>">
                                     <?php } ?>
                                 </div>
                             </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Category</h6>
                                
                                <div>
                                    <?php
                                                $a= 'customCheck';
                                                $b=1;
                                                $datas = $resturant->selectrcat_byid();
                                                foreach ($datas as $values){
                                                    $category->cat_id=$values->cat_id;
                                                    $info=$category->selectcategorybyid();
                                                    foreach($info as $catt_name) {
                                                 ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?php echo $a.$b;?>"
                                            data-parsley-multiple="groups" data-parsley-mincheck="2"
                                            value="<?php echo $catt_name->cat_id; ?>" name="catt[]">
                                        <label class="custom-control-label"
                                            for="<?php echo $a.$b;?>"><?php echo $catt_name->catname; ?></label>
                                    </div>

                                    <?php  
                                         
                                         }
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