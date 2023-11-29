<?php
include_once 'models/paymentModel.php';
include_once 'models/productModel.php';
class paymentController
{
    private $payment;
    private $product;

    public function __construct()
    {
        
        if(u::isLoggedin() & isset($_POST['ma_sp'])){
            $this->payment = new paymentModel(s('user'));

            if(isset($_POST['ma_sp']))
                $this->product = new productModel($_POST['ma_sp']);
        }
    }

    public function show($productData = null){
        if($productData) extract($productData);
        include_once "views/pages/instantbuy.php";
    }
    
    public function instantBuying()
    {
        u::setThread();

        if(u::isLoggedin()  & isset($_POST['ma_sp'])){
            $this->show(array_merge($this->product->getData(), $_POST));
            
        } else {
            header("location: index.php");
        }
    }


    public function cartOrdering()
    {
    }

   
}
