<?php

$action = $_GET['action'];


switch ($tableName) {
    case 'nguoidung': {

            switch ($action) {
                case 'create':
                    u::setThread();
                    $errors = UserModel::validateRegisterData($_POST);

                    if (!empty($errors)) {
                        $listArr['list'] = getAllNguoidungDesc();
                        initAdmin($listArr, $nguoidungColumns, $tableLabels['nguoidung'], $errors);
                        exit;
                    }
                    $isRegistered = UserModel::registerUser($_POST, $_FILES);

                    u::toThread();

                    break;
                case 'update':
                    extract($_POST);
                    u::setThread();
                    updateIsAdmin($ma_nd, $isAdmin);
                    updateIsBanned($ma_nd, $isBanned);
                    doiTenNguoiDung($ma_nd, $ten_nd);
                    doiEmail($ma_nd, $email);
                    doiSoDienThoai($ma_nd, $sdt);
                    doiDiaChi($ma_nd, $diachi);
                    u::toThread();
                    break;
                case 'delete':
                    u::setThread();

                    try {
                        deleteNguoidung($_GET['ma_nd']);
                    } catch (\Throwable $th) {
                        ob_clean();
                        echo
                        '<h1>Không thể xóa người dùng.</h1>';
                        echo '<script>
                            setTimeout(function() {
                                window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";
                                }, 3000); // Wait for 3 seconds
                            </script>';
                        exit;
                    } finally {
                        u::toThread();
                    }

                    break;
            }
            break;
        }

    case 'sanpham': {

            switch ($action) {

                case 'create':
                    u::setThread();
                    productModel::addProduct($_POST, $_FILES);
                    u::toThread();

                    break;

                case 'update':
                    extract($_POST);
                    u::setThread();
                    updateTenSp($ma_sp, $ten_sp);
                    updateDongia($ma_sp, $dongia);
                    updateMaDanhmuc($ma_sp, $ma_dm);
                    updateMaThuonghieu($ma_sp, $ma_th);
                    u::toThread();
                    break;
                case 'delete':
                    u::setThread();

                    try {
                        extract($_GET);
                        $product = new productModel($ma_sp);
                        extract($product->getData());
                        deleteSanpham($ma_sp);
                        deleteSanphamImg($anh);
                    } catch (\Throwable $th) {
                        ob_clean();
                        echo
                        '<h1>Không thể xóa sản phẩm.</h1>';
                        echo '<script>
                            setTimeout(function() {
                                window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";
                                }, 3000); // Wait for 3 seconds
                            </script>';
                        exit;
                    } finally {
                        u::toThread();
                    }
            }
            break;
        }

    case 'donhang': {

            switch ($action) {
                case 'update':
                    u::setThread();
                    extract($_GET);
                    updateDonhangStatus($ma_dh, $trangthai);
                    u::toThread();
                    break;
                case 'value':
                    # code...
                    break;
            }
            break;
        }

    case 'danhmuc': {

            switch ($action) {

                case 'create':
                    u::setThread();
                    $hinh_dm = uploadCategoryImg($_FILES['hinh_dm']);
                    insertDanhmuc($_POST['ten_dm'], $hinh_dm);
                    u::toThread();

                    break;
                case 'update':
                    U::setThread();
                    extract($_POST);
                    updateDanhmuc($ma_dm, $ten_dm);
                    U::toThread();
                    break;
                case 'delete':
                    U::setThread();
                    extract($_GET);
                    deleteDanhmuc($ma_dm);
                    U::toThread();
                    break;
            }
            break;
        }

    case 'thuonghieu': {

            switch ($action) {
                case 'create':
                    u::setThread();
                    $hinh_th = uploadBrandImg($_FILES['hinh_th']);
                    insertThuonghieu($_POST['ten_th'], $hinh_th);
                    u::toThread();

                    break;
                case 'update':
                    U::setThread();
                    extract($_POST);
                    updateThuonghieu($ma_th, $ten_th);
                    U::toThread();
                    break;
                case 'delete':
                    U::setThread();
                    extract($_GET);
                    deleteThuonghieu($ma_th);
                    U::toThread();
                    break;
            }
            break;
        }

    case 'danhgia': {

            switch ($action) {
                case 'delete':
                    u::setThread();
                    extract($_POST);
                    deleteDanhgia($ma_nd, $ma_sp);
                    u::toThread();
                    break;
            }
            break;
        }

    case 'hoidap': {

            switch ($action) {
                case 'delete':
                    u::setThread();
                    extract($_POST);
                    deleteHoidap($ma_hoidap);
                    u::toThread();
                    break;
            }
            break;
        }
}
