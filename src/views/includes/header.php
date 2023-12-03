<?php
global $DEFAULT_AVATAR;

?>

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
                                if (!isset($_SESSION['user'])) { ?>

                                    <a href="index.php?controller=user&action=showLoginForm">Đăng Nhập</a>
                            </li>
                            <li>|</li>
                            <li><a href="index.php?controller=user&action=showRegisterForm">Đăng Ký</a></li>

                        <?php  } else { 
                            if($_SESSION['user']['isAdmin']){
                                echo '<li><a href="admin.php"><i class="fa-solid fa-wrench"></i> Quản trị</a>
                                </li>';
                            }
                            ?>
                            <li><a href="index.php?controller=user&action=logout"><i class="fa-solid fa-right-from-bracket me-2"></i> Đăng xuất</a>
                            </li>
                        <?php } ?>
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
                                <li><a href="index.php?controller=shop&action=filter&ma_dm=1">Son Môi</a></li>
                                <li>|</li>
                                <li><a href="index.php?controller=shop&action=filter&ma_dm=2">Nước hoa</a></li>
                                <li>|</li>
                                <li><a href="index.php?controller=shop&action=filter&ma_dm=3">Kem chống nắng</a></li>
                                <li>|</li>
                                <li><a href="index.php?controller=shop&action=filter&ma_dm=4">Tẩy da mặt</a></li>
                                <li>|</li>
                                <li><a href="index.php?controller=shop&action=filter&ma_dm=5">Dầu gội & Dầu xả</a></li>
                                <li>|</li>
                                <li><a href="index.php?controller=shop&action=filter&ma_dm=6">Bảng phấn mắt</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-btns col-auto p-0 row gx-4 align-items-center justify-content-end ">
                        <a href="index.php?controller=shop&action=show" class="d-flex align-items-center"><i class="fa-solid fa-store me-1"></i> Cửa hàng</a>
                        <a href="index.php?controller=user&action=show" class="d-flex align-items-center">
                            <!-- <i class="fa-solid fa-circle-user me-1"></i>  -->
                            <div class="header-avatar me-1">
                                <img src="<?= isset($_SESSION['user']) ? $_SESSION['user']['avatar'] : $DEFAULT_AVATAR ?>" alt="">
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
                        <a href="<?= s('user') ? u::link('cart', 'show') : u::link('user', 'showLoginForm'); ?>" class="cart-button d-flex align-items-center">
                            <i class="fa-solid fa-cart-shopping"></i>

                            <?php
                            if (s('user')) {
                                $cartQuantity = u::getCartQuantity(s('user')['ma_nd']);
                                $cartQuantity = $cartQuantity ? $cartQuantity : 0;
                                echo '<span class="cart-itemAmount rounded-5">' .  $cartQuantity . '</span>';
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>