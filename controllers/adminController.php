<?php

$action = $_GET['action'];

$folderPath = 'models/dao/';

// Get all PHP files in the folder
$phpFiles = glob($folderPath . '*.php');

// Include each PHP file
foreach ($phpFiles as $phpFile) {
    include_once $phpFile;
}


switch ($tableName) {
    case 'nguoidung': {

            switch ($action) {
                case 'value':
                    # code...
                    break;
            }
            break;
        }

    case 'sanpham': {

            switch ($action) {
                case 'value':
                    # code...
                    break;
            }
            break;
        }

    case 'donhang': {

            switch ($action) {
                case 'updateTrangthai':
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
                case 'value':
                    # code...
                    break;
            }
            break;
        }

    case 'thuonghieu': {

            switch ($action) {
                case 'value':
                    # code...
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
