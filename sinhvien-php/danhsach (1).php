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
		<h1 class="display-3">DANH SÁCH SINH VIÊN</h1>
		<hr class="m-y-md">

	</div>

	<div class="container">
		<div class="row">
			<table class="table table-bordered table-inverse table-hover">
				<thead>
					<tr align="center">
						<th>STT</th>
						<th>MSV</th>
						<th>Tên</th>
						<th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Email</th>
						<th>Điện thoại</th>
						<th>Mật khẩu</th>
						<th>Chức năng sửa</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$stt = 1;
					$sql = "";


					$txtSearch = isset($_POST['txtSearch'])?$_POST['txtSearch']:'';
					if ($txtSearch=='') {
						$sql = "select *from sinhvien";
					}else{
						$sql = "select *from sinhvien where ns like '%$txtSearch%'";
					}

					$result = $conn -> query($sql);
					if ($result -> num_rows > 0) {
						while ($row = $result -> fetch_assoc()) {
							?>
							<tr align="center">
								<td> <?php echo $stt ?> </td>
								<td> <?php echo $row['masv'] ?> </td>
								<td> <?php echo $row['tensv'] ?></td>
								<td> <?php echo $row['ns'] ?></td>
								<td> <?php echo ($row['gt'] == 1)? 'Nam':'Nữ' ?></td>
								<td> <?php echo $row['email'] ?></td>
								<td> <?php echo $row['dt'] ?></td>
								<td> <?php echo $row['mk'] ?></td>
								<td> 
									<a href="suasv.php?masv_sua=<?php echo $row['masv'] ?>" class="btn btn-secondary">Sửa</a>
								</td>
							</tr>
							<?php
							$stt++;
						}
					}else{
						echo 'Không có dữ liệu! ';
					}
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>