<?php
// Bắt đầu session để quản lý giỏ hàng
session_start();

// Kiểm tra xem giỏ hàng đã được khởi tạo hay chưa
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [
        ['name' => 'LCD Monitor', 'price' => 650, 'quantity' => 1],
        ['name' => 'H1 Gamepad', 'price' => 1100, 'quantity' => 1],
    ];
}

$cart = $_SESSION['cart'];

// Tính tổng giá trị
function calculateSubtotal($cart) {
    $subtotal = 0;
    foreach ($cart as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }
    return $subtotal;
}

$subtotal = calculateSubtotal($cart);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<div class="bg-warning text-center py-2">
    <p>Đăng ký và được giảm giá 10% cho đơn hàng đầu tiên của bạn <a href="#" class="text-decoration-none text-light">Shop Now</a></p>
</div>

<div class="container my-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
            <li class="breadcrumb-item"><a href="#">Tài khoản của tôi</a></li>
            <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
            <li class="breadcrumb-item"><a href="#">Xem giỏ hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
        </ol>
    </nav>

    <!-- Billing Details -->
    <div class="row">
        <div class="col-md-6">
            <h2>Chi tiết thanh toán</h2>
            <form action="process_checkout.php" method="POST">
                <div class="mb-3">
                    <label for="first-name" class="form-label">Họ tên*</label>
                    <input type="text" id="first-name" name="first-name" class="form-control" required>
                </div>
                <!-- <div class="mb-3">
                    <label for="company-name" class="form-label">Company Name</label>
                    <input type="text" id="company-name" name="company-name" class="form-control">
                </div> -->
                <div class="mb-3">
                    <label for="street-address" class="form-label">Địa chỉ</label>
                    <input type="text" id="street-address" name="street-address" class="form-control" required>
                </div>
                <!-- <div class="mb-3">
                    <label for="apartment" class="form-label">Apartment, floor, etc. (optional)</label>
                    <input type="text" id="apartment" name="apartment" class="form-control">
                </div> -->
                <div class="mb-3">
                    <label for="city" class="form-label">Tỉnh/Thành phố</label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone-number" class="form-label">Số điện thoại</label>
                    <input type="text" id="phone-number" name="phone-number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Địa chỉ email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" id="save-info" name="save-info" class="form-check-input">
                    <label for="save-info" class="form-check-label">Lưu thông tin</label>
                </div>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-6">
            <h2>Tóm tắt đơn hàng</h2>
            <ul class="list-group mb-3">
                <?php foreach ($cart as $item): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $item['name'] ?>
                    <span>$<?= $item['price'] * $item['quantity'] ?></span>
                </li>
                <?php endforeach; ?>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Tổng cộng</strong>
                    <span>$<?= $subtotal ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Phí vận chuyển</strong>
                    <span>Miễn phí</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Thành tiền</strong>
                    <span>$<?= $subtotal ?></span>
                </li>
            </ul>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Mã giảm giá">
                <button class="btn btn-primary mt-2 w-100">Sử dụng mã</button>
            </div>
            <div class="mb-3">
                <input type="radio" id="bank" name="payment-method" value="bank" class="form-check-input">
                <label for="bank" class="form-check-label">Ngân hàng</label><br>
                <input type="radio" id="cod" name="payment-method" value="cod" class="form-check-input">
                <label for="cod" class="form-check-label">COD (Thanh toán khi nhận hàng)</label>
            </div>
            <button class="btn btn-success w-100">Đặt hàng</button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Độc quyền</h5>
                <p>Đăng ký và nhận ngay giảm giá 10% cho đơn hàng đầu tiên.</p>
            </div>
            <div class="col-md-3">
                <h5>Hỗ trợ</h5>
                <p>Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                <p>Email: nguyenvana@gmail.com</p>
                <p>Phone: 0123456789</p>
            </div>
            <div class="col-md-3">
                <h5>Liên kết</h5>
                <ul class="list-unstyled">
                    <li><a href="" class="text-decoration-none text-white">Chính sách bảo mật</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Điều khoản sử dụng</a></li>
                    <li><a href="#" class="text-decoration-none text-white">FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Follow Us</h5>
                <a href="#" class="text-white me-2">Facebook</a>
                <a href="#" class="text-white">Instagram</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
