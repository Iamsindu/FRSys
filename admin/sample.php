<?php
     require_once 'class/session.class.php';
     sessionhelper::checklogin();
	 if(isset($_SESSION['admin']))
		{
			echo $_SESSION['admin'];
		}
		else if(isset($_SESSION['owner']))
		{
			echo $_SESSION['owner'];
		}

 ?>