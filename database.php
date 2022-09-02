<?php
	$connection = mysqli_connect("localhost", "root", "", "similanime");
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>