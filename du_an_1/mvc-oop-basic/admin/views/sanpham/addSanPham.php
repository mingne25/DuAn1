<!-- header -->
<?php include './views/layout/header.php'; ?>
<!-- end header -->
<!-- Navbar -->
<?php include './views/layout/navbar.php'; ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý danh sách sản phẩm </h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= BASE_URL_ADMIN . '?act=them-san-pham' ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body row">
                  <div class="form-group col-12">
                    <label >Tên sản phẩm </label>
                    <input type="text" class="form-control" name="name_sp" placeholder="Nhập tên sản phẩm">
                    <?php if(isset($_SESSION['error']['name_sp'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['name_sp'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-6">
                    <label >Giá sản phẩm </label>
                    <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm">
                    <?php if(isset($_SESSION['error']['price'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['price'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-6">
                    <label >Giá khuyến mãi </label>
                    <input type="number" class="form-control" name="price_km" placeholder="Nhập giá khuyến mãi">
                    <?php if(isset($_SESSION['error']['price_km'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['price_km'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-6">
                    <label >Hình ảnh </label>
                    <input type="file" class="form-control" name="img">
                    <?php if(isset($_SESSION['error']['img'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['img'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-6">
                    <label >Album ảnh </label>
                    <input type="file" class="form-control" name="img_array[]" multiple>
                  </div>
                  <div class="form-group col-6">
                    <label >Số lượng </label>
                    <input type="data" class="form-control" name="quantity" placeholder="Nhập số lượng">
                    <?php if(isset($_SESSION['error']['quantity'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['quantity'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-6">
                    <label >ngày nhập </label>
                    <input type="date" class="form-control" name="created_at" placeholder="Nhập hình ảnh">
                    <?php if(isset($_SESSION['error']['created_at'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['created_at'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-6">
                    <label >Danh mục </label>
                    <?php if(empty($listDanhMuc)): ?>
                    <p class="text-danger">Không có danh mục nào để hiển thị!</p>
                      <?php else: ?>
                          <select class="form-control" name="category_id">
                              <option selected disabled>Chọn danh mục sản phẩm</option>
                              <?php foreach($listDanhMuc as $danhMuc): ?>
                                  <option value="<?= $danhMuc['category_id'] ?>"><?= $danhMuc['name_dm'] ?></option>
                              <?php endforeach; ?>
                          </select>
                      <?php endif; ?>
                  </div>
                  <div class="form-group col-6">
                    <label >Trạng thái </label>
                    <select class="form-control" name="statuss" id="exampleFormControlSelect1">
                      <option selected disabled>Chọn danh mục sản phẩm </option>
                      <option value="1">Còn sản phẩm </option>
                      <option value="2">Hết sản phẩm </option>
                    </select>
                    <?php if(isset($_SESSION['error']['statuss'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['statuss'] ?></p>
                      <?php } ?>
                  </div>
                  <div class="form-group col-12">
                    <label >Mô tả </label>
                    <textarea class="form-control" name="mo_ta" placeholder="Nhập mô tả"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- footer -->
<?php include './views/layout/footer.php'; ?>
<!-- end footer -->
</body>
</html>