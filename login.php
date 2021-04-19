<?php 
		require_once 'layout/next_header.php';
    require_once 'admin/class/common.class.php';
    require_once 'admin/class/user.class.php';
    require_once 'admin/class/session.class.php';
	$users =new users;
    if(isset($_POST['login']))
    {
        if (isset($_POST['username'])&& !empty($_POST['username']))
         {
            $users->username= $_POST['username'];
        }
        else
        {
            //$err[0]="adminname Cannot be blank";
        }
        if(isset($_POST['password'])&& !empty($_POST['password']))
        {
            $password= $_POST['password'];
        }
        else
        {
            //$err[1]="Password cannot be blank";
        }
       
        if(1)
        {
            $res=$users->selectusers_byusername();
            if(!count($res))
            {
                echo "<script>alert('User Credentials doesnot match')</script>";
            }
            else
            {
                //echo $res[0]->username;
             $salt=$res[0]->salt;
             $ipassword=$res[0]->password;
             $newpassword=sha1($salt.$password);
             //echo $ipassword."<br>".$newpassword;
             if($newpassword==$ipassword)    
              {
                sessionhelper::set('users',$users->username);
                
                 echo "<script> window.location='confirm.php' </script>";
                
              } 
             else
             {
                echo "<script>alert('User Credentials doesnot match')</script>";
             }
        }
        }
        }
    
 ?> 

<main class="bg_gray pattern">
		<div class="container margin_60_40">
		    <div class="row justify-content-center">
		        <div class="col-lg-4">
		        	<div class="sign_up">
		                <div class="head">
		                    <div class="title">
		                    <h3>Sign Up</h3>
		                </div>
		            </div>

		            <div class="main">
						<form method="post">
		                <div class="form-group">
							<input class="form-control" type="text" required="" placeholder="Enter username" name="username">
							<i class="icon_pencil"></i>
                        </div>

						<div class="form-group">
							<input class="form-control" type="password" required="" placeholder="Password" name="password">
							<i class="icon_lock"></i>
		            	</div>

						<div class="form-group">
                            <div class="col-12">
							<button class="btn_1 full-width mb_5" type="submit" name="login">Log In</button>
                            </div>
                        </div>
						</form>

		            </div>
		            </div>
		        </div>
		    </div>
		</div>
	</main>

<?php 
	require_once 'layout/footer.php';
?>