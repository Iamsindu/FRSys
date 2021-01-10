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
		        	<div class="box_booking_2">
		                <div class="head">
		                    <div class="title">
		                    <h3>Pizzeria da Alfredo</h3>
		                    27 Old Gloucester St, 4530 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
		                </div>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<h6>Booking summary</h6>
		                	<ul>
		                		<li>Date<span>23/11/2019</span></li>
		                		<li>Hour<span>08.30pm</span></li>
		                		<li>People<span>3 Adults</span></li>
		                	</ul>
		                	<hr>
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
		            			<input class="form-control" placeholder="Phone">
		            			<i class="icon_phone"></i>
		            		</div>
		                    <a href="confirm.php" class="btn_1 full-width mb_5">Reserve Now</a>
		                    <a href="#" class="btn_1 full-width outline mb_5">Change reservation</a>
		                   <div class="text-center"><small>No money charged on this steps</small></div>
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