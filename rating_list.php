<?php
    require_once 'admin/class/common.class.php';
    require_once 'recommend.php';
    require_once 'admin/class/rating.class.php';
    require_once 'admin/class/resturant.class.php';
    $rst = new resturant;
    $rate = new rating;
    $data = $rate->selectresturant_rating();
    $matrix=array();
   
   
foreach($data as $value)
{
    $rst->r_id = $value->r_id;
    $rname = $rst->selectrestname();
    foreach($rname as $v) { 
        $restname= $v->r_name;
        
    }

	$matrix[$value->user_id] [$restname]=$value->rating;
}


$re = new Recommend;
	 $result=$re->getRecommendations($matrix,3);
	 

/////////display
//   foreach ($result as $gift => $rating) {
//    	print_r($gift);


//   }


	
?>
