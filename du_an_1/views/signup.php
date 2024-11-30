<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .header-bar {
      background-color: #f8f9fa;
      padding: 10px 0;
      font-size: 14px;
    }
    .header-bar a {
      color: #dc3545;
      font-weight: bold;
      text-decoration: none;
    }
    .footer {
      background-color: #000;
      color: #fff;
      padding: 30px 0;
      margin-top: 50px;
    }
    .footer a {
      color: #fff;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- Header -->
<div class="header-bar text-center">
Đăng ký và được giảm giá 10% cho đơn hàng đầu tiên của bạn <a href="#">ShopNow</a>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Về chúng tôi</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Đăng ký</a></li>
      </ul>
    </div>
    <form class="d-flex ms-3">
      <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-secondary ms-2" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Signup Form -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Tạo tài khoản mới</h2>
      <p class="text-center">Nhập thông tin của bạn để tạo tài khoản mới</p>
      <form action="process_signup.php" method="POST">
        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Tên" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email hoặc Số điện thoại" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">Tạo tài khoản</button>
        <div class="text-center my-3">
          <button type="button" class="btn btn-outline-dark w-100">Đăng ký với Google</button>
        </div>
      </form>
      <p class="text-center">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <h5>Độc quyền</h5>
      <p>Đăng ký và nhận ngay giảm giá 10% cho đơn hàng đầu tiên.</p>
        <form>
          <input type="email" class="form-control mb-2" placeholder="Nhập email của bạn">
          <button type="submit" class="btn btn-light btn-sm">Đăng ký</button>
        </form>
      </div>
      <div class="col-md-3">
                <h5>Hỗ trợ</h5>
                <p>Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                <p>Email: nguyenvana@gmail.com</p>
                <p>Phone: 0123456789</p>
            </div>
      <div class="col-md-3">
        <h5>Tài khoản</h5>
        <ul class="list-unstyled">
          <li><a href="#">Tài khoản của tôi</a></li>
          <li><a href="#">Đăng nhập / Đăng ký</a></li>
          <li><a href="#">Giỏ hàng</a></li>
          <li><a href="#">Shop</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Liên kết</h5>
        <ul class="list-unstyled">
          <li><a href="#">Chính sách bảo mật</a></li>
          <li><a href="#">Điều khoản sử dụng</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      </div>
      <!-- <div class="col-md-2">
        <h5>Download App</h5>
        <p>Save $3 with App New User Only</p>
        <a href="#"><img src="img/google-play.png" alt="Google Play" class="img-fluid"></a>
        <a href="#"><img src="img/app-store.png" alt="App Store" class="img-fluid"></a>
      </div> -->
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
