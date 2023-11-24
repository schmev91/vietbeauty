<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/thuonghieu.php";
class homeModel
{
    public static function getSpBanChay()
    {
        $dssp = getRandomSanpham(8);

        foreach ($dssp as $index => $sp) {
            $thuonghieu = getThuongHieuById($sp['ma_th'])['ten_th'];
            $dssp[$index]['thuonghieu'] = $thuonghieu;
        }
        return $dssp;


    }

}
