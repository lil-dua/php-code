<?php
	include 'connect.php';
	$txtSearch = isset($_POST['txtSearch'])?$_POST['txtSearch']:'';
	if ($txtSearch=='') {
		$sql = "select * from tbl_sinhvien";
	} else {
		$sql = "select * from tbl_sinhvien where ns like '%$txtSearch%'";
	}
	include 'Hienthisv.php';
?>