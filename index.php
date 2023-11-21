<?php

if (isset($_GET['controller']) && isset($_GET['action'])) {
    //Lấy tên controller và nối đuôi 'Controller' để sử dụng sau
    $controllerName = $_GET['controller'] . 'Controller';
    //Lấy action
    $action = $_GET['action'];

    include_once "controllers/$controllerName.php";

    $controller = new $controllerName();

    // Gọi phương thức tương ứng trong controller
    $controller->$action();

} else {
    // Hiển thị trang mặc định
    $defaultController = "home";
    $defaultAction = "index";
    
    // header("location: index.php?controller=$defaultController&action=$defaultAction");
    include_once "./controllers/homeController.php";
    $controller = new homeController();
    $controller -> index();
}
?>
