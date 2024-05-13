<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kma_qlsv";
	$conn = new mysqli($host, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connect fail ".$conn->connect_error);
	} else {
		//echo 'connect successfull!';
	}
 ?>