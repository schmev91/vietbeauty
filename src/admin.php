<?php
session_start();
require "config.php";

$ModelsFolder = ROOT . '/models/';
$DAOFolder = ROOT . '/models/dao/';

// Get all PHP files in the folder
$phpFiles = array_merge(glob($ModelsFolder . '*.php'), glob($DAOFolder . '*.php'));

// Include each PHP file
foreach ($phpFiles as $phpFile) {
    include_once $phpFile;
}

$s = &$_SESSION;


if ($s['user']['isAdmin']) {

    $tableName = isset($_GET['table']) ? $_GET['table'] : null;

    if (isset($tableName) && isset($_GET['action'])) {
        include_once "./controllers/adminController.php";
    } else if (isset($tableName)) {
        $listArr = array();

        switch ($tableName) {
            case 'sanpham':

                $listArr['list'] = getAllSanphamDesc();
                $listArr['listDanhmuc'] = getAllDanhmuc();
                $listArr['listThuonghieu'] = getAllThuonghieu();

                foreach ($listArr['list'] as $index => $row) {
                    brandInlaiding($listArr['list'][$index]);
                    categoryInlaiding($listArr['list'][$index]);
                }
                $columnList = $sanphamColumns;

                $createWhat = "Sản phẩm";
                break;

            case 'donhang':
                $listArr['list'] = getAllDonhangDesc();
                foreach ($listArr['list'] as $index => $row) {
                    userInlaiding($listArr['list'][$index]);
                }
                $columnList = $donhangColumns;

                break;

            case 'danhmuc':
                $listArr['list'] = getAllDanhmucDesc();
                $columnList = $danhmucColumns;

                $createWhat = "Danh mục";
                break;

            case 'thuonghieu':
                $listArr['list'] = getAllThuonghieuDesc();
                $columnList = $thuonghieuColumns;
                $createWhat = "Thương hiệu";
                break;

            case 'danhgia':

                $list = getAllDanhgia();
                foreach ($list as $index => $danhgia) {
                    userInlaiding($list[$index]);
                    inlaidProductInfo($list[$index]);
                }
                $listArr['list'] = $list;
                $columnList = $danhgiaColumns;

                break;
            case 'hoidap':
                $list = getAllHoidapDesc();
                foreach ($list as $index => $hoidap) {
                    userInlaiding($list[$index]);
                    inlaidProductInfo($list[$index]);
                }
                $listArr['list'] = $list;
                $columnList = $hoidapColumns;

                break;

            case 'nguoidung':
                $listArr['list'] = getAllNguoidungDesc();
                $columnList = $nguoidungColumns;
                $createWhat = "Người dùng";
        }
        if (!isset($createWhat)) $createWhat = null;
        initAdmin($listArr, $columnList, $createWhat);
    } else {
        include_once ROOT . "/views/admin/frame.php";
    }
} else {
    // Không phải admin thì quay về trang chủ
    header('location: index.php');
}



function initAdmin($listArr, $columnList, $createWhat = null, $errors = null)
{
    global $tableName;
    extract($listArr);
    include_once ROOT . "/views/admin/frame.php";
}

function navigator($tableName, $action)
{
    return "admin.php?table=$tableName&action=$action";
}
function setNavigator($tableName, $action)
{
    return "<input type='text' hidden name='table' value='$tableName'>
    <input type='text' hidden name='action' value='$action'>";
}

function initInput($type, $name, $placeholder, $icon = null, $error = null)
{
    if (isset($error)) {
        $placeholder = $error;
    }

    $html = '<div class="input-group input-group mb-2">';

    if ($icon !== null) {
        $html .= '<span class="input-group-text"><i class="text-secondary fs-5 ' . $icon . '"></i></span>';
    }

    $html .= '<input required name="' . $name . '" type="' . $type . '" class="form-control ';
    $html .= isset($error) ? "is-invalid" : '';
    $html .= '" placeholder="' . $placeholder . '" aria-describedby="inputGroup-sizing-sm">
    </div>';
    echo $html;
}
