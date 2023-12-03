<?php

if (isset($errors)) {
    extract($errors);
}


?>
<div class="d-flex gap-3">
    <div class="fields flex-grow-1 ">
        <!-- fields start -->
        <!-- TÊN ĐĂNG NHẬP -->
        <?php initInput(
            "username",
            "Tên đăng nhập",
            "fa-solid fa-right-to-bracket",
            isset($username) ? $username : null
        ); ?>
        <!-- HỌ VÀ TÊN -->
        <div class="input-group input-group mb-2">
            <input required name="firstName" type="text" class="form-control  <?= isset($lastName) ? $lastName : null ?>" placeholder="<?= isset($lastName) ? $lastName : 'Họ' ?>" aria-describedby="inputGroup-sizing-sm">

            <input required name="lastName" type="text" class="form-control  <?= isset($firstName) ? $firstName : null ?>" placeholder="<?= isset($lastName) ? $lastName : 'Tên' ?>" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- EMAIL -->
        <?php initInput(
            "email",
            "maev@hogwarts.edu.us",
            "fa-solid fa-envelope",
            isset($email) ? $email : null
        ); ?>

        <!-- SỐ ĐIỆN THOẠI -->
        <?php initInput(
            "phone",
            "Số điện thoại",
            "fa-solid fa-phone",
            isset($phone) ? $phone : null
        ); ?>

        <!-- MẬT KHẨU -->
        <?php initInput(
            "password",
            "Mật khẩu",
            "fa-solid fa-lock",
            isset($password) ? $password : null
        ); ?>

        <!-- ĐỊA CHỈ -->
        <?php initInput("address", "Địa chỉ", "fa-solid fa-location-dot"); ?>

        <!-- UPLOAD AVATAR INPUT -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Avatar</label>
            <input id="upload-avatar" name="upload-avatar" class="form-control" type="file" id="formFile">
        </div>
        <!-- fields end -->
    </div>
    <label for="upload-avatar" class=" flex-grow-0 " style="height: fit-content;">
        <img id="uploadedImage" src="views\asset\img\general\default_avatar.png" style="max-width: 6rem; border-radius: 50%; object-fit: cover;" alt="">
    </label>

    <!-- LOADING UPLOADED AVATAR TO VIEW -->
    <script>
        document.getElementById('upload-avatar').addEventListener('change', function(event) {
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
</div>