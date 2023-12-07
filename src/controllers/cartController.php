<?php
class cartController
{
    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new cartModel(s('user')['ma_nd']);
    }

    public function show()
    {
        if (!isset($_SESSION['user'])) {
            header('location: index.php');
            exit;
        }
        extract($_SESSION['user']);
        $cartData = $this->cartModel->getCartData($ma_nd);

        include_once './views/pages/cart.php';
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
        // $_SESSION['thread'] = $_SERVER['HTTP_REFERER'];
        u::setThread();

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
        // header("location:".$_SESSION['thread']);
        u::toThread();
    }

    public function deleteItem()
    {
        u::setThread($_SERVER['HTTP_REFERER']);
        if (isset($_GET['ma_sp']))
            $deleteResult = $this->cartModel->delete($_GET['ma_sp']);

        u::toThread();
    }

    public function changeQuantity()
    {

        u::setThread();
        extract($_POST);

        if (isset($soluong) && $soluong > 0) {
            $this->cartModel->updateQuantity($ma_sp, $soluong);
        }

        u::toThread();
    }
}
