<?php
include_once "models/productModel.php";
class productController {
    public static function show() {
        
        if(isset($_GET['ma_sp'])){
            $ma_sp = $_GET['ma_sp'];
            $product = productModel::getProduct($ma_sp);
            $hoidapData = productModel::getProductHoidap($ma_sp);
            extract($product);
            include_once 'views/pages/productDetail.php';

        } else header('location: index.php');
    }

}
?>
