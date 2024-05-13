<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv_1";
$conn = new mysqli($host, $username, $password, $dbname);
if($conn -> connect_error){
	die("Connect fail" .$conn -> connect_error);
}else {
	//echo"Connect successfull";
}
?>