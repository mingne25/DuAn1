<?php 

class HomeController
{
    public $modelSanPham;
    public $modelTaiKhoan;

    public function __construct()
    {
       $this-> modelSanPham = new sanPham();
       $this-> modelTaiKhoan = new taiKhoan();
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
            $id = $_GET['id_san_pham'];
            $sanPham = $this->modelSanPham->getDetailSanPham($id);

        }else{
            header("location:". BASE_URL);
                exit();
        }
            $listAnhSanPham =$this->modelSanPham->getListAnhSanPham($id);
            
            $listBinhLuan = $this->modelSanPham->getBinhLuanFromSanPham($id);
            
            $listSanPhamCungDanhMuc = $this->modelSanPham->getListSanPhamDanhMuc($sanPham['danh_muc_id']);
            // var_dump($listSanPhamCungDanhMuc);die;
            if($sanPham){
                require_once "./views/detailSanPham.php";
                
            }else{
                header("location:".BASE_URL);
                    exit();
            }
    }

    public function formLogin(){
        require_once './views/auth/formLogin.php';
        deleteSessionError();
    }
    public function postLogin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // Xử lí kiểm tra thông tin đăng nhập
            $user = $this->modelTaiKhoan->checkLogin($email, $password);
            // var_dump($user);
            // die;
            if ($user == $email) { // Trường hợp đăng nhập thành công
                //Lưu thông tin vào session
                $_SESSION['user_client'] = $user;
                header( "Location: " . BASE_URL);
                exit();
            }else{
                //Lỗi thig lưu lỗi vào session
                $_SESSION['error'] = $user;
                // var_dump($_SESSION['error']);
                $_SESSION['flash'] = true;
                header("Location: ".BASE_URL . "?act=login");
                exit();
            }
        }
    }

    public function gioHang(){
        if (isset($_SESSION['user_client'])) {
            $mail = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);

            $gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);
            if(!$gioHang){
                $gioHangId = $this->modelGioHang->addGioHang($mail['id']);
                $gioHang = ['id'=>$gioHangId];
                $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }else{
                $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }

            require_once './views/gioHang.php';
        }else{
            header("Location: " . BASE_URL . "?act=login");
        }
        
    }


    public function thanhToan(){
        if (isset($_SESSION['user_client'])) {
            $user = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);

            $gioHang = $this->modelGioHang->getGioHangFromUser($user['id']);
            if(!$gioHang){
                $gioHangId = $this->modelGioHang->addGioHang($user['id']);
                $gioHang = ['id'=>$gioHangId];
                $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }else{
                $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }

            require_once './views/thanhToan.php';
        }else{
            var_dump('Chưa đăng nhập');die;
        }
        
    }
    public function postThanhToan(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
        }
    }
    
}