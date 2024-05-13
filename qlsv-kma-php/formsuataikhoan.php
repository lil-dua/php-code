<?php 
	include 'connect_db_qlsv.php';
	$MaTK = isset($_GET['MaTK'])?$_GET['MaTK']:'';
	$sql = "SELECT *FROM taikhoan WHERE MaTK = '$MaTK'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$MaSV = $row['MaSV'];
	$Username = $row['Username'];
	$Password = $row['Password'];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap5/js/bootstrap.js"></script>
	<style>
		.wrapper{
			width: 500px;
			margin: auto;
		}
	</style>
 </head>
 <body>	

 	<div class="wrapper">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-md-12">
 					<div align="center" class="page-header">
 						<h2>Chỉnh sửa thông tin tài khoản</h2>
 					</div>
 					<p align="center">Vui lòng chỉnh sửa thông tin và ấn cập nhật để lưu </p>
 					<form action="xulysuataikhoan.php" method="POST" enctype="multipart/form-data">
 						<div class="mb-3 mt-3">
			        	<label>Mã tài khoản</label>
			        	<input type="text" class="form-control" name="MaTK" value="<?php echo $MaTK ?>" readonly> 
			        </div>
 					<div class="mb-3 mt-3">
			        	<label>Mã sinh viên</label> 
			            <input type="text" class="form-control" name="MaSV" value="<?php echo $MaSV; ?>" >
			        </div>
			        <div class="mb-3 mt-3">
			        	<label>Username</label> 
			            <input type="text" class="form-control" name="Username" value="<?php echo $Username; ?>" >
			        </div>
			        <div class="mb-3 mt-3">
			        	<label>Password</label> 
			            <input type="text" class="form-control" name="Password" value="<?php echo $Password; ?>" >
			        </div>	
			        <!-- Modal footer -->
				    <div class="modal-footer">
				      	<button style="margin-right: 10px;" type="submit" class="btn btn-warning"  >Cập nhật</button>
				        <a href="quanlytaikhoan.php" class="btn btn-danger">Đóng</a>
				    </div>
 					</form>

 				</div>
 			</div>
 		</div>
 		
 	</div>

 </body>
 </html>