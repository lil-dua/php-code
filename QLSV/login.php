<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
</head>
<body>
	<?php 
		include 'connect.php';
		$c = isset($_GET['c'])?$_GET['c']:'';
		// echo 'c = '.$c;

		if($c == 1) {
			echo '<script>
	 				confirm("Mật khẩu không chính xác!");
				  </script>';
		} else if($c == 2) {
			echo '<script>
	 				confirm("Tài khoản không tồn tại!");
				  </script>';
		} else if($c == 3) {
			echo '<script>
	 				confirm("Đăng ký thành công!");
				  </script>';
		}
	 ?>

	<h1 align="center">Quản Lý Sinh Viên</h1>
	<form action="xuly/login.php" method="POST" enctype="multipart/form-data" style="margin: auto;">
		<table align="center">
			<thead>
				<th>
					<td colspan="2"><h2>Đăng nhập</h2></td>
				</th>
			</thead>
			<tbody>
				<tr>
					<td width="100px">Username</td>
					<td width="250px"><input type="text" name="username" placeholder="Nhập tài khoản" width="200px" required="true"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" placeholder="Nhập Mật khẩu" required="true"></td>
				</tr>
				<tr>
					<td colspan="2"><hr style="margin: 20px auto;"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<button type="submit">Đăng nhập</button>
						<button type="reset">Nhập lại</button>
					</td>
				</tr>
				<tr>
					<td><a href="dangky.php">Đăng ký</a></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>