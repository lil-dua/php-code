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
	?>
	<?php
		include "menu.php";
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
				
				<form action="xulythemsinhvien.php" method="POST" enctype="multipart/data-form">
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Họ </label>
						<input name = "hoten" type="text" class="form-control" placeholder="Nhập họ tên">

					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Ngày sinh</label>
						<input name="ngaysinh" type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter email">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Giới tính</label>
						<select name ="gioitinh" class="form-control" id="eexampleSelect11">
							<option value="0"> Nữ</option>
							<option value="1"> Nam</option>
					
						</select>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputFile">Chọn ảnh đại diện</label>
						<input name="fileToUpload" type="file" class="form-control-file" id="exampleInputFile">
					</fieldset>			
					
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div> 
		</div>
	</div>
	
</body>
</html>