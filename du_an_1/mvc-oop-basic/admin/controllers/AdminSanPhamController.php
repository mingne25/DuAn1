<?php 
    class AdminSanPhamController {

        public $modelSanPham;
        public $modelDanhMuc;
        public function __construct()
        {
            $this->modelSanPham = new AdminSanPham();
            $this->modelDanhMuc = new AdminDanhMuc();
        }

        public function danhSachSanPham() {

            $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
            require_once './views/sanpham/listSanPham.php';
        }

        public function formAddSanPham() {
            // Hàm này dùng để hiển thị form nhập
            require_once './views/sanpham/addSanPham.php';
        }

        public function postAddSanPham() {
            // Hàm này dùng để thêm dữ liệu
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name_sp = $_POST['name_sp'];
                $price = $_POST['price'];
                $price_km = $_POST['price_km'];
                $quantity = $_POST['quantity'];
                $created_at = $_POST['created_at'];
                $category_id = $_POST['category_id'] ?? null;
                $status = $_POST['statuss'];
                $mo_ta = $_POST['mo_ta'];

                $img = $_FILES['img'] ?? null;

                // luu hinh anh vao
                $file_thumb = uploadFile($img, './upload/');


                // mang hinh anh
                $img_array = $_FILES['img_array'] ?? null;

                // tao 1 mang trong de chua du lieu
                $errors = [];

                if(empty($name_sp)){
                    $errors['name_sp'] = 'Tên sản phẩm không được để trống!';
                }

                if(empty($price)){
                    $errors['price'] = 'Giá sản phẩm không được để trống!';
                }

                if(empty($price_km)){
                    $errors['price_km'] = 'Giá khuyến mãi không được để trống!';
                }

                if(empty($quantity)){
                    $errors['quantity'] = 'Số lượng sản phẩm không được để trống!';
                }

                if(empty($created_at)){
                    $errors['created_at'] = 'Ngày nhập sản phẩm không được để trống!';
                }

                if(empty($category_id)){
                    $errors['category_id'] = 'Danh mục sản phẩm phải chọn!';
                }

                if(empty($status)){
                    $errors['statuss'] = 'Trạng thái sản phẩm phải chọn!';
                }

                // neu k co loi thi tien hanh them sp
                if(empty($errors)){
                    // neu k co loi thi tien hanh them sp
                    // var_dump('oke');
                    $this->modelSanPham->insertSanPham($name_sp,
                                                        $price, 
                                                        $price_km, 
                                                        $quantity,
                                                        $created_at,
                                                        $category_id,
                                                        $status,
                                                        $mo_ta,
                                                        $file_thumb
                                                    );
                    header("location: ".BASE_URL_ADMIN.'?act=san-pham');
                    exit();
                }else{
                    // tra ve form va loi
                require_once './views/sanpham/addSanPham.php';
            }
        }
    }

    // public function formEditDanhMuc(){
    //     // Hàm này dùng để hiển thị form nhập
    //     // Lay ra thong tin cua danh muc can sua
    //     $id = $_GET['category_id'];
    //     $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);
    //     if ($danhMuc){
    //         require_once './views/danhmuc/editDanhMuc.php';
    //     }else{
    //         header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
    //         exit();
    //     }
    //     require_once './views/danhmuc/editDanhMuc.php';
    // }

    // public function postEditDanhMuc() {
    //     // Hàm này dùng để thêm dữ liệu
    //     if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //         $id = $_POST['category_id'];
    //         $name_dm = $_POST['name_dm'];
    //         $mo_ta = $_POST['mo_ta'];

    //         // tao 1 mang trong de chua du lieu
    //         $errors = [];
    //         if(empty($name_dm)){
    //             $errors['name_dm'] = 'Tên danh mục không được để trống!';
    //         }

    //         // neu k co loi thi tien hanh sua danh muc
    //         if(empty($errors)){
    //             // neu k co loi thi tien hanh sau danh muc
    //             // var_dump('oke');
    //             $this->modelDanhMuc->updateDanhMuc($id, $name_dm, $mo_ta);
    //             header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
    //             exit();
    //         }else{
    //             // tra ve form va loi
    //             $danhMuc = ['category_id' => $id, 'name_dm' => $name_dm, 'mo_ta' => $mo_ta];
    //         require_once './views/danhmuc/editDanhMuc.php';

    //         }

    //     // kiem tra xem du lieu co phai dc submit len k
    //     }
    // }

    // public function deleteDanhMuc (){
    //     // Hàm này dùng để xóa dữ liệu
    //     $id = $_GET['category_id'];
    //     $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);

    //     if($danhMuc) {
    //         $this->modelDanhMuc->destroyDanhMuc($id);
    //     }

    //     header("location: ".BASE_URL_ADMIN.'?act=danh-muc');
    //     exit();
    // }
}
?>