<?php 
	require_once 'class/common.class.php';
    require_once 'class/food.class.php';
    require_once 'class/photo.class.php';
	require_once 'layout/header.php';
    
    $food=new food;
    $photo = new photo;
    
    
    
    if(isset($_POST['submit']))
	{   
        $targetDir = "images/"; 
        $allowTypes = array('jpg','png','jpeg','gif');
        //$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            foreach($_FILES['files']['name'] as $key=>$val){ 
                // File upload path 
                $fileName = basename($_FILES['files']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName;
                
                // Check whether file type is valid
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to server 
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                        // Image db insert sql
                        $askk =$food->insertwithoutimg();
                    }else{ 
                        $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                    } 
                }else{ 
                    $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                } 
            } 
        }
            $food->fname=$fname;
            $checkbox1 = $_POST['catt'];
            $fcategory->food_id= $_POST['food_id'];
            foreach($checkbox1 as $chk1)  
           {  
                $fcategory->cat_id=$chk1;
                $ask=$fcategory->insertfood_category();
           }         
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
                                             <h6 class=" text-muted fw-400">Food Name</h6>
                                            <input type="text" class="form-control" placeholder="Food Name" name="fname" value="<?php echo $fname;?>"/>
                                            <span class="error"> <?php echo $err[0];?></span>
                                        </div>
                                        
                                       
                                        
                                       <div class="form-group">
                                             <h6 class="text-muted fw-400">Upload Photos</h6>
                                            <div>
                                                 <input name="files[]" type="file" multiple="multiple">
                                            </div>
                                        </div> 
                                              
                                       
                                         <div class="form-group ">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
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