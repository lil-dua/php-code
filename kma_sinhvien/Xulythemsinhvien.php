<?php
	include 'connect.php';
	$tensv = isset($_POST['tensv'])?$_POST['tensv']:'';
	$ns = isset($_POST['ns'])?$_POST['ns']:'';
	$gt = isset($_POST['gt'])?$_POST['gt']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';
	$dt = isset($_POST['dt'])?$_POST['dt']:'';
	$matkhau = isset($_POST['matkhau'])?$_POST['matkhau']:'';

	$sql = "INSERT INTO tbl_sinhvien VALUES (null, '$tensv', '$ns', '$gt', '$email','$dt','$matkhau')";

	if ($conn->query($sql) === TRUE) {
	  echo '<script type = "text/javascript">';
		echo 'alert("Thêm sinh viên thành công!")';
		echo '</script>';
	} else {
	  echo '<script type = "text/javascript">';
		echo 'alert("Thêm sinh viên không thành công!")';
		echo '</script>';
	}
	
	$conn->close();
	include 'Hienthisv.php';
?>