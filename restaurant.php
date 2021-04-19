<?php
	require_once 'layout/next_header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/top_search.class.php';
	require_once 'admin/class/resturant.class.php';
	require_once 'rating_list.php';
	$rest = new resturant;
	
	$top = new total;
	If(isset($_POST['submit'])) {

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$search= $_POST['search_query'];
			
	
		}
	 }
	//  $search = "pizza";
	 if(isset($_GET['submit'])){
		
			$search = $_GET['query'];
		
	 }
	 else
	 {	
		if($_SERVER['REQUEST_METHOD'] == 'GET') {
			$search = $_GET['id'];
		}
	 }
	 
	 //$_GET['id'];
?>
<style>
	a.btn_1.gray,
.btn_1.gray {
  background: #f0f0f0 !important;
  color: #111 !important ;
  transition: all 0.3s ease-in-out !important;
}

a.btn_1.gray:hover,
.btn_1.gray:hover {
  background-color: #589442 !important;
  color: #f0f0f0 !important ;
}
</style>

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
		        		<h1>Search For "<?php echo $search; ?>"</h1>
		    		</div>
					
		    		<div class="col-xl-4 col-lg-5 col-md-5">
		    			<div class="search_bar_list">
						<form method="GET" action ="">
							<input type="text" class="form-control" name="query" placeholder="Search again..." value="<?php echo $search; ?>">
							<input type="submit" value="Search" name="submit">
							</form>
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
								
								<?php 
										$data = $top->total();
										foreach ($data as $value)
										{ ?>
									
								       
									<label>
											<div class="buttons">
												<a href="#0" class="btn_1 gray"><?php echo $value->search; ?></a>
											</div>
								        </label> 
								        <!-- </label> -->
								    
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
							<!-- </div>
						<!-- </div> -->
						<div class="filter_type">
							<h4><a href="#filter_2" data-toggle="collapse" class="closed">Top Rated Resturants</a></h4>
							<div class="collapse" id="filter_2">
							<?php 
										$dat = $rest->topp();
										foreach ($dat as $val)
										{ ?>
									
								       
									<label>
											<div class="buttons">
												<a href="#0" class="btn_1 gray"><?php echo $val->r_name; ?></a>
											</div>
								        </label> 
								        <!-- </label> -->
								    
									<?php } ?> 
							</div>
						</div>
						
						<!--<div class="filter_type">
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
						foreach ($result as $gift => $rating) {
							//print_r($gift);
						 
							$rest->r_name=$gift;
							//$rest->category='yomari';
							$data = $rest->selectrest();

							foreach($data as $value)
						{ 	$has1 = $top->check1($value->r_id,$search);
							$has2 = $top->check2($value->r_id,$search);
						   if ($has2 || $has1)
						   { 

						    ?>
							<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
								<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-30%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-1.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php?id=<?php echo $value->r_id;?>" class="strip_info">
							            <small><?php echo $value->category; ?></small>
							            <div class="item_title">
							                <h3><?php echo $value->r_name; ?></h3>
							                <small><?php echo $value->location; ?></small>
							            </div>
							        </a>
							    </figure>
							    <ul>
								<?php if($value->status=='OPEN') {?>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
									<?php } else{ ?>
										<li><span class="take yes">Take away</span> <span class="deliv no">Delivery</span></li>
										<?php } ?>
							        <li>
							        	<div class="score"><strong><?php echo $value->rating*2; ?></strong></div>
							        </li>
							    </ul>
								</div>
							</div>
						  <?php  }} }
						  foreach ($result as $gift => $rating) {
							$rest->r_name=$gift;
						  $data = $rest->selectrest();
						   foreach($data as $value)
						   { 	$has1 = $top->check1($value->r_id,$search);
							   $has2 = $top->check2($value->r_id,$search);
							  if ($has2 || $has1)
							  { } else{
						  
						 ?>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-30%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-1.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php?id=<?php echo $value->r_id;?>" class="strip_info">
							            <small><?php echo $value->category; ?></small>
							            <div class="item_title">
							                <h3><?php echo $value->r_name; ?></h3>
							                <small><?php echo $value->location; ?></small>
							            </div>
							        </a>
							    </figure>
							    <ul>
								<?php if($value->status=='OPEN') {?>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
									<?php } else{ ?>
										<li><span class="take yes">Take away</span> <span class="deliv no">Delivery</span></li>
										<?php } ?>
							        <li>
							        	<div class="score"><strong><?php echo $value->rating*2; ?></strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<?php } } }
						foreach ($result as $gift => $rating) {
						$rest->r_name=$gift;
						  $data = $rest->toprest();
						   foreach($data as $value)
						   { 	
						
								 ?>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
							<div class="strip">
							    <figure>
							    	<!-- <span class="ribbon off">-30%</span> -->
							        <img src="img/lazy-placeholder.png" data-src="img/food/item-1.jpg" class="img-fluid lazy" alt="">
							        <a href="detail-restaurant.php?id=<?php echo $value->r_id;?>" class="strip_info">
							            <small><?php echo $value->category; ?></small>
							            <div class="item_title">
							                <h3><?php echo $value->r_name; ?></h3>
							                <small><?php echo $value->location; ?></small>
							            </div>
							        </a>
							    </figure>
							    <ul>
								<?php if($value->status=='OPEN') {?>
							        <li><span class="take yes">Take away</span> <span class="deliv yes">Delivery</span></li>
									<?php } else{ ?>
										<li><span class="take yes">Take away</span> <span class="deliv no">Delivery</span></li>
										<?php } ?>
							        <li>
							        	<div class="score"><strong><?php echo $value->rating*2; ?></strong></div>
							        </li>
							    </ul>
							</div>
						</div>
						<?php } }?>
						<!-- /strip grid -->
						
						<!-- /strip grid -->
					</div>
					<!-- /row -->
					<!-- <div class="pagination_fg">
					  <a href="#">&laquo;</a>
					  <a href="#" class="active">1</a>
					  <a href="#">2</a>
					  <a href="#">3</a>
					  <a href="#">4</a>
					  <a href="#">5</a>
					  <a href="#">&raquo;</a>
					</div> -->
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