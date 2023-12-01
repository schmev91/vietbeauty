<?php initHeader('Đăng nhập', 'login') ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">

<main>
    <div class="form__section">
        <div class="form__section-container">
            <div class="form__section-container-content mb-5">
                <div class="form__section-title">
                    ĐĂNG NHẬP
                </div>
                <form action="index.php?controller=user&action=loginRequest" method="post" class="form__section-form">
                    <div class="form__container">
                        <label for="loginKey">Tên đăng nhập hoặc Email <?= isset($loginKey) ? '<span style="font-size: .8rem;color:red;" class="ms-1">' . $loginKey . '</span>' : '' ?></label>
                        <input type="text" id="loginKey" class="loginKey" name="loginKey" placeholder="bloodymary hay lovelymary@hogwarts.edu.us">
                    </div>

                    <div class="form__container">
                        <label for="password">Mật khẩu <?= isset($password) ? '<span style="font-size: .8rem;color:red;" class="ms-1">' . $password . '</span>' : '' ?></label>
                        <input type="password" id="password" class="password" name="password">
                    </div>

                    <button class="button-action btn-login">
                        Đăng nhập
                    </button>
                </form>

                <div class="form__section-register">
                    <div class="form__section-register-content">
                        <div class="form__section-register-text">
                            Bạn chưa có tài khoản?
                        </div>
                        <a href="index.php?controller=user&action=showRegisterForm" class="form__section-register-link">
                            Đăng ký
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="form__section-banner">
            <img src="views/asset/img/banner/bannerlogin.jpg" style="max-height: 100vh" alt="">
        </div>
    </div>
</main>

<?php initFooter() ?>