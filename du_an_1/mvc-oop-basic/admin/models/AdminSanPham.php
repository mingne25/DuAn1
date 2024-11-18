<?php
 class AdminSanPham{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllSanPham(){
        try {
            $sql = "
                SELECT 
                    p.product_id, 
                    p.sku, 
                    p.name_sp, 
                    p.description, 
                    p.status, 
                    p.created_at,
                    v.product_variant_id, 
                    v.img_sp, 
                    v.price, 
                    v.quantity, 
                    v.color_id, 
                    v.size_id,
                    c.category_id
                FROM products p
                LEFT JOIN productcategories c ON p.product_id = c.product_id
                LEFT JOIN productvariants v ON p.product_id = v.product_id
            ";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }

    public function insertSanPham($name_sp, $price, $price_km, $quantity, $created_at, $category_id, $statuss, $mo_ta, $img){
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
                ':img' => $img
            ]);

            return true;
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }

 }
?>