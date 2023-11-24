<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css">
    <link rel="stylesheet" href="views/asset/css/home.css">
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
                            <img src="views/asset/img/banner/banner5.jpg" alt="Los Angeles" class="d-block w-10
                            0">
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

                    <?php
                    foreach ($spbanchay as $sp) {
                        extract($sp);
                    ?>
                        <li>
                            <div class="card" style="width: 250px; height: 370px;">
                                <img class="card-img-top" src="<?php echo $anh; ?>" alt="Card image">
                                <div class="card-body">
                                    <span class="mb-3 " style="font-size: 20px; color:red;"><?php echo $dongia; ?> đ</span>
                                    <h4 class="card-title fs-6 text-secondary " style="font-size: 15px; margin-top: 10px"><?php echo $thuonghieu; ?></h4>
                                    <span class="fs-5"><?php echo $ten_sp; ?></span>
                                </div>
                            </div>
                        </li>


                    <?php } ?>

                    <!-- <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="card" style="width:250px;height: 370px;">
                            <img class="card-img-top" src="views/asset/img/product/bc1.jpg" alt="Card image">
                            <div class="card-body">
                                <span class="mb-3 " style="font-size: 20px; color:red;">200.000 đ</span> 
                                <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                                <span class="fs-5">Kem Chống Nắng La-Roche Posay</span>
                            </div>
                        </div>
                    </li> -->
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
                        <img src="views/asset/img/banner/thuonghieu1.jpg" alt="">
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

    <?php include_once "views/includes/footer.php" ?>
</body>

</html>