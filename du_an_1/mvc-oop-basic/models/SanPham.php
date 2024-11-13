<?php 
    class SanPham {
        public $conn; 

        public function __construct()
        {
            $this -> conn = connectDB();
        }

        public function getAllProduct(){
            try {
                //code...
                $sql = 'SELECT * FROM Products';

                $stmt = $this -> conn->prepare($sql);
                $stmt->execute();

                return $stmt ->fetchAll();
            } catch (Exception $e) {
                //throw $th;
                echo "loi ". $e-> getMessage();
            }
        }
    }
?>