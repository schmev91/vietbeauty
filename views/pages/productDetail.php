<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$ten_sp?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css">
    
    <link rel="stylesheet" href="views/asset/css/productDetails.css?v=1">
</head>

<body>  


    <?php include_once "views/includes/header.php" ?>

    <main>

        <div class="wrapper">
            <div class="product">
                <div class="img">
                    <img class="product-image" src="<?= $anh ?>" alt="">

                </div>

                <div class="info">
                    <h1 class="product-name"><?= $ten_sp ?></h1>
                    <div class="divider"></div>
                    <h2 class="product-price"><?= $dongia ?>$</h2>
                    <div class="cart-option">
                        <form action="model/cart-add.php" method="post">
                            <input type="text" name="ma_sp" hidden value="<?= $ma_sp ?>">
                            <div class="quantity">
                                <input value="-" step="1" type="button" onclick="quantityEditor(this)">
                                <input name="quantity" value="1" class="soluong" inputmode="numeric" min="1" step="1" autocomplete="off" type="number">
                                <input value="+" step="1" type="button" onclick="quantityEditor(this)">
                            </div>
                            <div>
                                <!-- <button class="btn" type="button" onclick="addToCart()">Thêm vào giỏ</button> -->
                                <button class="btn" type="submit">Thêm vào giỏ</button>
                            </div>
                        </form>
                    </div>

                    <p class="disclaimer">Do #Covid-19 nên quá trinh vận chuyển có thể chậm hơn dự tính. Nhưng các
                        gói
                        hàng nhất định sẽ
                        được đưa đến cho bạn, mong bạn thông cảm.</p>

                    <div class="cat">
                        <span>
                            Danh mục:
                            <?= $ten_dm; ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <div class="wrapper des">
            <div>
                <h3>MÔ TẢ SẢN PHẨM</h3>
            </div>
            <div>
                <span>
                    <?= $mota ?>
                </span>
            </div>


            <!-- <div id="cmt-container">
                <h3>Bình luận</h3>
                <hr>

                <?php
                $cmtListHtml = "";
                foreach ($cmtData as $data) {
                    extract($data);
                    $cmtListHtml .=
                        "<div class='cmt'>
                        <div class='cmt-avatar'>
                            <img src='view/asset/img/avatar.png' alt=''>
                        </div>
                        <div class='cmt-content'>
                            <p class='cmt-username'>
                                {$username}
                            </p>
                            <p class='cmt-text'>
                                {$content}
                            </p>";

                    if (isset($_SESSION['role']) && $_SESSION['user_id'] == $user_id) {
                        $cmtListHtml .=
                            "<div class='cmt-action'>
                                <a href='index.php?require=cmtDelete&id={$id}&product_id={$product_id}'>xóa</a>
                                </div>";
                    }

                    $cmtListHtml .= "</div>
                        </div>";;
                }

                if (isset($_SESSION['role'])) {
                    $cmtInteractionHtml =
                        "<div class='cmtInteraction-loggedIn'>
                        <form action='model/cmt-add.php' method='post'>
                            <input type='text' name='product_id' hidden value='{$_GET['id']}'>
                            <input type='text' name='content' required placeholder='Xin mời nhập nội dung bình luận...'>
                            <button type='submit'>Đăng</button>
                        </form>
                    </div>";
                } else {
                    $cmtInteractionHtml =
                        "<div class='cmtInteraction-noAccount'>
                        Xin mời đăng nhập để bình luận <a href='index.php?require=login'>Đăng nhập</a>
                    </div>";
                }

                ?>

                <div class="cmt-list">

                    <?= $cmtInteractionHtml ?>

                    <?= $cmtListHtml ?>

                </div>
            </div> -->

        </div>

    </main>

    <?php include_once "views/includes/footer.php" ?>
</body>

</html>