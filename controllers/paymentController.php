<?php
include_once 'models/paymentModel.php';
include_once 'models/productModel.php';
class paymentController
{
    private $payment;

    public function __construct()
    {
        
        if(u::isLoggedin()){
            $this->payment = new paymentModel(s('user'));

        }
    }

    public function show($productData = null){
        if($productData) extract($productData);
        if(isset($this->payment)){
            extract($this->payment->getPaymentInfo());
            if(isset($diachi) && empty($diachi)) $diachi = null;
        }
        include_once "views/pages/ordering.php";
    }
    
    public function instantBuying()
    {
        if(u::isThreading())
            u::toThread();
        else u::setThread();

        extract($_POST);

        
        if(u::isLoggedin()  & isset($_POST['ma_sp'])){
            $product = new productModel($ma_sp);

            $this->show(array_merge($product->getData(), $_POST));
            
        } else {
            header("location: index.php");
        }
    }

    public function abort(){
        u::toThread();
    }

    public function orderRequest(){
        extract($this->payment->getPaymentInfo());
        extract($_POST);

        // ma_dh ,ngaydat, tongtien, diachi, vanchuyen, thanhtoan, ma_gh, ma_nd
        //tính tổng tiền và thành tiền từng sản phẩm ở controller trước
        // var_dump($_POST);
        if($type == 'instant'){
            $orderData = array();

            $item = new orderItem(new productModel($ma_sp), $soluong);

            $orderData['tongtien']= $item->getThanhtien();
            $orderData['diachi']= $diachi;
            $orderData['vanchuyen']= $vanchuyen;
            $orderData['thanhtoan']= $thanhtoan;
            $orderData['ma_gh']= null;
            $orderData['ma_nd']= $ma_nd;

            $ma_dh = $this->payment->addOrder($orderData);
            $item->insertCTDonhang($ma_dh);
            header('location: index.php');


        } else {

        }


    }

    public function statement(){

    }

    public function cartOrdering()
    {
    }

   
}
