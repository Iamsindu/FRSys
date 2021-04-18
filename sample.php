<?php
	//require_once 'layout/next_header.php';
	If(isset($_POST['submit'])) {

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
			echo $_POST['search_query'];
			echo "<br>";
	
		}
	}
?>