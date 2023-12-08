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
            "text",
            "username",
            "Tên đăng nhập",
            "fa-solid fa-right-to-bracket",
            isset($usernameErr) ? $usernameErr : null
        ); ?>

        <!-- HỌ VÀ TÊN -->
        <div class="input-group input-group mb-2">
            <input required name="firstName" type="text" class="form-control  <?= isset($lastNameErr) ? $lastNameErr : null ?>" placeholder="<?= isset($lastNameErr) ? $lastNameErr : 'Họ' ?>" aria-describedby="inputGroup-sizing-sm">

            <input required name="lastName" type="text" class="form-control  <?= isset($firstNameErr) ? $firstNameErr : null ?>" placeholder="<?= isset($firstNameErr) ? $firstNameErr : 'Tên' ?>" aria-describedby="inputGroup-sizing-sm">
        </div>

        <!-- EMAIL -->
        <?php initInput(
            "text",
            "email",
            "maev@hogwarts.edu.us",
            "fa-solid fa-envelope",
            isset($emailErr) ? $emailErr : null
        ); ?>

        <!-- SỐ ĐIỆN THOẠI -->
        <?php initInput(
            "number",
            "phone",
            "Số điện thoại",
            "fa-solid fa-phone",
            isset($phoneErr) ? $phoneErr : null
        ); ?>

        <!-- MẬT KHẨU -->
        <?php initInput(
            "text",
            "password",
            "Mật khẩu",
            "fa-solid fa-lock",
            isset($passwordErr) ? $passwordErr : null
        ); ?>

        <!-- ĐỊA CHỈ -->
        <?php initInput(
            "text",
            "address",
            "Địa chỉ",
            "fa-solid fa-location-dot"
        ); ?>

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