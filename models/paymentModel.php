<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
include_once "models/dao/giohang.php";
class paymentModel
{
    private $paymentInfo;

    public function __construct($userData)
    {
        $this->paymentInfo = array_merge($userData, getGiohangByNguoidung($userData['ma_nd']));
    }
}
