<?php
    require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
	$admin = new admin;
	
    if(isset($_GET['id']))
    {
    	
		$admin->admin_id = $_GET['id'];
		
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