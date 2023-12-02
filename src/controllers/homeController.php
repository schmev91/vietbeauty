<?php
class homeController {
    public static function show() {
        $spbanchay = homeModel::getSpRandom8();
        $dsdm = homeModel::getHomeDm();
        $dsgy = homeModel::getSpRandom8();
        
        include_once './views/pages/home.php';
        
    }

    public function contact() {
        include_once './views/pages/contact.php';
    }


}
?>
