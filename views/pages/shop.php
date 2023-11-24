<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css">

    <link rel="stylesheet" href="views/asset/css/shop.css">

</head>

<body>
    <?php include_once "views/includes/header.php"; ?>

    <main class="py-4">
        <div class="shop container rounded-3 overflow-hidden">

            <div class="row column-gap-3">
                <div class="filter col-2 py-2 rounded-3 bg-white row-gap-3 d-flex flex-column ">
                    <div class="filter-category">
                        <h1 class="fs-5 fw-bold mb-2 text-dark-emphasis ">Danh mục</h1>
                        <ul class="d-flex flex-column row-gap-2">
                            <li><a href="" class="link-secondary">Son môi</a></li>
                            <li><a href="" class="link-secondary">Nước hoa</a></li>
                            <li><a href="" class="link-secondary">Kem chống nắng</a></li>
                            <li><a href="" class="link-secondary">Tẩy da mặt</a></li>
                            <li><a href="" class="link-secondary">Dầu gội & Dầu xả</a></li>
                            <li><a href="" class="link-secondary">Bảng phấn mắt</a></li>
                        </ul>
                    </div>

                    <div class="filter-price">
                        <h1 class="fs-5 fw-bold mb-2 text-dark-emphasis ">Khoảng giá</h1>
                        <div class="price-range d-flex align-items-center column-gap-2 text-secondary">
                            <input type="number" class="form-control " placeholder="₫ Từ">
                            -
                            <input type="number" class="form-control " placeholder="₫ Đến">
                        </div>
                    </div>

                    <hr class="my-2">

                    <div class="filter-brand">
                        <h1 class="fs-5 fw-bold mb-2 text-dark-emphasis ">Thương hiệu</h1>
                        <ul class="d-flex flex-column row-gap-2">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label mt-1" for="flexCheckChecked">
                                        L'Oréal
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label mt-1" for="flexCheckChecked">
                                        Estée Lauder
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label mt-1" for="flexCheckChecked">
                                        Maybelline
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label mt-1" for="flexCheckChecked">
                                        MAC Cosmetics
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label mt-1" for="flexCheckChecked">
                                        CeraVe
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label mt-1" for="flexCheckChecked">
                                        Neutrogena
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="products col py-2 rounded-3 bg-white row row-gap-4 ">

                    <?php
                    foreach ($dssp as $sp) {
                        extract($sp);
                    ?>
                        <a href="index.php?controller=product&action=show&id=<?= $ma_sp?>" class="card col-3 border-0">
                            <img src="<?= $anh?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <p class="card-text fs-4 fw-bold mb-2" style="color: #B4975A"><?= $dongia?> ₫</p>
                                <p class="card-text mb-2" style="color:#990D23"><?= $thuonghieu?></p>
                                <h5 class="card-title text-body " style="font-size: 1rem;"><?= $ten_sp?></h5>
                            </div>
                        </a>


                    <?php } ?>

                </div>
            </div>

        </div>
    </main>

    <?php include_once "views/includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>