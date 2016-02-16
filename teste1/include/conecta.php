<?php	
	define("HOST", "localhost");
	define("USER", "root");
	define("PASSWORD", "");
	define("DATABASE", "altran_teste1");		

	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);	
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
	
?>