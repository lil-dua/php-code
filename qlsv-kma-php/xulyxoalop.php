<?php
	include "connect_db_qlsv.php";
	$MaLop = isset($_GET['MaLop'])?$_GET['MaLop']:'';
	$sql = "DELETE FROM lop WHERE MaLop ='$MaLop'";
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
	include "quanlylop.php";
?>