<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "quanlykhohang";
	
	// Create connection
	// Example (MySQLi Object-Oriented)
	$con = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} else {
		// echo "Kết nối database thành công";
		// echo "123";
		// echo "Hahahihi";
	}
	
?>
