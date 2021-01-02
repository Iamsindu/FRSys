<?php
    require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/menu.class.php';
    require_once 'layout/header.php';

	$menu = new menu;
    if(isset($_GET['id']))
    {
		$menu->menu_id = $_GET['id'];
    	$ask =$menu->deletemenu();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Menu Deleted Successfully.')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete menu.')</script>";
    	}
    }
?>
<script> window.location="show_menu.php" </script>