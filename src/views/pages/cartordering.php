<?php

if (isset($data)) {
    $paymentProducts = array();
    $totalPayment = 0;
    $buyingAmount = 0;

    foreach ($spgiohang as $index => $ma_sp) {
        $product = new productModel($ma_sp);
        $paymentProducts[] = $product->getData();
        cartDetailInlaiding($paymentProducts[$index], $ma_gh);
        brandInlaiding($paymentProducts[$index]);

        $buyAmount = $paymentProducts[$index]['soluong'];
        $paymentItem = new orderItem($product, $buyAmount);

        $totalPayment += $paymentItem->getThanhtien();
        $buyingAmount += $buyAmount;
    }
} else {
    u::toHome();
}

initHeader('Đặt hàng', 'instantbuy');
?>

<main>

    <div class="container">

        <form method="post" action="<?= u::link('payment', 'orderRequest') ?>" class="row m-0 py-5">


            <input type="text" hidden name="ma_gh" value="<?= $ma_gh ?>">
            <!-- PRODUCT LIST -->
            <div id="" class="col-6">
                <div class="d-flex flex-column gap-2">
                    <?php
                    // code
                    foreach ($paymentProducts as $index => $product) {
                        extract($product);
                    ?>
                        <!-- HTML -->
                        <input type="text" name="spgiohang[<?= $index ?>][ma_sp]" value="<?= $ma_sp ?>" hidden>
                        <input type="text" name="spgiohang[<?= $index ?>][soluong]" value="<?= $soluong ?>" hidden>

                        <div class="d-flex border border-1 border-secondary rounded-3 overflow-hidden">
                            <div>
                                <img src="<?= $anh ?>" style="max-width: 6rem" alt="">
                            </div>
                            <div class="py-3 px-2 d-flex justify-content-between flex-grow-1 ">

                                <div class="fs-5 fw-semibold text-secondary-emphasis justify-content-between d-flex flex-column " style="max-width: 60%;">
                                    <?= $ten_sp ?>
                                    <div class="fs-6 fw-light text-scarlet">
                                        <?= $ten_th ?>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="fw-bold text-dark fs-5">
                                        <?= $dongia ?>₫
                                    </div>
                                    <div class="text-body-tertiary mt-3" style="font-size: .9rem;">
                                        Số lượng: <span><?= $soluong ?></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php } ?>


                </div>
            </div>

            <div class="col">
                <div class="row m-0">
                    <div class="col-12">
                        <div class="d-flex align-items-end mt-2 mb-3">
                            <p class="fs-2 m-0 text-secondary-emphasis">Đơn hàng của bạn</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Số lượng mặt hàng</p>
                            <p class="fs-14 fw-bold"><?= $buyingAmount ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Tổng tiền</p>
                            <div class="d-flex align-text-top ">
                                <span class="h4"><?= nf($totalPayment) ?> ₫</span>
                            </div>
                        </div>
                    </div>

                    <!-- THÔNG TIN ĐẶT HÀNG -->
                    <div class="col-12 px-0  ">

                        <div class="row bg-light my-3 rounded-3">

                            <!-- ĐỊA CHỈ NHẬN HÀNG -->
                            <div class="py-2 d-flex flex-column gap-1" id="address">
                                <span class="text-secondary fw-medium "><i class="text-secondary me-1 fa-solid fa-location-dot"></i> Địa chỉ nhận hàng
                                    <!-- Nếu người dùng có sẵn địa chỉ thì hiện nút thay đổi -->
                                    <?= isset($diachi) ? '<button id="changingAddress-btn" type="button" class="btn text-scarlet">Thay đổi</button>' : null ?>
                                </span>
                                <!-- Nếu không có sẵn địa chỉ thì hiện input bình thường, ngược lại hiện input bị disable chứa địa chỉ -->
                                <input type="text" name="diachi" required class="form-control bg-light 
                                <?= isset($diachi) ? 'border-0 border-3 border-start rounded-0" disabled value="' . $diachi . '"' : null ?>>
                            </div>

                            <div class=" col-12">
                                <div class="d-flex">

                                    <div class="payment-methods flex-grow-1 py-3">
                                        <!-- PHƯƠNG THỨC THANH TOÁN -->
                                        <span class="text-secondary fw-medium ">Phương thức thanh toán </span>
                                        <ul>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input required class="form-check-input" type="radio" value="cod" name="thanhtoan" id="1">
                                                    <label class="form-check-label mt-1 justify-content-center fw-medium " for="1">
                                                        <img src="views/asset/img/general/cash-on-delivery.png" alt="">
                                                        COD
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input required class="form-check-input" value="momo" type="radio" name="thanhtoan" id="1">
                                                    <label class="fw-medium form-check-label mt-1" for="1">
                                                        <img src="views/asset/img/general/momo.png" alt="">
                                                        Momo
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input required class="form-check-input" value="visa" type="radio" name="thanhtoan" id="1">
                                                    <label class="fw-medium form-check-label mt-1" for="1">
                                                        <img src="views/asset/img/general/visa.png" alt="">
                                                        Visa
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input required class="form-check-input" value="bank" type="radio" name="thanhtoan" id="1">
                                                    <label class="fw-medium form-check-label mt-1" for="1">
                                                        <img src="views/asset/img/general/bank.png" alt="">
                                                        Bank
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- GÓI VẬN CHUYỂN -->
                                    <div class="payment-delivery flex-grow-1 py-3">

                                        <div class="flex-grow-1">
                                            <span class="text-secondary fw-medium ">Gói vận chuyển </span>
                                            <ul>
                                                <li class="my-2 ms-2">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" value="fast" type="radio" name="vanchuyen">
                                                        <label class="form-check-label mt-1 justify-content-center fw-medium " for="1">
                                                            <img src="views/asset/img/general/fast-delivery.png" alt="">
                                                            Nhanh
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="my-2 ms-2">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" value="normal" type="radio" name="vanchuyen">
                                                        <label class="fw-medium form-check-label mt-1" for="1">
                                                            <img src="views/asset/img/general/normal-delivery.png" alt="">
                                                            Thường
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="my-2 ms-2">
                                                    <div class="form-check">
                                                        <input required class="form-check-input" value="lowcost" type="radio" name="vanchuyen">
                                                        <label class="fw-medium form-check-label mt-1" for="1">
                                                            <img src="views/asset/img/general/lowcost-delivery.png" alt="">
                                                            Tiết kiệm
                                                        </label>
                                                    </div>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class=" p-0 d-flex justify-content-between gap-5">
                            <a href="<?= u::link('payment', 'abort') ?>" class="px-5  btn text-secondary py-3 bg-body-secondary border-0">QUAY LẠI <i class="fa-solid fa-turn-down text-secondary ms-2" style="transform: rotate(90deg);"></i>
                            </a>

                            <button type=submit class="flex-grow-1  btn text-white py-3 bg-golden border-0 fw-semibold">ĐẶT HÀNG NGAY<i class="fa-solid fa-money-bills ms-2"></i></span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    </div>

</main>
<script src="views/asset/javascript/ordering.js?v=1.0"></script>

<?php initFooter() ?>