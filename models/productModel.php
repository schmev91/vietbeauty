<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
include_once "models/dao/hoidap.php";
class productModel
{
    public static function getProduct($ma_sp)
    {
        $product = getSanphamByID($ma_sp);
        brandInlaiding($product);
        categoryInlaiding($product);

        return $product;
    }
    public static function getProductHoidap($ma_sp){
        $hoidapData = getHoidapBySanpham($ma_sp);
        foreach($hoidapData as $hoidap) usernameInlaiding($hoidap);
        
        return $hoidapData;
    }
}
