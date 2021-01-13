<?php    
    require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
    require_once 'layout/header.php';

	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    //$a[2]=1;
	$resturant=new resturant;
    
    $resturant->rest_name = $_GET['id'];
    $rest_name=$resturant->rest_name;
    
    
	if(isset($_POST['submit']))
	{ 
        $resturant->rest_id=$_POST['rest_id'];
        $resturant->city=$_POST['city'];
        $resturant->street=$_POST['street'];
        $ask = $resturant->insertlocation();
		if($ask==1)
		{
            echo "<script>alert('Location inserted successfully.')</script>";
            echo '<script> window.location.href = "add_resturant_photo.php?id='.$rest_name.'"; </script>';
		}	
		else
		{
			echo "<script>alert('Failed to insert Location')</script>";
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
                             <li class="breadcrumb-item active">Add Location</li>
                         </ol>
                     </div>
                     <h4 class="page-title">Add Location</h4>
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
                             <h6 class="text-muted fw-400">Location</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h6 class="text-muted fw-400">City</h6>
                                                        <div>
                                                        <input type="text" class="form-control" placeholder="City" name="city" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Street</h6>
                                                <div>
                                                <input type="text" class="form-control" placeholder="Street" name="street" required/>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                             
                             
                             <div class="form-group ">
                                 <div>
                                     <button type="submit" class="btn btn-primary waves-effect waves-light"
                                         name="submit">
                                         Add Location
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