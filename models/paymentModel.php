<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
include_once "models/dao/giohang.php";
include_once "models/dao/donhang.php";
class paymentModel
{
    private $paymentInfo;

    public function __construct($userData)
    {
        $this->paymentInfo = array_merge($userData, getGiohangByNguoidung($userData['ma_nd']));
    }

    public function getPaymentInfo(){
        return $this->paymentInfo;
    }

    public function addOrder($orderData){
        // ma_dh ,ngaydat, tongtien, diachi, vanchuyen, thanhtoan, ma_gh, ma_nd
        extract($orderData);

        $ma_dh = uniqid();
        $ngaydat = new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh'));
        $order = ['ma_dh'=>$ma_dh, 'ngaydat'=>$ngaydat, ...$orderData];
        
        insertDonhang($order);
        return $ma_dh;

    }
}

class orderItem
{
    private $product;
    private $soluong;

    public function __construct(productModel $product, $soluong)
    {
        $this->product = $product;
        extract($this->product->getData());
        $this->soluong = $soluong;

    }

    public function getThanhtien(){
        extract($this->product->getData());

        return $dongia * $this->soluong;
    }

    public function getProduct(){
        return $this->product;
    }

    public function getAmount(){
        return $this->soluong;
    }
    public function insertCTDonhang($ma_dh){
        $dataCTDonhang = array();
        // ma_dh, ma_sp, soluong, dongia, thanhtien
        extract($this->product->getData());

        $dataCTDonhang['ma_dh']=$ma_dh;
        $dataCTDonhang['ma_sp']=$ma_sp;
        $dataCTDonhang['soluong']=$this->getAmount();
        $dataCTDonhang['dongia']=$dongia;
        $dataCTDonhang['thanhtien']=$this->getThanhtien();
        insertCTDonhang($dataCTDonhang);
    }
}