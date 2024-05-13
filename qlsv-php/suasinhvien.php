<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa Sinh Viên</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
</head>
<body>
	
	<div class="containner">
		<br>
		<table class="table table-hover table-inverse" >
			<thead>
				<tr>
					<th colspan="2">Nhập thông tin sửa</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include "connect.php";
					$id = isset($_GET['id'])?$_GET['id']:'';
					$sql = "select * from tb1_sinhvien where id = ".$id;
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					echo '<form action="xulysuasinhvien.php?id='.$id.'" method="POST" enctype="multipart/form-data">';
				?>
					<tr>
						<th style="width: 150px;">Họ tên</th>
						<th><input type="text" name="ho_ten" placeholder="Nhập họ tên"></th>
					</tr>
					<tr>
						<th>Ngày sinh</th>
						<th><input type="date" name="ngay_sinh"></th>
					</tr>
					<tr>
						<th>Giới tính</th>
						<td><Select name='gioi_tinh'>
							<option value="1">Nam</option>
							<option value="0">Nữ</option>
						</Select></td>
					</tr>
					<tr>
						<th>Avatar</th>
						<th><input type="file"></th>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Submit</button></td>
					</tr>
				</form>
			</tbody>
		</table>
	</div>
</body>
</html>