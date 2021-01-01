<?php
    require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
	require_once 'layout/header.php';
    $admin = new admin;
    if(isset($_GET['admin_id']))
    {
    	$id = $_GET['admin_id'];
    	$admin->admin_id = $admin_id;
    	$ask = $admin->deleteadmin();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Deleted Successfully')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete')</script>";
    	}
    }
?>
<script> window.location="show_admin.php" </script>