<?php
define('BASE_URL', 'DuAn1'); // Đường dẫn gốc của dự án

// Hàm để lấy đường dẫn ảnh đầy đủ
function get_image_url($path) {
    return BASE_URL . $path;
}

// Wishlist data
$wishlist = [
    [
        "name" => "Bộ quần áo ngủ", 
        "current_price" => 960, 
        "original_price" => 1160, 
        "image" => get_image_url("/du_an_1/views/img/logo.jpg"), 
        "discount" => "35%"
    ],
    [
        "name" => "RGB liquid CPU Cooler", 
        "current_price" => 1960, 
        "image" => get_image_url("/du_an_1/img/2.jpg")
    ],
    [
        "name" => "GPII Shooter USB Gamepad", 
        "current_price" => 550, 
        "image" => get_image_url("/du_an_1/img/3.jpg")
    ],
    [
        "name" => "Quilted Satin Jacket", 
        "current_price" => 750, 
        "image" => get_image_url("/du_an_1/img/4.jpg")
    ]
];

// Just For You products
$justForYou = [
    [
        "name" => "ASUS FHD Gaming Laptop", 
        "current_price" => 960, 
        "original_price" => 1160, 
        "image" => get_image_url("/du_an_1/img/5.jpg"), 
        "discount" => "35%"
    ],
    [
        "name" => "IPS LCD Gaming Monitor", 
        "current_price" => 1160, 
        "image" => get_image_url("/du_an_1/img/6.jpg")
    ],
    [
        "name" => "HAVIT HV-G92 Gamepad", 
        "current_price" => 560, 
        "image" => get_image_url("/du_an_1/img/7.jpg"), 
        "badge" => "NEW"
    ],
    [
        "name" => "AK-900 Wired Keyboard", 
        "current_price" => 200, 
        "image" => get_image_url("/du_an_1/img/8.jpg")
    ]
];

// Handling add to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        echo "<script>alert('Added {$_POST['item_name']} to cart!');</script>";
    }
    if (isset($_POST['move_to_bag'])) {
        echo "<script>alert('Moved all wishlist items to bag!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-light p-3 border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="<?= get_image_url('/du_an_1/img/logo.jpg') ?>" alt="logo" width="150">
                </div>
                <nav class="nav">
                    <a class="nav-link" href="#">Trang chủ</a>
                    <a class="nav-link" href="#">Giới thiệu</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Sign Up</a>
                </nav>
                <div class="d-flex align-items-center">
                    <input class="form-control me-2" type="text" placeholder="What are you looking for?">
                    <a href="#" class="me-3">❤️</a>
                    <a href="#">🛒</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Wishlist Section -->
    <section class="wishlist-section container my-5">
        <h2 class="mb-4">Wishlist (<?= count($wishlist) ?>)</h2>
        <div class="row">
            <?php foreach ($wishlist as $item): ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <?php if (!empty($item['discount'])): ?>
                        <div class="badge bg-danger text-white position-absolute"><?= $item['discount'] ?></div>
                    <?php endif; ?>
                    <img src="<?= $item['image'] ?>" class="card-img-top" alt="<?= $item['name'] ?>" height="150px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['name'] ?></h5>
                        <p class="card-text">
                            <span class="text-danger">$<?= $item['current_price'] ?></span>
                            <?php if (!empty($item['original_price'])): ?>
                                <span class="text-muted text-decoration-line-through">$<?= $item['original_price'] ?></span>
                            <?php endif; ?>
                        </p>
                        <form method="POST">
                            <input type="hidden" name="item_name" value="<?= $item['name'] ?>">
                            <button type="submit" name="add_to_cart" class="btn btn-primary w-100">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <form method="POST">
            <button type="submit" name="move_to_bag" class="btn btn-success w-100">Move All To Bag</button>
        </form>
    </section>

    <!-- Just For You Section -->
    <section class="just-for-you-section container my-5">
        <h2 class="mb-4">Just For You</h2>
        <div class="row">
            <?php foreach ($justForYou as $item): ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <?php if (!empty($item['discount'])): ?>
                        <div class="badge bg-danger text-white position-absolute"><?= $item['discount'] ?></div>
                    <?php elseif (!empty($item['badge'])): ?>
                        <div class="badge bg-info text-white position-absolute"><?= $item['badge'] ?></div>
                    <?php endif; ?>
                    <img src="<?= $item['image'] ?>" class="card-img-top" alt="<?= $item['name'] ?>" height="150px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['name'] ?></h5>
                        <p class="card-text">
                            <span class="text-danger">$<?= $item['current_price'] ?></span>
                            <?php if (!empty($item['original_price'])): ?>
                                <span class="text-muted text-decoration-line-through">$<?= $item['original_price'] ?></span>
                            <?php endif; ?>
                        </p>
                        <form method="POST">
                            <input type="hidden" name="item_name" value="<?= $item['name'] ?>">
                            <button type="submit" name="add_to_cart" class="btn btn-primary w-100">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Exclusive</h4>
                    <p>Get 10% off your first order</p>
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="col-md-3">
                    <h4>Support</h4>
                    <p>111 Bijoy sarani, Dhaka</p>
                    <p>exclusive@gmail.com</p>
                    <p>+88015-88888-9999</p>
                </div>
                <div class="col-md-3">
                    <h4>Quick Link</h4>
                    <a href="#" class="text-white d-block">Privacy Policy</a>
                    <a href="#" class="text-white d-block">Terms Of Use</a>
                    <a href="#" class="text-white d-block">FAQ</a>
                    <a href="#" class="text-white d-block">Contact</a>
                </div>
                <div class="col-md-3">
                    <h4>Download App</h4>
                    <p>Save $3 with App New User Only</p>
                    <a href="#" class="btn btn-light">Google Play</a>
                    <a href="#" class="btn btn-light">App Store</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html
