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
    <p>Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%! <a href="#" class="text-decoration-none text-dark">Shop Now</a></p>
</div>

<div class="container my-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Account</a></li>
            <li class="breadcrumb-item"><a href="#">My Account</a></li>
            <li class="breadcrumb-item"><a href="#">Product</a></li>
            <li class="breadcrumb-item"><a href="#">View Cart</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>

    <!-- Billing Details -->
    <div class="row">
        <div class="col-md-6">
            <h2>Billing Details</h2>
            <form action="process_checkout.php" method="POST">
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name*</label>
                    <input type="text" id="first-name" name="first-name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="company-name" class="form-label">Company Name</label>
                    <input type="text" id="company-name" name="company-name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="street-address" class="form-label">Street Address*</label>
                    <input type="text" id="street-address" name="street-address" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="apartment" class="form-label">Apartment, floor, etc. (optional)</label>
                    <input type="text" id="apartment" name="apartment" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Town/City*</label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone-number" class="form-label">Phone Number*</label>
                    <input type="text" id="phone-number" name="phone-number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address*</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" id="save-info" name="save-info" class="form-check-input">
                    <label for="save-info" class="form-check-label">Save this information for faster check-out next time</label>
                </div>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-6">
            <h2>Order Summary</h2>
            <ul class="list-group mb-3">
                <?php foreach ($cart as $item): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $item['name'] ?>
                    <span>$<?= $item['price'] * $item['quantity'] ?></span>
                </li>
                <?php endforeach; ?>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Subtotal</strong>
                    <span>$<?= $subtotal ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Shipping</strong>
                    <span>Free</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total</strong>
                    <span>$<?= $subtotal ?></span>
                </li>
            </ul>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Coupon Code">
                <button class="btn btn-primary mt-2 w-100">Apply Coupon</button>
            </div>
            <div class="mb-3">
                <input type="radio" id="bank" name="payment-method" value="bank" class="form-check-input">
                <label for="bank" class="form-check-label">Bank</label><br>
                <input type="radio" id="cod" name="payment-method" value="cod" class="form-check-input">
                <label for="cod" class="form-check-label">Cash on delivery</label>
            </div>
            <button class="btn btn-success w-100">Place Order</button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Exclusive</h5>
                <p>Subscribe and get 10% off your first order.</p>
            </div>
            <div class="col-md-3">
                <h5>Support</h5>
                <p>111 Bijoy sarani, Dhaka</p>
                <p>Email: exclusive@gmail.com</p>
                <p>Phone: +88015-88888-9999</p>
            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="" class="text-decoration-none text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-decoration-none text-white">Terms Of Use</a></li>
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
