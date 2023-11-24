<?php
include_once "models/homeModel.php";
class homeController {
    public static function show() {
        $spbanchay = homeModel::getSpBanChay();

        include_once 'views/pages/home.php';
        
    }

    public function contact() {
        include_once 'views/pages/contact.php';
    }


}
?>
