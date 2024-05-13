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
		<h1 class="display-3">SỬA SINH VIÊN</h1>
		<hr class="m-y-md">
	</div>

	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<?php 
				$masv_sua = isset($_GET['masv_sua'])?$_GET['masv_sua']:0;
				$sql = "select *from sinhvien where masv= " .$masv_sua;
				//var_dump($sql);
				$result = $conn -> query($sql);

				if ($result -> num_rows > 0) {
					while ($row = $result -> fetch_assoc()) {
						?>
						<form action="xulysinhvien.php" method="POST">
							<input type="hidden" name="masv_sua_hd" value="<?php echo $masv_sua ?>">
							<fieldset class="form-group">
								<label>Họ tên</label>
								<input name="tensv" type="text" class="form-control" value="<?php echo $row['tensv'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label>Ngày sinh</label>
								<input type="date" class="form-control" name="ngaysinh" value="<?php echo $row['ns'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label>Giới tính</label>
								<select class="form-control" name="gioitinh">
									<?php 
									if ($row['gt'] == 1) {
										?>
										<option value="0">Nữ</option>
										<option value="1" selected>Nam</option>
									<?php }else {?>
										<option value="0" selected>Nữ</option>
										<option value="1">Nam</option>
										<?php 
									}
									?>
								</select>
							</fieldset>
							<fieldset class="form-group">
								<label>Email</label>
								<input name="email" type="email" class="form-control" value="<?php echo $row['email'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label>Điện thoại</label>
								<input name="sdt" type="text" class="form-control" value="<?php echo $row['dt'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label>Mật khẩu</label>
								<input name="mk" type="text" class="form-control" value="<?php echo $row['mk'] ?>">
							</fieldset>
							<br/>
							<button type="submit" class="btn btn-primary">Sửa</button>
							<button formaction="danhsach.php" class="btn btn-secondary">Quay lại</button>
						</form>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>