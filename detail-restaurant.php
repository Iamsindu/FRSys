<?PHP
	require_once 'layout/sessions.php';
	sessionhelper::checklogin();
?>
<?php
	require_once 'layout/next_header.php';
	
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/resturant.class.php';
	require_once 'admin/class/carts.class.php';
	$cart = new cart;
	$resturant = new resturant;
	$resturant->r_id=$_GET['id'];
	// $resturant->r_id=3;
	if(isset($_POST['submit']))
	{
		$resturant->restfood_id = $_POST['food_id'];
		$cart->r_id=$resturant->r_id;
		$cart->user_id=21;
		$cart->quantity=$_POST['quantity'];
		$cart->date =  date('Y-m-d');
		 
		$var = $resturant->selectfood();
		foreach($var as $foo)
		{
			$cart->food_name=$foo->food_name;
			$cart->price=$foo->price;
		}
		
		$ask =$cart->insertcart();
			if($ask==1){
                echo "<script>alert(' $cart->food_name Added to Cart')</script>";
			} else {
				echo "<script>alert('Cannot Add to cart.')</script>";
			}
	}

	
?>
	
	<main>

		<div class="hero_in detail_page background-image" data-background="url(img/Popular/216054.jpg)">
			<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				
				<div class="container">
				<?php
					$data=$resturant->selectrestbyid();
					// $n=1;
					foreach ($data as $value)
				{ ?>
					<div class="main_info">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<div class="head"><div class="score"><span><em></em></span>
								<strong><?php echo $value->rating; ?></strong></div></div>
								<!-- <h1>Newari Kaja Ghar</h1> -->
								<h1><?php echo $value->r_name; ?></h1>
								<?php echo $value->location; ?>
								<!-- Tinkune Butwal -->
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
		        <div class="col-lg-9">

		            <div class="tabs_detail">
		                <ul class="nav nav-tabs" role="tablist">
		                	<li class="nav-item">
		                        <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Menu</a>
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
		                            	
		                            	<div class="add_bottom_25"></div>
		                                <h2><?php echo $value->r_name; ?> Food Menu</h2>
										<?php	
                 						}
										?> 

										<?php
											   $data = $resturant->selectrestbycategory();
											   foreach ($data as $value)
											   {  ?>
		                                <h3> <?php echo $value->category; ?> </h3>
		                                
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
														 Quantity
													</th>
													<th>
														Order
													</th>
												</tr>
											</thead>
											<tbody>
											<?php
											$resturant->category=$value->category;
										$da= $resturant->selectre();
										foreach ($da as $va)
										{ 
										?><form method="post" >
											<tr>
												<td class="d-md-flex align-items-center">
						                        	<figure><img src="<?php echo $va->photo; ?>" 
													data-src="<?php echo $va->photo; ?>" 
													alt="thumb" class="lazy"></figure>
						                        	<div class="flex-md-column">
														<h4><?php echo $va->food_name; ?></h4>
													</div>
												</td>
												<td>
													<strong><?php echo $va->price; ?></strong>
												</td>
												<td class="form-group">
													
												<input  type="text" value="2" name="quantity"/>
												
												</td>
												<td class="options">
												<input type="text" value="<?php echo $va->restfood_id; ?>" hidden name="food_id">
													<input class="btn_1 small" type="submit" value="Add" name="submit">
												</td>
												</tr>
										</form>
												<?php	
                 						}
										?>
												
											
											
										</tbody>
										
									</table>
									<?php } ?>
											

										
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