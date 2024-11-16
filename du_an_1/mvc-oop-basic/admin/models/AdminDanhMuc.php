<?php
 class AdminDanhMuc{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllDanhMuc(){
        try {
            //code...
            $sql = "SELECT * FROM categories";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }

    public function insertDanhMuc($name_dm, $mo_ta){
        try {
            $sql = 'INSERT INTO categories (name_dm, mo_ta)
                    VALUES (:name_dm, :mo_ta)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':name_dm' => $name_dm,
                ':mo_ta' => $mo_ta
            ]);

            return true;
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }

    public function getDetailDanhMuc($id){
        try {
            $sql = 'SELECT * FROM categories WHERE category_id= :category_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':category_id' => $id
            ]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }

    public function updateDanhMuc($id, $name_dm, $mo_ta){
        try {
            $sql = 'UPDATE categories SET name_dm = :name_dm, mo_ta = :mo_ta WHERE category_id = :category_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':name_dm' => $name_dm,
                ':mo_ta' => $mo_ta,
                ':category_id' => $id
            ]);

            return true;
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }

    public function destroyDanhMuc($id){
        try {
            $sql = 'DELETE FROM categories WHERE category_id = :category_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':category_id' => $id
            ]);

            return true;
        } catch (Exception $e) {
            echo " Lỗi" . $e->getMessage();
        }
    }
 }
?>