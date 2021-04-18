<?php
	require_once 'layout/next_header.php';
	require_once 'admin/class/top_search.class.php';
	require_once("recommend.php");
	require_once("rating_list.php");
	$re = new Recommend();
	$top = new total;
	// If(isset($_POST['submit'])) {

	// 	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// 		echo $_POST['search_query'];
	// 		echo "<br>";
	
	// 	}
	// }
	// echo $_GET['id'];
?>

	<main>
		<div class="page_header element_to_stick">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
		    			<div class="breadcrumbs">
				            <ul>
				                <li><a href="#">Home</a></li>
				                <li><a href="#">Category</a></li>
				                <li>Page active</li>
				            </ul>
		       	 		</div>
		        		<h1>Search For "Momo"</h1>
		    		</div>
		    		<div class="col-xl-4 col-lg-5 col-md-5">
		    			<div class="search_bar_list">
							<input type="text" class="form-control" placeholder="Search again..." value="Momo">
							<input type="submit" value="Search">
						</div>
		    		</div>
		    	</div>
		    	<!-- /row -->		       
		    </div>
		</div>
		<!-- /page_header -->
		<div class="container margin_30_40">			
			<div class="row">
				<aside class="col-lg-3" id="sidebar_fixed">
					<div class="clearfix">
					<!-- <div class="sort_select">
							<select name="sort" id="sort">
                                <option value="popularity" selected="selected" disabled>Popular Search</option>
                               
							</select>
						</div> -->
						<!-- <a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a> -->
					</div>
					<div class="filter_col">
						<div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a></div>
						<div class="filter_type">
							<h4><a href="#filter_1" data-toggle="collapse" class="opened">Popular Search</a></h4>
							<div class="collapse show" id="filter_1"> 
								<ul>
								<?php 
										$data = $top->total();
										foreach ($data as $value)
										{ ?>
									<li>
								       
									<label>
											<div class="buttons">
												<a href="#0" class="btn_1 "><?php echo $value->search; ?></a>
											</div>
								        </label> 
								        <!-- </label> -->
								    </li>
									<?php } ?> 
								
									 <!--<li>
								        <label class="container_check">Pizza - Italian <small>12</small>
								            <!-- <input type="checkbox">
								            <span class="checkmark"></span> 
											<br>
											<div class="buttons">
												<a href="#0" class="btn_1 ">Chicken Soup</a>
											</div>
								        <!-- </label> 
								    </li>-->
								</ul>
							</div>
								    <!-- <li>
								        <label class="container_check">Japanese - Sushi <small>24</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Burghers <small>23</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Vegetarian <small>11</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Bakery <small>18</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li> -->
								    <!-- <li>
								        <label class="container_check">Chinese <small>12</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Mexican <small>15</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								</ul>
							<!-- </div> -->
						<!-- </div>
						<div class="filter_type">
							<h4><a href="#filter_2" data-toggle="collapse" class="closed">Rating</a></h4>
							<div class="collapse" id="filter_2">
								<ul>
								    <li>
								        <label class="container_check">Superb 9+ <small>06</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Very Good 8+ <small>12</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Good 7+ <small>17</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								    <li>
								        <label class="container_check">Pleasant 6+ <small>43</small>
								            <input type="checkbox">
								            <span class="checkmark"></span>
								        </label>
								    </li>
								</ul>
							</div>
						</div>
						
						<div class="filter_type">
							<h4><a href="#filter_3" data-toggle="collapse" class="closed">Distance</a></h4>
							<div class="collapse" id="filter_3">
                                <div class="distance"> Radius around selected destination <span></span> km</div>
								<div class="add_bottom_15"><input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal"></div>
							</div>
						</div>

						<div class="filter_type">
							<h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>
							<div class="collapse" id="filter_4">
								<ul>
										<li>
											<label class="container_check">$0 — $50<small>11</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">$50 — $100<small>08</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">$100 — $150<small>05</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
										<li>
											<label class="container_check">$150 — $200<small>18</small>
											  <input type="checkbox">
											  <span class="checkmark"></span>
											</label>
										</li>
									</ul>--> 
							<!-- </div>  -->
						</div>
						<!-- <div class="buttons">
							<a href="#0" class="btn_1 full-width">Filter</a>
						</div> -->
					</div>
				</aside>

				
			
				<div class="col-lg-9">
					<div class="row">
						<?php
						
						
						
						
						print_r($re->getRecommendations($books, "john")); 
						 ?>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-30%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-1.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <small>Momo</small>
							            <div class="item_title">
							                <h3>Hungry High</h3>
							                <small>Tinukune Butwal</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-40%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/momo1.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
									<small>Momo</small>
							            <!-- <small>Burghers</small> -->
							            <div class="item_title">
							                <h3>Daddy's Café</h3>
							                <small>Devinagar Butwal</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take no">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>9.5</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img src="img/lazy-placeholder.png" data-src="img/food/momo2.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
									<small>Momo</small>
							            <!-- <small>Vegetarian</small> -->
							            <div class="item_title">
							                <h3>Momo Sansar</h3>
							                <small>New Buspark Butwal</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							       <li><span class="take yes">Take away</span> <span class="deliv no">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>7.5</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-25%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-4.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
									<small>Momo</small>
							            <!-- <small>Japanese</small> -->
							            <div class="item_title">
							                <h3>Chautari Khanpin</h3>
							                <small>Devinagar Butwal</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							         <li><span class="take no">Take away</span> <span class="deliv no">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>9.5</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-30%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/momo4.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
									<small>Momo</small>
							            <!-- <small>Pizza</small> -->
							            <div class="item_title">
							                <h3>Hide Out</h3>
							                <small>Golpark Butwal</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							         <li><span class="take yes">Take away</span> <span class="deliv no">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>7.0</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-6.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <!-- <small>Burghers</small> -->
										<small>Momo</small>
							            <div class="item_title">
							                <h3>Lime & Lemon Café</h3>
							                <small>Sukkhanagar Butwal</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							         <li><span class="take no">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-30%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-13.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <!-- <small>Chinese</small> -->
							            <div class="item_title">
							                <h3>Alliance</h3>
							                <small>27 Old Gloucester St</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take no">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-12.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <!-- <small>Sushi</small> -->
							            <div class="item_title">
							                <h3>Dragon Tower</h3>
							                <small>27 Old Gloucester St</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take yes">Take away</span> <span class="deliv no">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-11.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <small>Mexican</small>
							            <div class="item_title">
							                <h3>El Paso Tacos</h3>
							                <small>27 Old Gloucester St</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-10.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <!-- <small>Bakery</small> -->
							            <div class="item_title">
							                <h3>Monnalisa</h3>
							                <small>27 Old Gloucester St</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-9.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <!-- <small>Mexican</small> -->
							            <div class="item_title">
							                <h3>Guachamole</h3>
							                <small>135 Newtownards Road</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							        <img data-src="img/food/item-8.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php" class="strip_info">
							            <!-- <small>Chinese</small> -->
							            <div class="item_title">
							                <h3>Pechino Express</h3>
							                <small>27 Old Gloucester St</small>
							            </div>
							        </a>
							    </figure>
							    <ul>
							        <li><span class="take no">Take away</span> <span class="deliv yes">Delivery</span></li>
							        <li>
							        	<div class="score"><strong>8.9</strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<!-- /strip grid -->
					</div>
					<!-- /row -->
					<div class="pagination_fg">
					  <a href="#">&laquo;</a>
					  <a href="#" class="active">1</a>
					  <a href="#">2</a>
					  <a href="#">3</a>
					  <a href="#">4</a>
					  <a href="#">5</a>
					  <a href="#">&raquo;</a>
					</div>
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

<?php
	require_once 'layout/footer.php';
 ?>