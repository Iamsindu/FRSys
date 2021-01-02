
    <?php 
	    require_once 'class/common.class.php';
	    require_once 'class/special.class.php';
        require_once 'layout/header.php';
    
	    $special=new special;

        $err[1]=$err[2]="";
	    if(isset($_POST['submit']))
	    {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["food1"])) {
                    $err[2] = "Item Name can't be empty";
                } else {
                    $food1 = test_input($_POST["food1"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$food1)) {
                        $err[2] = "Only letters and whitespace are allowed";
                    }
                }
            }
		
		if(count($err)==0)
		{
			$admin->salt = uniqid();
			$admin->password= sha1($admin->salt.$password);
			$ask =$admin->insertuser();
			if($ask==1)
			{
				echo "<<script>alert('inserted successfully')</script>";
			}	
			else
			{
				echo "<<script>alert('Failed to insert')</script>";
			}
		}
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
                                            <li class="breadcrumb-item"><a href="#">Item</a></li>
                                            <li class="breadcrumb-item active">Add Special Item</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Special Item</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form action="#">
                                            
                                             <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name</h6>
                                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" >
                                                    <option>Select</option>
                                                    <option value="AK">Momo</option>
                                                    <option value="HI">Chawin</option>
                                                    <option value="evn">Thuppa</option>                                                  
                                                </select>
                                            </div>
                                            
                                           <div class="form-group">
                                                   <h6 class="text-muted fw-400">Description</h6>
                                                    <div>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                           
                                          
                                             <div class="form-group ">
                                                    <div>
                                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                                            Add Special Item
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