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
				<h1 class="display-3" align="center">DANH SÁCH TÀI KHOẢN</h1>
				<hr class="m-y-md">
			</div>
		</div>
	</div>


	<!-- The Modal -->
	<form action="xulythemtaikhoan.php" method="POST" enctype="multipart/form-data">
	<div class="modal" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Nhập thông tin tài khoản</h4>
	        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
	      </div>

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
	        	<label>Username</label>
	        	<span class="error">*</span>  
	            <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="Username" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Họ tên sinh viên không được để trống</div>
	        </div>

	        <div class="mb-3 mt-3">
	        	<label>Mật khẩu</label>
	        	<span class="error">*</span>  
	            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="Password" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Mã sinh viên không được để trống</div>
	        </div>

	        <div class="mb-3 mt-3">
	        	<label>Nhập lại mật khẩu</label>
	        	<span class="error">*</span>  
	            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="ConfirmPassword" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Mã sinh viên không được để trống</div>
	        </div>


		  </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-warning" >Thêm</button>

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
				  Thêm tài khoản
				</button>
				<form style="float:right; margin-right:10px;" class="d-flex" method="POST">
			        <input style="width: 320px; margin-right:10px;"; class="form-control me-2" type="text" name="txtSearchTK" placeholder="Mã sinh viên">
			        <button class="btn btn-warning" type="submit">Tìm</button>
			    </form>	
				<table class="table table-bordered table-inverse table-hover">
					<br>
					<thead>
						<br>
						<tr>
							<th style="background: #EB455F; color: #FFFFFF;">Mã TK</th>
							<th style="background: #EB455F; color: #FFFFFF;">Mã sinh viên</th>
							<th style="background: #EB455F; color: #FFFFFF;">Username</th>
							<th style="background: #EB455F; color: #FFFFFF;">Password </th>
							<th style="background: #EB455F; color: #FFFFFF;">Thao tác</th>
						</tr>
					</thead>

					<tbody>
						<?php
							$txtSearchTK = isset($_POST['txtSearchTK'])?$_POST['txtSearchTK']:'';

							$Username = isset($_POST['Username'])?$_POST['Username']:'';
							$sqlTK = "SELECT * FROM taikhoan WHERE Username = '$Username'";
							echo $Username;
							echo $sqlTK;
							$result = mysqli_query($conn, $sqlTK);  
    						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							echo $row['MaSV'];
							


							if ($txtSearchTK=='') {
								$sql = "SELECT * FROM taikhoan";
							} else {
								$sql = "SELECT * FROM taikhoan WHERE MaSV like '%$txtSearchTK%'";
							}						
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<th>'.$row['MaTK'].'</th>'; 
								echo '<th>'.$row['MaSV'].'</th>'; 
								echo '<th>'.$row['Username'].'</th>'; 
								echo '<th>'.$row['Password'].'</th>'; 
								echo '<th>
						    	<a href="formsuataikhoan.php?MaTK='.$row['MaTK'].'" 
						    	class="btn btn-warning">Sửa</a>
								<a href="xulyxoataikhoan.php?MaTK='.$row['MaTK'].'" class="btn btn-danger">Xóa</a>
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