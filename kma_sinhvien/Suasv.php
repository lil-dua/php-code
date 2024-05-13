<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
</head>
<body>
	<?php
		include "connect.php";
		include "Menu.php";
	?>
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h2 class="display-3"> Sửa thông tin sinh viên</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php 
					$masv = isset($_GET['masv'])?$_GET['masv']:'';
					$sql = "select * from tbl_sinhvien where masv = ".$masv;
					$tensv = isset($_GET['tensv'])?$_GET['tensv']:'';

					echo '<form action="Xulysuathuoc.php?masv='.$masv.'" method="POST" enctype="multipart/data-form">
					<fieldset class="form-group">
						<label>Họ </label>
						<input name = "tensv" type="text" class="form-control" placeholder="Nhập họ tên" value="'.$tensv.'">

					</fieldset>
					<fieldset class="form-group">
						<label>Ngày sinh</label>
						<input name="ns" type="date" class="form-control" placeholder="">
					</fieldset>
					<fieldset class="form-group">
						<label>Giới tính</label>
						<select name ="gt" class="form-control">
							<option value="0"> Nữ</option>
							<option value="1"> Nam</option>
					
						</select>
					</fieldset>
					<fieldset class="form-group">
						<label>Email</label>
						<input name="email" type="text" class="form-control" placeholder="Nhập email">
					</fieldset>
					<fieldset class="form-group">
						<label>Điện thoại</label>
						<input name="dt" type="text" class="form-control" placeholder="Nhập số điện thoại">
					</fieldset>
					<fieldset class="form-group">
						<label>Mật khẩu</label>
						<input name="matkhau" type="password" class="form-control" placeholder="Nhập mật khẩu">
					</fieldset>
					<fieldset class="form-group">
						<label>Nhập lại mật khẩu</label>
						<input name="nhaplaimatkhau" type="password" class="form-control" placeholder="Nhập lại mật khẩu">
					</fieldset>		
					
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>';	
				?>
			</div> 
		</div>
	</div>
	
</body>
</html>