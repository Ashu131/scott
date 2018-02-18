<?php

// Table Names
	
	$connect= mysqli_connect('localhost', 'root', '');
	if (!$connect) {
		die("Connection failed.". mysqli_connect_error());
	}else{
		mysqli_select_db($connect,'scott');
	}

 ?>
 