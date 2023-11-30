<?php initHeader('Tài khoản', 'user') ?>


<main>
  <div class="container userInfo">
    <div class="row column-gap-4 my-5 py-5">
      <div class="col-3 navigator border border-secondary-subtle rounded-2 bg-white pt-4 px-0">

        <div class="navigator-head d-flex gap-2 px-2">
          <img class="navigator-avatar rounded-5 border border-2 border-dark-subtle" src="<?= $avatar ?>" alt="">
          <span class="fs-3 fw-bold text-dark-emphasis ">Chào <?= $_SESSION['user']['ten_nd'] ?></span>
        </div>
        <div class="navigator-bottom mt-3 d-flex flex-column ">
          <!-- gắn php vào attribute mỗi item, nếu GET đúng trang của item thì thêm style bên dưới, nếu không thì không đúng trang thì thôi-->
          <?php
          $ACTIVE = 'class="navigator-button py-3 px-2 fs-6 text-body-emphasis" style="background-color: rgba(183, 145, 96, .24) !important;"';
          $UNACTIVE = 'class="navigator-button py-3 px-2 fs-6 text-body-secondary"';
          ?>
          <a <?= isset($_GET['userTab']) ? $UNACTIVE : $ACTIVE ?> href="<?= u::link('user', 'show') ?>">Thông tin tài khoản</a>
          <a <?= isset($_GET['userTab']) && $_GET['userTab'] == 'orders' ? $ACTIVE : $UNACTIVE ?> href="<?= u::link('user', 'show', ['userTab' => 'orders']) ?>">Đơn hàng</a></li>
          <a <?= isset($_GET['userTab']) && $_GET['userTab'] == 'questions' ? $ACTIVE : $UNACTIVE ?> href="<?= u::link('user', 'show', ['userTab' => 'questions']) ?>">Hỏi đáp</a></li>
        </div>

      </div>

      <!-- CHANGEABLE SECTION -->
      <div class="col board border border-secondary-subtle rounded-2 bg-white row p-0 py-4">

        <?php
        // code
        if (isset($_GET['userTab'])) {

          if ($_GET['userTab'] == 'orders') {
            // code
            if (!empty($ordersList)) {

        ?>

              <div class="orders-container d-flex flex-column py-2 px-4 gap-2 ">

                <?php
                // code
                foreach ($ordersList as $order) {
                  extract($order);

                ?>
                  <!-- HTML -->
                  <div class="order border border-1 rounded-3 p-3  d-flex gap-3">
                    <div class="orderIcon flex-grow-0">
                      <i class="fa-solid fa-receipt text-secondary fs-1"></i>
                    </div>

                    <div class="orderDetail d-flex flex-grow-1">
                      <div class="left flex-grow-1">
                        <div class="text-dark-emphasis fw-bold fs-5">
                          Mã đơn hàng #<span><?= $ma_dh ?></span>
                        </div>
                        <div class="text-dark-emphasis fw-normal mt-2" style="font-size: .8rem">
                          <?= $ngaydat ?>
                        </div>

                        <div class="text-dark-emphasis fw-normal mt-3" style="font-size: .9rem">
                          Địa chỉ nhận hàng: <span class="text-dark-emphasis fw-medium fs-6"><?=$diachi?></span>
                        </div>
                      </div>

                      <div class="right flex-grow-1 d-flex align-items-end flex-column justify-content-between ">
                        <div class="text-dark-emphasis fw-medium fs-6">
                          Tổng tiền: <span class="text-secondary-emphasis fw-bold fs-5"><?=nf($tongtien)?></span> ₫
                        </div>
                        <div class="text-dark  fw-medium mt-3">
                          Trạng thái: <span class="text-info"><?=$trangthai?></span>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php } ?>

              </div>

            <?php

            } else {

            ?>
              <!-- HTML -->
              <div class="fs-4 text-secondary-emphasis p-4">Bạn chưa đặt đơn hàng nào!</div>

          <?php

            }
          }
        } else {
          //TRANG THÔNG TIN TÀI KHOẢN
          ?>

          <div class="col border-end border-0  border ">
            <div class="fs-5 fw-bold text-">
              Thông tin tài khoản
            </div>

            <div class="row mt-4">
              <div class="col-auto mt-2">
                <img class="rounded-circle border border-1 border-secondary-subtle " src="<?= $avatar ?>" style="max-width: 100px;" alt="">

                <form method="post" action="">
                  <div class="d-flex flex-column gap-2 align-items-center ">
                    <label for="avatar" class="avatarLabel  mt-1">Đổi ảnh</label>
                    <input type="file" name="avatar" style="visibility: hidden;max-width: 100px;" id="avatar" class="uploadAvatar border border-0 " accept="image/*">
                  </div>

                </form>
              </div>

              <!-- ĐỐI VỚI CHỨC NĂNG CẬP NHẬT THÌ CÓ THỂ GẮN LISTENER VÀO NÚT CẬP NHẬT,
            NẾU NGƯỜI DÙNG NHẤN NÚT CẬP NHẬT THÌ DÙNG JAVASCRIPT THAY COL GIỮA VÀ COL CUỐI THÀNH INPUT VÀ SUMIT BUTTON -->
              <form class="col d-flex flex-column gap-2 pe-4">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="<?= $email ?>" disabled>
                  <span class="input-group-text">
                    <i class="fa-solid fa-envelope text-black-50 "></i>
                  </span>
                </div>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="<?= $_SESSION['user']['ten_nd'] ?>">
                  <span class="input-group-text">
                    <i class="fa-solid fa-user text-black-50 "></i>
                  </span>
                </div>
                <button type="submit" class="border-0 py-2 px-3 rounded-5 text-white fw-bold mt-3" style=" background-color:#B4975A;">Cập nhật</button>
              </form>
            </div>
          </div>
          <div class="col">
            <div class="fs-5 fw-bold text-">
              Số điện thoại và Email
            </div>
            <div class="d-flex flex-column gap-4 px-3 mt-3">
              <div class="row align-items-center">
                <i class="fa-solid fa-phone col-auto fs-4 text-secondary" style="height: fit-content;"></i>
                <div class="d-flex flex-column col">
                  <div class="text-body-secondary mb-1">
                    <?= $sdt ?>
                  </div>
                  <div class="text-body-tertiary  ">
                    Cập nhật số điện thoại
                  </div>
                </div>
                <button class="col-auto border-0 rounded-5 text-bg-light text-secondary fw-bold py-2">Cập nhật</button>
              </div>
              <div class="row align-items-center">
                <i class="fa-solid fa-envelope col-auto fs-4 text-secondary" style="height: fit-content;"></i>
                <div class="d-flex flex-column col">
                  <div class="text-body-secondary mb-1">
                    <?= $email ?>
                  </div>
                  <div class="text-body-tertiary  ">
                    Cập nhật Email
                  </div>
                </div>
                <button class="col-auto border-0 rounded-5 text-bg-light text-secondary fw-bold py-2">Cập nhật</button>
              </div>
            </div>

            <div class="fs-5 fw-bold mt-3">
              Bảo mật
            </div>
            <div class="d-flex flex-column gap-4 px-3 mt-3">
              <div class="row align-items-center">
                <i class="fa-solid fa-lock col-auto fs-4 text-secondary" style="height: fit-content;"></i>
                <div class="d-flex flex-column col">
                  <div class="text-body-secondary">
                    Đổi mật khẩu
                  </div>
                </div>
                <button class="col-auto border-0 rounded-5 text-bg-light text-secondary fw-bold py-2">Cập nhật</button>
              </div>
            </div>
          </div>

        <?php } ?>


      </div>

    </div>
  </div>
</main>
<?php initFooter() ?>