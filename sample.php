<?php
  //require_once 'layout/next_header.php';
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/top_search.class.php';
	require_once 'admin/class/resturant.class.php';
	require_once 'rating_list.php';
	$rest = new resturant;
	
	$top = new total;
    	$has1 = $top->check1(4,'burger');
      $has2 = $top->check2(4,'yomari');
	 if ($has2 || $has1)
	 {
		
	 }
	 else{ echo "no";}
	  
     ?>

