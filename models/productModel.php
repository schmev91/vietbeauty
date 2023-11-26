<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
class productModel
{
    public static function getProduct($ma_sp)
    {
        $product = getSanphamByID($ma_sp);
        brandInlaiding($product);
        categoryInlaiding($product);

        return $product;
    }
}
