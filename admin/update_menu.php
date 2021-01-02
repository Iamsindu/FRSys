<?php 
	require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/menu.class.php';
    require_once 'layout/header.php';
    
    $menu = new menu;

    $menuname=$dsc="";
    $err[1]=$err[2]="";

    $menu->menu_id = $_GET['id'];

    function test_input($info) {
        $info = trim($info);
        $info = stripslashes($info);
        $info = htmlspecialchars($info);
        return $info;
    }
    
	if(isset($_POST['submit']))
	{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["menuname"])) {
                $err[1] = "Menu name can't be empty";
            } else {
                $menuname = test_input($_POST["menuname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$menuname)) {
                    $err[1] = "Only letters and whitespace are allowed";
                }
            } 

            if (empty($_POST["dsc"])) {
                $err[2] = "Description is required.";
            } else {
                $dsc = test_input($_POST["dsc"]);
            }
        }

        if($err[1]=="" && $err[2]=="")  
        {
            $menu->menuname=$menuname;
            $menu->dsc=$dsc;
            $ask=$menu->updatemenu();
            if($ask==="Duplicate")
            {
                echo "<script>alert('Duplicate Entry')</script>";
            }
            else if($ask)
			{
				echo "<script>alert('Menu updated successfully.')</script>";
			}	
			else
			{
				echo "<script>alert('Failed to update menu.')</script>";
			}
		}
    }
    
    $data = $menu->selectmenubyid();
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
                                            <li class="breadcrumb-item"><a href="#">Menu</a></li>
                                            <li class="breadcrumb-item active">Update Menu</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Menu</h4>
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
                                                <h6 class="text-muted fw-400">Name</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="menuname" placeholder="Menu Name" value="<?php echo $value->menuname; ?>"/>
                                                    <span class="error"> <?php echo $err[1];?></span>
                                                </div>
                                            <div class="form-group">
                                                    <h6 class="text-muted fw-400">Description</h6>
                                                    <div>
                                                        <textarea class="form-control" name="dsc" rows="5" value="<?php echo $dsc;?>"><?php echo $value->dsc; ?></textarea>
                                                        <span class="error"> <?php echo $err[2];?></span>
                                                    </div>
                                            </div>                                            
                                           
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Upload Photo</h6>
                                                <div>
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </div> 
                                             <div class="form-group ">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                                        Update Menu
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