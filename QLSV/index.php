<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thông tin sinh viên</title>
	<style>
		.menu1 {
			float: right;
			margin: 1px 10px auto auto;
			text-decoration: none;
			color: black;
		}
		.menu2 {
			margin: 1px 10px auto auto;
			text-decoration: none;
			color: black;
		}
		.tb {
			margin: auto; auto auto auto;
		}
		#img1 {
			width: 512px;
			height: 512px;
		}
	</style>
</head>
<body>
	<?php 
		include 'connect.php';

		$username = isset($_GET['username'])?$_GET['username']:'';
		// echo 'username= '.$username;

		$sql = 'select * from sinhvien inner join taikhoan on sinhvien.masv = taikhoan.masv where username = "'.$username.'"';
		// echo 'sql = '.$sql;	
		echo '  <div class="menu">
					<h4><a href="login.php" class="menu1">Đăng xuất</a></h1>
					<h2><a href="qlsv.php?username='.$username.'" class="menu2">Quản lý tài khoản</a></h1>
				</div>';

		if($result = $conn->query($sql)) {
			$row = $result->fetch_assoc();
			if($row) {
				echo '  
						<div class="container">
								<table align="center" class="tb">
									<thead>
										<th>
											
										</th>
									</thead>

									<tbody>
										<tr>
											<td rowspan="5"><img src="'.$row['anhdaidien'].'" alt="" id="img1"></td>
											<td>
												<table>
												<tr>
													<td colspan="2"><h1>Thông Tin</h1></td>
												</tr>
												<tr>
													<td width="150px">Mã sinh viên: </td>
													<td>'.$row['masv'].'</td>
												</tr>
												<tr>
													<td>Họ tên: </td>
													<td>'.$row['hoten'].'</td>
												</tr>
												<tr>
													<td>Số điện thoại: </td>
													<td>'.$row['sdt'].'</td>
												</tr>
												<tr>
													<td>Quê quán: </td>
													<td>'.$row['quequan'].'</td>
												</tr>
												<tr>
													<td>Mã lớp: </td>
													<td>'.$row['malop'].'</td>
												</tr>
														</table>
											</td>
										</tr>
									</tbody>
								</table>
							</div>';
			} else {
				echo 'nạp thất bại';
			}
		} else {
			echo 'error';
		}
	?>
	
</body>
</html>