<?php
	include "connect_db_qlsv.php";
	$MaTK = isset($_GET['MaTK'])?$_GET['MaTK']:'';
	$sql = "DELETE FROM taikhoan WHERE MaTK ='$MaTK'";
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
	include "quanlytaikhoan.php";
?>