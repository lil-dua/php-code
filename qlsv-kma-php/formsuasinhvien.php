<?php 
	include 'connect_db_qlsv.php';
	$id = isset($_GET['id'])?$_GET['id']:'';
	$sql = "SELECT *FROM sinhvien WHERE id = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$MaSV = $row['MaSV'];
	$HoTen = $row['HoTen'];
	$Sdt = $row['Sdt'];
	$Avatar = $row['Avatar'];
	$QueQuan = $row['QueQuan'];
	$MaLop = $row['MaLop'];
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
 						<h2>Chỉnh sửa thông tin sinh viên</h2>
 					</div>
 					<p align="center">Vui lòng chỉnh sửa thông tin và ấn cập nhật để lưu </p>
 					<form action="xulysuasinhvien.php" method="POST" enctype="multipart/form-data">
 						<div class="mb-3 mt-3">
				        	<label>ID</label>
				        	<input type="text" class="form-control" name="id" value="<?php echo $id ?>" readonly> 
				        </div>
 						<div class="mb-3 mt-3">
				        	<label>Mã sinh viên</label>
				            <input type="text" class="form-control" placeholder="Nhập mã sinh viên" name="MaSV" value="<?php echo $MaSV ?>">
				        </div>

				        <div class="mb-3 mt-3">
				        	<label>Họ tên</label> 
				            <input type="text" class="form-control" placeholder="Nhập họ tên sinh viên" name="HoTen" value="<?php echo $HoTen ?>">
				        </div>

				        <div class="mb-3 mt-3">
				        	<label>Số điện thoại</label>
				            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="Sdt" value="<?php echo $Sdt ?>">
				        </div>

				        <div class="mb-3 mt-3">

				        	<label>Ảnh đại diện</label>
				            <input type="file" class="form-control" name="image" id="image" >
				        </div>

				        <div class="mb-3 mt-3">
				        	<label>Quê quán</label> 
				            <input type="text" class="form-control" placeholder="Nhập quê quán sinh viên" name="QueQuan" value="<?php echo $QueQuan ?>">
				        </div>
				       
			        	<div class="mb-3 mt-3">
				        	<label>Mã lớp</label>
				            <input type="text" class="form-control" placeholder="Nhập mã lớp sinh viên" name="MaLop" value="<?php echo $MaLop ?>">
				        </div>
				        <!-- Modal footer -->
					    <div class="modal-footer">
					      	<button style="margin-right: 10px;" type="submit" class="btn btn-warning"  >Cập nhật</button>
					        <a href="quanlysinhvien.php" class="btn btn-danger">Đóng</a>
					    </div>
 					</form>

 				</div>
 			</div>
 		</div>
 		
 	</div>

 </body>
 </html>