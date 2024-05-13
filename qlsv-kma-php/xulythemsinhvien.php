<?php
	include 'connect_db_qlsv.php';	
	$MaSV = isset($_POST['MaSV'])?$_POST['MaSV']:'';
	$HoTen = isset($_POST['HoTen'])?$_POST['HoTen']:'';
	$Sdt = isset($_POST['Sdt'])?$_POST['Sdt']:'';
	$Avatar = isset($_POST['image'])?$_POST['image']:'';
	$QueQuan = isset($_POST['QueQuan'])?$_POST['QueQuan']:'';
	$MaLop = isset($_POST['MaLop'])?$_POST['MaLop']:'';
	
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
	$Avatar = $target_dir.htmlspecialchars(basename( $_FILES["image"]["name"]));

	if($MaSV != '' && $HoTen != '' && $Sdt != ''
		 && $Avatar != '' && $QueQuan != '' && $MaLop != ''){

		$sql = "INSERT INTO sinhvien VALUES (null, '$MaSV', '$HoTen', '$Sdt', '$Avatar','$QueQuan', '$MaLop') ";

		if ($conn->query($sql) === TRUE) {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm sinh viên thành công!")';
			echo '</script>';
		} else {
		  echo '<script type = "text/javascript">';
			echo 'alert("Thêm sinh viên không thành công!")';
			echo '</script>';
		}
		$conn->close();
	}
	
	include 'quanlysinhvien.php';
?>