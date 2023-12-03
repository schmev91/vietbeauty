<div class="d-flex gap-3">
    <div class="fields flex-grow-1 ">
        <!-- fields start -->
        <!-- TÊN DANH MỤC -->
        <?php initInput('text', 'ten_th', 'Tên danh mục') ?>


        <!-- INPUT UPLOAD PRODUCTIMG -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh sản phẩm</label>
            <input id="upload-brandImg" name="hinh_th" class="form-control" type="file" id="formFile">
        </div>

        <!-- fields end -->
    </div>
    <label for="upload-brandImg" class=" flex-grow-0 " style="height: fit-content;">
        <img id="uploadedImage" class="rounded-2" src="views\asset\img\general\default_product.png" style="max-width: 6rem; object-fit: cover;" alt="">
    </label>
</div>
<!-- LOADING UPLOADED PRODUCT IMAGE TO VIEW -->
<script>
    document.getElementById('upload-brandImg').addEventListener('change', function(event) {
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