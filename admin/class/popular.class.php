<?php 
class popular extends common
{
	public $popular_id,$foodname,$category,$location,$rating,$o_c,$photo;
	public function selectpopular()
	{
		$sql="select * from popular ";
		return $this->select($sql);
	}
	public function selectpopulars()
	{
		$sql="select * from popular order by category limit 3";
		return $this->select($sql);
	}
	public function selectpop()
	{
		$sql="select * from popular order by foodname limit 3";
		return $this->select($sql);
	}

} 
?>
 <!-- <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-40%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_3.png" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php" class="strip_info">
			                    <small>Burghers</small>
			                    <div class="item_title">
			                        <h3>Best Burghers</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_open">Now Open</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.5</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-30%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_4.png" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php" class="strip_info">
			                    <small>Vegetarian</small>
			                    <div class="item_title">
			                        <h3>Vego Life</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_open">Now Open</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>7.5</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-25%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_2.png" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php" class="strip_info">
			                    <small>Japanese</small>
			                    <div class="item_title">
			                        <h3>Sushi Temple</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_open">Now Open</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.5</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-30%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_3.jpg" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php" class="strip_info">
			                    <small>Pizza</small>
			                    <div class="item_title">
			                        <h3>Auto Pizza</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_open">Now Open</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>7.0</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-15%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_6.jpg" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php" class="strip_info">
			                    <small>Burghers</small>
			                    <div class="item_title">
			                        <h3>Alliance</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_open">Now Open</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-30%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_7.jpg" class="owl-lazy" alt="">
			                <a href="detail-restaurant.php" class="strip_info">
			                    <small>Chinese</small>
			                    <div class="item_title">
			                        <h3>Alliance</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_closed">Now Closed</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div> -->