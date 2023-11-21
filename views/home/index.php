<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hHome</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="stylesheet" href="views/asset/css/general.css">
    <link rel="stylesheet" href="views/asset/css/home/index.css">
</head>

<body>

    <?php include_once "views/includes/header.php" ?>

    <main>
        <section class="slider">
            <div class="container">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="views/asset/img/banner/banner5.jpg" alt="Los Angeles" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="views/asset/img/banner/banner6.jpg" alt="Chicago" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="views/asset/img/banner/banner7.png" alt="New York" class="d-block w-100">
                        </div>
                    </div>
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" style="margin-top: 250px;"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon" style="margin-top: 250px;"></span>
                    </button>
                </div>
            </div>
        </section>
        <section class="hotbuy">
            <div class="container pt-3 banchay">
                <span style="font-size: 25px;font-weight:500; ">Bán chạy</span>
                <ul class="list_banchay" style="margin-top: 20px; display: flex; gap:20px;overflow-x:hidden;">
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card" style="width:250px;height: 300px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 20px; margin-left:50px;">Sữa Rửa Mặt</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="container dm_main mt-4">
            <span style="font-size: 25px;font-weight:500;">Danh Mục</span>
            <div class="row">
                <div class="col-md-2 pt-3 mt-3 dm_m">
                    <img src="views/asset/img/category/dm_sonmoi.jpg" alt="" width="150px" height="150px">
                    <h3 style="font-size: 20px; font-weight: 50px0; padding-left:50px;padding-top: 10px;">Son môi</h3>
                </div>
                <div class="col-md-2 pt-3 mt-3 dm_m">
                    <img src="views/asset/img/category/dm_sonmoi.jpg" alt="" width="150px" height="150px">
                    <h3 style="font-size: 20px; font-weight: 50px0; padding-left:50px;padding-top: 10px;">Son môi</h3>
                </div>
                <div class="col-md-2 pt-3 mt-3 dm_m">
                    <img src="views/asset/img/category/dm_sonmoi.jpg" alt="" width="150px" height="150px">
                    <h3 style="font-size: 20px; font-weight: 50px0; padding-left:50px;padding-top: 10px;">Son môi</h3>
                </div>
                <div class="col-md-2 pt-3 mt-3 dm_m">
                    <img src="views/asset/img/category/dm_sonmoi.jpg" alt="" width="150px" height="150px">
                    <h3 style="font-size: 20px; font-weight: 50px0; padding-left:50px;padding-top: 10px;">Son môi</h3>
                </div>
                <div class="col-md-2 pt-3 mt-3 dm_m">
                    <img src="views/asset/img/category/dm_sonmoi.jpg" alt="" width="150px" height="150px">
                    <h3 style="font-size: 20px; font-weight: 50px0; padding-left:50px;padding-top: 10px;">Son môi</h3>
                </div>
                <div class="col-md-2 pt-3 mt-3 dm_m">
                    <img src="views/asset/img/category/dm_sonmoi.jpg" alt="" width="150px" height="150px">
                    <h3 style="font-size: 20px; font-weight: 50px0; padding-left:50px;padding-top: 10px;">Son môi</h3>
                </div>
            </div>
        </div>
        <section class="brand mt-4">
            <div class="container thuonghieu">
                <span style="font-size: 25px;font-weight:500;">Thương Hiệu</span>
                <div class="row pt-3">
                    <div class="col-md-4">
                        <img src="views/asset/img/brand/thuonghieu1.jpg" alt="">
                    </div>
                    <div class="col-md-8 thuonghieu_left">
                        <img src="views/asset/img/brand/thuonghieu2.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu3.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu4.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu5.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu6.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu7.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu8.jpg" alt="">
                        <img src="views/asset/img/brand/thuonghieu9.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="sanphamgoiy">
            <div class="container pt-4">
                <span style="font-size: 25px;font-weight:500;margin-top: 30px;">Gợi ý cho bạn</span>
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img-top" src="views/asset/img/product/goiy_sonmoi.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="card-title" style="font-weight: 50px0;">Black Rouge</h3>
                                <h4 class="card-title" style="font-size: 15px; ">Son Kem Lì Black Rouge A12 Dashed</h4>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">164.000 đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="xemthem">
            <div class="container mt-4">
                <button type="button" class="btn btn-danger" style="height: 40px;width: 150px;margin-left: 560px;">Xem Thêm</button>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-fluid mt-2 bg_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pt-3">
                        <img src="views/asset/img/general/logo.png" alt="" style="padding-left: 30px;">
                        <div class="theochungtoi">
                            <h3 style="margin-top: 10px; color:#fff; font-weight: 300;font-size: 20px;">Theo dõi chúng tôi trên</h3>
                            <ul class="list-mxh" style="display: flex; gap:20px; margin-top:10px; margin-left: 30px;">
                                <li><i class="fa-brands fa-twitter" style="font-size: 25px;"></i></li>
                                <li><i class="fa-brands fa-instagram" style="font-size: 25px;"></i></li>
                                <li><i class="fa-brands fa-facebook-f" style="font-size: 25px;"></i></li>
                                <li><i class="fa-brands fa-youtube" style="font-size: 25px;"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 pt-4">
                        <div class="vechungtoi">
                            <h3 style="font-size: 25px; color:#fff;font-weight: 500;">Về Chúng Tôi</h3>
                            <ul style="margin-top: 20px; display: flex; flex-direction: column; gap:10px">
                                <li style="color:#fff">Đội nhóm</li>
                                <li style="color:#fff">Chính Sách</li>
                                <li style="color:#fff">Lịch Sử</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 pt-4">
                        <div class="hotro">
                            <h3 style="font-size: 25px; color:#fff;font-weight: 500;">Hỗ trợ</h3>
                            <ul style="margin-top: 20px; display: flex; flex-direction: column; gap:10px">
                                <li style="color:#fff">Liên hệ</li>
                                <li style="color:#fff">FAQ</li>
                                <li style="color:#fff">CSKH</li>
                                <li style="color:#fff">Điều khoản</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 pt-4">
                        <div class="hotline">
                            <h3 style="font-size: 25px; color:#fff;font-weight: 500;">Hotline</h3>
                            <ul style="margin-top: 20px; display: flex; flex-direction: column; gap:10px">
                                <li style="color:#fff">0392706xxx</li>
                                <li style="color:#fff">0937703xxx</li>
                            </ul>
                        </div>
                        <div class="diachi">
                            <h3 style="font-size: 25px; color:#fff;font-weight: 500; margin-top: 10px;">Địa Chỉ</h3>
                            <ul style="margin-top: 10px; display: flex; flex-direction: column; gap:10px">
                                <li style="color:#fff">Tòa nhà Innovation, CVPM Quang Trung, Quận 12, Thành Phố Hồ Chí Minh </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-ft-dark">
            <div class="container p-2">
                <span style="color:#fff; margin-left: 550px;">Bản quyền © 2023 viet beauty</span>
            </div>
        </div>
    </footer>
</body>

</html>