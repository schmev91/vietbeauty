<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
class homeModel
{
    public static function getSpRandom8()
    {
        $dssp = getRandomSanpham(8);

        foreach ($dssp as $index => $sp) {
            $thuonghieu = getThuongHieuById($sp['ma_th'])['ten_th'];
            $dssp[$index]['thuonghieu'] = $thuonghieu;
        }
        return $dssp;
    }
    public static function getHomeDm()
    {
        return getAllDanhmuc();
    }
}
