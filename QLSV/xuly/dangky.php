<?php 
	include '../connect.php';

	$masv = isset($_POST['masv'])?$_POST['masv']:'';
	$username = isset($_POST['username'])?$_POST['username']:'';
	$password = isset($_POST['password'])?$_POST['password']:'';
	$rpassword = isset($_POST['rpassword'])?$_POST['rpassword']:'';

	if($password != $rpassword) {
		echo 'mk sai';
		header('Location: ../dangky.php?c=2');
	}

	$sql = 'select * from sinhvien where masv = "'.$masv.'"';
	echo $sql;
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		if($row = $result->fetch_assoc()) {
			$sql = 'select * from taikhoan where masv = "'.$masv.'" and username = "'.$username.'"';
			echo $sql."   ";
			$result = $conn->query($sql);
			if($result->num_rows > 0) {
				
				header('Location: ../dangky.php?c=3');
			} else {

				$sql = 'insert into taikhoan values ("'.$username.'", "'.$password.'", "'.$masv.'")';
				if ($result = $conn->query($sql)) {
					header('Location: ../login.php?c=3');
				}
			}
		} 
	} else {
		header('Location: ../dangky.php?c=4');
	}
 ?>