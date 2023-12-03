<?php
session_start();
require "config.php";

$ModelsFolder = ROOT.'/models/';
$DAOFolder = ROOT.'/models/dao/';

// Get all PHP files in the folder
$phpFiles = array_merge(glob($ModelsFolder . '*.php'), glob($DAOFolder . '*.php'));
// var_dump($phpFiles);
// Include each PHP file
foreach ($phpFiles as $phpFile) {
    include_once $phpFile;
}

$s = &$_SESSION;


if ($s['user']['isAdmin']) {

    $tableName = isset($_GET['table']) ? $_GET['table'] : 'nguoidung';
    if (isset($_GET['action'])) {
        include_once "./controllers/adminController.php";

    } else {
        include_once "./models/dao/$tableName.php";

        switch ($tableName) {
            case 'sanpham':
                include_once './models/dao/danhmuc.php';
                include_once './models/dao/thuonghieu.php';

                $list = getAllSanphamDesc();
                $listDanhmuc = getAllDanhmuc();
                $listThuonghieu = getAllThuonghieu();

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
                
                $createWhat = "Sản phẩm";
                break;
            case 'donhang':
                include_once './models/dao/nguoidung.php';
                $list = getAllDonhangDesc();
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
                $list = getAllDanhmucDesc();
                $columnList = [
                    'ID',
                    'Tên danh mục',
                    'Ảnh'
                ];
                
                $createWhat = "Danh mục";
                break;
            case 'thuonghieu':
                $list = getAllThuonghieuDesc();
                $columnList = [
                    'ID',
                    'Thương hiệu',
                    'Ảnh'
                ];
                $createWhat = "Thương hiệu";
                break;
            case 'danhgia':

                break;
            case 'hoidap':

                break;

            default:
                $list = getAllNguoidungDesc();
                $columnList = [
                    'ID',
                    'isAdmin',
                    'isBanned',
                    'Tên',
                    'Email',
                    'Sdt',
                    'Địa chỉ'
                ];
                $createWhat = "Người dùng";
                
        }
        include_once "./views/admin/frame.php";
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