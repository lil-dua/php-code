<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_finding_app";
	$conn = new mysqli($host, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connect fail ".$conn->connect_error);
	}
 ?>