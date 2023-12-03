<?php
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
    //Hàm void, nhận địa chỉ của mảng muốn chỉnh sửa sau đó chỉnh sửa trực tiếp
    public static function addThSp(&$dssp)
    {
        foreach ($dssp as $index => $sp) {
            $thuonghieu = getThuongHieuById($sp['ma_th'])['ten_th'];
            $dssp[$index]['thuonghieu'] = $thuonghieu;
        }
    }

    public static function getDmShop()
    {
        return getAllDanhmuc();
    }

    public static function getThShop()
    {
        return getAllThuonghieu();
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
