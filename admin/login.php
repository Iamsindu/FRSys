<?php 
    require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    $admin=new admin;
    $err=[];
    if(isset($_POST['login']))
    {
        if (isset($_POST['adminname'])&& !empty($_POST['adminname']))
         {
            $admin->adminname= $_POST['adminname'];
        }
        else
        {
            $err[0]="adminname Cannot be blank";
        }
        if(isset($_POST['password'])&& !empty($_POST['password']))
        {
            $password= $_POST['password'];
        }
        else
        {
            $err[1]="Password cannot be blank";
        }
        if(count($err)==0)
        {
            $res=$admin->selectadminbyadminname();
            if(!count($res))
            {
                $err[2]="adminname/Password doesnot match";
            }
            else
            {
             $salt=$res[0]->salt;
             $ipassword=$res[0]->password;
             $newpassword=sha1($salt.$admin->password);
             if($newpassword=$ipassword)    
              {
                sessionhelper::set('admin',$admin->adminname);
                sessionhelper::set('dbid',$res[0]->id);
                 echo "<script> window.location='index.php' </script>";
                
              } 
             else
             {
                echo "<script>alert('adminname doesnot match')</script>";
             }
        }
        }
        }
    
 ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, admin-scalable=0, minimal-ui">
        <title>FRS - Food Recommendation System </title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.php" class="logo logo-admin">
                                FRS ko logo
                            <!-- <img src="assets/images/logo.png" height="24" alt="logo"> -->
                        </a>
                    </h3>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="index.html">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="adminname" name="adminname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit" name="login">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                                </div>
                                <!-- <div class="col-sm-5 m-t-20">
                                    <a href="pages-register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
                                </div> -->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>