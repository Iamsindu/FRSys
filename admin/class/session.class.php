<?php 
class sessionhelper
{
   static function init()
	{
		@session_start();
	}

	static function set($var,$value)
	{
		self::init();
		$_SESSION[$var] = $value;
	}

	static function get($var)
	{
		self::init();
		return $_SESSION[$var];
	}

	static function checklogin()
	{
		self::init();
		if(!isset($_SESSION['admin']))
		{
			header('location:index.php');
		}
		// else if(!isset($_SESSION['editor']))
		// {
		// 	header('location:index2.php');
		// }
		// else if(!isset($_SESSION['user']))
		// {
		// 	header('location:index3.php');
		// }
	}

	static function end()
	{
		self::init();
		session_destroy();
		header('location:index.php');   //login page
	}
 }

 ?>
