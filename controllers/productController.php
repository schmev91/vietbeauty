<?php
include_once "models/productModel.php";
class productController {
    public static function show() {
        
        if(isset($_GET['ma_sp'])){
            $product = productModel::getProduct($_GET['ma_sp']);
            
            extract($product);
            include_once 'views/pages/productDetail.php';

        } else header('location: index.php');
    }

}
?>
