<?php
include_once 'models/paymentModel.php';
class paymentController
{
    private $payment;

    public function __construct()
    {
        
        $this->payment = new paymentModel(s('user')['ma_nd']);
    }
    
    public function instantBuying()
    {
        echo "nyanyanyaaaa";
    }


    public function cartOrdering()
    {
        include_once "views/pages/payment.php";
    }

   
}
