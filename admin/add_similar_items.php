 <?php 
	    require_once 'class/common.class.php';
        require_once 'class/similar.class.php';
	    require_once 'layout/header.php';
        
        $similar = new similar;
        $sim_id = $food1 = $food2 = $food3 = $food4 ="";
        $err[1]=$err[2]=$err[3]="";

        function test_input($info) {
            $info = trim($info);
            $info = stripslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }

	    if(isset($_POST['submit']))
	    {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["sim_id"])) {
                    $err[1] = "ID is required";
                } else {
                    $sim_id = test_input($_POST["sim_id"]);
                    if (!preg_match("/^[0-9 ]*$/",$sim_id)) {
                        $err[1] = "Only numbers and whitespaces are allowed";
                    } 
                }

                if(empty($_POST["food1"])) {
                    $err[2] = "Item Name can't be empty";
                } else {
                    $food1 = test_input($_POST["food1"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$food1)) {
                        $err[2] = "Only letters and whitespace are allowed";
                    }
                }

                if(empty($_POST["food2"])) {
                    $err[3] = "Item Name can't be empty";
                } else {
                    $food2 = test_input($_POST["food2"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$food2)) {
                        $err[3] = "Only letters and whitespace are allowed";
                    }
                }
            }
		
            if($err[1]=="" && $err[2]=="" && $err[3]=="")  
            {
                $data=$similar->selectsimilar();
                $similar->sim_id=$sim_id;
                $similar->food1=$food1;
                $similar->food2=$food2;
                $similar->food3=$food3;
                $similar->food4=$food4;
                $ask=$similar->insertsimilar();
			    if($ask==1)
			    {
				    echo "<script>alert('Yay, Similar Items inserted successfully.')</script>";
			    }	
			    else
			    {
				    echo "<script>alert('Sorry! Failed to insert similar items.')</script>";
			    }
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
                                            <li class="breadcrumb-item"><a href="#">Item</a></li>
                                            <li class="breadcrumb-item active">Add Item</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Similar Item<h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">ID</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="sim_id" value="<?php echo $sim_id;?>"/>
                                                    <span class="error"> <?php echo $err[1];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 1</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food1"  value="<?php echo $food1;?>"/>
                                                    <span class="error"> <?php echo $err[2];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 2</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food2"  value="<?php echo $food2;?>" />
                                                    <span class="error"> <?php echo $err[3];?></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 3</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food3" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h6 class="text-muted fw-400">Item Name : 4</h6>
                                                <div>
                                                    <input type="text" class="form-control" name="food4" />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div>
                                                    <button type="submit"  name="submit" class="btn btn-primary waves-effect waves-light">
                                                        Add Similar Items
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