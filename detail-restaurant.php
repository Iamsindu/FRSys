<?php
	require_once 'layout/next_header.php';
?>
	
	<main>

		<div class="hero_in detail_page background-image" data-background="url(img/restaurant_detail_hero.jpg)">
			<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				
				<div class="container">
					<div class="main_info">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<div class="head"><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div>
								<h1>Pizzeria da Alfredo</h1>
								ITALIAN - 27 Old Gloucester St, 4530 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
							</div>
							<div class="col-xl-8 col-lg-7 col-md-6">
								<div class="buttons clearfix">
									<span class="magnific-gallery">
										<a href="img/detail_1.jpg" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
										<a href="img/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
										<a href="img/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
									</span>
									<a href="#0" class="btn_hero wishlist"><i class="icon_heart"></i>Wishlist</a>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /main_info -->
				</div>
			</div>
		</div>
		<!--/hero_in-->
		
		<div class="container margin_detail">
		    <div class="row">
		        <div class="col-lg-8">

		            <div class="tabs_detail">
		                <ul class="nav nav-tabs" role="tablist">
		                	<li class="nav-item">
		                        <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Menu</a>
		                    </li>
		                    <li class="nav-item">
		                        <a id="tab-A" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Information</a>
		                    </li>
		                    <li class="nav-item">
		                        <a id="tab-B" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
		                    </li>
		                </ul>

		                <div class="tab-content" role="tablist">
		                	<div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
		                        <div class="card-header" role="tab" id="heading-A">
		                            <h5>
		                                <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
		                                    Menu
		                                </a>
		                            </h5>
		                        </div>
		                        <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
		                            <div class="card-body info_content">
		                            	<p>Mei at intellegat reprehendunt, te facilisis definiebas dissentiunt usu. Choro delicata voluptatum cu vix. Sea error splendide at. Te sed facilisi persequeris definitiones, ad per scriptorem instructior, vim latine adipiscing no. Cu tacimates salutandi his, mel te dicant quodsi aperiri. Unum timeam his eu.</p>
		                            	<p>An malorum ornatus nostrum vel, graece iracundia laboramus cu ius. No pro mazim blandit instructior, sumo voluptaria has et, vide persecuti abhorreant ne est.</p>
		                            	<div class="add_bottom_25"></div>
		                                <h2>Da Alfredo Menu</h2>
		                                <h3>Starters</h3>
		                                <p>An malorum ornatus nostrum vel, graece iracundia laboramus cu ius. No pro mazim blandit instructior, sumo voluptaria has et, vide persecuti abhorreant ne est.</p>
		                                <table class="table table-striped cart-list">
											<thead>
												<tr>
													<th>
														 Item
													</th>
													<th>
														 Price
													</th>
													<th>
														 Order
													</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-1.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>1. Mexican Enchiladas</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$9.40</strong>
												</td>
												<td class="options">
												    <div class="dropdown dropdown-options">
												        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
												        <div class="dropdown-menu">
												            <h5>Select an option</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_radio">Medium<small>+ $3.30</small>
												                        <input type="radio" value="option1" name="options_1">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Large<small>+ $5.30</small>
												                        <input type="radio" value="option2" name="options_1">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Extra Large<small>+ $8.30</small>
												                        <input type="radio" value="option3" name="options_1">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <h5>Add ingredients</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <a href="#0" class="btn_1 small">Add to cart</a>
												        </div>
												    </div>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-2.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>2. Fajitas</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$6.80</strong>
												</td>
												<td class="options">
												    <div class="dropdown dropdown-options">
												        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
												        <div class="dropdown-menu">
												            <h5>Select an option</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_radio">Medium<small>+ $3.30</small>
												                        <input type="radio" value="option1" name="options_2">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Large<small>+ $5.30</small>
												                        <input type="radio" value="option2" name="options_2">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Extra Large<small>+ $8.30</small>
												                        <input type="radio" value="option3" name="options_2">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <h5>Add ingredients</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <a href="#0" class="btn_1 small">Add to cart</a>
												        </div>
												    </div>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-3.jpg" alt="thumb" class="lazy"></figure>
													<div class="flex-md-column">
														<h4>3. Royal Fajitas</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$5.70</strong>
												</td>
												<td class="options">
												    <div class="dropdown dropdown-options">
												        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
												        <div class="dropdown-menu">
												            <h5>Select an option</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_radio">Medium<small>+ $3.30</small>
												                        <input type="radio" value="option1" name="options_3">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Large<small>+ $5.30</small>
												                        <input type="radio" value="option2" name="options_3">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Extra Large<small>+ $8.30</small>
												                        <input type="radio" value="option3" name="options_3">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <h5>Add ingredients</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <a href="#0" class="btn_1 small">Add to cart</a>
												        </div>
												    </div>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-4.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>4. Chicken Enchilada Wrap</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$5.20</strong>
												</td>
												<td class="options">
												    <div class="dropdown dropdown-options">
												        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
												        <div class="dropdown-menu">
												            <h5>Select an option</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_radio">Medium<small>+ $3.30</small>
												                        <input type="radio" value="option1" name="options_4">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Large<small>+ $5.30</small>
												                        <input type="radio" value="option2" name="options_4">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_radio">Extra Large<small>+ $8.30</small>
												                        <input type="radio" value="option3" name="options_4">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <h5>Add ingredients</h5>
												            <ul class="clearfix">
												                <li>
												                    <label class="container_check">Extra Tomato<small>+ $4.30</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												                <li>
												                    <label class="container_check">Extra Peppers<small>+ $2.50</small>
												                        <input type="checkbox">
												                        <span class="checkmark"></span>
												                    </label>
												                </li>
												            </ul>
												            <a href="#0" class="btn_1 small">Add to cart</a>
												        </div>
												    </div>
												</td>
											</tr>
											</tbody>
											</table>
											<h3>Main Courses</h3>
											<p>
												An malorum ornatus nostrum vel, graece iracundia laboramus cu ius. No pro mazim blandit instructior, sumo voluptaria has et, vide persecuti abhorreant ne est.
											</p>
											<table class="table table-striped cart-list">
												<thead>
													<tr>
														<th>
															 Item
														</th>
														<th>
															 Price
														</th>
														<th>
															 Order
														</th>
													</tr>
												</thead>
											<tbody>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>5. Cheese Quesadilla</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$12.00</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-6.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>6. Chorizo & Cheese</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$24.71</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-7.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>7. Beef Taco</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$8.70</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-8.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>8. Minced Beef Double Layer</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$6.30</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-9.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>9. Piri Piri Chicken</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$7.40</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-10.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>10. Burrito Al Pastor</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$7.70</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											</tbody>
											</table>

											<h3>Desserts</h3>
											<p>
												Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
											</p>
											<table class="table table-striped cart-list ">
												<thead>
													<tr>
														<th>
															 Item
														</th>
														<th>
															 Price
														</th>
														<th>
															 Order
														</th>
													</tr>
												</thead>
											<tbody>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-17.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>11. Chocolate Fudge Cake</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$24.71</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-18.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>12. Cheesecake</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$7.50</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-19.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>19. Apple Pie & Custard</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$9.70</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="img/menu-thumb-placeholder.jpg" data-src="img/menu-thumb-20.jpg" alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4>14. Profiteroles</h4>
														<p>
															Fuisset mentitum deleniti sit ea.
														</p>
													</div>
												</td>
												<td>
													<strong>$12.00</strong>
												</td>
												<td class="options">
													<a href="#0"><i class="icon_plus_alt2"></i></a>
												</td>
											</tr>
											</tbody>
											</table>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /tab -->
		                    <div id="pane-B" class="card tab-pane" role="tabpanel" aria-labelledby="tab-B">
		                        <div class="card-header" role="tab" id="heading-B">
		                            <h5>
		                                <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="true" aria-controls="collapse-B">
		                                    Information
		                                </a>
		                            </h5>
		                        </div>
		                        <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
		                            <div class="card-body info_content">
		                            	<p>Mei at intellegat reprehendunt, te facilisis definiebas dissentiunt usu. Choro delicata voluptatum cu vix. Sea error splendide at. Te sed facilisi persequeris definitiones, ad per scriptorem instructior, vim latine adipiscing no. Cu tacimates salutandi his, mel te dicant quodsi aperiri. Unum timeam his eu.</p>
		                            	<p>An malorum ornatus nostrum vel, graece iracundia laboramus cu ius. No pro mazim blandit instructior, sumo voluptaria has et, vide persecuti abhorreant ne est.</p>
		                            	<div class="add_bottom_25"></div>
		                                <h2>Pictures from our users</h2>
		                                <div class="pictures magnific-gallery clearfix">
		                                    <figure><a href="img/detail_gallery/detail_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_1.jpg" class="lazy" alt=""></a></figure>
		                                    <figure><a href="img/detail_gallery/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_2.jpg" class="lazy" alt=""></a></figure>
		                                    <figure><a href="img/detail_gallery/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_3.jpg" class="lazy" alt=""></a></figure>
		                                    <figure><a href="img/detail_gallery/detail_4.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_4.jpg" class="lazy" alt=""></a></figure>
		                                    <figure><a href="img/detail_gallery/detail_5.jpg" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+10</span><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_5.jpg" class="lazy" alt=""></a></figure>
		                                </div>
		                                <!-- /pictures -->
		                               

		                                <div class="other_info">
		                                <h2>How to get to Pizzeria Alfredo</h2>
		                                <div class="row">
		                                	<div class="col-md-4">
		                                		<h3>Address</h3>
		                                		<p>27 Old Gloucester St, 4530<br><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank"><strong>Get directions</strong></a></p>
		                                		<strong>Follow Us</strong><br>
		                                		<p class="follow_us_detail"><a href="#0"><i class="social_facebook_square"></i></a><a href="#0"><i class="social_instagram_square"></i></a><a href="#0"><i class="social_twitter_square"></i></a></p>
		                                	</div>
		                                	<div class="col-md-4">
		                                		<h3>Opening Time</h3>
		                                		<p><strong>Lunch</strong><br> Mon. to Sat. 11.00am - 3.00pm<p>
		                                		<p><strong>Dinner</strong><br> Mon. to Sat. 6.00pm- 1.00am</p>
		                                		<p><span class="loc_closed">Sunday Closed</span></p>
		                                	</div>
		                                	<div class="col-md-4">
		                                		<h3>Services</h3>
		                                		<p><strong>Credit Cards</strong><br> Mastercard, Visa, Amex</p>
		                                		<p><strong>Other</strong><br> Wifi, Parking, Wheelchair Accessible</p>
		                                	</div>
		                                </div>
		                                <!-- /row -->
		                            	</div>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /tab -->

		                    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
		                        <div class="card-header" role="tab" id="heading-C">
		                            <h5>
		                                <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
		                                    Reviews
		                                </a>
		                            </h5>
		                        </div>
		                        <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-C">
		                            <div class="card-body reviews">
		                                <div class="row add_bottom_45 d-flex align-items-center">
		                                    <div class="col-md-3">
		                                        <div id="review_summary">
		                                            <strong>8.5</strong>
		                                            <em>Superb</em>
		                                            <small>Based on 4 reviews</small>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-9 reviews_sum_details">
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <h6>Food Quality</h6>
		                                                <div class="row">
		                                                    <div class="col-xl-10 col-lg-9 col-9">
		                                                        <div class="progress">
		                                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
		                                                </div>
		                                                <!-- /row -->
		                                                <h6>Service</h6>
		                                                <div class="row">
		                                                    <div class="col-xl-10 col-lg-9 col-9">
		                                                        <div class="progress">
		                                                            <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
		                                                </div>
		                                                <!-- /row -->
		                                            </div>
		                                            <div class="col-md-6">
		                                                <h6>Location</h6>
		                                                <div class="row">
		                                                    <div class="col-xl-10 col-lg-9 col-9">
		                                                        <div class="progress">
		                                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
		                                                </div>
		                                                <!-- /row -->
		                                                <h6>Price</h6>
		                                                <div class="row">
		                                                    <div class="col-xl-10 col-lg-9 col-9">
		                                                        <div class="progress">
		                                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
		                                                </div>
		                                                <!-- /row -->
		                                            </div>
		                                        </div>
		                                        <!-- /row -->
		                                    </div>
		                                </div>

		                                <div id="reviews">
		                                    <div class="review_card">
		                                        <div class="row">
		                                            <div class="col-md-2 user_info">
		                                                <figure><img src="img/avatar4.jpg" alt=""></figure>
		                                                <h5>Lukas</h5>
		                                            </div>
		                                            <div class="col-md-10 review_content">
		                                                <div class="clearfix add_bottom_15">
		                                                    <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
		                                                    <em>Published 54 minutes ago</em>
		                                                </div>
		                                                <h4>"Great Location!!"</h4>
		                                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
		                                                <ul>
		                                                    <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
		                                                    <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
		                                                    <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                        <!-- /row -->
		                                    </div>
		                                    <!-- /review_card -->
		                                    <div class="review_card">
		                                        <div class="row">
		                                            <div class="col-md-2 user_info">
		                                                <figure><img src="img/avatar6.jpg" alt=""></figure>
		                                                <h5>Lukas</h5>
		                                            </div>
		                                            <div class="col-md-10 review_content">
		                                                <div class="clearfix add_bottom_15">
		                                                    <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
		                                                    <em>Published 10 Oct. 2019</em>
		                                                </div>
		                                                <h4>"Awesome Experience"</h4>
		                                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
		                                                <ul>
		                                                    <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
		                                                    <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
		                                                    <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                        <!-- /row -->
		                                    </div>
		                                    <!-- /review_card -->
		                                    <div class="review_card">
		                                        <div class="row">
		                                            <div class="col-md-2 user_info">
		                                                <figure><img src="img/avatar1.jpg" alt=""></figure>
		                                                <h5>Marika</h5>
		                                            </div>
		                                            <div class="col-md-10 review_content">
		                                                <div class="clearfix add_bottom_15">
		                                                    <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
		                                                    <em>Published 11 Oct. 2019</em>
		                                                </div>
		                                                <h4>"Really great dinner!!"</h4>
		                                                <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
		                                                <ul>
		                                                    <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
		                                                    <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
		                                                    <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                        <!-- /row -->
		                                        <div class="row reply">
		                                            <div class="col-md-2 user_info">
		                                                <figure><img src="img/avatar.jpg" alt=""></figure>
		                                            </div>
		                                            <div class="col-md-10">
		                                                <div class="review_content">
		                                                    <strong>Reply from Foogra</strong>
		                                                    <em>Published 3 minutes ago</em>
		                                                    <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <!-- /reply -->
		                                    </div>
		                                    <!-- /review_card -->
		                                </div>
		                                <!-- /reviews -->
		                                <div class="text-right"><a href="leave-review.php" class="btn_1">Leave a review</a></div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- /tab-content -->
		            </div>
		            <!-- /tabs_detail -->
		        </div>
		        <!-- /col -->

		        <div class="col-lg-4" id="sidebar_fixed">
		            <div class="box_booking">
		                <div class="head">
		                    <h3>Order Summary</h3>
		                    <div class="offer">Up to -40% off</div>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<ul class="clearfix">
		                		<li><a href="#0">1x Enchiladas</a><span>$11</span></li>
		                		<li><a href="#0">2x Burrito</a><span>$14</span></li>
		                		<li><a href="#0">1x Chicken</a><span>$18</span></li>
		                		<li><a href="#0">2x Corona Beer</a><span>$9</span></li>
		                		<li><a href="#0">2x Cheese Cake</a><span>$11</span></li>
		                	</ul>
		                	
		                	<ul class="clearfix">
		                		<li>Subtotal<span>$56</span></li>
		                		<li>Delivery fee<span>$10</span></li>
		                		<li class="total">Total<span>$66</span></li>
		                	</ul>
		                	<div class="row opt_order">
							    <div class="col-6">
							        <label class="container_radio">Delivery</small>
							            <input type="radio" value="option1" name="opt_order" checked>
							            <span class="checkmark"></span>
							        </label>
							    </div>
							    <div class="col-6">
							        <label class="container_radio">Take away</small>
							            <input type="radio" value="option1" name="opt_order">
							            <span class="checkmark"></span>
							        </label>
							    </div>
							</div>
							<div class="dropdown day">
		                        <a href="#" data-toggle="dropdown">Day <span id="selected_day"></span></a>
		                        <div class="dropdown-menu">
		                            <div class="dropdown-menu-content">
		                                <h4>Which day delivered?</h4>
		                                <div class="radio_select chose_day">
		                                    <ul>
		                                        <li>
		                                            <input type="radio" id="day_1" name="day" value="Today">
		                                            <label for="day_1">Today<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="day_2" name="day" value="Tomorrow">
		                                            <label for="day_2">Tomorrow<em>-40%</em></label>
		                                        </li>
		                                    </ul>
		                                </div>
		                                <!-- /people_select -->
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /dropdown -->
		                	 <div class="dropdown time">
		                        <a href="#" data-toggle="dropdown">Time <span id="selected_time"></span></a>
		                        <div class="dropdown-menu">
		                            <div class="dropdown-menu-content">
		                                <h4>Lunch</h4>
		                                <div class="radio_select add_bottom_15">
		                                    <ul>
		                                        <li>
		                                            <input type="radio" id="time_1" name="time" value="12.00am">
		                                            <label for="time_1">12.00<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="time_2" name="time" value="08.30pm">
		                                            <label for="time_2">12.30<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="time_3" name="time" value="09.00pm">
		                                            <label for="time_3">1.00<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="time_4" name="time" value="09.30pm">
		                                            <label for="time_4">1.30<em>-40%</em></label>
		                                        </li>
		                                    </ul>
		                                </div>
		                                <!-- /time_select -->
		                                <h4>Dinner</h4>
		                                <div class="radio_select">
		                                    <ul>
		                                        <li>
		                                            <input type="radio" id="time_5" name="time" value="08.00pm">
		                                            <label for="time_1">20.00<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="time_6" name="time" value="08.30pm">
		                                            <label for="time_2">20.30<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="time_7" name="time" value="09.00pm">
		                                            <label for="time_3">21.00<em>-40%</em></label>
		                                        </li>
		                                        <li>
		                                            <input type="radio" id="time_8" name="time" value="09.30pm">
		                                            <label for="time_4">21.30<em>-40%</em></label>
		                                        </li>
		                                    </ul>
		                                </div>
		                                <!-- /time_select -->
		                            </div>
		                        </div>
		                    </div>
		                    <!-- /dropdown -->
		                    <a href="booking-delivery.php" class="btn_1 full-width mb_5">Order Now</a>
		                   <div class="text-center"><small>No money charged on this steps</small></div>
		                </div>
		            </div>
		            <!-- /box_booking -->
		            <ul class="share-buttons">
		                <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
		                <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
		                <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
		            </ul>
		        </div>

		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->

	</main>
	<!-- /main -->

	<div id="message">Item added to cart</div><!-- Add to cart message -->
	

<?php
	require_once 'layout/footer.php';
?>