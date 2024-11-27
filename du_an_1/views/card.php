<?php
include 'includes/header.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Hiển thị giỏ hàng
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        echo "<p>{$product['name']} - {$product['price']}đ</p>";
    }
    echo "<a href='checkout.php' class='btn-primary'>Thanh Toán</a>";
} else {
    echo "<p>Giỏ hàng rỗng!</p>";
}

include 'includes/footer.php';
?>
