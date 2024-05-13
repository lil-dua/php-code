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
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Vui lòng đăng nhập để tiếp tục!</p>
                  
                  <form action="xulydangnhap.php" method="POST" enctype="multipart/data-form">                   
                    
                      <div class="mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Nhập username" name="Username" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Username không được để trống</div>
                      </div>

                      <div class="mb-3 mt-3">
                        <input type="password" class="form-control" placeholder="Nhập password" name="Password" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Password không được để trống</div>
                      </div>

                    <br>
                    <button type="submit" class="btn btn-outline-warning">Đăng nhập</button>
                  </form>
                  <br>
                  <p>Bạn chưa có tài khoản?
                  <a href="taotaikhoan.php" style="color: #ffbf00;">Tạo tài khoản</a> </p>
                  
                </div>
    
              </div>
            </div>
          </div>
      </div>
    </div>
  
</body>
</html>