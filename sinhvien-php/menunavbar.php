<div class="container">
	<div class="row">
		<div class="jumbotron">
			<nav class="navbar navbar-expand-lg bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="https://bom.so/jbOVmU" alt="" height="50px">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="danhsach.php">Trang chủ</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="themsv.php">Thêm</a>
							</li>
						</ul>
						<form action="xoasv.php" class="d-flex" method="POST">
							<input name="id_xoa" class="form-control me-2" type="search" placeholder="Mã sinh viên" aria-label="Search">
							<button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sinh viên này?')" type="submit">Xóa</button>
						</form>
						<form action="#" class="d-flex" method="POST">
							<!-- <input name="txtSearch" class="form-control me-2" type="search" placeholder="Năm sinh" aria-label="Search"> -->
							<select name="txtSearch" id="">
								<?php 
								?>
								<option value="">Năm sinh</option>
								<?php
								for ($i = 1980; $i < 2023; ++$i) {
								 ?>
								<option value="<?php echo $i ?>"> <?php echo $i ?></option>
							<?php } ?>
							</select>
							<button class="btn btn-primary" type="submit">Tìm</button>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>