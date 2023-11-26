<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css">

    <link rel="stylesheet" href="views/asset/css/shop.css?v=1">

</head>

<body>
    <?php include_once "views/includes/header.php"; ?>

    <main class="py-4">
        <div class="shop container rounded-3 overflow-hidden">

            <div class="row column-gap-3">
                <div class="filter col-2 py-2 rounded-3 bg-white row-gap-3 d-flex flex-column ">
                    <a href="index.php?controller=shop&action=show" class="text-dark fs-6 link-underline ">Tất cả sản phẩm</a>
                    <div class="filter-category">
                        <h1 class="fs-5 fw-bold mb-2 text-dark-emphasis ">Danh mục</h1>
                        <ul class="d-flex flex-column row-gap-2">

                            <?php
                            foreach ($dsdm as $dm) {

                            ?>
                                <li>
                                    <a href="index.php?controller=shop&action=filter&ma_dm=<?php
                                                                                            echo $dm['ma_dm'];
                                                                                            if (isset($_GET['arr_ma_th'])) {
                                                                                                foreach ($_GET['arr_ma_th'] as $ma_th) echo "&arr_ma_th[]=$ma_th";
                                                                                            }
                                                                                            ?>" class="link-secondary"><?= $dm['ten_dm'] ?></a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>

                    <form method="get" action="index.php" class="filter-price">
                        <h1 class="fs-5 fw-bold mb-2 text-dark-emphasis ">Khoảng giá</h1>
                        <?php
                        if (isset($_GET['ma_dm']))
                            echo '<input type="text" name="ma_dm" value="' . $_GET['ma_dm'] . '" hidden>';
                        if (isset($_GET['arr_ma_th'])) {
                            foreach ($_GET['arr_ma_th'] as $ma_th)
                            '<input type="text" name="arr_ma_th[]" value="' . $ma_th . '" hidden>';
                        }
                        ?>
                        <input type="text" name="controller" value="shop" hidden>
                        <input type="text" name="action" value="filter" hidden>
                        <button type="submit" hidden></button>

                        <div class="price-range d-flex align-items-center column-gap-2 text-secondary">
                            <input name="minPrice" type="number" class="form-control " placeholder="₫ Từ" 
                            value="<?=isset($_GET['minPrice']) ? $_GET['minPrice'] : ''?>">
                            -
                            <input name="maxPrice" type="number" class="form-control " placeholder="₫ Đến"
                            value="<?=isset($_GET['maxPrice']) ? $_GET['maxPrice'] : ''?>">
                        </div>
                    </form>

                    <hr class="my-2">

                    <?php
                    $otherFilters;
                    if (isset($_GET['ma_dm']))
                    ?>
                    <form class="filter-brand" method="get" action="index.php?controller=shop&action=filter">
                        <h1 class="fs-5 fw-bold mb-2 text-dark-emphasis ">Thương hiệu <button type="submit" class="fs-6 p-1 rounded-1 ms-1  border-0 text-light hover bg-secondary " >Áp dụng</button></h1>

                        <input type="text" name="controller" value="shop" hidden>
                        <input type="text" name="action" value="filter" hidden>



                        <div class="d-flex flex-column row-gap-2">

                            <?php
                        if (isset($_GET['ma_dm']))
                            echo '<input type="text" name="ma_dm" value="' . $_GET['ma_dm'] . '" hidden>';

                        foreach ($dsth as $th) {
                            if (isset($_GET['arr_ma_th'])) {
                                $isChecked = in_array($th['ma_th'], $_GET['arr_ma_th']);
                            } else $isChecked = false;
                            ?>
                                <div class="form-check">
                                    <input id="thCheckBox<?= $th['ma_th'] ?>" class="form-check-input" type="checkbox" name="arr_ma_th[]" value="<?= $th['ma_th'] ?>" <?= $isChecked ? "checked" : '' ?>>
                                    <label class="form-check-label mt-1" for="thCheckBox<?= $th['ma_th'] ?>">
                                        <?= $th['ten_th'] ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>

                    </form>
                </div>

                <div class="products col py-2 rounded-3 bg-white row row-gap-4 ">

                    <?php
                    foreach ($dssp as $sp) {
                        extract($sp);
                    ?>
                        <a href="index.php?controller=product&action=show&ma_sp=<?= $ma_sp ?>" class="card col-3 border-0">
                            <img src="<?= $anh ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <p class="card-text fs-4 fw-bold mb-2" style="color: #B4975A"><?= $dongia ?> ₫</p>
                                <p class="card-text mb-2" style="color:#990D23"><?= $thuonghieu ?></p>
                                <h5 class="card-title text-body " style="font-size: 1rem;"><?= $ten_sp ?></h5>
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