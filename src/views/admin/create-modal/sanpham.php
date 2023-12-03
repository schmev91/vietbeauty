<div class="d-flex gap-3">
    <div class="fields flex-grow-1 ">
        <!-- fields start -->
        <!-- TÊN SẢN PHẨM -->
        <?php initInput('text', 'ten_sp', 'Tên sản phẩm') ?>

        <!-- ĐƠN GIÁ -->
        <?php initInput('number', 'dongia', 'Đơn giá', 'fa-solid fa-dollar-sign') ?>

        <!-- DANH MỤC -->
        <div class="input-group mb-2">
            <span class="input-group-text ">Danh mục</span>
            <select class="form-select" required name="ma_dm">
                <option disabled selected>o((⊙﹏⊙))o.</option>
                <?php
                // code
                foreach ($listDanhmuc as $dm) {

                ?>
                    <!-- HTML -->
                    <option value="<?= $dm['ma_dm'] ?>"><?= $dm['ten_dm'] ?></option>

                <?php } ?>

            </select>
        </div>

        <!-- THƯƠNG HIỆU -->
        <div class="input-group mb-2">
            <span class="input-group-text ">Thương hiệu</span>
            <select class="form-select" required name="ma_th">
                <option disabled selected>...(*￣０￣)ノ</option>
                <?php
                // code
                foreach ($listThuonghieu as $th) {

                ?>
                    <!-- HTML -->
                    <option value="<?= $th['ma_th'] ?>"><?= $th['ten_th'] ?></option>

                <?php } ?>

            </select>
        </div>

        <!-- INPUT UPLOAD PRODUCTIMG -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh sản phẩm</label>
            <input id="upload-productImg" name="anh" class="form-control" type="file" id="formFile">
        </div>

        <!-- MÔ TẢ -->
        <div class="form-floating">
            <textarea class="form-control" name="mota" placeholder="Nhập mô tả cho sản phẩm" id="mota" style="height: 100px"></textarea>
            <label for="mota" class="text-secondary">Mô tả</label>
        </div>
        <!-- fields end -->
    </div>
    <label for="upload-productImg" class=" flex-grow-0 " style="height: fit-content;">
        <img id="uploadedImage" class="rounded-2" src="views\asset\img\general\default_product.png" style="max-width: 6rem; object-fit: cover;" alt="">
    </label>
</div>
<!-- LOADING UPLOADED PRODUCT IMAGE TO VIEW -->
<script>
    document.getElementById('upload-productImg').addEventListener('change', function(event) {
        const file = event.target.files[0];

        if (file) {
            // Đọc dữ liệu ảnh và chuyển đổi sang Data URL
            const reader = new FileReader();
            reader.onload = function(e) {
                const dataURL = e.target.result;

                // Hiển thị ảnh trên trang web
                document.getElementById('uploadedImage').src = dataURL;
            };

            reader.readAsDataURL(file);
        }
    });
</script>