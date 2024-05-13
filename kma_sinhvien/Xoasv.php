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
				<h1 class="display-3"> Xóa sinh viên</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				
				<form action="Xoa.php" method="POST" enctype="multipart/data-form">
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Mã sinh viên </label>
						<input name = "masv" type="text" class="form-control" placeholder="Nhập mã sinh viên">
					</fieldset>
						
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div> 
		</div>
	</div>
	
</body>
</html>