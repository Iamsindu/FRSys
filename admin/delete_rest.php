<?php
    require_once 'class/common.class.php';
    require_once 'class/resturant.class.php';
	$resturant=new resturant;
    if(isset($_GET['id']))
    {
		$resturant->rest_id = $_GET['id'];
    	$ask =$resturant->deleterestaurant();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Resturant Deleted Successfully.')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete resturant.')</script>";
    	}
    }
?>
<script> window.location="show_resturant.php" </script>