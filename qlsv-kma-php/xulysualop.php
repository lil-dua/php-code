<?php 
	include 'connect_db_qlsv.php';
	$MaLop = isset($_POST['MaLop'])?$_POST['MaLop']:'';
	$TenLop = isset($_POST['TenLop'])?$_POST['TenLop']:'';
	$MoTa = isset($_POST['MoTa'])?$_POST['MoTa']:'';
	
	$sql = "UPDATE lop SET TenLop = '$TenLop', MoTa = '$MoTa' WHERE MaLop = '$MaLop'";
	if($conn->query($sql)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Sửa thông tin lớp thành công!")';
		echo '</script>';
	} else {
		echo '<script type = "text/javascript">';
		echo 'alert("Xảy ra lỗi! Vui lòng thử lại.")';
		echo '</script>';
	}

	include 'quanlylop.php';
 ?>
