<?php 
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'qlsv';

	$conn = new mysqli($server, $user, $pass, $db);
	if($conn->connect_error) {
		die('connect error: '.$conn->connect_error);
	}
	// echo 'succsess';

 ?>