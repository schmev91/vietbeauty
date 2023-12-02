<?php
include_once "models/productModel.php";

class productController {
    public static function show() {
        //xóa biến thread nếu tồn tại
        //vì nếu thread tồn tại nhưng user ở trang sản phẩm thì nghĩa là user vừa quay lại qua thread
        // if(isset($_SESSION['thread'])) unset($_SESSION['thread']);
        u::killThread();
        
        if(isset($_GET['ma_sp'])){
            $ma_sp = $_GET['ma_sp'];
            

            $product = new productModel($ma_sp);
            // $hoidapData = productModel::getProductHoidap($ma_sp);
            
            extract($product->getData());
            include_once 'views/pages/productDetail.php';

        } else header('location: index.php');
    }

}
?>
