<?php initHeader('Mua ngay', 'instantbuy') ?>

<main>

    <div class="container">

        <div class="row m-0 py-5">

            <div class="col-7">
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
                            <p class=" fs-6 fw-light">Số lượng</p>
                            <p class="fs-14 fw-bold"><?= $soluong ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Đơn giá</p>
                            <p class="fs-14 fw-bold"><?= nf($dongia) ?> ₫</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Shipping</p>
                            <p class="fs-14 fw-bold">Free</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class=" fs-6 fw-light">Tổng tiền</p>
                            <div class="d-flex align-text-top ">
                                <span class="h4"><?= nf($soluong * $dongia) ?> ₫</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 px-0  ">

                        <div class="row bg-light my-3 rounded-3">
                            <div class="col-12 my-2">
                                <div class="fw-bold h6 m-0 text-secondary">Thông tin đặt hàng</div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="payment-methods">
                                        <!-- <p class="mb-3 fs-6 fw-medium ">Phương thức thanh toán</p> -->
                                        <ul>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label mt-1 justify-content-center fw-medium " for="flexRadioDefault1">
                                                        <img src="views/asset/img/general/cash-on-delivery.png" alt="">
                                                         COD
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="fw-medium form-check-label mt-1" for="flexRadioDefault1">
                                                        <img src="views/asset/img/general/momo.png" alt="">
                                                         Momo
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="fw-medium form-check-label mt-1" for="flexRadioDefault1">
                                                        <img src="views/asset/img/general/visa.png" alt="">
                                                         Visa
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="my-2 ms-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="fw-medium form-check-label mt-1" for="flexRadioDefault1">
                                                        <img src="views/asset/img/general/bank.png" alt="">
                                                         Bank
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" p-0 d-block ">
                            <div class="btn btn-primary bg-golden">Đặt hàng ngay<span class="fas fa-arrow-right ps-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php initFooter() ?>