<?php 

class HomeController
{
    public $modelSanPham;
    public function __construct()
    {
        $this->modelSanPham = new SanPham(); 
    }

    public function home() {
        echo "Day la trang home";
    }
    public function trangChu(){
        echo " day la trang chu";
    }
    public function danhSachSanPham(){
        // echo " day la danh sach san pham";
        $listProduct =$this->modelSanPham->getAllProduct();
        // var_dump($listProduct); die();
        require_once './views/listProduct.php';
    }

}