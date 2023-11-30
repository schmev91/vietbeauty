<?php
session_start();
include_once 'models/u.php';


$s = &$_SESSION;


if ($s['user']['isAdmin']) {

    $tableName = isset($_GET['table']) ? $_GET['table'] : 'nguoidung';
    if (isset($_GET['action'])) {
        include_once "controllers/adminController.php";

    } else {
        include_once "models/dao/$tableName.php";

        switch ($tableName) {
            case 'sanpham':
                include_once 'models/dao/danhmuc.php';
                include_once 'models/dao/thuonghieu.php';

                $list = getAllSanpham();
                foreach ($list as $index => $row) {
                    brandInlaiding($list[$index]);
                    categoryInlaiding($list[$index]);
                }
                $columnList = [
                    'ID',
                    'Ảnh',
                    'Tên',
                    'Giá',
                    'Danh mục',
                    'Thương hiệu'
                ];
                break;
            case 'donhang':
                include_once 'models/dao/nguoidung.php';
                $list = getAllDonhang();
                foreach ($list as $index => $row) {
                    userInlaiding($list[$index]);
                }
                $columnList = [
                    'ID',
                    'Người đặt',
                    'Ngày đặt',
                    'Tổng tiền ',
                    'Địa chỉ',
                    'Vận chuyển',
                    'Thanh toán',
                    'Trạng thái'
                ];

                break;
            case 'danhmuc':
                $list = getAllDanhmuc();
                $columnList = [
                    'ID',
                    'Tên danh mục',
                    'Ảnh'
                ];
                break;
            case 'thuonghieu':
                $list = getAllThuonghieu();
                $columnList = [
                    'ID',
                    'Thương hiệu',
                    'Ảnh'
                ];
                break;
            case 'danhgia':

                break;
            case 'hoidap':

                break;

            default:
                $list = getAllNguoidung();
                $columnList = [
                    'ID',
                    'isAdmin',
                    'isBanned',
                    'Tên',
                    'Email',
                    'Sdt',
                    'Địa chỉ'
                ];
        }
        include_once "views/admin/frame.php";
    }
} else {
    // Không phải admin thì quay về trang chủ
    header('location: index.php');
}

function navigator($tableName, $action){
    return "admin.php?table=$tableName&action=$action";
}
function setNavigator($tableName, $action){
    return "<input type='text' hidden name='table' value='$tableName'>
    <input type='text' hidden name='action' value='$action'>";
}