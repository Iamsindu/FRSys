<?php
	require_once 'layout/next_header.php';
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
		                <div class="form-group">
		            		<input class="form-control" placeholder="First and Last Name">
		            			<i class="icon_pencil"></i>
		            	</div>

		            	<div class="form-group">
		            		<input class="form-control" placeholder="Email Address">
		            		<i class="icon_mail"></i>
		            	</div>
						<div class="form-group">
		            		<input class="form-control" placeholder="Contact">
		            		<i class="icon_phone"></i>
		            	</div>
		            	<div class="form-group add_bottom_15">
		            		<input class="form-control" placeholder="Password" id="password_sign" name="password_sign">
		            		<i class="icon_lock"></i>
		            	</div>

		                <a href="confirm.php" class="btn_1 full-width mb_5">Sign up Now</a>
		            </div>
		            </div>
		        </div>
		    </div>
		</div>
	</main>

<?php 
	require_once 'layout/footer.php';
?>