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
                    deleteNguoidung($_GET['ma_nd']);
                    u::toThread();
                    break;
            }
            break;
        }

    case 'sanpham': {

            switch ($action) {

                case 'create':
                    productModel::addProduct($_POST, $_FILES);

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
                case 'update':
                    U::setThread();
                    extract($_POST);
                    updateDanhmuc($ma_dm, $ten_dm);
                    U::toThread();
                    break;
            }
            break;
        }

    case 'thuonghieu': {

            switch ($action) {
                case 'update':
                    U::setThread();
                    extract($_POST);
                    updateThuonghieu($ma_th, $ten_th);
                    U::toThread();
                    break;
            }
            break;
        }

    case 'danhgia': {

            switch ($action) {
                case 'value':
                    # code...
                    break;
            }
            break;
        }

    case 'hoidap': {

            switch ($action) {
                case 'value':
                    # code...
                    break;
            }
            break;
        }
}
