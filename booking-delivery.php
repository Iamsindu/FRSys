<?php
	require_once 'layout/next_header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/carts.class.php';
	require_once 'admin/class/resturant.class.php';
	$cart = new cart;
	$rest = new resturant;
	$vault = $rest->selectuser_id($_SESSION['users']);
	$cart->user_id = $vault[0]->user_id;
	
	// $cart->user_id =21;
	$total = 0;
	//$cart->date = date("Y-m-d");
?>
				
	<main class="bg_gray pattern">
		
		<div class="container margin_60_40">
		    <div class="row justify-content-center">
		        
		        <div class="col-xl-6 col-lg-8">
		            <div class="box_booking">
		                <div class="head">
		                    <h3>Order Summary</h3>
		                    
		                </div>
						<?php
							$data = $cart->select_resturant();
							$data[0]->r_id;
							foreach($data as $value){
								$rest->r_id=$value->r_id;
								$rst = $rest->selectrestname();
						?>
						<div class="head">
		                   
		                    <div><?php echo $rst[0]->r_name; ?></div>
		                </div>
								<?php
								$cart->r_id=$value->r_id;
								$dat = $cart->select_cart();
								
								?>
		                <!-- /head -->
						<form method="post">
		                <div class="main">
						
		                	<ul>
		                		<li>Date<span><?php echo date("Y-m-d"); ?></span></li>
		                	</ul>
							<?php foreach($dat as $val) { ?>
		                	<hr>
		                	<ul class="clearfix">
		                		<li><a href="#0"><?php echo $val->quantity.' x '.$val->food_name; ?></a><span>Rs<?php echo $val->price; ?></span></li>
		                	</ul>
		                	<?php  $total+= ($val->quantity * $val->price); } ?>
		                	<ul class="clearfix">
		                		
		                		<li class="total">Total<span><?php echo $total; ?></span></li>
		                	</ul>
							
		                    
		                </div>
						<?php } ?>
						
						<a href="payment.php" class="btn_1 full-width mb_5">Order Now</a>
						</form>
		            </div>
		            <!-- /box_booking -->
		        </div>

		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/sticky_sidebar.min.js"></script>
    <script src="js/specific_detail.js"></script>

    <script>
    	/* remove items order sum */
		$('.main ul li a').on('click', function (c) {
			$(this).parent().fadeOut('slow', function (c) {});
		});
	</script>

<?php
	require_once 'layout/footer.php';
?>