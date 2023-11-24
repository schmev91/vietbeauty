<?php
include_once "models/shopModel.php";
class shopController
{
    public static function show()
    {

        $dssp = shopModel::getSpShop();

        include_once 'views/pages/shop.php';
    }
    
    public static function shopSearch()
    {
        $dssp = shopModel::getSpTheoTuKhoa($_POST['searchKeyword']);
        include_once 'views/pages/shop.php';
    }

    public function shopFilter()
    {
        // include_once 'views/home/shop.php';
    }
}
