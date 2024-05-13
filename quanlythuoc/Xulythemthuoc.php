<?php
	include 'connect_db_qlthuoc.php';	
	//Kiểm tra rỗng ---------------
	if(empty($_POST['Tenthuoc'])){
		echo '<script type = "text/javascript">';
		echo 'alert("Tên thuốc không được bỏ trống!")';
		echo '</script>';
	}else if(empty($_POST['Ngayhethan'])){
		echo '<script type = "text/javascript">';
		echo 'alert("Ngày hết hạn thuốc không được bỏ trống!")';
		echo '</script>';
	}else if(empty($_POST['Congdung'])){
		echo '<script type = "text/javascript">';
		echo 'alert("Công dụng thuốc không được bỏ trống!")';
		echo '</script>';
	}else if(empty($_POST['Nhomthuoc'])){
		echo '<script type = "text/javascript">';
		echo 'alert("Nhóm thuốc không được bỏ trống!")';
		echo '</script>';
	}else if(empty($_POST['Soluong'])){
		echo '<script type = "text/javascript">';
		echo 'alert("Số lượng thuốc không được bỏ trống!")';
		echo '</script>';
	}
	$Tenthuoc = isset($_POST['Tenthuoc'])?$_POST['Tenthuoc']:'';
	$Ngayhethan = isset($_POST['Ngayhethan'])?$_POST['Ngayhethan']:'';
	$Congdung = isset($_POST['Congdung'])?$_POST['Congdung']:'';
	$Nhomthuoc = isset($_POST['Nhomthuoc'])?$_POST['Nhomthuoc']:'';
	$Soluong = isset($_POST['Soluong'])?$_POST['Soluong']:'';
	$Anh = isset($_POST['image'])?$_POST['image']:'';
	$Ghichu = isset($_POST['Ghichu'])?$_POST['Ghichu']:'';
	
    //Xử lý upload ảnh --------------
	$target_dir = 'uploads/';
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Kiểm tra xem ảnh được gửi lên có đúng là ảnh thật hay 
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["image"]["tmp_name"]);
	  if($check !== false) {
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo '<script type = "text/javascript">';
		echo 'alert("Ảnh đã tồn tại!")';
		echo '</script>';
	  $uploadOk = 0;
	}

	// Cho phép các file ảnh gửi lên thuộc định dạng jpg, jpeg và png
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "File không đúng định dạng.";
	  $uploadOk = 0;
	}

	// Kiểm tra xem upload thành công hay 
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// Nếu mọi thứ đều ổn sẽ tiến hành upload ảnh
	} else {
		// Nếu file chưa được upload lên
	  if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		echo '<script type = "text/javascript">';
		echo 'alert("Xảy ra lỗi trong quá trình upload ảnh!")';
		echo '</script>';
	  } 
	}
	//Kết thúc upload ảnh --------------
	$Anh = $target_dir.htmlspecialchars(basename( $_FILES["image"]["name"]));

	if($Tenthuoc != '' && $Ngayhethan != '' && $Congdung != ''
		 && $Nhomthuoc != '' && $Soluong != null && $Anh != ''){

		$sql = "INSERT INTO thuoc VALUES (null, '$Tenthuoc', '$Ngayhethan', '$Congdung', '$Nhomthuoc','$Soluong', '$Ghichu', '$Anh') ";

		if ($conn->query($sql) === TRUE) {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm thuốc thành công!")';
			echo '</script>';
		} else {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm thuốc không thành công!")';
			echo '</script>';
		}
		
		$conn->close();
	}
	
	include 'Hienthithuoc.php';
?>