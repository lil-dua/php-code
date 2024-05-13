<?php
    include 'connect_db_qlsv.php'; 
    $Username = isset($_POST['Username'])?$_POST['Username']:"";
    $Password = isset($_POST['Password'])?$_POST['Password']:'';
 

    $sql = "SELECT * FROM taikhoan WHERE Username = '$Username' AND Password = '$Password'" ;
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    if($count == 1){
      require 'trangchu.php';      
    }else{
      echo '<script type = "text/javascript">';
      echo 'alert("Sai tên đăng nhập hoặc mật khẩu!")';
      echo '</script>';
      require 'index.php';
    }
  ?>