<?php
    require_once 'class/common.class.php';
    require_once 'class/food.class.php';
	$food = new food;
    if(isset($_GET['id']))
    {
		$food->food_id = $_GET['id'];
		$food->deletephoto();
		$food->delete_foodcategory();
		$food->delete_restfood();
    	$ask =$food->deletefood();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Food Deleted Successfully.')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete food.')</script>";
    	}
    }
?>
<script> window.location="show_food.php" </script>