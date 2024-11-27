<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    // Giả sử có một giỏ hàng được lưu trong session
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [
            ['name' => 'Quần Xưởng', 'price' => 650, 'quantity' => 1],
            ['name' => 'Quần Bộ', 'price' => 550, 'quantity' => 2],
        ];
    }

    // Tính toán tổng giá trị
    function calculateSubtotal($cart) {
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        return $subtotal;
    }

    $cart = $_SESSION['cart'];
    $subtotal = calculateSubtotal($cart);
    ?>

    <!-- Header -->
    <header class="bg-light py-3 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="img/logo.jpg" alt="logo" width="150">
            </div>
            <nav>
                <a href="#" class="text-decoration-none me-3">Trang chủ</a>
                <a href="#" class="text-decoration-none me-3">Giới thiệu</a>
                <a href="#" class="text-decoration-none me-3">About</a>
                <a href="#" class="text-decoration-none">Sign Up</a>
            </nav>
            <div>
                <input type="text" class="form-control d-inline w-auto" placeholder="Search">
                <a href="#" class="btn btn-outline-secondary ms-2">❤️</a>
                <a href="#" class="btn btn-outline-secondary">🛒</a>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>

    <!-- Cart Section -->
    <section class="container">
        <h2 class="mb-4">Shopping Cart</h2>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $index => $item): ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td>$<?= $item['price'] ?></td>
                    <td>
                        <form action="update_cart.php" method="POST" class="d-flex align-items-center">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <input type="number" name="quantity" class="form-control w-50" value="<?= $item['quantity'] ?>" min="1">
                            <button type="submit" class="btn btn-primary btn-sm ms-2">Update</button>
                        </form>
                    </td>
                    <td>$<?= $item['price'] * $item['quantity'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <a href="shop.php" class="btn btn-secondary">Return To Shop</a>
            <a href="clear_cart.php" class="btn btn-danger">Clear Cart</a>
        </div>
    </section>

    <!-- Coupon and Total -->
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <form class="d-flex">
                    <input type="text" class="form-control" placeholder="Coupon Code">
                    <button class="btn btn-primary ms-2">Apply Coupon</button>
                </form>
            </div>
            <div class="col-md-6 text-end">
                <p>Subtotal: <strong>$<?= $subtotal ?></strong></p>
                <p>Shipping: <strong>Free</strong></p>
                <p>Total: <strong>$<?= $subtotal ?></strong></p>
                <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container d-flex justify-content-between">
            <div>
                <h5>Exclusive</h5>
                <p>Get 10% off your first order</p>
                <form>
                    <input type="email" class="form-control" placeholder="Enter your email">
                </form>
            </div>
            <div>
                <h5>Support</h5>
                <p>111 Bijoy Sarani, Dhaka</p>
                <p>exclusive@gmail.com</p>
                <p>+88015-88888-9999</p>
            </div>
            <div>
                <h5>Quick Link</h5>
                <a href="#" class="text-decoration-none text-white d-block">Privacy Policy</a>
                <a href="#" class="text-decoration-none text-white d-block">Terms Of Use</a>
                <a href="#" class="text-decoration-none text-white d-block">FAQ</a>
                <a href="#" class="text-decoration-none text-white d-block">Contact</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
