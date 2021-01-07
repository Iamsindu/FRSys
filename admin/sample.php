<?php 
	require_once 'class/common.class.php';
    require_once 'class/food.class.php';
	require_once 'layout/header.php';
    
    $food=new food;
   
    
	if(isset($_POST['submit']))
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
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Dropzone</h4>
                                            <p class="text-muted m-b-30 font-14">DropzoneJS is an open source library
                                                that provides drag’n’drop file uploads with image previews.
                                            </p>
            
                                            <div class="m-b-30">
                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                </form>
                                            </div>
            
                                            <div class="text-center m-t-15">
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                            </div>
            
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