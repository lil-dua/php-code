<?php 
	include '../connect.php';

	$username1 = isset($_GET['username1'])?$_GET['username1']:'';
	$username2 = isset($_GET['username2'])?$_GET['username2']:'';

	echo $username1;
	echo $username2;
	if($username1 != $username2) {
		$sql = 'delete from taikhoan where username = "'.$username1.'"';
		// echo $sql;
		if($conn->query($sql)) {
				header('Location: ../qlsv.php?username='.$username2.'&c=1');
			} else {
				header('Location: ../qlsv.php?username='.$username2.'&c=2');
		}
	} else {
		echo 'cung tk';
		header('Location: ../qlsv.php?username='.$username2.'&c=3');
	}

	
 ?>