<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
    <meta name="author" content="Ansonika">
    <title>Foogra - Discover & Book the best restaurants at the best price</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/booking-sign_up.css" rel="stylesheet">

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
			<li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
			<li><a href="wishlist.php" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
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
				<li><a href="grid-listing-filterscol.php"> Restaurant </a></li>
				<li><a href="blog.php"> Blog </a></li>
				<li><a href="contacts.php"> Contact </a></li>
			</ul>
		</nav>
	</div>
	</header>
	<!-- /header -->
	
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
		                <!-- /head -->
		                <div class="main">
		                	<a href="#0" class="social_bt facebook">Sign up with Facebook</a>
							<a href="#0" class="social_bt google">Sign up with Google</a>
							<div class="divider"><span>Or</span></div>
		                	<h6>Personal details</h6>
		                	<div class="form-group">
		            			<input class="form-control" placeholder="First and Last Name">
		            			<i class="icon_pencil"></i>
		            		</div>
		            		<div class="form-group">
		            			<input class="form-control" placeholder="Email Address">
		            			<i class="icon_mail"></i>
		            		</div>
		            		<div class="form-group add_bottom_15">
		            			<input class="form-control" placeholder="Password" id="password_sign" name="password_sign">
		            			<i class="icon_lock"></i>
		            		</div>
		                    <a href="confirm.php" class="btn_1 full-width mb_5">Sign up Now</a>
		                </div>
		            </div>
		            <!-- /box_booking -->
		        </div>
		        <!-- /col -->

		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

<?php 
	require_once 'layout/footer.php';
?>