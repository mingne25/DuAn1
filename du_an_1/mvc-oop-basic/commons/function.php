<?php

// Kết nối CSDL qua PDO
function connectDB() {
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}

// them file
function uploadFile($file, $folderUpload) {
    // Đảm bảo thư mục gốc đã được định nghĩa
    if (!defined('PATH_ROOT')) {
        die('PATH_ROOT is not defined.');
    }

    // Kiểm tra và đảm bảo thư mục đích tồn tại
    $uploadDir = PATH_ROOT . $folderUpload;
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Tạo thư mục nếu chưa tồn tại
    }

    // Xử lý tên file để tránh ký tự đặc biệt
    $fileName = time() . "_" . preg_replace('/[^A-Za-z0-9_.-]/', '_', $file['name']);
    $pathStorage = $folderUpload . $fileName;

    $from = $file['tmp_name']; // File tạm từ form
    $to = $uploadDir . $fileName; // Đích đến

    // Di chuyển file
    if (move_uploaded_file($from, $to)) {
        return $pathStorage; // Trả về đường dẫn file lưu trữ
    }

    // Trả về null nếu upload thất bại
    return null;
}

    
// xoa file
    function deleteFile($file){
        $pathDelete = PATH_ROOT . $file;
        if (file_exists($pathDelete)){
            unlink($pathDelete);
        }
    }

    // xóa session sau khi load trang
   function deleteSessionError(){
        if(isset($_SESSION['flash'])){
            // Hủy session sau khi đã tải trang
            unset($_SESSION['flash']);
            session_unset();
            session_destroy();
        }
    }
// debug
