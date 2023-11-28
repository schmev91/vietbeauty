<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css?v=1.0">

    <link rel="stylesheet" href="views/asset/css/login.css?v=1.0">
    <title>Login</title>
</head>

<body>
    <?php include_once "views/includes/header.php"; ?>


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

    <?php include_once "views/includes/footer.php"; ?>

</body>

</html>