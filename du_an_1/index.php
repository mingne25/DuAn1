<?php 
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models
require_once './models/sanPham.php';
require_once './models/taiKhoan.php';

// Route
$act = $_GET['act'] ?? '/';
// var_dump($_GET['act']);die();

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->home(),

    // 'thanh-toan' =>(new HomeController())->thanhToan(),
    // 'xu-ly-thanh-toan' =>(new HomeController())->postThanhToan(),
    
    'chi-tiet-san-pham' => (new HomeController())->chiTietSanPham(),
    'login' => (new HomeController())->formLogin(),
    'check-login' => (new HomeController())->postLogin(),
};