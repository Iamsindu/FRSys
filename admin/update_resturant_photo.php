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
    $resturant->delete_restphoto();
    $rrrname = $resturant->select_restname();
    foreach($rrrname as $infos)  
           {
            $rest_name = $infos->rest_name; 
           }
    $resturant->rest_name=$rest_name;
    
    
	if(isset($_POST['submit']))
	{ 
        $extension=array("jpeg","jpg","png","gif");
       
        // Count total files
        $countfiles = count($_FILES['file']['name']);
        $resturant->rest_id=$_POST['rest_id'];
        // Looping all files
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['file']['name'][$i];
            $ext=pathinfo($filename,PATHINFO_EXTENSION);
            // Upload file
            if(in_array($ext,$extension)) {
                if(!file_exists("images/".$file_name)) {
                    move_uploaded_file($_FILES['file']['tmp_name'][$i],'images/'.$filename);
                    $resturant->photo=$filename;
                    $askk=$resturant->insert_restphoto();
                }
                else
                {
                    $file_name=basename($filename,$ext);
                    $newFileName=$file_name.date("Y-m-d",time()).".".$ext;
                    move_uploaded_file($_FILES['file']['tmp_name'][$i],'images/'.$newFileName);
                    $resturant->photo=$newFileName;
                    $askk=$resturant->insert_restphoto();
                }
            }
            else
            {
                echo "<script>alert('File Exension Not Supported')</script>";
                die();
            }
            
        }
          
		if($askk==1)
		{
            echo "<script>alert('Photo inserted successfully.')</script>";
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
                             <li class="breadcrumb-item active">Add Photo</li>
                         </ol>
                     </div>
                     <h4 class="page-title">Add Photo</h4>
                 </div>
             </div>
         </div>
         <!-- end page title end breadcrumb -->
         <div class="row">
             <div class="col-lg-12">
                 <div class="card m-b-30">
                     <div class="card-body">
                         <form method="POST" action="" enctype='multipart/form-data'>
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
                                             <h6 class="text-muted fw-400">Upload Photos</h6>
                                            <div>
                                            <input type="file" name="file[]" id="file" multiple>
                                            </div>
                            </div>
                             
                             <div class="form-group ">
                                 <div>
                                     <button type="submit" class="btn btn-primary waves-effect waves-light"
                                         name="submit">
                                         Add Photo
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