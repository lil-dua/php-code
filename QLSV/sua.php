<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa thông tin</title>
</head>
<body>
	<form action="xuly/sua.php">
		<table align="center" style="margin: 10% auto; background-color: lightblue; padding: 20px;">
			<tr>
				<td colspan="2"><h2 align="center">Đổi mật khẩu</h2></td>
			</tr>
			<tr>
				<td>Mật khẩu cũ</td>
				<td><input type="password" name="oldpass" placeholder="Nhập mật khẩu cũ" required="true"></td>
			</tr>
			<tr>
				<td>Mật khẩu mới</td>
				<td><input type="password" name="newpass" placeholder="Nhập mật khẩu mới" required="true"></td>
			</tr>
			<tr>
				<td>Nhập lại mật khẩu</td>
				<td><input type="password" name="repass" placeholder="Nhập lại mật khẩu" required="true"></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<button type="submit" style="margin: auto 10px;">Ok</button>
					<button type="reset">Nhập lại</button>
				</td>
			</tr>	
		</table>
	</form>
</body>
</html>