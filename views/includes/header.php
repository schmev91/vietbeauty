<header>
    <section class="header_T">
        <div class="container-fluid header_topbg p-2">
            <div class="container">
                <div class="header_top" style="display: flex; justify-content: space-between;">
                    <div class="header_topleft">
                        <span>Sáng tạo nét đẹp, tinh tế mỗi nụ cười</span>
                    </div>
                    <div class="header_topright">
                        <ul class="header_right" style="display: flex; gap:20px">
                            <li><i class="fa-solid fa-headset"></i> <a href="index.php?controller=home&action=contact">Liên hệ</a></li>
                            <li>
                                <?php
                                if (!isset($_SESSION['user'])) {
                                    echo '<a href="index.php?controller=user&action=showLoginForm">Đăng Nhập</a>
                                    </li>
                                    <li>|</li>
                                    <li><a href="index.php?controller=user&action=showRegisterForm">Đăng Ký</a></li>';
                         } else { 
                           echo '<li><a href="index.php?controller=user&action=showRegisterForm"><i class="fa-solid fa-right-from-bracket me-2"></i> Đăng xuất</a></li>'; 
                        } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header_main">
        <div class="container-fluid header_mainbg">
            <div class="container py-2 ">
                <div class="row gap-5">
                    <div class="col-auto  p-0">
                        <div class="banner">
                            <a href="index.php"><img src="views/asset/img/general/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col p-0 justify-content-center ">
                        <div class="search">
                            <form class="input-group mb-2 rounded-4" method="post" action="index.php?controller=shop&action=shopSearch">
                                <input class="form-control rounded-start-4" type="text" name="searchKeyword" placeholder="Bạn muốn mua gì...">
                                <button class="searchBtn rounded-4" type="submit"><i class="fa-solid fa-magnifying-glass px-3 rounded-4 "></i></button>
                            </form>
                        </div>
                        <div class="loaidanhmuc">
                            <ul class="listdm" style="display: flex; gap:10px">
                                <li><a href="">Son Môi</a></li>
                                <li>|</li>
                                <li><a href="">Sữa dưỡng da</a></li>
                                <li>|</li>
                                <li><a href="">Dầu gội</a></li>
                                <li>|</li>
                                <li><a href="">Bảng kẻ mắt</a></li>
                                <li>|</li>
                                <li><a href="">Kem chống nắng</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-btns col-auto p-0 row gx-4 align-items-center justify-content-end ">
                        <a href="index.php?controller=shop&action=show" class="d-flex align-items-center"><i class="fa-solid fa-store me-1"></i> Cửa hàng</a>
                        <a href="index.php?controller=user&action=show" class="d-flex align-items-center">
                            <!-- <i class="fa-solid fa-circle-user me-1"></i>  -->
                            <div class="header-avatar me-1">
                                <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                            </div>
                            <?php
                            if (isset($_SESSION['user'])) {
                                $ten_nd = $_SESSION['user']['ten_nd'];
                                if (strlen($ten_nd) > 12) $ten_nd = substr($ten_nd, 0, 12) . '...';
                                echo $ten_nd;
                            } else echo 'Tài khoản';
                            ?>
                        </a>
                        <p class="header-btns-divider border-right p-0"></p>
                        <span class="cart-button">
                            <a href="index.php?controller=cart&action=show" class="d-flex align-items-center"><i class="fa-solid fa-cart-shopping"></i></a>
                            <span class="cart-itemAmount rounded-5">3</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>