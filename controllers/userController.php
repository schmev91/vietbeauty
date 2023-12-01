<?php
include_once 'models/UserModel.php';

class UserController
{
    public static function show() {
        include_once "views/pages/user.php";
    }

    private $user;

    public function __construct($ma_nd = null)
    {
        if(isset($ma_nd) || !empty(s('user'))){
            $ma_nd = $ma_nd ? $ma_nd : s('user')['ma_nd'];
            $this->user = new UserModel($ma_nd);
        }
    }

    public function show()
    {
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);

            if(isset($_GET['userTab'])){
                switch ($_GET['userTab']) {
                    case 'orders':
                        $ordersList = $this->user->getDonhang();
                        break;
                    
                    case 'questions':
                        # code...
                        break;
                    
                }
            }
            
            include_once "views/pages/user.php";
        } else $this->showLoginForm();
    }

    public function showRegisterForm($errors = null)
    {
        if (!empty($errors)) extract($errors);

        include_once 'views/pages/register.php';
    }

    public function registerRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //code kiểm tra thông tin người dùng nhập vào có hợp lệ hay không

            //xử lý thông tin người dùng và cho vào data sau khi thông tin người dùng nhập hợp lệ
            $errors = UserModel::validateRegisterData($_POST);
            if (!empty($errors)) {
                return $this->showRegisterForm($errors);
            }
            //Thực hiện thêm người dùng vào csdl nếu không có lỗi
            $isRegistered = UserModel::registerUser($_POST, $_FILES);

            if ($isRegistered) $this->showLoginForm();
            else $this->showRegisterForm(['username' => 'Tên đăng nhập đã tồn tại']);
        } else header("location: index.php");
    }

    public function showLoginForm($errors = null)
    {
        // Hiển thị form đăng nhập
        if (!empty($errors)) extract($errors);
        include_once 'views/pages/login.php';
    }

    public function loginRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Gọi phương thức đăng nhập từ User, return true nếu đăng nhập thành công, false nếu không thành công
            $errors = UserModel::validateLoginData($_POST);
            if (!empty($errors)) return $this->showLoginForm($errors);

            // Lấy thông tin từ form
            $loginKey = $_POST['loginKey'];
            $password = $_POST['password'];

            $loginResult = UserModel::loginUser($loginKey, $password);

            if ($loginResult) {
                // Đăng nhập thành công, chuyển hướng đến trang chủ hoặc thread
                if (u::isThreading()) u::toThread();
                
                else if ($_GET['return=true']) {
                    header("location: " . $_SERVER['HTTP_REFERER']);
                } else header("location: index.php");

            } else {
                // Đăng nhập không thành công, hiển thị thông báo đăng nhập không thành công
                $this->showLoginForm(['loginKey' => 'Tên đăng nhập hoặc mật khẩu không chính xác.']);
            }
        }
    }

    public function logout()
    {
        // Xử lý đăng xuất, ví dụ: hủy phiên làm việc
        // Chuyển hướng đến trang chủ hoặc trang mặc định
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        session_destroy();
        header('Location: index.php');
    }
}
