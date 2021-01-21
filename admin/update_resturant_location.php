<?php    
    require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
    require_once 'layout/header.php';

	//require_once 'class/session.class.php';
    //sessionhelper::checklogin();
    //require_once 'selector.php';
    //$a[2]=1;
	$resturant=new resturant;
    $resturant->rest_id = $_GET['id'];
    $rrrname = $resturant->select_restname();
    foreach($rrrname as $infos)  
           {
            $resturant->rest_name = $infos->rest_name; 
           }
    $rest_name=$resturant->rest_name;
    
    
	if(isset($_POST['submit']))
	{ 
        $resturant->rest_id=$_POST['rest_id'];
        $resturant->city=$_POST['city'];
        $resturant->street=$_POST['street'];
        $ask = $resturant->updatelocation();
		if($ask==1)
		{
            echo "<script>alert('Location Updated successfully.')</script>";
            echo '<script> window.location.href = "show_resturant_users.php"; </script>';
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
                             <li class="breadcrumb-item active">Update Location</li>
                         </ol>
                     </div>
                     <h4 class="page-title">Update Location</h4>
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
                                    
                                     <input type="text" class="form-control" value="<?php echo $rest_name;?>"  disabled/>
                                     <input type="hidden" name="rest_id" value="<?php echo $resturant->rest_id; ?>">
                                 </div>
                             </div>
                             <?php
                              $data = $resturant->selectlocation_byid();
                              foreach ($data as $value) {
                             ?>
                             <h6 class="text-mutedfw-400">Location</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h6 class="text-muted fw-400">City</h6>
                                                        <div>
                                                        <input type="text" class="form-control" placeholder="City" value="<?php echo $value->city; ?>" name="city" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Street</h6>
                                                <div>
                                                <input type="text" class="form-control" placeholder="Street" name="street" value="<?php echo $value->street; ?>" />
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                             
                             <div class="form-group ">
                                 <div>
                                     <button type="submit" class="btn btn-primary waves-effect waves-light"
                                         name="submit">
                                         Update Location
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