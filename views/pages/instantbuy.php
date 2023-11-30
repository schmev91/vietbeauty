<?php initHeader('Mua ngay', 'instantbuy') ?>

<main>

    <div class="container">

        <form method="post" action="<?= u::link('payment', 'orderRequest') ?>" class="row m-0 py-5">

            <input type="text" hidden name="type" value="instant">
            <input type="text" hidden name="ma_sp" value="<?= $ma_sp ?>">
            <input type="text" hidden name="soluong" value="<?= $soluong ?>">
            

            <div class="col-6">
                <div class="row">
                    <div class="col-12 px-5 anhsp">
                        <img src="<?= $anh ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row m-0">
                    <div class="col-12">
                        <div class="d-flex align-items-end mt-4 mb-3">
                            <p class="h4 m-0 text-secondary-emphasis"><?= $ten_sp ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <a href="<?= u::link('shop', 'filter', ['ma_th_arr[]' => $ma_th]) ?>" class="fs-14 fw-bold text-scarlet"><?= $ten_th ?></a>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Số lượng</p>
                            <p class="fs-14 fw-bold"><?= $soluong ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Đơn giá</p>
                            <p class="fs-14 fw-bold"><?= nf($dongia) ?> ₫</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Tổng tiền</p>
                            <div class="d-flex align-text-top ">
                                <span class="h4"><?= nf($soluong * $dongia) ?> ₫</span>
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
                                <input type="text" name="diachi" required class="form-control bg-light <?= isset($diachi) ? 'border-0 border-3 border-start rounded-0" disabled  value="' . $diachi . '"' : null ?>>
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