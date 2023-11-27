<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ten_sp ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css?v=1.0">

    <link rel="stylesheet" href="views/asset/css/productDetail.css?v=1.0">

</head>

<body>


    <?php include_once "views/includes/header.php" ?>

    <main class="py-5">

        <div class="container py-3 bg-white rounded-3">
            <div class="product row">
                <div class="product-img col-5 me-5">
                    <img src="<?= $anh ?>" alt="">

                </div>

                <div class="info col ms-5 ps-5">
                    <h1 class="product-name fs-1 fw-bold "><?= $ten_sp ?></h1>
                    <a href="index.php?controller=shop&action=filter&arr_ma_th[]=<?= $ma_th ?>" class="fs-4 my-3 " style="color: #990D23;">
                        <?= $ten_th; ?>
                    </a>
                    <div class="fs-6 fw-light  text-body-secondary my-2">
                        Danh mục:
                        <a href="index.php?controller=shop&action=filter&ma_dm=<?= $ma_dm ?>" class="fs-6 text-body-secondary fw-medium  ">
                            <?= $ten_dm; ?>
                        </a>
                    </div>
                    <div class="divider my-3"></div>
                    <div class="rating-info">
                        <i class="fas fa-star  text-orange "></i>
                        <i class="fas fa-star  text-orange "></i>
                        <i class="fas fa-star  text-orange "></i>
                        <i class="fas fa-star  text-orange "></i>
                        <i class="fas fa-star  text-orange "></i>
                        <span class="text-body-tertiary">(19 đánh giá)</span>
                    </div>
                    <h2 class="product-price fs-2 mt-3 mb-5 pb-5  fw-bold text-secondary-emphasis"><?= $dongia ?> ₫</h2>


                    <div class="cart-option">
                        <form id="buyingForm" action="model/cart-add.php" method="post" class="d-flex flex-column gap-4">
                            <input type="text" name="ma_sp" hidden value="<?= $ma_sp ?>">
                            <div class="quantity">
                                <input value="-" step="1" type="button" onclick="quantityEditor(this)">
                                <input name="soluong" value="1" class="soluong" inputmode="numeric" min="1" step="1" autocomplete="off" type="number">
                                <input value="+" step="1" type="button" onclick="quantityEditor(this)">
                            </div>
                            <div class="d-flex gap-3">
                                <!-- <button class="btn" type="button" onclick="addToCart()">Thêm vào giỏ</button> -->
                                <button class="btn py-0 px-4 rounded-1 bg-golden" type="button" onclick="customSubmit('index.php?controller=cart&action=instantBuying')">
                                    <i class="fa-solid fa-money-bill-1-wave"></i> Mua ngay</button>

                                <button class="btn py-0 px-2 rounded-1 bg-secondary" type="button" onclick="customSubmit('index.php?controller=cart&action=addItem')">
                                    <i class="fa-solid fa-cart-shopping"></i> Thêm giỏ hàng</button>
                            </div>
                        </form>
                    </div>

                    <script>
                        function quantityEditor({
                            value,
                            step
                        }) {
                            let quantityNode = document.querySelector('.soluong'),
                                quantityValue = Number(quantityNode.value)
                            if (value == '-' && quantityValue == 1) return

                            quantityValue += value == '+' ? Number(step) : -Number(step)
                            quantityNode.value = quantityValue

                        }

                        function customSubmit(submitDestination) {
                            // Get the form element
                            var form = document.getElementById('buyingForm');

                            form.action = submitDestination

                            // Submit the form
                            form.submit();
                        }
                    </script>

                </div>
            </div>
        </div>

        <div class="container my-3 bg-white rounded-3 py-3">
            <h1 class="fs-4 fw-bold mb-3">Đánh giá</h1>
            <div class="row" style="white-space: no-wrap;">
                <!-- Total Score Column -->
                <div class="col-auto mx-5">
                    <div>Điểm đánh giá trung bình</div>
                    <p class="display-1 fw-bolder text-orange ms-5" id="totalScore">4.5</p>
                </div>

                <!-- Về số % của progress bar cho từng cấp độ đánh giá thì lấy:
                 số đánh giá từng cấp độ / tổng số đánh giá sản phẩm * 100 -->
                <!-- User Ratings Column -->
                <div class="col-3 mx-5 d-flex flex-column gap-2">

                    <?php
                    $arr = [5, 4, 3, 2, 1];
                    foreach ($arr as $e) {
                        //looping code
                    ?>

                        <div class="d-flex gap-3" style="font-size: .8rem;">
                            <!-- số sao -->
                            <span class=" text-secondary px-1 "><?= $e ?> sao</span>
                            <div class="progress flex-grow-1 rounded-0" style="height: 100%;">
                                <div class="progress-bar bg-orange " style="width: <?= $e * 19 ?>%;" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- số lượng đánh giá -->
                            <span class=" text-body-tertiary" class="">19</span>
                            <!-- mô tả cấp độ đánh giá -->
                            <span class=" text-body-tertiary px-2">Rất hài lòng</span>
                        </div>
                    <?php } ?>


                </div>

                <!-- RATING -->
                <div id="rating" class="col-5 ms-3">
                    <span class="fs-6 fw-semibold">Bình luận</span>
                    <div class="rating-container mt-2">
                        <div class="rating d-flex gap-3">
                            <div class="rating-score">
                                <i class="fas fa-star  text-orange "></i>
                                <i class="fas fa-star  text-orange "></i>
                                <i class="fas fa-star  text-orange "></i>
                                <i class="fas fa-star  text-orange "></i>
                                <i class="fas fa-star  text-orange "></i>
                            </div>
                            <div class="rating-user fw-semibold">
                                Nguyễn Đại Bác
                            </div>
                            <div class="rating-content">
                                Sản phẩm khá vjp
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="container des bg-white rounded-3 p-3 pt-5">
            <div>
                <h3>MÔ TẢ SẢN PHẨM</h3>
            </div>
            <div class="py-3">
                <span>
                    <?= $mota ?>
                </span>
            </div>


            <div id="hoidap-container" class="mt-3">
                <div class="fs-5 fw-semibold text-secondary-emphasis">Hỏi đáp</div>
                <hr>

                <?php
                $hoidapListHtml = "";
                foreach ($hoidapData as $data) {
                    extract($data);
                    $hoidapListHtml .=
                        "<div class='hoidap'>
                        <div class='hoidap-avatar'>
                            <img src='views/asset/img/general/default_avatar.png' alt=''>
                        </div>
                        <div class='hoidap-content'>
                            <p class='hoidap-username'>
                                {$hoirad}
                            </p>
                            <p class='hoidap-text'>
                                {$content}
                            </p>";

                    if (isset($_SESSION['role']) && $_SESSION['ma_nd'] == $ma_nd) {
                        $hoidapListHtml .=
                            "<div class='hoidap-action'>
                                <a href='index.php?require=hoidapDelete&id={$id}&product_id={$product_id}'>xóa</a>
                                </div>";
                    }

                    $hoidapListHtml .= "</div>
                        </div>";;
                }

                if (isset($_SESSION['role'])) {
                    $hoidapInteractionHtml =
                        "<div class='hoidapInteraction-loggedIn'>
                        <form action='model/hoidap-add.php' method='post'>
                            <input type='text' name='product_id' hidden value='{$_GET['id']}'>
                            <input type='text' name='content' required placeholder='Xin mời nhập nội dung bình luận...'>
                            <button type='submit'>Đăng</button>
                        </form>
                    </div>";
                } else {
                    $hoidapInteractionHtml =
                        "<div class='hoidapInteraction-noAccount'>
                        Xin mời đăng nhập để đăng câu hỏi <a class='bg-primary ms-2' href='index.php?require=login'>Đăng nhập</a>
                    </div>";
                }

                ?>

                <div class="hoidap-list">

                    <?= $hoidapInteractionHtml ?>

                    <?= $hoidapListHtml ?>

                </div>
            </div>

        </div>

    </main>

    <?php include_once "views/includes/footer.php" ?>
</body>

</html>