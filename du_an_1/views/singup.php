<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create an Account</title>
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
  Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%! <a href="#">ShopNow</a>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">trang chủ</a></li>
        <li class="nav-item"><a class="nav-link" href="#">giới thiệu</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
      </ul>
    </div>
    <form class="d-flex ms-3">
      <input class="form-control" type="search" placeholder="What are you looking for?" aria-label="Search">
      <button class="btn btn-outline-secondary ms-2" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Signup Form -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Create an account</h2>
      <p class="text-center">Enter your details below</p>
      <form action="process_signup.php" method="POST">
        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email or Phone Number" required>
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">Create Account</button>
        <div class="text-center my-3">
          <button type="button" class="btn btn-outline-dark w-100">Sign up with Google</button>
        </div>
      </form>
      <p class="text-center">Already have account? <a href="login.php">Log in</a></p>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>Exclusive</h5>
        <p>Get 10% off your first order</p>
        <form>
          <input type="email" class="form-control mb-2" placeholder="Enter your email">
          <button type="submit" class="btn btn-light btn-sm">Subscribe</button>
        </form>
      </div>
      <div class="col-md-3">
        <h5>Support</h5>
        <p>111 Bijoy sarani, Dhaka, Bangladesh.</p>
        <p>exclusive@gmail.com</p>
        <p>+88015-88888-9999</p>
      </div>
      <div class="col-md-2">
        <h5>Account</h5>
        <ul class="list-unstyled">
          <li><a href="#">My Account</a></li>
          <li><a href="#">Login / Register</a></li>
          <li><a href="#">Cart</a></li>
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Shop</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <h5>Quick Link</h5>
        <ul class="list-unstyled">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms Of Use</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <h5>Download App</h5>
        <p>Save $3 with App New User Only</p>
        <a href="#"><img src="img/google-play.png" alt="Google Play" class="img-fluid"></a>
        <a href="#"><img src="img/app-store.png" alt="App Store" class="img-fluid"></a>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>&copy; Copyright Rimel 2022. All right reserved.</p>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
