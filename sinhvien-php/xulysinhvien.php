<?php 

include 'connect_db_qlsv_1.php';
$masv = isset($_POST['masv_sua_hd'])?$_POST['masv_sua_hd']:0;
$tensv = isset($_POST['tensv'])?$_POST['tensv']:"";
$ngaysinh = isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
$gioitinh = isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$sdt = isset($_POST['sdt'])?$_POST['sdt']:"";
$mk = isset($_POST['mk'])?$_POST['mk']:"";


//var_dump($masv);
if ($masv != 0) {
		//sửa
	$sql_sua = "UPDATE sinhvien SET tensv='$tensv', ns= '$ngaysinh', gt= '$gioitinh', email= '$email', dt='$sdt', mk= '$mk' WHERE masv= ".$masv;

	if ($conn-> query($sql_sua) === TRUE) {
		echo "Sửa thành công";
	}else{
		echo "Error: ".$sql_sua."<br>" .$conn-> error;
	}
}else{
		//thêm
	$sql_them = "INSERT INTO sinhvien values(null, '$tensv', '$ngaysinh', '$gioitinh', '$email', '$sdt', '$mk')";	
	if ($conn -> query($sql_them) === TRUE) {
		echo 'Thêm thành công!';
	}else{
		echo "Error: ".$sql_them."<br>" .$conn-> error;
	}
}

$conn -> close();
include 'danhsach.php';
?>