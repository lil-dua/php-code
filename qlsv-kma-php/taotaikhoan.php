<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
  <script type="text/javascript" src="../bootstrap5/js/bootstrap.js"></script>
  <title>Đăng nhập</title>
</head>
<body>
  <?php 
    include 'connect_db_qlsv.php';  
  ?>
  
  <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5"> 

                  <h2 class="fw-bold mb-2 text-uppercase">Tạo tài khoản</h2>
                  <br>                
                  <form action="xulytaotaikhoan.php" method="POST" enctype="multipart/data-form">    
                      <div class="mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Nhập mã sinh viên" name="MaSV" required>
                      </div> 

                      <div class="mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Nhập username" name="Username" required>
                      </div>

                      <div class="mb-3 mt-3">
                        <input type="password" class="form-control" placeholder="Nhập password" name="Password" required>
                      </div>

                      <div class="mb-3 mt-3">
                        <input type="password" class="form-control" placeholder="Nhập lại password" name="ConfirmPassword" required>
                      </div>

                    <br>
                    <button type="submit" class="btn btn-outline-warning">Đăng ký</button>
                  </form>
                  <br>
                  <p>Trở lại giao diện
                  <a href="index.php" style="color: #ffbf00;">Đăng nhập</a> </p>
                     
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <?php 
      $Password = isset($_POST['Password'])?$_POST['Password']:'';
      $ConfirmPassword = isset($_POST['ConfirmPassword'])?$_POST['ConfirmPassword']:'';
      if($Password != $ConfirmPassword){
        echo '<script type = "text/javascript">';
        echo 'alert("Sai tên đăng nhập hoặc mật khẩu!")';
        echo '</script>';
      }
     ?>
  
</body>
</html>