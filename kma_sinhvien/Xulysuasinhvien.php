<?php 
	include 'connect.php';
	$tensv = isset($_POST['tensv'])?$_POST['tensv']:'';
	$ns = isset($_POST['ns'])?$_POST['ns']:'';
	$gt = isset($_POST['gt'])?$_POST['gt']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';
	$dt = isset($_POST['dt'])?$_POST['dt']:'';
	$matkhau = isset($_POST['matkhau'])?$_POST['matkhau']:'';

	$masv = isset($_GET['masv'])?$_GET['masv']:'';
	
	$sql = "update tbl_sinhvien set ";
	// Nối xâu---------------------------

	// Họ tên
	if($tensv != '') {
		$sql = $sql." tensv = '$tensv' ";
	}
	// Ngày sinh
	if($ns != '') {
		// Nếu họ tên không rỗng thì thêm dấu , phía sau.
		if($tensv != '') {
			$sql = $sql.',';
		}
		$sql = $sql."ns = '$ns' ";
	}
	// Giới tính
	if($gt != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($tensv != '' || $ns != '') {
			$sql = $sql.',';
		}
		$sql = $sql."gt = $gt ";
	}
	// Email
	if($email != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($tensv != '' || $ns != '' || $gt != '') {
			$sql = $sql.',';
		}
		$sql = $sql."email = '$email' ";
	}
	// Số điện thoại
	if($dt != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($tensv != '' || $ns != '' || $gt != '' || $email != '') {
			$sql = $sql.',';
		}
		$sql = $sql."dt = '$dt' ";
	}
	// Mật khẩu
	if($matkhau != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($tensv != '' || $ns != '' || $gt != '' ||$email != '' || $dt != '') {
			$sql = $sql.',';
		}
		$sql = $sql."matkhau = '$matkhau' ";
	}
	
	$sql = $sql." where masv = $masv";
	echo $sql;
	if($conn->query($sql)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Sửa thông tin sinh viên thành công!")';
		echo '</script>';
	} else {
		echo '<script type = "text/javascript">';
		echo 'alert("Xảy ra lỗi! Vui lòng thử lại.")';
		echo '</script>';
	}

	include 'Hienthisv.php';
 ?>
