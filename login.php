
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FRS - Discover & Book the best restaurants at the best price</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" as="fetch" crossorigin="anonymous">
    <script type="text/javascript">
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>
	
	<!-- BASE CSS -->
    <link href="css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
    <!-- SPECIFIC CSS -->
    <link href="css/blog.css" rel="stylesheet">
	<link href="css/review.css" rel="stylesheet">
	<link href="css/listing.css" rel="stylesheet">
	<link href="css/detail-page.css" rel="stylesheet">
    <link href="css/booking-sign_up.css" rel="stylesheet">
	<link href="css/detail-page-delivery.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
</head>

<body>
				
	<header class="header_in clearfix">
		<div class="container">
		<div id="logo">
			<a href="index.php">
				<img src="img/logo_sticky.svg" width="140" height="35" alt="">
			</a>
		</div>
		<ul id="top_menu">
		
		</ul>
		<!-- /top_menu -->
		
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
			<div id="header_menu">
				<a href="#0" class="open_close">
					<i class="icon_close"></i><span>Menu</span>
				</a>
				<a href="index.php"><img src="img/logo.svg" width="140" height="35" alt=""></a>
			</div>
			<ul>
                <li><a href="index.php"> Home </a></li>
				<li><a href="restaurant.php"> Restaurant </a></li>
				<li><a href="blog.php"> Blog </a></li>
				<li><a href="contacts.php"> Contact </a></li>
				
			</ul>
		</nav>
	</div>
	</header>
	<!-- /header -->
<?php 
	
    require_once 'admin/class/common.class.php';
    require_once 'admin/class/user.class.php';
    require_once 'layout/sessions.php';
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
             
                
                 echo "<script> window.location='index.php' </script>";
                
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