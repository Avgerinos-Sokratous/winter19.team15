<?php

	$servername="185.25.20.84";
	$username = "ir402150_ironsky";
	$password = "pfVGdTzSOoLh85yp";
	$dbname = "ir402150_ironsky";

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		   die("Connection failed");
	}

?>