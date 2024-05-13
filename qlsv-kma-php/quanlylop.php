<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap5/js/bootstrap.js"></script>
	<title>Document</title>
	<style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
	<?php 
		include 'menu.php';
		include 'connect_db_qlsv.php';
	 ?>	

	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="display-3" align="center">DANH SÁCH LỚP</h1>
				<hr class="m-y-md">
			</div>
		</div>
	</div>


	<!-- Modal Thêm lớp-->
	<form action="xulythemlop.php" method="POST" enctype="multipart/form-data">
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Nhập thông tin lớp</h4>
		        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		        <div class="mb-3 mt-3">
		        	<label>Tên lớp</label>
		        	<span class="error">*</span>  
		            <input type="text" class="form-control" placeholder="Nhập tên lớp" name="TenLop" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Mã sinh viên không được để trống</div>
		        </div>	

		        <div class="mb-3 mt-3">
		        	<label>Mô tả</label> 
		        	<span class="error">*</span>  
		            <textarea type="text" class="form-control" name="MoTa" ols="50" rows="5" required>
		            </textarea>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Mã sinh viên không được để trống</div>
		        </div>	
			  </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		      	<button type="submit" class="btn btn-warning"  >Thêm</button>
		        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
		      </div>

		    </div>
		  </div>
		</div>
	</form>

	

	<!-- Table -->
	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<!-- Button to Open the Modal -->
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
					  Thêm lớp
				</button>
				<form style="float:right; margin-right:10px;" class="d-flex"  method="POST">
			        <input style="width: 320px; margin-right:10px;"; class="form-control me-2" type="text" name="txtSearchLop" placeholder="Tên Lớp">
			        <button class="btn btn-warning" type="submit">Tìm</button>
			    </form>	
				<table class="table table-bordered table-inverse table-hover">
					<!-- Button to Open the Modal -->	
					<br>
					<thead>
						<br>
						<tr>
							<th style="background: #EB455F; color: #FFFFFF;">Mã lớp</th>
							<th style="background: #EB455F; color: #FFFFFF;">Tên lớp</th>
							<th style="background: #EB455F; color: #FFFFFF;">Mô tả</th>
							<th style="background: #EB455F; color: #FFFFFF;">Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$txtSearchLop = isset($_POST['txtSearchLop'])?$_POST['txtSearchLop']:'';
							if ($txtSearchLop=='') {
								$sql = "SELECT * FROM lop";
							} else {
								$sql = "SELECT * FROM lop WHERE TenLop like '%$txtSearchLop%'";
							}						
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<th>'.$row['MaLop'].'</th>'; 
								echo '<th>'.$row['TenLop'].'</th>'; 
								echo '<th>'.$row['MoTa'].'</th>'; 
								echo '<th>
						    	<a href="formsualop.php?MaLop='.$row['MaLop'].'" 
						    	class="btn btn-warning">Sửa</a>

								<a href="xulyxoalop.php?MaLop='.$row['MaLop'].'" class="btn btn-danger">Xóa</a>
								</th>';
								echo '</tr>';

								}
							}else{
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