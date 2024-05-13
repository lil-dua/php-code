<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách sinh viên</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
</head>
<body>
	<?php 
	include 'connect_db_qlsv_1.php';
	include 'menunavbar.php';
	?>
	<div class="container" align="center">
		<h1 class="display-3">THÊM SINH VIÊN</h1>
		<hr class="m-y-md">
	</div>

	<div class="container">
		<div class="row">
			<form action="xulysinhvien.php" method="POST">
				<fieldset class="form-group">
					<label>Họ tên</label>
					<input name="tensv" type="text" class="form-control" placeholder="Họ tên">
				</fieldset>
				<fieldset class="form-group">
					<label>Ngày sinh</label>
					<input name="ngaysinh" type="date" class="form-control">
				</fieldset>
				<fieldset class="form-group">
					<label>Giới tính</label>
					<select class="form-control" name="gioitinh">
						<option value="1">Nam</option>
						<option value="0">Nữ</option>
					</select>
				</fieldset>
				<fieldset class="form-group">
					<label>Email</label>
					<input name="email" type="email" class="form-control" placeholder="Email">
				</fieldset>
				<fieldset class="form-group">
					<label>Điện thoại</label>
					<input name="sdt" type="text" class="form-control" placeholder="Số điện thoại">
				</fieldset>
				<fieldset class="form-group">
					<label>Mật khẩu</label>
					<input name="mk" type="password" class="form-control" placeholder="Mật khẩu">
				</fieldset>
				<br/>
				<button type="submit" class="btn btn-primary">Thêm</button> 
				<button formaction="danhsach.php" class="btn btn-secondary">Quay lại</button>
			</form>
		</div>
	</div>
</body>
</html>