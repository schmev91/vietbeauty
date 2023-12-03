<?php
class shopController
{
    public static function show($dssp = null)
    {

        if(!isset($dssp)) {
            $dssp = shopModel::getSpShop();
        }
        shopModel::addThSp($dssp);
        $dsdm = shopModel::getDmShop();
        $dsth = shopModel::getThShop();


        include_once './views/pages/shop.php';
    }
    
    public static function shopSearch()
    {
        $dssp = shopModel::getSpTheoTuKhoa($_POST['searchKeyword']);
        // include_once './views/pages/shop.php';
        shopController::show($dssp);
    }

    public function filter()
    {
        $params = array();
        if(isset($_GET['ma_dm'])) $params['ma_dm'] = $_GET['ma_dm'];
        if(isset($_GET['arr_ma_th'])) $params['arr_ma_th'] = $_GET['arr_ma_th'];
        if(isset($_GET['minPrice'])) $params['minPrice'] = $_GET['minPrice'];
        if(isset($_GET['maxPrice'])) $params['maxPrice'] = $_GET['maxPrice'];
        
        if(!count($params) == 0)
            $dssp = filterProducts($params);
        else $dssp = null;
        shopController::show($dssp);

    }
}
