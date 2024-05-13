<?php
	include 'connect_db_qlsv.php';	
	$MaSV = isset($_POST['MaSV'])?$_POST['MaSV']:'';
	$Username = isset($_POST['Username'])?$_POST['Username']:'';
	$Password = isset($_POST['Password'])?$_POST['Password']:'';
	
	$sqlCheck = "SELECT * FROM sinhvien WHERE MaSV = '$MaSV'" ;
	$result = mysqli_query($conn, $sqlCheck);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    if($count != 1){
      echo '<script type = "text/javascript">';
      echo 'alert("Mã sinh viên không tồn tại!")';
      echo '</script>';
      require 'taotaikhoan.php';   
    }else{
    	if($MaSV != '' && $Username != '' && $Password != '' ){
			$sql = "INSERT INTO taikhoan VALUES (null, '$Username', '$Password', '$MaSV') ";
			if ($conn->query($sql) === TRUE) {
			  echo '<script type = "text/javascript">';
				echo 'alert("Tạo tài khoản thành công! Bạn có thể đăng nhập")';
				echo '</script>';
			} else {
			  echo '<script type = "text/javascript">';
				echo 'alert("Tạo tài khoản không thành công!")';
				echo '</script>';
			}
			$conn->close();
		}	
		require 'index.php';
    }

	
?>