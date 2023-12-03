<?php initHeader('Đăng ký', 'register') ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">


<main>

    <div class="container">
        <form id="registerForm" class="form__section" method="post" action="index.php?controller=user&action=registerRequest" enctype="multipart/form-data">
            <div class="form__section-container">
                <div class="form__section-container-content">
                    <div class="form__section-title">
                        ĐĂNG KÍ
                    </div>

                    <div class="form__section-form">

                        <div class="form-group">

                            <div class="form__container">
                                <label for="firstName">Họ <span class="red-text">*
                                        <?= isset($firstName) ? '<span style="font-size: .6rem;color:red;" class="ms-1">' . $firstName . '</span>' : '' ?>
                                    </span>

                                </label>
                                <input type="text" id="firstName" class="firstName" name="firstName" placeholder="Nguyễn" required>
                            </div>

                            <div class="form__container">

                                <label for="lastName">Tên <span class="red-text">*
                                        <?= isset($lastName) ? '<span style="font-size: .6rem;color:red;" class="ms-1">' . $lastName . '</span>' : '' ?>
                                    </span></label>
                                <input type="text" id="lastName" class="lastName" name="lastName" placeholder="Văn A" required>
                            </div>
                        </div>


                        <div class="form__container">
                            <label for="username">Tên đăng nhập <span class="red-text">*</span>
                                <?= isset($username) ? '<span style="font-size: .7rem;color:red;" class="ms-1">' . $username . '</span>' : '' ?>
                            </label>
                            <input type="text" id="username" class="username" name="username" placeholder="Tên đăng nhập" required>
                        </div>


                        <div class="form__container">
                            <label for="email">Email <span class="red-text">*</span>
                                <?= isset($email) ? '<span style="font-size: .7rem;color:red;" class="ms-1">' . $email . '</span>' : '' ?>
                            </label>
                            <input type="email" id="email" class="email" name="email" placeholder="Email" required>
                        </div>


                        <div class="form__container">
                            <label for="phone">Số điện thoại <span class="red-text">*</span>
                                <?= isset($phone) ? '<span style="font-size: .7rem;color:red;" class="ms-1">' . $phone . '</span>' : '' ?>
                            </label>
                            <input type="phone" id="phone" class="phone" name="phone" placeholder="Số điện thoại" required>
                        </div>


                        <div class="form-group">
                            <div class="form__container">
                                <label for="password">Mật khẩu <span class="red-text">*</span>
                                    <?= isset($password) ? '<span style="font-size: .7rem;color:red;" class="ms-1">' . $password . '</span>' : '' ?>
                                </label>
                                <input type="password" id="password" class="password" name="password" placeholder="Mật khẩu" required>
                            </div>


                            <div class="form__container">
                                <label for="passwordconfirm">Xác nhận mật khẩu <span class="red-text">*</span>
                                    <?= isset($passwordconfirm) ? '<span style="font-size: .7rem;color:red;" class="ms-1">' . $passwordconfirm . '</span>' : '' ?>
                                </label>
                                <input type="password" id="passwordconfirm" class="passwordconfirm" name="passwordconfirm" placeholder="Xác nhận mật khẩu" required>
                            </div>

                        </div>

                        <div class="form__container">
                            <label for="address">Địa chỉ ( Không bắt buộc )</label>
                            <input type="address" id="address" class="address" name="address" placeholder="Địa chỉ">
                        </div>

                        <button class="button-action btn-login">
                            Đăng ký
                        </button>
                    </div>

                    <div class="form__section-login">
                        <div class="form__section-login-content">
                            <div class="form__section-login-text">
                                Bạn đã có tài khoản?
                            </div>
                            <a href="index.php?controller=user&action=showLoginForm" class="form__section-login-link">
                                Đăng nhập
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form__section-avatar">
                <div class="form__section-avatar-content">
                    <img id="uploadedImage" src="views/asset/img/user/icon.jpg.jpg" alt="">
                    <input type="file" class="upload-avatar" name="upload-avatar" id="upload-avatar">
                    </input>
                    <label for="upload-avatar" class="label-upload-avatar">Tải ảnh đại diện</label>
                </div>
            </div>
    </div>
    </div>

</main>
<script src="views/asset/javascript/registerForm.js"></script>
<?php initFooter() ?>