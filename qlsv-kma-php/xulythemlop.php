<?php
	include 'connect_db_qlsv.php';	
	$TenLop = isset($_POST['TenLop'])?$_POST['TenLop']:'';
	$MoTa = isset($_POST['MoTa'])?$_POST['MoTa']:'';
	
	if($TenLop != '' && $MoTa != '' ){
		$sql = "INSERT INTO lop VALUES (null, '$TenLop', '$MoTa') ";

		if ($conn->query($sql) === TRUE) {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm lớp thành công!")';
			echo '</script>';
		} else {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm lớp không thành công!")';
			echo '</script>';
		}
		$conn->close();
	}	
	include 'quanlylop.php';
?>