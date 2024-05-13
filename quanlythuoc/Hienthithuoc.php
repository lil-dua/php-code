<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap5/js/bootstrap.js"></script>
</head>
<body>
	<?php 
		include 'connect_db_qlthuoc.php';
		include 'Menu.php';
	 ?> 		
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="display-3" align="center">DANH SÁCH THUỐC HIỆN CÓ</h1>
				<hr class="m-y-md">
			</div>
		</div>
	</div>
	<!-- Table -->
	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered table-inverse table-hover">
					<thead>
						<tr>
							<th style="width: 100px;">Mã Thuốc</th>
							<th style="width: 320px;">Tên</th>
							<th style="width: 120px;">Ngày hết hạn</th>
							<th style="width: 120px;">Công dụng</th>
							<th style="width: 120px;">Nhóm thuốc</th>
							<th style="width: 90px;">Số lượng</th>
							<th style="width: 620px;">Ghi chú</th>
							<th style="width: 300px;">Ảnh</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sql = "select * from thuoc";							
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
							    	echo '<tr>';
							    	echo '<th>'.$row['Mathuoc'].'</th>';
							    	echo '<th>'.$row['Tenthuoc'].'</th>';
							    	echo '<th>'.$row['Ngayhethan'].'</th>';
							    	echo '<th>'.$row['Congdung'].'</th>';
							    	echo '<th>'.$row['Nhomthuoc'].'</th>';
							    	echo '<th>'.$row['Soluong'].'</th>';
							    	echo '<th>'.$row['Ghichu'].'</th>';
							    	echo '<th><img src="'.$row['Anh'].'" alt="" width="250px" height="250px"></th>';
							    	echo '<th>
							    	<a href="Suathuoc.php?Mathuoc='.$row['Mathuoc'].'" class="btn btn-warning">Sửa</a>

									<a href="Xulyxoathuoc.php?Mathuoc='.$row['Mathuoc'].'" class="btn btn-danger">Xóa</a></th>';
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