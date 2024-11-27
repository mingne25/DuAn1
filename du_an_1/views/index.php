<?php
  include 'header.php';
?>

<section class="banner">
  <img src="/DuAn1-main/du_an_1/mvc-oop-basic/img/slideshow_2.webp" alt="">
  <div class="container">
    <h1>Phong cách lịch lãm, dành riêng cho bạn</h1>
    <p>Khám phá những bộ sưu tập thời trang nam ấn tượng với giá ưu đãi.</p>
    <button class="btn-primary">Khám phá ngay</button>
  </div>
</section>

<section class="products">
  <div class="container">
    <h2>Sản Phẩm Nổi Bật</h2>
    <div class="product-list">
      <?php
        $featuredProducts = [
          ["img" => "2.jpg", "name" => "Áo hoodie", "price" => "500,000đ"],
          ["img" => "4.jpg", "name" => "Bộ Áo Quần NY", "price" => "1,200,000đ"],
          ["img" => "6.jpg", "name" => "Áo hoodie mỏng", "price" => "800,000đ"],
        ];

        foreach ($featuredProducts as $product) {
          echo "<div class='product-item'>
                  <img src='/DuAn1-main/du_an_1/mvc-oop-basic/img/{$product['img']}' alt='{$product['name']}'>
                  <h3>{$product['name']}</h3>
                  <p>Giá: {$product['price']}</p>
                  <button class='btn-secondary'>Xem chi tiết</button>
                </div>";
        }
      ?>
    </div>
  </div>
</section>

<?php
  include 'footer.php';
?>
