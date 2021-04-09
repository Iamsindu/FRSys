<?php    
    require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
    require_once 'class/category.class.php';
    require_once 'layout/header.php';

	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    //$a[2]=1;
    $resturant=new resturant;
    
    $resturant->rest_id = $_GET['id'];
    $resturant->delete_restcat();
    $rrrname = $resturant->select_restname();
    foreach($rrrname as $infos)  
           {
            $resturant->rest_name = $infos->rest_name; 
           }
    $rest_name=$resturant->rest_name;
    
	if(isset($_POST['submit']))
	{
        $resturant->rest_id=$_POST['rest_id'];
        $checkbox1 = $_POST['catt'];
        foreach($checkbox1 as $chk1)  
           {  
                $resturant->cat_id=$chk1;
                $ask=$resturant->insert_restcat();
           }   
		if($ask==1)
		{
            echo "<script>alert('Category inserted successfully.')</script>";
            echo '<script> window.location.href = "show_resturant_users.php"; </script>';
		}	
		else
		{
			echo "<script>alert('Failed to insert Category')</script>";
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
                             <li class="breadcrumb-item"><a href="#">Resturant</a></li>
                             <li class="breadcrumb-item active">Update Category</li>
                         </ol>
                     </div>
                     <h4 class="page-title">Update Category</h4>
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
                                    <?php
                                         $data = $resturant->selectrestaurantbyname();
                                         foreach ($data as $value){
                                    ?>
                                     <input type="text" class="form-control" value="<?php echo $rest_name;?>"  disabled/>
                                     <input type="hidden" name="rest_id" value="<?php echo $value->rest_id; ?>">
                                     <?php } ?>
                                 </div>
                             </div>
                             
                             <div class="form-group">
                                <h6 class="text-muted fw-400">Category</h6>
                                <div>
                                    <?php
                                                 $a= 'customCheck';
                                                 $b=1;
                                                   $category = new category;
                                                   $datas = $category->selectcategory();
                                                   foreach ($datas as $values){
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
                                     <button type="submit" class="btn btn-primary waves-effect waves-light"
                                         name="submit">
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