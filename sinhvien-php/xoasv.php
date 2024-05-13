<?php 

include 'connect_db_qlsv_1.php';
$id = isset($_POST['id_xoa'])?$_POST['id_xoa']:0;

var_dump($id);
$sql_xoa = "DELETE FROM sinhvien where masv=$id";
$conn -> query($sql_xoa);

include 'danhsach.php';
?>