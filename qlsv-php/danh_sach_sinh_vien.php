<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách sinh </title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap5/js/bootstrap.js"></script>
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
				<h1 class="display-3"> Danh sách sinh viên</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered table-inverse table-hover">
					<thead>
						<tr>
							<th>Mã sinh viên</th>
							<th>Họ tên</th>
							<th>Ngày sinh</th>
							<th>Giới tính</th>
							<th>Ảnh đại diện</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$txtSearch = isset($_POST['txtSearch'])?$_POST['txtSearch']:'';
							if ($txtSearch=='') {
								$sql = "select * from tb1_sinhvien";
							} else {
								$sql = "select * from tb1_sinhvien where hoten like '%$txtSearch%'";
							}
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
							    	echo '<tr>';
							    	echo '<th>'.$row['id'].'</th>';
							    	echo '<th>'.$row['hoten'].'</th>';
							    	echo '<th>'.$row['ngaysinh'].'</th>';
							    	echo '<th>'.(($row['gioitinh'] == 1)?'Nam':'Nữ').'</th>';
							    	echo '<th><img src="'.$row['avatar'].'" alt="" width="100px" height="120px"></th>';
							    	echo '<th>
							    	<a href="suasinhvien.php?id='.$row['id'].'" class="btn btn-warning">Sửa</a><br>
							    	<br>
							    	<a href="xoasv.php?id='.$row['id'].'" class="btn btn-danger">Xóa</a></th>';
							    	echo '</tr>';
								}
							} else {
								echo 'Không có dữ liệu!';
							}
							$conn->close();
						?>
						
					</tbody>
				</table>

			</div>
		</div>
	</div>
	
</body>
</html>