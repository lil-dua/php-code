<?php 
	include 'connect_db_qlsv.php';
	$MaTK = isset($_POST['MaTK'])?$_POST['MaTK']:'';
	$MaSV = isset($_POST['MaSV'])?$_POST['MaSV']:'';
	$Username = isset($_POST['Username'])?$_POST['Username']:'';
	$Password = isset($_POST['Password'])?$_POST['Password']:'';
	
	$sql = "UPDATE taikhoan SET MaSV = '$MaSV', 
								Username = '$Username',
								Password = '$Password' WHERE MaTK = '$MaTK'";
	if($conn->query($sql)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Sửa thông tin tài khoản thành công!")';
		echo '</script>';
	} else {
		echo '<script type = "text/javascript">';
		echo 'alert("Xảy ra lỗi! Vui lòng thử lại.")';
		echo '</script>';
	}

	include 'quanlytaikhoan.php';
 ?>
