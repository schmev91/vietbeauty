<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="stylesheet" href="views/asset/css/general.css">
    <link rel="stylesheet" href="views/asset/css/cart.css">
</head>

<body>

    <?php include_once "views/includes/header.php" ?>

    <main>
       <div class="container cart py-3">
            <div class="cart-itemNumber">Giỏ hàng - <span>0</span> sản phẩm</div>

            <div class="row mt-5">
                <div class="col d-flex align-items-center flex-column ">
                    <img src="views/asset/img/general/cartNoItem.png" class="mb-4 me-3" alt="">
                    <span class="">Bạn chưa chọn sản phẩm nào</span>
                    <a class="shopBtn text-white fw-bold py-2 px-2 rounded-4 mt-3" href="index.php">Tiếp tục mua sắm</a>
                </div>
            </div>

            <hr class="my-5">
            
            <div class="row my-5">
                <img src="views/asset/img/general/cartPlaceholder.png" style="width: fit-content;" class="mx-auto" alt="">

            </div>
       </div>
    </main>

    <?php include_once "views/includes/footer.php" ?>
</body>

</html>