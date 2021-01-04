<?php          
	require_once 'class/common.class.php';
	require_once 'class/category.class.php';
    require_once 'layout/header.php';
    
    $category=new category;
    
    $catname = "";
    $err[0] = "";

    $category->cat_id = $_GET['id'];

    function test_input($info) {
        $info = trim($info);
        $info = stripslashes($info);
        $info = htmlspecialchars($info);
        return $info;
    }

    if(isset($_POST['cmdsubmit']))	
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["catname"])) {
                $err[0] = "Category name can't be empty";
            } else {
                $catname = test_input($_POST["catname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$catname)) {
                    $err[0] = "Only letters and whitespace are allowed";
                }
            }
        }
        
        if($err[0]=="")  
        {
            $category->catname=$catname;
			$ask=$category->updatecategory();
            if($ask==="Duplicate")
            {
                echo "<script>alert('Duplicate Entry')</script>";
            }
            else if($ask)
            {
                echo "<script>alert('Category updated successfully')</script>";
                echo '<script> window.location="show_category.php" </script>';
            } 
            else 
            {
				echo "<script>alert('Failed to update category.')</script>";
			}
		}
    }
    
    $data = $category->selectcategorybyid();
    foreach ($data as $value) {    
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
                                    <h6 class="text-muted fw-400">Category Name</h6>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Name" name="catname"
                                        value="<?php echo $value->catname; ?>" />
                                        <span class="error"> <?php echo $err[0];?></span>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div>
                                        <button type="submit" name="cmdsubmit"
                                            class="btn btn-primary waves-effect waves-light">
                                            Update Category
                                        </button>
                                    </div>
                                </div>
                                <?php } ?>
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