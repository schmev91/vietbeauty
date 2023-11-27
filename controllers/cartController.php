<?php
include_once 'models/cartModel.php';
class cartController
{
    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new cartModel();
    }
    
    public function show()
    {
        include_once 'views/pages/cart.php';
    }

    public function addItem()
    {
        //check login
        //no -> show login
        //yes
        //check if user already have a cart
        //yes -> proceed
        //no -> create a cart for user 
        //check if product already in cart
        //yes -> update amount
        //no
        //add to cart then redirect to previous page

        //Sau khi đăng nhập thành công, nếu biến thread có tồn tại sẽ ngay lập tức chuyển hướng đến thread
        $_SESSION['thread'] = $_SERVER['HTTP_REFERER'];

        if (!isset($_SESSION['user'])) {
            //Nếu người dùng chưa đăng nhập thì chuyển hướng đến đăng nhập và thoát
            header('location: index.php?controller=user&action=showLoginForm');
            exit;
        }
        extract($_SESSION['user']);
        extract($_POST);
        
        //Thêm sản phẩm vào giỏ hàng
        $this->cartModel->add($ma_nd, $ma_sp, $soluong);

        //quay lại trang sản phẩm
        header("location:".$_SESSION['thread']);


    }

    public function instantBuying()
    {
        echo "nyanyanyaaaa";
    }

    public function deleteItem()
    {
    }

    public function payment()
    {
        include_once "views/pages/payment.php";
    }
}
