<?php
	include "connect_db_qlsv.php";
	$id = isset($_GET['id'])?$_GET['id']:'';
	$sql = "DELETE FROM sinhvien WHERE id ='$id'";
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
	include "quanlysinhvien.php";
?>