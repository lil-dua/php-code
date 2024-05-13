<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới sinh viên</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
</head>
<body>
	<?php
		include "connect.php";
	?>
	<?php include 'menubar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="display-3" align="center">THÊM MỚI SINH VIÊN</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<form action="XuLyThemSV.php" method="POST" enctype="multipart/form-data">
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Họ tên:</label>
						<input name="hoten" type="text" class="form-control" placeholder="Nhập họ tên">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Ngày sinh</label>
						<input name="ngaysinh" type="date" class="form-control" placeholder="Chọn ngày sinh">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Giới tính</label>
						<select name="gioitinh" class="form-control" id="eexampleSelect11">
							<option value="0">Nữ</option>
							<option value="1">Nam</option>
						</select>
					</fieldset>
					
					<fieldset class="form-group">
						<label for="exampleInputFile">Chọn ảnh đại diện</label>
						<input name="uploadfile" type="file" class="form-control-file" id="exampleInputFile">
					</fieldset>
					
					<button type="submit" class="btn btn-outline-primary">Thêm</button>
				</form>
			</div><!-- Hết col-6 -->
		</div>
	</div>
</body>
</html>