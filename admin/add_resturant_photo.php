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
        $targetDir = "images/"; 
        $allowTypes = array('jpg','png','jpeg','gif');
        //$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            foreach($_FILES['files']['name'] as $key=>$val)
            { 
                // File upload path 
                $fileName = basename($_FILES['files']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName;
                
                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to server 
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                        // Image db insert sql
                        $askk =$resturant->insert_restphoto();
                    // }else{ 
                    //     $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                    // } 
                // }else{ 
                //     $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                // } 
            } 
        }
    }
    }
          
		if($askk==1)
		{
            echo "<script>alert('Photo inserted successfully.')</script>";
           // echo '<script> window.location.href = "add_resturant_location.php?id='.$rest_name.'"; </script>';
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
                                             <h6 class="text-muted fw-400">Upload Photos</h6>
                                            <div>
                                                 <input name="files[]" type="file" multiple="multiple">
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