<?PHP
	require_once 'layout/sessions.php';
	sessionhelper::checklogin();
?>
<?php
	require_once 'layout/next_header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/resturant.class.php';
	$resturant = new resturant;
	$resturant->r_id=1;
	
?>
	
	<main>

		<div class="hero_in detail_page background-image" data-background="url(img/Popular/216054.jpg)">
			<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				
				<div class="container">
					<div class="main_info">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<div class="head"><div class="score"><span><em></em></span><strong>8.9</strong></div></div>
								<h1>Newari Kaja Ghar</h1>
								Tinkune Butwal
							</div>
							<!-- <div class="col-xl-8 col-lg-7 col-md-6">
								<div class="buttons clearfix">
									<span class="magnific-gallery">
										<a href="img/detail_1.jpg" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
										<a href="img/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
										<a href="img/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
									</span>
									<a href="#0" class="btn_hero wishlist"><i class="icon_heart"></i>Wishlist</a>
								</div>
							</div> -->
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
		        <div class="col-lg-9">

		            <div class="tabs_detail">
		                <ul class="nav nav-tabs" role="tablist">
		                	<li class="nav-item">
		                        <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Menu</a>
		                    </li>
		                    <!-- <li class="nav-item">
		                        <a id="tab-A" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Information</a>
		                    </li> -->
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
		                            	
		                            	<div class="add_bottom_25"></div>
		                                <h2>Newari Food Menu</h2>
		                                <h3>Starters</h3>
		                                
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
											<form method="post" action="">
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
												<input type="text" name="quantity" value="1" hidden />
												<input class='btn_1 small' type="submit" value="Add"/>
												
												</td>
											</form>
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
		                                            <em></em>
		                                            <small></small>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-9 reviews_sum_details">
		                                        <div class="row">
		                                            <div class="col-md-6">
		                                                <h6>Average</h6>
		                                                <div class="row">
		                                                    <div class="col-xl-10 col-lg-9 col-9">
		                                                        <div class="progress">
		                                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
		                                                </div>
		                                                <!-- /row -->
		                                                
		                                                <!-- /row -->
		                                            </div>
		                                            <div class="col-md-6">
		                                                <h6>User</h6>
		                                                <div class="row">
		                                                    <div class="col-xl-10 col-lg-9 col-9">
		                                                        <div class="progress">
		                                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
		                                                        </div>
		                                                    </div>
		                                                    <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
		                                                </div>
		                                                <!-- /row -->
		                                                
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
		                                        <!-- <div class="row reply">
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
		                                        </div> -->
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