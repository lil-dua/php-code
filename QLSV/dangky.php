<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng ký</title>
	<style>
		table {
			background-color: lightblue;
			color: black;
		}


	</style>
</head>
<body>
	<?php 
		include 'connect.php';
		$c = isset($_GET['c'])?$_GET['c']:'';
		// echo 'c = '.$c;

		if($c == 1) {
			echo '<script>
	 				confirm("Sinh viên không tồn tại!");
				  </script>';
		}  else if($c == 2) {
			echo '<script>
	 				confirm("Mật khẩu ko xác thực!");
				  </script>';
		}  else if($c == 3) {
			echo '<script>
	 				confirm("Tên tài khoản đã được sử dụng!");
				  </script>';
		}  else if($c == 4) {
			echo '<script>
	 				confirm("Sinh viên không tồn tại!");
				  </script>';
		}
	 ?>
	<form action="xuly/dangky.php" method="POST" enctype="multipart/form-data">
		<table align="center" style="margin: 10% auto auto auto;">
		<thead>
			<tr>
				<th colspan="2"><h2>Đăng ký tài khoản</h2></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Mã Sinh Viên</td>
				<td><input type="text" name="masv" placeholder="Nhập mã sinh viên" style="margin: auto 10px auto auto;" required="true"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Nhập tài khoản" required="true"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Nhập mật khẩu" required="true"></td>
			</tr>
			<tr>
				<td>Retype password</td>
				<td><input type="password" name="rpassword" placeholder="Nhập lại mật khẩu" required="true"></td>
			</tr>
			<tr><hr></tr>
			<tr>
				<td colspan="2" align="center">
					<button type="submit" style="margin: auto 10px;">Đăng ký</button>
					<button type="reset">Nhập lại</button>
				</td>
			</tr>
			<tr>
				<td colspan="2"><a href="login.php">Đăng nhập</a></td>
			</tr>
		</tbody>
	</table>
	</form>
</body>
</html>