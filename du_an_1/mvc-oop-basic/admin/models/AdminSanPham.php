<?php

 class AdminSanPham{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllSanPham() {
        try {
            $sql = 'SELECT products.*, categories.name_dm
                    FROM products
                    INNER JOIN categories ON products.category_id = categories.category_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); // Trả về danh sách sản phẩm
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }    

    public function insertSanPham($name_sp, $price, $price_km, $quantity, $created_at, $category_id, $statuss, $mo_ta, $img) {
        try {
            $sql = 'INSERT INTO products (name_sp, price, price_km, quantity, created_at, category_id, statuss, mo_ta, img)
                    VALUES (:name_sp, :price, :price_km, :quantity, :created_at, :category_id, :statuss, :mo_ta, :img)';
            
            $stmt = $this->conn->prepare($sql);
    
            $stmt->execute([
                ':name_sp' => $name_sp,
                ':price' => $price,
                ':price_km' => $price_km,
                ':quantity' => $quantity,
                ':created_at' => $created_at,
                ':category_id' => $category_id,
                ':statuss' => $statuss,
                ':mo_ta' => $mo_ta,
                ':img' => $img,
            ]);
    
            return $this->conn->lastInsertId(); // Thành công
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    
 }
?>
