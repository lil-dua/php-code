<?php
	include "connect_db_qlthuoc.php";
	$Mathuoc = isset($_GET['Mathuoc'])?$_GET['Mathuoc']:'';
	$sql = "DELETE FROM thuoc WHERE Mathuoc ='$Mathuoc'";
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
	include "Hienthithuoc.php";
?>