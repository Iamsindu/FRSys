<?php
	
	require_once 'layout/header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/popular.class.php';
	$popular = new popular;
	
?>
	
	<main>
		<div class="hero_single version_2">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Discover &amp; Book</h1>
							<p>The best restaurants at the best price</p>
							<form method="post" action="restaurant.php">
								<div class="row no-gutters custom-search-input">
									<div class="col-lg-10">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="What are you looking for..." name="search_query" required>
											<i class="icon_search"></i>
										</div>
									</div>
									<!-- <div class="col-lg-6">
										<div class="form-group">
											<input class="form-control no_border_r" type="text" placeholder="Address, neighborhood...">
											<i class="icon_pin_alt"></i>
										</div>
									</div> -->
									<div class="col-lg-2">
										<input type="submit" value="Search" name="submit">
									</div>
								</div>
								<!-- /row -->
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
		</div>
		<!-- /hero_single -->
		
		<div class="bg_gray">
			<div class="container margin_60_40">
				<div class="main_title center">
					<span><em></em></span>
					<h2>Popular Categories</h2>
					<p>The most popular categories available on our system.</p>
				</div>
				<!-- /main_title -->
				<div class="owl-carousel owl-theme categories_carousel">
					<div class="item">
						<a href='restaurant.php?id=Coffee'>
							<!-- <span>98</span> -->
							<i class="icon-food_icon_coffee"></i>
							<h3>Coffee</h3>
							<!-- <small>Avg price $40</small> -->
						</a>
					</div>
					<div class="item">
					<a href='restaurant.php?id=See Food'>
							<!-- <span>87</span> -->
							<i class="icon-food_icon_fish_2"></i>
							<h3>See Food</h3>
							<!-- <small>Avg price $50</small> -->
						</a>
					</div>
					<div class="item">
						<a href='restaurant.php?id=Burger'>
							<!-- <span>96</span> -->
							<i class="icon-food_icon_burgher"></i>
							<h3>Burgers</h3>
							<!-- <small>Avg price $55</small> -->
						</a>
					</div>
					<div class="item">
					<a href='restaurant.php?id=Vegetarian'>
							<!-- <span>78</span> -->
							<i class="icon-food_icon_vegetarian"></i>
							<h3>Vegetarian</h3>
							<!-- <small>Avg price $40</small> -->
						</a>
					</div>
					<div class="item">
						<a href='restaurant.php?id=Bakery'>
							<!-- <span>65</span> -->
							<i class="icon-food_icon_cake_2"></i>
							<h3>Bakery</h3>
							<!-- <small>Avg price $60</small> -->
						</a>
					</div>
					<div class="item">
						<a href='restaurant.php?id=Chinese'>
							<!-- <span>65</span> -->
							<i class="icon-food_icon_chinese"></i>
							<h3>Chinese</h3>
							<!-- <small>Avg price $40</small> -->
						</a>
					</div>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
		
		<div class="container margin_60_40">
			<div class="main_title">
				<span><em></em></span>
				<h2>Popular Restaurants</h2>
				<p>The most popular restaurants listed on our systems.</p>
				<!-- <a href="#0">View All</a> -->
			</div>

			<div class="owl-carousel owl-theme carousel_4">
			<?php 
                                               
			  $data = $popular->selectpopular();
			 foreach ($data as $value)
			 {  ?>
			    <div class="item">
			        <div class="strip">
			            <figure>
			                
			                <img src="img/lazy-placeholder.png" data-src="<?php echo $value->photo; ?>" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php?id=<?php echo $value->popular_id; ?>" class="strip_info">
			                    <small><?php echo $value->category ?></small>
			                    <div class="item_title">
			                        <h3><?php echo $value->foodname ?></h3>
			                        <small><?php echo $value->loaction ?></small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
							<?php if($value->o_c=="open"){?>
			                <li><span class="loc_open">Now Open</span></li>
							<?php } else { ?>
								<li><span class="loc_closed">Closed</span></li>
								<?php } ?>
			                <li>
			                    <div class="score"><span style="top:-5px !important;">Rating</span><em></em><strong style="font-size:1.5rem !important;"><?php echo $value->rating; ?></strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
				<?php } ?>
			   
			</div>
			<!-- /carousel -->

			<div class="banner lazy" data-bg="url(img/banner_bg_desktop.jpg)">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.2)">
					<div>
						<small>foogra</small>
						<h3>More than 1000 Restaurants</h3>
						<p>Order foods easily from our restaurants.</p>
						<a href="resturant.php" class="btn_1">View All</a>
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->

			<div class="row">
				<div class="col-12">
					<div class="main_title version_2">
						<span><em></em></span>
						<h2>Our Very Best Deals</h2>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
						<a href="#0">View All</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="list_home">
						<ul>
						<?php 
                                               
							 $data = $popular->selectpopulars();
							foreach ($data as $value)
							 {  ?>
							<li>
								<a href="detail-restaurant.php?id=<?php $value->popular_id; ?>">
									<figure>
										<img src="img/location_list_placeholder.png" data-src="<?php echo $value->photo; ?>" alt="" class="lazy">
									</figure>
									<div class="score"><strong><?php echo $value->rating?></strong></div>
									<em><?php echo $value->category?></em>
									<h3><?php echo $value->foodname?></h3>
									<small><?php echo $value->loaction?></small>
									<ul>
										<!-- <li><span class="ribbon off">-30%</span></li>
										<li>Average price $35</li> -->
									</ul>
								</a>
							</li>
							<?php } ?>
							<!-- <li>
								<a href="detail-restaurant.php">
									<figure>
										<img src="img/location_list_placeholder.png" data-src="img/location_list_2.jpg" alt="" class="lazy">
									</figure>
									<div class="score"><strong>8.0</strong></div>
									<em>Mexican</em>
									<h3>Alliance</h3>
									<small>27 Old Gloucester St, 4563</small>
									<ul>
										<li><span class="ribbon off">-40%</span></li>
										<li>Average price $30</li>
									</ul>
								</a>
							</li>
							<li>
								<a href="detail-restaurant.php">
									<figure>
										<img src="img/location_list_placeholder.png" data-src="img/location_list_3.jpg" alt="" class="lazy">
									</figure>
									<div class="score"><strong>9.0</strong></div>
									<em>Sushi - Japanese</em>
									<h3>Sushi Gold</h3>
									<small>Old Shire Ln EN9 3RX</small>
									<ul>
										<li><span class="ribbon off">-25%</span></li>
										<li>Average price $20</li>
									</ul>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="list_home">
						<ul>
						<?php 
                                               
											   $data = $popular->selectpop();
											  foreach ($data as $value)
											   {  ?>
											  <li>
												  <a href="detail-restaurant.php?id=<?php $value->popular_id; ?>">
													  <figure>
														  <img src="img/location_list_placeholder.png" data-src="<?php echo $value->photo; ?>" alt="" class="lazy">
													  </figure>
													  <div class="score"><strong><?php echo $value->rating?></strong></div>
													  <em><?php echo $value->category?></em>
													  <h3><?php echo $value->foodname?></h3>
													  <small><?php echo $value->loaction?></small>
													  <ul>
														  <!-- <li><span class="ribbon off">-30%</span></li>
														  <li>Average price $35</li> -->
													  </ul>
												  </a>
											  </li>
											  <?php } ?>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center d-block d-md-block d-lg-none"><a href="resturant.php" class="btn_1">View All</a></p>
			<!-- /button visibile on tablet/mobile only -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

<?php 
	require_once 'layout/footer.php';
?>