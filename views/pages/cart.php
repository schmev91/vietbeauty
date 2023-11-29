<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="stylesheet" href="views/asset/css/general.css?v=1.0">

    <link rel="stylesheet" href="views/asset/css/cart.css?v=1">
</head>

<body>

    <?php include_once "views/includes/header.php" ?>

    <main>
        <div class="container cart bg-white py-3 mt-3 rounded-3 ">
            <div class="cart-itemNumber">Giỏ hàng - <span><?= u::getCartQuantity(s('user')['ma_nd']) ?></span> sản phẩm</div>

            <div class="row mt-5 column-gap-4 ">
                <?php
                if (empty($cartData)) {

                ?>
                    <div class="col d-flex align-items-center flex-column ">
                        <img src="views/asset/img/general/cartNoItem.png" class="mb-4 me-3" alt="">
                        <span class="">Bạn chưa chọn sản phẩm nào</span>
                        <a class="shopBtn text-white fw-bold py-2 px-2 rounded-4 mt-3" href="index.php">Tiếp tục mua sắm</a>
                    </div>
                <?php
                } else {
                ?>

                    <table class="table col">
                        <thead>
                            <tr class="table-light fw-light fs-6">
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá tiền</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // code
                            foreach ($cartData as $data) {
                                extract($data);

                            ?>
                                <tr class="tableRow align-middle">
                                    <td>
                                        <div class="card mb-3 border-0">
                                            <div class="row g-0">
                                                <input class="form-check-input m-0 my-auto me-2 border-2 border-dark-subtle  itemCheckbox" type="checkbox" value="" class="itemCheckbox">

                                                <a href="<?= u::link('product', 'show', ['ma_sp' => $ma_sp]) ?>" class="col-auto">
                                                    <img src="<?= $anh ?>" style="max-height: 124px;" class="img-fluid rounded-start" alt="...">
                                                </a>

                                                <div class="col">
                                                    <div class="card-body">
                                                        <h5 class="card-title fw-medium ">
                                                            <a href="<?= u::link('shop', 'filter', ['arr_ma_th[]' => $ma_th]) ?>" style="color: #990D23;"><?= $ten_th ?></a>
                                                        </h5>

                                                        <a href="<?= u::link('product', 'show', ['ma_sp' => $ma_sp]) ?>" class="card-text fs-5 text-dark-emphasis "><?= $ten_sp ?></a>
                                                        <p class="card-text mt-1 mb-2"><small class="text-body-secondary"><?= $ten_dm ?></small></p>

                                                        <a href="<?= u::link('cart', 'deleteItem', ['ma_sp' => $ma_sp]) ?>" class="text-danger p-0 fw-bold opacity-75 hover-solid" style="font-size: .9rem">
                                                            <i class="fa-solid fa-trash-can text-danger "></i> xóa</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>

                                    <td class="fs-5 text-secondary-emphasis fw-medium"><span><?= nf($dongia) ?></span> ₫</td>

                                    <!-- INPUT SO LUONG -->
                                    <td>
                                        <form action="<?= u::link('cart', 'changeQuantity') ?>" method="post">
                                            <input type="text" hidden name="ma_sp" value="<?= $ma_sp ?>">
                                            <input name="soluong" class="quantity border-secondary-subtle bg-body-tertiary  border p-1 p-0 border-0 rounded-1 " min='1' max='50' type="number" value="<?= $soluong ?>">
                                        </form>
                                    </td>

                                    <td class="fs-5 text-secondary-emphasis fw-medium"><span id="spthanhtien"><?= nf($dongia * $soluong) ?></span> ₫</td>
                                </tr>

                            <?php } ?>


                        </tbody>
                    </table>

                    <div class="col-3 invoice" id="invoice">
                        <div class="invoice-heading py-2 my-1 fw-bold fs-5">Hóa đơn của bạn</div>
                        <hr class="my-2 text-secondary ">
                        <div class="invoice-body py-3 mt-2 d-flex flex-column gap-3">
                            <div class="d-flex justify-content-between ">
                                <div class="fit-content fw-light" style="font-size: 0.9rem;">Tạm tính:</div>
                                <div class="fit-content fw-bold text-dark-emphasis "><span id="tamtinh">

                                    </span> ₫</div>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <div class="fit-content fw-light" style="font-size: 0.9rem;">Giảm giá:</div>
                                <div class="fit-content fw-bold text-dark-emphasis ">-0 ₫</div>
                            </div>
                        </div>
                        <hr class="m-0 mb-3 text-secondary">
                        <div class="d-flex justify-content-between ">
                            <div class="fit-content fw-light" style="font-size: 0.9rem;">Tổng cộng:</div>
                            <div class="fit-content fw-bold text-golden"><span id='tongcong'></span> ₫</div>
                        </div>
                        <div class="text-body-tertiary fw-medium my-2" style="font-size: .8rem;">( Đã bao gồm thuế VAT )</div>

                        <a href="" class="bg-golden mt-4 d-block text-center fw-bold fs-6 p-3 rounded-1">Tiến hành đặt hàng</a>
                    </div>

                <?php } ?>

            </div>



            <hr class="my-5">

            <div class="row my-5">
                <img src="views/asset/img/general/cartPlaceholder.png" style="width: fit-content;" class="mx-auto" alt="">
            </div>

        </div>

    </main>

    <?php include_once "views/includes/footer.php" ?>

    <script src="views/asset/javascript/cart.js?v=1"></script>
</body>

</html>