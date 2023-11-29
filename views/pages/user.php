<?php initHeader('Tài khoản','user') ?>


  <main>
    <div class="container userInfo">
      <div class="row column-gap-4 my-5 py-5">
        <div class="col-3 navigator border border-secondary-subtle rounded-2 bg-white pt-4 px-0">

          <div class="navigator-head d-flex gap-2 px-2">
            <img class="navigator-avatar rounded-5 border border-2 border-dark-subtle" src="<?=$avatar?>" alt="">
            <span class="fs-3 fw-bold text-dark-emphasis ">Chào <?=$_SESSION['user']['ten_nd']?></span>
          </div>
          <div class="navigator-bottom mt-3 d-flex flex-column ">
            <!-- gắn php vào attribute mỗi item, nếu GET đúng trang của item thì thêm style bên dưới, nếu không thì không đúng trang thì thôi-->
            <a class="navigator-button py-3 px-2 fs-6 text-body-emphasis" style="background-color: rgba(183, 145, 96, .24) !important;" href="">Thông tin tài khoản</a>
            <a class="navigator-button py-3 px-2 fs-6 text-body-secondary" href="">Đơn hàng</a></li>
            <a class="navigator-button py-3 px-2 fs-6 text-body-secondary" href="">Hỏi đáp</a></li>
          </div>

        </div>

        <div class="col board border border-secondary-subtle rounded-2 bg-white row p-0 py-4">
          <div class="col border-end border-0  border ">
            <div class="fs-5 fw-bold text-">
              Thông tin tài khoản
            </div>

            <div class="row mt-4">
              <div class="col-auto mt-2">
                <img class="rounded-circle border border-1 border-secondary-subtle " src="<?=$avatar?>" style="max-width: 100px;" alt="">

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
                  <input type="text" class="form-control" placeholder="<?=$email?>" disabled >
                  <span class="input-group-text">
                    <i class="fa-solid fa-envelope text-black-50 "></i>
                  </span>
                </div>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="<?=$_SESSION['user']['ten_nd']?>">
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
                  <?=$sdt?>
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
                  <?=$email?>
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
        </div>

      </div>
    </div>
  </main>
  <?php initFooter() ?>
