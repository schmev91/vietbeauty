<?php
session_start();
require "config.php";

$ModelsFolder = ROOT . '/models/';
$DAOFolder = ROOT . '/models/dao/';

// Get all PHP files in the folder
$phpFiles = array_merge(glob($ModelsFolder . '*.php'), glob($DAOFolder . '*.php'));
// var_dump($phpFiles);
// Include each PHP file
foreach ($phpFiles as $phpFile) {
    include_once $phpFile;
}


$s = &$_SESSION;



$DEFAULT_AVATAR = './views/asset/img/general/default_avatar.png';
if (isset($_GET['controller']) && isset($_GET['action'])) {
    //Lấy tên controller và nối đuôi 'Controller' để sử dụng sau
    $controllerName = $_GET['controller'] . 'Controller';
    //Lấy action
    $action = $_GET['action'];

    include_once "./controllers/$controllerName.php";

    $controller = new $controllerName();

    // Gọi phương thức tương ứng trong controller
    $controller->$action();
} else {
    // Hiển thị trang chỉ định
    include_once "./controllers/homeController.php";
    homeController::show();
}
