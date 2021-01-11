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
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" as="fetch" crossorigin="anonymous">
    <script type="text/javascript">
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>
	
	<!-- BASE CSS -->
    <link href="css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
    <!-- SPECIFIC CSS -->
    <link href="css/blog.css" rel="stylesheet">
	<link href="css/review.css" rel="stylesheet">
	<link href="css/contacts.css" rel="stylesheet">
	<link href="css/error.css" rel="stylesheet">
	<link href="css/help.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
	<link href="css/listing.css" rel="stylesheet">
	<link href="css/submit.css" rel="stylesheet">
	<link href="css/detail-page.css" rel="stylesheet">
    <link href="css/booking-sign_up.css" rel="stylesheet">
	<link href="css/detail-page-delivery.css" rel="stylesheet">

	<!-- <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/icons.css" rel="stylesheet">
	<link href="css/icons.min.css" rel="stylesheet">
	<link href="css/bootstrap_customized.css" rel="stylesheet"> -->
	

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
				<li><a href="restaurant.php"> Restaurant </a></li>
				<li><a href="blog.php"> Blog </a></li>
				<li><a href="contacts.php"> Contact </a></li>
				<!-- <li class="submenu">
					<a href="#0" class="show-submenu">Home</a>
					<ul>
						<li><a href="index.php">Default</a></li>
						<li><a href="index-2.php">Video Background</a></li>
						<li><a href="index-3.php">Slider</a></li>
						<li><a href="index-4.php">GDPR Cookie Bar EU Law</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#0" class="show-submenu">Listing</a>
					<ul>
						<li class="third-level"><a href="#0">List pages</a>
							<ul>
								<li><a href="restaurant.php">List default</a></li>
								<li><a href="grid-listing-filterscol-map.php">List with map</a></li>
								<li><a href="grid-listing-filterscol-full-width.php">List full width</a></li>
								<li><a href="grid-listing-filterscol-full-masonry.php">List Masonry Filter</a></li>
							</ul>
						</li>
						<li><a href="detail-restaurant.php">Detail page 1</a></li>
						<li><a href="detail-restaurant-2.php">Detail page 2</a></li>
						<li><a href="submit-restaurant.php">Submit Restaurant</a></li>
						<li><a href="wishlist.php">Wishlist</a></li>
						<li><a href="admin_section/index.php" target="_blank">Admin Section</a></li>
						
					</ul>
				</li>
				<li class="submenu">
					<a href="#0" class="show-submenu">Other Pages</a>
					<ul>
						<li><a href="404.php">404 Error</a></li>
						<li><a href="confirm.php">Confirm Booking</a></li>
						<li><a href="help.php">Help and Faq</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="booking.php">Booking</a></li>
						<li><a href="leave-review.php">Leave a review</a></li>
						<li><a href="contacts.php">Contacts</a></li>
						<li><a href="coming_soon/index.php">Coming Soon</a></li>
						<li><a href="account.php">Sign Up</a></li>
						<li><a href="icon-pack-1.php">Icon Pack 1</a></li>
						<li><a href="icon-pack-2.php">Icon Pack 2</a></li>
					</ul>
				</li>
				<li><a href="submit-restaurant.php">Submit</a></li>
				<li><a href="#0">Buy this template</a></li> -->
			</ul>
		</nav>
	</div>
	</header>
	<!-- /header -->