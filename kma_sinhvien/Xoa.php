<?php 
	include 'connect.php';

	$masv = isset($_POST['masv'])?$_POST['masv']:'';
	if($masv != ''){
		//Nếu người dùng xóa thông qua mã sinh viên 
		$sql = "delete from tbl_sinhvien where masv =".$masv;
	}else{
		//Nếu người dùng xóa trực tiếp trên danh sách sinh viên
		$masv = isset($_GET['masv'])?$_GET['masv']:'';
		$sql = "delete from tbl_sinhvien where masv =".$masv;
	}

	//Thực hiện hàm sql
	if ($conn->query($sql)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Xóa thành công!")';
		echo '</script>';
	} else {
		echo '<script type = "text/javascript">';
		echo 'alert("Xóa không thành công!")';
		echo '</script>';
	}
	$conn->close();
	include 'Hienthisv.php';
 ?>