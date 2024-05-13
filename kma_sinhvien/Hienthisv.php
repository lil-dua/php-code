<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap5/js/bootstrap.js"></script>
</head>
<body>
	<?php 
		include 'connect.php';
		include 'Menu.php';
	 ?> 		
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="display-3" align="center">DANH SÁCH SINH VIÊN</h1>
				<hr class="m-y-md">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered table-inverse table-hover">
					<thead>
						<tr>
							<th>Mã SV</th>
							<th>Họ Tên</th>
							<th>Ngày Sinh</th>
							<th>Giới tính</th>
							<th>Email</th>
							<th>Điện thoại</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$txtSearch = isset($_POST['txtSearch'])?$_POST['txtSearch']:'';
							if ($txtSearch=='') {
								$sql = "select * from tbl_sinhvien";
							} else {
								$sql = "select * from tbl_sinhvien where ns like '%$txtSearch%'";
							}							
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
							    	echo '<tr>';
							    	echo '<th>'.$row['masv'].'</th>';
							    	echo '<th>'.$row['tensv'].'</th>';
							    	echo '<th>'.$row['ns'].'</th>';
							    	echo '<th>'.(($row['gt'] == 1)?'Nam':'Nữ').'</th>';
							    	echo '<th>'.$row['email'].'</th>';
							    	echo '<th>'.$row['dt'].'</th>';
							    	echo '<th>
							    	<a href="Suasv.php?
							    	masv='.$row['masv'].'" 
							    	class="btn btn-warning">Sửa</a>

									<a href="Xoa.php?masv='.$row['masv'].'" class="btn btn-danger">Xóa</a></th>';
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