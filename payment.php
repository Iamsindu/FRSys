<?php
	require_once 'layout/next_header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/user.class.php';
	require_once 'admin/class/orders.class.php';
	require_once 'admin/class/resturant.class.php';
	$rest = new resturant;
	$order = new orders;
	$user= new users;
	
	$order->user_id=$user->user_id=$_SESSION['users'];
	// $order->user_id=$user->user_id=21;
	$dat= $order->select_rest();
	foreach($dat as $yyt)
	{
		$total = 0;
		$order->r_id=$yyt->r_id;
		$otk = $order->select_carts();
		foreach($otk  as $tko)
		{
			$total+=($tko->quantity * $tko->price);
		}
		$order->total_price=$total;
		$ask = $order->insertorder();
		$rest->r_id=$yyt->r_id;
		$rst = $rest->selectrestname();
		if($ask==1){
			echo "<script>alert('Order for ".$rst[0]->r_name." is Added')</script>";
			
		} else {
			echo "<script>alert('Failed to Add order.')</script>";
		}
	}

?>
<style> 
input[type=submit]{
  border:none !important;
  font-family: "Poppins", Helvetica, sans-serif;
  color: #444;
  font-weight: 500;
  font-size: 16px;
}
</style>
				
	<main class="bg_gray pattern">
		
		<div class="container margin_60_40">
		    <div class="row justify-content-center">
		        <div class="col-xl-6 col-lg-8">
		        	<div class="box_booking_2 style_2">
					    <div class="head">
					        <div class="title">
					            <h3>Personal Details</h3>
					        </div>
					    </div>
					    <!-- /head -->
					    <div class="main">
							
							<form method="post">
							<?php 
								$data = $user->selectusers_byid();
								foreach($data as $value){
							?>
					        <div class="form-group">
					            <label>First and Last Name</label>
					            <input class="form-control" placeholder="Name" value="<?php echo $value->name; ?>">
					        </div>
					        <div class="row">
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Email Address</label>
					                    <input class="form-control" placeholder="Email Address" value="<?php echo $value->email_id; ?>">
					                </div>
					            </div>
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Phone</label>
					                    <input class="form-control" placeholder="Phone" value="<?php echo $value->phone_no; ?>">
					                </div>
					            </div>
					        </div>
					       
					        <div class="row">
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>City</label>
					                    <input class="form-control" placeholder="City" value="<?php echo $value->city; ?>">
					                </div>
					            </div>
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Street</label>
					                    <input class="form-control" placeholder="0123" value="<?php echo $value->street; ?>">
					                </div>
					            </div>
					        </div>
							<?php } ?>
							</form>
					    </div>
					</div>
					<!-- /box_booking -->
		            <div class="box_booking_2 style_2">
					    <div class="head">
					        <div class="title">
					            <h3>Payment Method</h3>
					        </div>
					    </div>
					    <!-- /head -->
					    <div class="main">
					       
					        <!--End row -->
							<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
					        <div class="payment_select" id="paypal">
					        <input type="submit" value=" Pay with Paypal" name="payment_method">
					        </div>
							</form>
					       
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