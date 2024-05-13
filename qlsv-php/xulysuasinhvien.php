<?php 
	include 'connect.php';
	$ho_ten = isset($_POST['ho_ten'])?$_POST['ho_ten']:'';
	$ngay_sinh = isset($_POST['ngay_sinh'])?$_POST['ngay_sinh']:'';
	$gioi_tinh = isset($_POST['gioi_tinh'])?$_POST['gioi_tinh']:'';
	$avatar = isset($_POST['avatar'])?$_POST['avatar']:'';
	$id = isset($_GET['id'])?$_GET['id']:'';
	
	$sql = "update tb1_sinhvien set ";
	if($ho_ten != '') {
		$sql = $sql.' hoten = "'.$ho_ten.'" ';
	}
	if($ngay_sinh != '') {
		if($ho_ten != '') $sql = $sql.',';
		$sql = $sql.'ngaysinh = "'.$ngay_sinh.'" ';
	}
	if($gioi_tinh != '') {
		if($ho_ten != '' || $gioi_tinh != '') $sql = $sql.',';
		$sql = $sql.'gioitinh = "'.$gioi_tinh.'" ';
	}
	if($avatar != '') {
		if($ho_ten != '' || $gioi_tinh != '' || $gioi_tinh != '') $sql = $sql.',';
		$sql = $sql.'avatar = "'.$avatar.'" ';
	}
	$sql = $sql." where id = ".$id;
	// echo $sql;
	if($conn->query($sql)) {
		echo 'thanh cong';
	} else {
		echo 'that bai';
	}

	include 'danh_sach_sinh_vien.php';
 ?>
