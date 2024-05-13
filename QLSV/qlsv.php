<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
	<style>
		#m1 {
			text-decoration: none;
			color: black;
		}
		#th3 {
			text-align: center;
		}
		th {
			background-color: orange;
			color: white;
		}
		button {
			height: 20px;
		}
		#btn1 {
			height: 40px;
			text-align: ;
		} 
		#btn2 {
			height: 40px;
			text-align: ;
		} 
	</style>
</head>
<body>
	<?php 
		include 'connect.php';
		$c = isset($_GET['c'])?$_GET['c']:'';
		// echo 'c = '.$c;

		if($c == 1) {
			echo '<script>
	 				confirm("Xóa thành công!");
				  </script>';
		}  else if($c == 2) {
			echo '<script>
	 				confirm("Xóa thất bại!");
				  </script>';
		}  else if($c == 3) {
			echo '<script>
	 				confirm("Tài khoản đang sử dụng!");
				  </script>';
		}

		$username = isset($_GET['username'])?$_GET['username']:'';
		// echo 'username= '.$username;
		echo '<div class="menu" width="10%" height="10%">
				<h2><a href="index.php?username='.$username.'" id="m1">Trang chủ</a></h2>
			  </div>';	

		$sql = 'select sinhvien.masv from sinhvien inner join taikhoan on sinhvien.masv = taikhoan.masv where username = "'.$username.'"';
		// echo 'sql = '.$sql;
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		// echo 'msv = '.$row['masv'];
		$sql = 'select username from sinhvien inner join taikhoan on sinhvien.masv = taikhoan.masv where sinhvien.masv = "'.$row['masv'].'"';
		// echo 'sql = '.$sql;
		$result = $conn->query($sql);
		$stt = 1;
		echo '<h3 align="center">Quản lý tài khoản</h3>';
		echo '	<table align="center" id="tb">
						<tr>
							<th width="100px">STT</td>
							<th width="250px">Tên tài khoản</td>
							<th id="th3">Tùy chọn</td>
						</tr>
					</thead>

					<tbody>';

		while ($row = $result->fetch_assoc()) {
		    echo '	<tr>
		    			<td width="30px">';
		    				echo $stt++;
		   			 echo'</td>
						<td width="150px">'.$row['username'].'</td>
						<td>
							<a href="sua.php?username1='.$row['username'].'&username2='.$username.'" onclick = "return confirm('."'"."Bạn chắc chắn muốn sửa?"."'".')" class="btn btn-danger" id="btn1">Đổi mật khẩu</a>
							<a href="xuly/xoa.php?username1='.$row['username'].'&username2='.$username.'" onclick = "return confirm('."'"."Bạn chắc chắn muốn xóa?"."'".')" class="btn btn-warning" id="btn2">Xóa</a>
						</td>
					</tr>';

		}

		echo '	</tbody>
			</table>';
	?>
</body>
</html>