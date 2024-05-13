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
				<h1 class="display-3" align="center">DANH SÁCH SINH VIÊN</h1>
				<hr class="m-y-md">
			</div>
		</div>
	</div>


	<!-- The Modal -->
	<div class="modal" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Nhập thông sinh viên</h4>
	        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
	      </div>

	      <form action="xulythemsinhvien.php" method="POST" enctype="multipart/form-data">
		      <!-- Modal body -->
		      <div class="modal-body">
		        <div class="mb-3 mt-3">
		        	<label>Mã sinh viên</label>
		        	<span class="error">*</span>  
		            <input type="text" class="form-control" placeholder="Nhập mã sinh viên" name="MaSV" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Mã sinh viên không được để trống</div>
		        </div>

		        <div class="mb-3 mt-3">
		        	<label>Họ tên</label>
		        	<span class="error">*</span>  
		            <input type="text" class="form-control" placeholder="Nhập họ tên sinh viên" name="HoTen" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Họ tên sinh viên không được để trống</div>
		        </div>

		        <div class="mb-3 mt-3">
		        	<label>Số điện thoại</label>
		        	<span class="error">*</span>  
		            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="Sdt" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Mã sinh viên không được để trống</div>
		        </div>

		        <div class="mb-3 mt-3">

		        	<label>Ảnh đại diện</label>
		        	<span class="error">*</span> 
		            <input type="file" class="form-control" name="image" id="image" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Ảnh đại diện không được để trống</div>
		        </div>

		        <div class="mb-3 mt-3">
		        	<label>Quê quán</label>
		        	<span class="error">*</span>  
		            <input type="text" class="form-control" placeholder="Nhập quê quán sinh viên" name="QueQuan" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Quê quán không được để trống</div>
		        </div>
		       
	        	<div class="mb-3 mt-3">
		        	<label>Mã lớp</label>
		        	<span class="error">*</span>  
		            <input type="text" class="form-control" placeholder="Nhập mã lớp sinh viên" name="MaLop" required>
		            <div class="valid-feedback">Valid.</div>
		            <div class="invalid-feedback">Mã lớp không được để trống</div>
		        </div>	

		        
			  </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="submit" name="submit" class="btn btn-warning" >Thêm</button>
		        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>


	<!-- Table -->
	<div class="">
		<div class="row">
			<div class="col-sm-12">	
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
					  Thêm sinh viên
					</button>
				<form style="float:right; margin-right:10px;" class="d-flex" method="POST">
			        <input style="width: 320px; margin-right:10px;"; class="form-control me-2" type="text" name="txtSearchSV" placeholder="Mã sinh viên">
			        <button class="btn btn-warning" type="submit">Tìm</button>
			    </form>

				<table class="table table-bordered table-inverse table-hover">
					<!-- Button to Open the Modal -->
					<br>
					<thead>
						<br>
						<tr>
							<th style="width: 100px; background: #EB455F; color: #FFFFFF;">ID</th>
							<th style="width: 280px;  background: #EB455F; color: #FFFFFF;">Mã sinh viên</th>
							<th style="width: 320px;  background: #EB455F; color: #FFFFFF;">Họ tên</th>
							<th style="width: 240px;  background: #EB455F; color: #FFFFFF;">Số điện thoại</th>
							<th style="width: 280px;  background: #EB455F; color: #FFFFFF;">Avatar</th>
							<th style="width: 320px;  background: #EB455F; color: #FFFFFF;">Quê quán</th>
							<th style="width: 180px;  background: #EB455F; color: #FFFFFF;">Mã Lớp</th>
							<th style=" background: #EB455F; color: #FFFFFF;">Thao tác</th>
						</tr>
					</thead>
						<?php
							$txtSearchSV = isset($_POST['txtSearchSV'])?$_POST['txtSearchSV']:'';
							if ($txtSearchSV=='') {
								$sql = "SELECT * FROM sinhvien";
							} else {
								$sql = "SELECT * FROM sinhvien WHERE MaSV like '%$txtSearchSV%'";
							}							
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<th>'.$row['id'].'</th>'; 
								echo '<th>'.$row['MaSV'].'</th>'; 
								echo '<th>'.$row['HoTen'].'</th>'; 
								echo '<th>'.$row['Sdt'].'</th>'; 
								echo '<th>
								<img src="'.$row['Avatar'].'" alt="" width="250px" height="250px">
								</th>'; 
								echo '<th>'.$row['QueQuan'].'</th>'; 
								echo '<th>'.$row['MaLop'].'</th>'; 
								echo '<th>
						    	<a href="formsuasinhvien.php?id='.$row['id'].'" 
						    	class="btn btn-warning">Sửa</a>
								<a href="xulyxoasinhvien.php?id='.$row['id'].'" class="btn btn-danger">Xóa</a>
								</th>';
								echo '</tr>';
								}
							}else{
								echo 'Không có dữ liệu!';
							}
							$conn->close();
						 ?>
					<tbody>
		
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>