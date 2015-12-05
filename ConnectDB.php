<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Courses";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$conn->query('use MyDatabases');

	//Usually it is Common Practice to not close the php block using ?-> (Omit '-')