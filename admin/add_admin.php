 <?php
        // $i=1;     
	    require_once 'class/common.class.php';
	    require_once 'class/admin.class.php';
	    //require_once 'class/session.class.php';
        //sessionhelper::checklogin();
        //require_once 'selector.php';
        require_once 'layout/header.php';
        $username = $password = $email_id = $role = $status =  "";
        $admin=new admin; 
        $err[1]=$err[2]=$err[3]=$err[4]=$err[5]="";
        // echo $username."username",$email_id."email";
        // echo $admin->admin_id."id";
        if(isset($_POST['cmdsubmit'])){
            // header ("Location: show_admin.php");
            // echo "<br>"."hit";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["username"])) {
                    $err[1] = "Username is required";
                } else {
                    $username = test_input($_POST["username"]);
                    if (!preg_match("/^[a-zA-Z]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$username)) {
                        $err[1] = "Must begin with letters and only _,- and letters are allowed";
                    }
                }
          
        
                if(empty($_POST["password"])){
                    $err[2] = "Password can't be empty.";
                } else {
                    $password = test_input($_POST["password"]);
                    if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#",$password)) {
                        $err[2] = "apply strong password please";
                        $password="";
                    }
                }
        
                if (empty($_POST["email_id"])) {
                    $err[3] = "Email is required";
                } else {
                    $email_id = test_input($_POST["email_id"]);
                    if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
                        $err[3] = "Invalid format and please re-enter valid email";
                    }
                }

                if (empty($_POST["role"])) {
                    $err[4] = "Role is required";
                } else {
                    $role = test_input($_POST["role"]);
                }

                if (empty($_POST["status"])) {
                    $err[5] = "Status is required";
                } else {
                    $status = test_input($_POST["status"]);
                }
            }       

		    if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="" && $err[5]=="")  {
                $data = $admin->selectadmin();
                foreach ($data as $value) {
                    $comp = strcmp($username,$value->username);
                }
                $admin->username = $username;
                $admin->email_id = $email_id;
                $admin->role =$role;
                $admin->status = $status;
                $admin->salt = uniqid();
                $admin->date=date('Y-m-d H:i:s');
			    $admin->password= sha1($admin->salt.$password);
                
                $ask =$admin->insertadmin();
			    if($ask==1){
                    echo "<script> alert('Inserted admin Successfully') </script>";
                    echo '<script> window.location="show_admin.php" </script>';
			    } else {
                    if($comp!=0) {
                        echo "<script> alert('Sorry! Failed to insert admin.') </script>";
                    } else {
                        echo "<script> alert('Duplicate admin value. Please insert unique admin!') </script>";
                    }
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
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">FRS</a></li>
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                               
                                <li class="breadcrumb-item active">Add Admin</li>
                                
                            </ol>
                        </div>
                        <h4 class="page-title"> Add Admin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Username</h6>
                                    <div>
                                        <input type="text" name="username" value="<?php echo $username;?>"
                                            class="form-control" placeholder="Name" />
                                        <span class="error"> <?php echo $err[1];?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Password</h6>
                                    <div>
                                        <input type="password" id="pass2" name="password"
                                            value="<?php echo $password;?>" class="form-control"
                                            placeholder="Password" />
                                        <span class="error"> <?php echo $err[2];?></span>
                                    </div>
                                    <div class="m-t-10">
                                        <input type="password" value="<?php echo $password;?>" class="form-control"
                                            data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                        <span class="error"> <?php echo $err[2];?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Email</h6>
                                    <div>
                                        <input type="email" name="email_id" value="<?php echo $email_id; ?>"
                                            class="form-control" placeholder="Enter email" />
                                        <span class="error"> <?php echo $err[3];?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Role</h6>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="role">
                                        <option disabled selected>Select</option>
                                        <option>Admin</option>
                                        <option>Editor</option>
                                        <option>User</option>
                                    </select>
                                    <span class="error"> <?php echo $err[4]; ?> </span>
                                </div>
                                <div class="form-group">
                                    <h6 class="text-muted fw-400">Status</h6>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="status">
                                        <option disabled selected>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                    <span class="error"> <?php echo $err[5]; ?> </span>
                                </div>
                                <div class="form-group ">
                                    <div>
                                        <button type="submit" name="cmdsubmit"
                                            class="btn btn-primary waves-effect waves-light" >
                                            <!-- href="show_admin.php" -->
                                            Add Admin
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