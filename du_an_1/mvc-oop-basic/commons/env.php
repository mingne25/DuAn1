<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost:3000/du_an_1/mvc-oop-basic/');

// duong dan vao admin
define('BASE_URL_ADMIN'       , 'http://localhost:3000/du_an_1/mvc-oop-basic/admin/');

define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'faeshop');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');
