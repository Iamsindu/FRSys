<?php
    require_once 'class/common.class.php';
	require_once 'class/discount.class.php';
	require_once 'layout/header.php';
    
    $discount=new discount;

    if(isset($_GET['id']))
    {
		$discount->dis_id = $_GET['id'];
    	$ask =$discount->deletediscount();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Discount Deleted Successfully.')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete discount.')</script>";
    	}
    }
?>
<script> window.location="show_discount.php" </script>