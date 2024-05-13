<?php
	include 'connect_db_qlsv.php';	
	$MaSV = isset($_POST['MaSV'])?$_POST['MaSV']:'';
	$Username = isset($_POST['Username'])?$_POST['Username']:'';
	$Password = isset($_POST['Password'])?$_POST['Password']:'';
	
	if($MaSV != '' && $Username != '' && $Password != '' ){
		$sql = "INSERT INTO taikhoan VALUES (null, '$Username', '$Password', '$MaSV') ";

		if ($conn->query($sql) === TRUE) {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm tài khoản thành công!")';
			echo '</script>';
		} else {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm tài khoản không thành công!")';
			echo '</script>';
		}
		$conn->close();
	}	
	include 'quanlytaikhoan.php';
?>