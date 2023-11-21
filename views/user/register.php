<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="views/asset/css/register.css">
    <title>Login</title>
</head>
<body>
    <header>

    </header>

    <main>
        <div class="container">
            <div class="form__section">
                <div class="form__section-container">
                    <div class="form__section-container-content">
                        <div class="form__section-title">
                            ĐĂNG KÍ
                        </div>

                        <form action="" class="form__section-form">
                            <div class="form-group">
                                <div class="form__container">
                                    <label for="firstName">Họ <span class="red-text">*</span></label>
                                    <input type="text" id="firstName" class="firstName" name="firstName"
                                        placeholder="Nguyễn">
                                </div>

                                <div class="form__container">
                                    <label for="lastName">Tên <span class="red-text">*</span></label>
                                    <input type="text" id="lastName" class="lastName" name="lastName"
                                        placeholder="Văn A">
                                </div>
                            </div>

                            <div class="form__container">
                                <label for="username">Tên đăng nhập <span class="red-text">*</span></label>
                                <input type="text" id="username" class="username" name="username"
                                    placeholder="Tên đăng nhập">
                            </div>

                            <div class="form__container">
                                <label for="email">Email <span class="red-text">*</span></label>
                                <input type="email" id="email" class="email" name="email" placeholder="Email">
                            </div>

                            <div class="form__container">
                                <label for="phone">Số điện thoại <span class="red-text">*</span></label>
                                <input type="phone" id="phone" class="phone" name="phone" placeholder="Số điện thoại">
                            </div>

                            <div class="form-group">
                                <div class="form__container">
                                <label for="password">Mật khẩu <span class="red-text">*</span></label>
                                    <input type="text" id="password" class="password" name="password"
                                        placeholder="Mật khẩu">
                                </div>

                                <div class="form__container">
                                    <label for="passwordcomfirm">Xác nhận mật khẩu <span
                                            class="red-text">*</span></label>
                                    <input type="text" id="passwordcomfirm" class="passwordcomfirm"
                                        name="passwordcomfirm" placeholder="Xác nhận mật khẩu">
                                </div>
                            </div>

                            <div class="form__container">
                                <label for="address">Địa chỉ ( Không bắt buộc )</label>
                                <input type="address" id="address" class="address" name="address" placeholder="Địa chỉ">
                            </div>

                            <button class="button-action btn-login">
                                Đăng ký
                            </button>
                        </form>

                        <div class="form__section-login">
                            <div class="form__section-login-content">
                                <div class="form__section-login-text">
                                    Bạn đã có tài khoản?
                                </div>
                                <a href="login.html" class="form__section-login-link">
                                    Đăng nhập
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form__section-avatar">
                    <div class="form__section-avatar-content">
                        <img src="views/asset/img/user/icon.jpg.jpg"
                            alt="">
                        <input type="file" class="upload-avatar" name="upload-avatar" id="upload-avatar"
                            class="upload-avatar">
                        </input>
                        <label for="upload-avatar" class="label-upload-avatar">Tải ảnh đại diện</label>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>