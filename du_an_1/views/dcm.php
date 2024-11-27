<?php
$products = [
    ["img" => "img/15.jpg", "name" => "Sản phẩm 1", "price" => "200,000đ"],
    ["img" => "img/product2.jpg", "name" => "Sản phẩm 2", "price" => "300,000đ"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nefertiti Fashion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #f8f9fa;
        }
        .banner img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
        .product-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f4f4f4;
        }
        .product-card img {
            height: 250px;
            object-fit: cover;
        }
        footer {
            background-color: #343a40;
            color: white;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="navbar-brand fw-bold">NEFERTITI</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div>
                <a href="#" class="btn btn-outline-secondary me-2">Account</a>
                <a href="#" class="btn btn-outline-secondary">Cart</a>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <div class="banner my-4">
        <img src="banner.jpg" alt="Banner">
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3">
                <h5>Categories</h5>
                <div class="category-list">
                    <button class="btn btn-outline-primary w-100 mb-2">Sơ mi họa tiết</button>
                    <button class="btn btn-outline-primary w-100 mb-2">Váy dạ hội</button>
                    <button class="btn btn-outline-primary w-100">Thời trang công sở</button>
                </div>
                <h5 class="mt-4">Filter</h5>
                <p>12 products</p>
            </aside>

            <!-- Product Grid -->
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-4 mb-4">
                            <div class="product-card p-3 text-center">
                                <img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>" class="w-100">
                                <h6 class="mt-2"><?= $product['name']; ?></h6>
                                <p class="text-danger fw-bold"><?= $product['price']; ?></p>
                                <a href="#" class="btn btn-primary w-100">Mua ngay</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Nefertiti Fashion</h5>
                    <p>98 Tây Sơn, Hà Nội</p>
                    <p>Email: cskh@nefertiti.vn</p>
                    <p>Hotline: 09 1234 0789</p>
                </div>
                <div class="col-md-3">
                    <h5>Policies</h5>
                    <a href="#">Return Policy</a><br>
                    <a href="#">Order Policy</a>
                </div>
                <div class="col-md-3">
                    <h5>Customer Service</h5>
                    <a href="#">Contact Us</a><br>
                    <a href="#">Payment Methods</a>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <iframe src="https://www.facebook.com/fpt.poly.php" width="100%" height="150" style="border:none;"></iframe>
                </div>
            </div>
            <p class="text-center mt-3">© Nefertiti 2024. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
