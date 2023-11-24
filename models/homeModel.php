<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/thuonghieu.php";
class homeModel
{
    public static function getSpBanChay()
    {
        $products = getRandomSanpham(8);

        $spbanchay = [];
        foreach ($products as $product) {
            $anh = $product['anh'];
            $dongia = $product['dongia'];
            $thuonghieu = getThuongHieuById($product['ma_th'])['ten_th'];
            $ten_sp = $product['ten_sp'];
            $spbanchay[] = [
                'anh' => $anh,
                'dongia' => $dongia,
                'thuonghieu' => $thuonghieu,
                'ten_sp' => $ten_sp,
            ];
        }
        return $spbanchay;


    }

}
