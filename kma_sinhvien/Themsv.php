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
				<h1 class="display-3"> Thêm sinh viên</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				
				<form action="Xulythemsinhvien.php" method="POST" enctype="multipart/data-form">
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Họ </label>
						<input name = "tensv" type="text" class="form-control" placeholder="Nhập họ tên">

					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Ngày sinh</label>
						<input name="ns" type="date" class="form-control" id="exampleInputPassword1" placeholder="">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Giới tính</label>
						<select name ="gt" class="form-control" id="eexampleSelect11">
							<option value="0"> Nữ</option>
							<option value="1"> Nam</option>
					
						</select>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập email">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Điện thoại</label>
						<input name="dt" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập số điện thoại">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Mật khẩu</label>
						<input name="matkhau" type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Nhập lại mật khẩu</label>
						<input name="nhaplaimatkhau" type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu">
					</fieldset>		
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div> 
		</div>
	</div>
	
</body>
</html>