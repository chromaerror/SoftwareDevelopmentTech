<?php
	function connect_db() {
		$servername = "localhost";
		$username = "a1704463";
		$password = "hiVIST89d";
		$dbname = "cards";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
 		return $conn;
	}
?>
