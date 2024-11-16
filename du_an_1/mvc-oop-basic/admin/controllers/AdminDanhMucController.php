<?php 
    class AdminDanhMucController {

        public $modelDanhMuc;
        public function __construct()
        {
            $this->modelDanhMuc = new AdminDanhMuc();
        }

        public function danhSachDanhMuc() {

            $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
            require_once './views/danhmuc/listDanhMuc.php';
        }

        public function formAddDanhMuc() {
            // Hàm này dùng để hiển thị form nhập
            require_once './views/danhmuc/addDanhMuc.php';
        }

        public function postAddDanhMuc() {
            // Hàm này dùng để thêm dữ liệu
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name_dm = $_POST['name_dm'];
                $mo_ta = $_POST['mo_ta'];

                // tao 1 mang trong de chua du lieu
                $errors = [];
                if(empty($name_dm)){
                    $errors['name_dm'] = 'Tên danh mục không được để trống!';
                }

                // neu k co loi thi tien hanh them danh muc
                if(empty($errors)){
                    // neu k co loi thi tien hanh them danh muc
                    // var_dump('oke');
                    $this->modelDanhMuc->insertDanhMuc($name_dm, $mo_ta);
                    header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
                    exit();
                }else{
                    // tra ve form va loi
                require_once './views/danhmuc/AddDanhMuc.php';

                }

            // kiem tra xem du lieu co phai dc submit len k
        }
    }

    public function formEditDanhMuc(){
        // Hàm này dùng để hiển thị form nhập
        // Lay ra thong tin cua danh muc can sua
        $id = $_GET['category_id'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);
        if ($danhMuc){
            require_once './views/danhmuc/editDanhMuc.php';
        }else{
            header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
            exit();
        }
        require_once './views/danhmuc/editDanhMuc.php';
    }

    public function postEditDanhMuc() {
        // Hàm này dùng để thêm dữ liệu
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['category_id'];
            $name_dm = $_POST['name_dm'];
            $mo_ta = $_POST['mo_ta'];

            // tao 1 mang trong de chua du lieu
            $errors = [];
            if(empty($name_dm)){
                $errors['name_dm'] = 'Tên danh mục không được để trống!';
            }

            // neu k co loi thi tien hanh sua danh muc
            if(empty($errors)){
                // neu k co loi thi tien hanh sau danh muc
                // var_dump('oke');
                $this->modelDanhMuc->updateDanhMuc($id, $name_dm, $mo_ta);
                header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
                exit();
            }else{
                // tra ve form va loi
                $danhMuc = ['category_id' => $id, 'name_dm' => $name_dm, 'mo_ta' => $mo_ta];
            require_once './views/danhmuc/editDanhMuc.php';

            }

        // kiem tra xem du lieu co phai dc submit len k
        }
    }

    public function deleteDanhMuc (){
        // Hàm này dùng để xóa dữ liệu
        $id = $_GET['category_id'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);

        if($danhMuc) {
            $this->modelDanhMuc->destroyDanhMuc($id);
        }

        header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
        exit();
    }
}
?>