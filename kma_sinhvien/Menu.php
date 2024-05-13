<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">KMA </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/kma_sinhvien/index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/kma_sinhvien/Themsv.php">Thêm sinh viên</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/kma_sinhvien/Xoasv.php">Xóa sinh viên</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/kma_sinhvien/Lienhe.php">Liên hệ</a>
        </li>
      </ul>
      <form action="#" class="d-flex" method="POST">
              <!-- <input name="txtSearch" class="form-control me-2" type="search" placeholder="Năm sinh" aria-label="Search"> -->
              <select name="txtSearch" id="">
                <?php ?>
                <option value="">Năm sinh</option>
                <?php
                for ($i = 1980; $i < 2023; ++$i) {
                 ?>
                <option value="<?php echo $i ?>"> <?php echo $i ?></option>
              <?php } ?>
              </select>
              <button class="btn btn-primary" type="submit">Tìm</button>
            </form>
    </div>
  </div>
</nav>