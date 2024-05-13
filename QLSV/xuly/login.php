<?php 
	include '../connect.php';
	$username = isset($_POST['username'])?$_POST['username']:'';
	$password = isset($_POST['password'])?$_POST['password']:'';

	// echo 'username: '.$username.'<br>';
	// echo 'password: '.$password.'<br>';

	$sql = 'select * from taikhoan where username = "'.$username.'"';
	
	// echo $sql;

	if($result = $conn->query($sql)) {
		$row = $result->fetch_assoc();
		if($row) {
			// echo 'pass = '.$row['password'];
			// echo 'p = '.$password;
			// check mật khẩu
			if($password == $row['password']) {
				header('Location: ../index.php?username='.$username);
			} else {
				header('Location: ../login.php?c=1');
			}
		} else {
			// echo 'Tài khoản không tồn tại';
			header('Location: ../login.php?c=2');
		}
	} else {
		echo 'error';
	}

 ?>