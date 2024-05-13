<?php 
	include 'connect_db_qlsv.php';
	$MaLop = isset($_GET['MaLop'])?$_GET['MaLop']:'';
	$sql = "SELECT *FROM lop WHERE MaLop = '$MaLop'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$TenLop = $row['TenLop'];
	$MoTa = $row['MoTa'];
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
 						<h2>Chỉnh sửa thông tin lớp</h2>
 					</div>
 					<p align="center">Vui lòng chỉnh sửa thông tin và ấn cập nhật để lưu </p>
 					<form action="xulysualop.php" method="POST" enctype="multipart/form-data">
 						<div class="mb-3 mt-3">
			        	<label>Mã lớp</label>
			        	<input type="text" class="form-control" name="MaLop" value="<?php echo $MaLop ?>" readonly> 
			        </div>
 					<div class="mb-3 mt-3">
			        	<label>Tên lớp</label> 
			            <input type="text" class="form-control" name="TenLop" value="<?php echo $TenLop; ?>" >
			        </div>	
			        <div class="mb-3 mt-3">
			        	<label>Mô tả</label>  
			            <textarea type="text" class="form-control" name="MoTa" ols="50" rows="5"><?php echo $MoTa; ?></textarea>
			        </div>
			        <!-- Modal footer -->
				    <div class="modal-footer">
				      	<button style="margin-right: 10px;" type="submit" class="btn btn-warning"  >Cập nhật</button>
				        <a href="quanlylop.php" class="btn btn-danger">Đóng</a>
				    </div>
 					</form>

 				</div>
 			</div>
 		</div>
 		
 	</div>

 </body>
 </html>