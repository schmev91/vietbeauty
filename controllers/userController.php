<?php
include_once 'models/UserModel.php';

class UserController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function show()
    {
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
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
            $errors = $this->userModel->validateRegisterData($_POST);
            if (!empty($errors)) {
                return $this->showRegisterForm($errors);
            }
            //Thực hiện thêm người dùng vào csdl nếu không có lỗi
            $isRegistered = $this->userModel->registerUser($_POST, $_FILES);

            if ($isRegistered) $this->showLoginForm();
            else $this->showRegisterForm(['username' => 'Tên đăng nhập đã tồn tại']);
        } else if ($_GET['return=true']) {
            header("location: " . $_SERVER['HTTP_REFERER']);
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

            // Gọi phương thức đăng nhập từ UserModel, return true nếu đăng nhập thành công, false nếu không thành công
            $errors = $this->userModel->validateLoginData($_POST);
            if (!empty($errors)) return $this->showLoginForm($errors);

            // Lấy thông tin từ form
            $loginKey = $_POST['loginKey'];
            $password = $_POST['password'];

            $loginResult = $this->userModel->loginUser($loginKey, $password);

            if ($loginResult) {
                // Đăng nhập thành công, chuyển hướng đến trang chủ hoặc thread
                if (isset($_SESSION['thread'])) header('location: ' . $_SESSION['thread']);
                else if ($_GET['return=true']) {
                    header("location: " . $_SERVER['HTTP_REFERER']);
                } else header("location: index.php");

            } else {
                // Đăng nhập không thành công, hiển thị thông báo đăng nhập không thành công
                $this->showLoginForm(['loginKey' => 'Tên đăng nhập hoặc mật khẩu không tồn tại.']);
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
