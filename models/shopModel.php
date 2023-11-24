<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/thuonghieu.php";
class shopModel
{
    public static function getSpShop()
    {
        $dssp = getAmountOfSanpham(12);

        foreach ($dssp as $index => $sp) {
            $thuonghieu = getThuongHieuById($sp['ma_th'])['ten_th'];
            $dssp[$index]['thuonghieu'] = $thuonghieu;
        }
        return $dssp;
    }

    public static function getSpTheoTuKhoa($keyword)
    {
        $dssp = searchProductsByKeyword($keyword);

        foreach ($dssp as $index => $sp) {
            $thuonghieu = getThuongHieuById($sp['ma_th'])['ten_th'];
            $dssp[$index]['thuonghieu'] = $thuonghieu;
        }
        return $dssp;
    }

}
