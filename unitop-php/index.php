<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello World</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>


	<div align="center">
		
		<h1 align=center>Form đăng ký</h1>
	<hr>

	<form action="outer.php" method="POST">
	<table width="400" border="2" cellpadding="5" align="center">
		<tr>
			<th colspan="2">Đăng ký</th>
		</tr>
		<!-- Fullname -->
		<tr>
			<td>Fullname</td>
			<td>
				<input type="text" name="fullname" size="30" placeholder="Nhập fullname">
			</td>
		</tr>
		<!-- Username -->
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username" size="30" placeholder="Nhập username">
			</td>
		</tr>
		<!-- Password -->
		<tr>
			<td>Password</td>
			<td>
				<input type="text" name="password" size="30" placeholder="Nhập password">
			</td>
			
		</tr>
		<!-- Confirm password -->
		<tr>
			<td>Nhập lại Password </td>
			<td>
				<input type="text" name="confirmpassowrd" size="30" placeholder="Nhập lại password">
			</td>
		</tr>
		<!-- Gioi tinh -->
		<tr>
			<td>Giới tính</td>
			<td>
				<label>
					<input type="radio" name="gioitinh" id="nam"> Nam
				</label>

				<label>
					<input type="radio" name="gioitinh" id="nu"> Nữ
				</label>	
			</td>
		</tr>
		<!-- Ngay sinh -->
		<tr>
			<td>Ngày sinh</td>
			<td>
				<select name="day">
					<option value="day1">1</option>
					<option value="day2">2</option>
					<option value="day3">3</option>
					<option value="day4">4</option>
					<option value="day5">5</option>
					<option value="day6">6</option>
					<option value="day7">7</option>
					<option value="day8">8</option>
					<option value="day9">9</option>
					<option value="day10">10</option>
					<option value="day11">11</option>
					<option value="day12">12</option>
					<option value="day13">13</option>
					<option value="day14">14</option>
					<option value="day15">15</option>
					<option value="day16">16</option>
					<option value="day17">17</option>
					<option value="day18">18</option>
					<option value="day19">19</option>
					<option value="day20">20</option>
					<option value="day21">21</option>
					<option value="day22">22</option>
					<option value="day23">23</option>
					<option value="day24">24</option>
					<option value="day25">25</option>
					<option value="day26">26</option>
					<option value="day27">27</option>
					<option value="day28">28</option>
					<option value="day29">29</option>
					<option value="day30">30</option>
					<option value="day31">31</option>

				</select>

				<select name="month">
					<option value="month1">Tháng 1</option>
					<option value="month">Tháng 2</option>
					<option value="month3">Tháng 3</option>
					<option value="month4">Tháng 4</option>
					<option value="month5">Tháng 5</option>
					<option value="month6">Tháng 6</option>
					<option value="month7">Tháng 7</option>
					<option value="month8">Tháng 8</option>
					<option value="month9">Tháng 9</option>
					<option value="month10">Tháng 10</option>
					<option value="month11">Tháng 11</option>
					<option value="month12">Tháng 12</option>
				</select>
				<select name="year">
					<option value="year2010">Năm 2010</option>
					<option value="year2009">Năm 2009</option>
					<option value="year2008">Năm 2008</option>
					
				</select>
			</td>
		</tr>
		<!-- Dia chi -->
		<tr>
			<td>Địa chỉ</td>
			<td>
				<textarea name="" id="" cols="30" rows="5"></textarea>
			</td>
		</tr>
		<!-- Avatar -->
		<tr>
			<td>Avatar</td>
			<td>
				<input type="file" name="avatar">
			</td>
		</tr>
		<!-- So thich -->
		<tr>
			<td>Sở thích</td>
			<td>
				<label>
					<input type="checkbox" name="xemphim"> Xem phim
				</label>
				<label>
					<input type="checkbox" name="thethao"> Thể thao
				</label>
				<label>
					<input type="checkbox" name="web"> Web
				</label>								
			</td>
		</tr>
		<!-- Button -->
		<tr>
			<td colspan="2" align="center">
				<button type="reset" class="btn btn-outline-dark">Reset</button> &nbsp; &nbsp;
				<button type="submit" class="btn btn-outline-dark">OK</button>
			</td>
		</tr>
	</table>
	</form>
	

	</div>

</body>
</html>