<?php
   require_once 'class/common.class.php';
   require_once 'class/category.class.php';
   require_once 'layout/header.php';

	$category=new category;
    if(isset($_GET['id']))
    {
		$category->cat_id = $_GET['id'];
    	$ask =$category->deletecategory();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Category Deleted Successfully.')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete category.')</script>";
    	}
    }
?>
<script> window.location="show_category.php" </script>