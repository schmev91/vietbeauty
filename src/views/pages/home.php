    <?php initHeader('Trang chủ', 'home') ?>

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
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>
        <section class="container banchay-container pt-3 py-3 my-5 bg-white rounded-3">
            <span style="font-size: 25px;font-weight:500; ">Bán chạy</span>
            <div class="banchay mt-3 overflow-x-hidden d-flex gap-2" style="transition: transform 0.3s ease;">

                <?php
                foreach ($spbanchay as $sp) {
                    extract($sp);
                ?>
                    <a href="index.php?controller=product&action=show&ma_sp=<?= $ma_sp ?>" draggable="false" class="card" style="min-width: 230px !important;max-width: 230px !important;">
                        <img class="card-img-top" draggable="false" src="<?php echo $anh; ?>" alt="Card image">
                        <div class="card-body">
                            <span class="mb-3 " style="font-size: 20px; color:red;"><?php echo $dongia; ?> đ</span>
                            <h4 class="card-title fs-6 text-secondary " style="font-size: 15px; margin-top: 10px"><?php echo $thuonghieu; ?></h4>
                            <span class="fs-5"><?php echo $ten_sp; ?></span>
                        </div>
                    </a>

                <?php } ?>
            </div>
        </section>

        <script>
            const productContainer = document.querySelector('.banchay-container');
            const productList = document.querySelector('.banchay');
            let isMouseDown = false;
            let startX;
            let scrollLeft;

            productContainer.addEventListener('mousedown', (e) => {
                isMouseDown = true;
                startX = e.pageX - productList.offsetLeft;
                scrollLeft = productList.scrollLeft;
            });

            productContainer.addEventListener('mouseup', () => {
                isMouseDown = false;
            });

            productContainer.addEventListener('mousemove', (e) => {
                if (!isMouseDown) return;
                const x = e.pageX - productList.offsetLeft;
                const walk = (x - startX) * 1.3; // Tốc độ kéo dải sản phẩm
                productList.scrollLeft = scrollLeft - walk;
            });
        </script>

        <div class="container my-5 bg-white py-4 rounded-3">
            <span style="font-size: 25px;font-weight:500;">Danh Mục</span>
            <div class="row column-gap-2 p-3">
                <?php
                foreach ($dsdm as $dm) {

                ?>
                    <a href="index.php?controller=shop&action=filter&ma_dm=<?= $dm['ma_dm'] ?>" class="col dm-item border border-1 border-dark-subtle rounded-3 p-0">
                        <img src="<?= $dm['hinh_dm'] ?>" alt="">
                        <div class="text-dark fs-5 py-2 fw-medium"><?= $dm['ten_dm'] ?></div>

                    </a>
                <?php } ?>

            </div>
        </div>

        <section class="brand mt-4">
            <div class="container thuonghieu">
                <span style="font-size: 25px;font-weight:500;">Thương Hiệu</span>
                <div class="row pt-3">
                    <div class="col-md-4">
                        <img src="views/asset/img/banner/bannerBrand.jpg" alt="">
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
                    <?php
                    foreach ($dsgy as $sp) {

                    ?>
                        <a href="index.php?controller=product&action=show&ma_sp=<?=$sp['ma_sp']?>" class="col-md-3 mt-3">
                            <div class="card" style="width:300px;height: 400px;">
                                <img class="card-img-top" src="<?= $sp['anh'] ?>" alt="Card image">
                                <div class="card-body">
                                    <h3 class="card-title" style="font-weight: 50px0;"><?= $sp['thuonghieu'] ?></h3>
                                    <h4 class="card-title" style="font-size: 15px; "><?= $sp['ten_sp'] ?></h4>
                                    <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;"><?= $sp['dongia'] ?> đ</span>
                                </div>
                            </div>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </section>
        <section class="xemthem">
            <div class="container mt-4">
                <button type="button" class="btn btn-danger" style="height: 40px;width: 150px;margin-left: 560px;">Xem Thêm</button>
            </div>
        </section>
    </main>

    <?php initFooter()?>