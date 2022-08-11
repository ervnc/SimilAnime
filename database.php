<?php
	// connection = servername, user, password, database
	$connection = mysqli_connect("localhost", "root", "", "similanime");
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>