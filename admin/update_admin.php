<?php
        // $i=1;     
	    require_once 'class/common.class.php';
	    require_once 'class/admin.class.php';
	    //require_once 'class/session.class.php';
        //sessionhelper::checklogin();
        //require_once 'selector.php';
        require_once 'layout/header.php';

        $admin=new admin; 

        $username = $password = $email_id = $role = $status =  "";
        $err[1]=$err[2]=$err[3]=$err[4]="";

        $admin->admin_id = $_GET['id'];

        function test_input($info) {
            $info = trim($info);
            $info = stripslashes($info);
            $info = htmlspecialchars($info);
            return $info;
        }

        if(isset($_POST['cmdsubmit']))
        {           
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                if (empty($_POST["username"])) {
                    $err[1] = "Username is required";
                } else {
                    $username = test_input($_POST["username"]);
                    if (!preg_match("/^[a-zA-Z]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$username)) {
                        $err[1] = "Must begin with letters and only _,- and letters are allowed";
                    }
                }

                if (empty($_POST["email_id"])) {
                    $err[2] = "Email is required";
                } else {
                    $email_id = test_input($_POST["email_id"]);
                    if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
                        $err[2] = "Invalid format and please re-enter valid email";
                    }
                }

                if (empty($_POST["role"])) {
                    $err[3] = "Role is required";
                } else {
                    $role = test_input($_POST["role"]);
                }

                if (empty($_POST["status"])) {
                    $err[4] = "Status is required";
                } else {
                    $status = test_input($_POST["status"]);
                }
            }
                
            if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="")  
            {
                // $data = $admin->selectadmin();
                $admin->username = $username;
                $admin->email_id = $email_id;
                $admin->role =$role;
                $admin->status = $status;
                $ask = $admin->updateadmin();
                if($ask==="Duplicate")
                {
                    echo "<script>alert('Duplicate Entry')</script>";
                }
                else if($ask)
                {
                    echo "<script>alert('Updated Sucessfully')</script>";
                    echo '<script> window.location="show_admin.php" </script>';
                }
                else
                {
                    echo "<script>alert('Sorry, Can't be updated.')</script>";
                } 
            }
        }

        $data = $admin->selectadminbyid();
        foreach ($data as $value) {
    ?>
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">FRS</a></li>
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>

                            <li class="breadcrumb-item active">Update Admin</li>

                        </ol>
                    </div>

                    <h4 class="page-title">Update Admin</h4>


                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Username</h6>
                                <div>
                                    <input type="text" name="username" value="<?php echo $value->username;?>"
                                        class="form-control" placeholder="Name" />
                                    <span class="error"> <?php echo $err[1];?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <h6 class="text-muted fw-400">Email</h6>
                                <div>
                                    <input type="email" name="email_id" value="<?php echo $value->email_id; ?>"
                                        class="form-control" placeholder="Enter email" />
                                    <span class="error"> <?php echo $err[2];?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Role</h6>
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                    name="role">
                                    <option disabled selected>Select</option>
                                    <?php if($value->role=='User'){ ?>
                                    <option selected>User</option>
                                    <option>Admin</option>
                                    <option>Editor</option>
                                    <?php } elseif($value->role=='Admin'){  ?>
                                    <option selected>Admin</option>
                                    <option>Editor</option>
                                    <option>User</option>
                                    <?php }else{ ?>
                                    <option>Admin</option>
                                    <option selected>Editor</option>
                                    <option>User</option>
                                    <?php } ?>
                                </select>
                                <span class="error"> <?php echo $err[3];?></span>
                            </div>
                            <div class="form-group">
                                <h6 class="text-muted fw-400">Status</h6>
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                    name="status">
                                    <option disabled selected>Select</option>
                                    <?php if($value->status=='Active'){ ?>
                                    <option selected>Active</option>
                                    <option>Inactive</option>
                                    <?php } else{ ?>
                                    <option selected>Inactive</option>
                                    <option>Active</option>
                                    <?php }  ?>
                                </select>
                                <span class="error"> <?php echo $err[4];?></span>
                            </div>
                            <div class="form-group ">
                                <div>
                                    <button type="submit" name="cmdsubmit"
                                        class="btn btn-primary waves-effect waves-light">
                                        Update Admin
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