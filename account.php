<?php
	require_once 'layout/next_header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/user.class.php';
    
	$name = $username = $password = $email_id = $phone_no = $city= $street="";
	$user =new users;
	$err[1]=$err[2]=$err[3]=$err[4]=$err[5]=$err[6]=$err[7]="";

	function test_input($info) {
		$info = trim($info);
		$info = stripslashes($info);
		$info = htmlspecialchars($info);
		return $info;
	}

    if(isset($_POST['signup'])) 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (empty($_POST["name"])) {
				$err[1] = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$name)) {
					$err[1] = "Must begin with letters and only _,- and letters are allowed";
				}
			}

			if (empty($_POST["username"])) {
				$err[2] = "Username is required";
			} else {
				$username = test_input($_POST["username"]);
				if (!preg_match("/^[a-zA-Z]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/",$username)) {
					$err[2] = "Must begin with letters and only _,- and letters are allowed";
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
	
			if (empty($_POST["phone_no"])) {
				$err[4] = "phone_no is required";
			} else {
				$phone_no = test_input($_POST["phone_no"]);
			}
			
			if(empty($_POST["password"])){
				$err[5] = "Password can't be empty.";
			} else {
				$password = test_input($_POST["password"]);
				if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#",$password)) {
					$err[5] = "apply strong password please";
					$password="";
				}
			}

			if (empty($_POST["city"])) {
				$err[6] = "city is required";
			} else {
				$city = test_input($_POST["city"]);
			}

			if (empty($_POST["street"])) {
				$err[7] = "street is required";
			} else {
				$street = test_input($_POST["street"]);
		}   
		
		if($err[1]=="" && $err[2]=="" && $err[3]=="" &&  $err[4]=="" && $err[5]=="" && $err[6]=="" &&$err[7]=="")  
		{
			$data = $user->selectusers();
			foreach ($data as $value) {
				$comp = strcmp($name,$value->name);
			}
			$user->username = $username;
			$user->name = $name;
			$user->email_id = $email_id;
			$user->phone_no=$phone_no;
			$user->city=$city;
			$user->street=$street;
			$user->salt = uniqid();
			$user->password= sha1($user->salt.$password);
		
			$ask =$user->insertuser();
			if($ask==1){
<<<<<<< HEAD
				echo "<script> alert('Created user Successfully') </script>";
=======
>>>>>>> 34d4c5260d98ff701ce1c0043b7d334ec65803ed
				echo '<script> window.location="confirm.php" </script>';
			} else {
				if($comp!=0) {
					echo "<script> alert('Sorry! Failed to create user.') </script>";
				} else {
					echo "<script> alert('Duplicate user value. Please insert unique user!') </script>";
				}
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
		                <!-- <a href="#" class="social_bt facebook">Sign up with Facebook</a>
						<a href="#" class="social_bt google">Sign up with Google</a>
						<div class="divider"><span>Or</span></div> -->
		                <!-- <h6>Personal details</h6> -->
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		                <div class="form-group">
						<input type="text" name="name" value="<?php echo $name;?>"
                                         class="form-control" placeholder="Name" />
                            <span class="error"> <?php echo $err[1];?></span>
		            	</div>

						<div class="form-group">
							<input type="email" name="email_id" value="<?php echo $email_id; ?>"
                                         class="form-control" placeholder="Enter email" />
                            <span class="error"> <?php echo $err[3];?></span>
		            		<!-- <i class="icon_mail"></i> -->
		            	</div>

						<div class="form-group">
							<input type="text" name="username" value="<?php echo $username;?>"
                                         class="form-control" placeholder="Username" />
                            <span class="error"> <?php echo $err[2];?></span>
		            			<!-- <i class="icon_pencil"></i> -->
		            	</div>

						<div class="form-group">
							<input type="number" name="phone_no" value="<?php echo $phone_no;?>"
                                         class="form-control" placeholder="Contact" />
                            <span class="error"> <?php echo $err[4];?></span>
		            		<!-- <i class="icon_phone"></i> -->
		            	</div>
		            	<div class="form-group add_bottom_15">
							<input type="password" id="pass2" name="password" value="<?php echo $password;?>"
                                    class="form-control" placeholder="Password" />
                            <span class="error"> <?php echo $err[5];?></span>
		            		<!-- <i class="icon_lock"></i> -->
		            	</div>
						<div class="form-group add_bottom_15">
						<input type="text" name="city" value="<?php echo $city;?>"
                                         class="form-control" placeholder="City" />
                            <span class="error"> <?php echo $err[6];?></span>
		            	</div>
						<div class="form-group add_bottom_15">
		            	<input type="text" name="street" value="<?php echo $street;?>"
                                         class="form-control" placeholder="Street" />
                            <span class="error"> <?php echo $err[7];?></span>
		            	</div>
						
						<div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <input class="btn_1 full-width mb_5" type="submit" name="signup" value="Sign Up Now" >
                            </div>
                        </div>
						</form>

		                <!-- <a href="confirm.php" class="btn_1 full-width mb_5">Sign up Now</a> -->
		            </div>
		            </div>
		        </div>
		    </div>
		</div>
	</main>

<?php 
	require_once 'layout/footer.php';
?>