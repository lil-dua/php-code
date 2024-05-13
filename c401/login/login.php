<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo giả lập chức năng login</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<?php 
		$username = isset($_POST['username'])?$_POST['username']:"";
		$password = isset($_POST['password'])?$_POST['password']:'';
		$id = isset($_POST['id'])?$_POST['id']:'';
		if ($username == "admin" && $password == "admin") {
			echo 'Đăng nhập thành công! '.$id;
		} else {
			echo 'Sai username hoặc password! '.$id;
		}
	 ?>
	<form action="" method="POST">
		<input type="hidden" name="id" value="1">
	<table border="0">
		<tr>
			<th colspan="2">ĐĂNG NHẬP HỆ THỐNG</th>
		</tr>
		<tr>
			<td>Tên đăng nhập:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" class="btn btn-primary" value="Login"></td>
			<td><input type="reset" class="btn btn-outline-success" value="Nhập lại"></td>
		</tr>
		<tr>
			<td><input type="checkbox" value="">Nhớ thông tin đăng nhập</td>

		</tr>
		<tr>
			<td><a href="" class="btn btn-outline-danger">Quên mật khẩu</a></td>
			
		</tr>

	</table>
	</form>
</body>
</html>