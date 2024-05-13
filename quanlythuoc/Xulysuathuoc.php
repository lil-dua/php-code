<?php 
	include 'connect_db_qlthuoc.php';
	$Tenthuoc = isset($_POST['Tenthuoc'])?$_POST['Tenthuoc']:'';
	$Ngayhethan = isset($_POST['Ngayhethan'])?$_POST['Ngayhethan']:'';
	$Congdung = isset($_POST['Congdung'])?$_POST['Congdung']:'';
	$Nhomthuoc = isset($_POST['Nhomthuoc'])?$_POST['Nhomthuoc']:'';
	$Soluong = isset($_POST['Soluong'])?$_POST['Soluong']:'';
	$Ghichu = isset($_POST['Ghichu'])?$_POST['Ghichu']:'';

	$Mathuoc = isset($_GET['Mathuoc'])?$_GET['Mathuoc']:'';
	
	$sql = "update thuoc set ";
	// Nối xâu---------------------------

	// Tên thuốc
	if($Tenthuoc != '') {
		$sql = $sql." Tenthuoc = '$Tenthuoc' ";
	}
	// Ngày hết hạn
	if($Ngayhethan != '') {
		// Nếu họ tên không rỗng thì thêm dấu , phía sau.
		if($Tenthuoc != '') {
			$sql = $sql.',';
		}
		$sql = $sql."Ngayhethan = '$Ngayhethan' ";
	}
	// Công dụng
	if($Congdung != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($Tenthuoc != '' || $Ngayhethan != '') {
			$sql = $sql.',';
		}
		$sql = $sql."Congdung = '$Congdung' ";
	}
	// Nhóm thuốc
	if($Nhomthuoc != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($Tenthuoc != '' || $Ngayhethan != '' || $Congdung != '') {
			$sql = $sql.',';
		}
		$sql = $sql."Nhomthuoc = '$Nhomthuoc' ";
	}
	// Số điện thoại
	if($Soluong != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($Tenthuoc != '' || $Ngayhethan != '' || $Congdung != '' || $Nhomthuoc != '') {
			$sql = $sql.',';
		}
		$sql = $sql."Soluong = '$Soluong'";
	}
	// Ghi chú
	if($Ghichu != '') {
		// Nếu họ tên hoặc ngày sinh không rỗng thì thêm dấu , phía sau.
		if($Tenthuoc != '' || $Ngayhethan != '' || $Congdung != '' ||$Nhomthuoc != '' || $Soluong != '') {
			$sql = $sql.',';
		}
		$sql = $sql."Ghichu = '$Ghichu' ";
	}
	
	$sql = $sql." where Mathuoc = $Mathuoc";
	if($conn->query($sql)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Sửa thông tin thuốc thành công!")';
		echo '</script>';
	} else {
		echo '<script type = "text/javascript">';
		echo 'alert("Xảy ra lỗi! Vui lòng thử lại.")';
		echo '</script>';
	}

	include 'Hienthithuoc.php';
 ?>
