<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login dùng bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
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
				<form>
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Tên tài khoản:</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tài khoản">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Mật khẩu:</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
					</fieldset>
					
					<div class="checkbox">
						<label>
							<input type="checkbox"> Nhớ thông tin đăng nhập
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>