<?php 
	include 'connect.php';
	$masv = isset($_GET['masv'])?$_GET['masv']:'';
	$sql = "delete from tbl_sinhvien where masv =".$masv;
	if ($conn->query($sql)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Xóa không thành công!")';
		echo '</script>';
	} else {
		echo '<script type = "text/javascript">';
		echo 'alert("Xóa thành công!")';
		echo '</script>';
	}
	include 'Hienthi.php';
 ?>