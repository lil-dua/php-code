<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
</head>
<body>
	<?php
		include "connect_db_qlthuoc.php";
		include "Menu.php";
	?>
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h2 class="display-3"> Lọc thuốc</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
					<form action="#" method="POST" enctype="multipart/data-form">
						<fieldset class="form-group">
							<label >Nhóm thuốc</label>
							<select name ="Nhomthuoc" class="form-control" id="eexampleSelect11">
								<option value=""> --- </option>
								<option value="Thuốc chống nhiễm trùng"> Thuốc chống nhiễm trùng</option>
								<option value="Thuốc kháng sinh"> Thuốc kháng sinh</option>
								<option value="Thuốc chống ung thư"> Thuốc chống ung thư</option>
								<option value="Hệ thần kinh trung ương"> Hệ thần kinh trung ương</option>
								<option value="Hệ tim mạch & mạch máu"> Hệ tim mạch & mạch máu</option>
								<option value="Dị ứng & hệ miễn dịch<">Dị ứng & hệ miễn dịch</option>
								<option value="Sản phẩm dinh dưỡng">Sản phẩm dinh dưỡng</option>
								<option value="Hệ hô hấp">Hệ hô hấp</option>
							</select>
						</fieldset>
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
			</div> 
		</div>
	</div>
	<br>
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
						</tr>
					</thead>
					<tbody>
						<?php 
							$Nhomthuoc = isset($_POST['Nhomthuoc'])?$_POST['Nhomthuoc']:'';
							$sql = "select * from thuoc where Nhomthuoc like '%$Nhomthuoc%'";						
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