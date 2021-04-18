<?php
    require_once("recommend.php");
    require_once 'admin/class/rating.class.php';
    $rate = new rating;
    $data = $rate->selectresturant_rating();
    $matrix=array();
foreach($data as $value)
{
	$matrix[$value->user_id] [$value->r_id]=$value->rating;
}


$re = new Recommend();
	 $re=getRecommendation($matrix,$user_id);
	 //print_r($re);

/////////display
//    foreach ($re as $gift => $rating) {
//    	//print_r($gift);


//    }


	
?>
