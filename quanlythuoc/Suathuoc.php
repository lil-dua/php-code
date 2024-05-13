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
				<h2 class="display-3"> Sửa thông tin thuốc</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php 
					$Mathuoc = isset($_GET['Mathuoc'])?$_GET['Mathuoc']:'';
					$sql = "select * from thuoc where Mathuoc = ".$Mathuoc;

					echo '<form action="Xulysuathuoc.php?Mathuoc='.$Mathuoc.'" method="POST" enctype="multipart/data-form">
						<fieldset class="form-group">
							<label>Tên thuốc</label>
							<input name = "Tenthuoc" type="text" class="form-control" placeholder="Nhập tên thuốc">

						</fieldset>
						<fieldset class="form-group">
							<label>Ngày hết hạn</label>
							<input name="Ngayhethan" type="date" class="form-control" placeholder="">
						</fieldset>
						<fieldset class="form-group">
							<label>Công dụng</label>
							<input name ="Congdung" type="text" class="form-control" placeholder="Nhập công dụng">
						</fieldset>
						<fieldset class="form-group">
							<label >Nhóm thuốc</label>
							<select name ="Nhomthuoc" class="form-control" id="eexampleSelect11">
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
						<fieldset class="form-group">
							<label >Số lượng</label>
							<input name="Soluong" type="number" class="form-control" placeholder="Nhập số lượng">
						</fieldset>
						<fieldset class="form-group">
							<label >Ghi chú</label>
							<br>
							<textarea name="Ghichu" id="" cols="43" rows="5"></textarea>
						</fieldset>
						<fieldset class="form-group">
							<label >Thêm ảnh thuốc</label>
							<input name="fileToUpload" type="file" class="form-control-file" id="exampleInputFile">
						</fieldset>	
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>';
				?>
			</div> 
		</div>
	</div>
	
</body>
</html>