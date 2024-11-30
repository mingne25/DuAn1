<?php 

class HomeController
{
    public $modelSanPham;

    public function __construct()
    {
       $this-> modelSanPham = new sanPham();
    }

    public function home() {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once './views/home.php';
    }
    public function trangchu() {
        echo "trangchu đây";
    }

    public function chiTietSanPham(){
        $id = $_GET['id_san_pham'];
        $sanPham = $this->modelSanPham->getDetailSanPham($id);
        // var_dump($sanPham);die;
        $listAnhSanPham =$this->modelSanPham->getListAnhSanPham($id);
        $listBinhLuan = $this->modelSanPham->getBinhLuanFromSanPham($id);
        // var_dump($listAnhSanPham);die;
        if($sanPham){
            require_once "./views/detailSanPham.php";
            
        }else{
            header("location:".BASE_URL);
                exit();
        }
    }

    
}