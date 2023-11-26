<?php
include_once 'models/UserModel.php';

class UserController
{
    public static function show() {
        include_once "views/pages/user.php";
    }

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showRegisterForm($errors = null){
        if(!empty($errors)) extract($errors);

        include_once 'views/pages/register.php';
    }

    public function registerRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //code kiểm tra thông tin người dùng nhập vào có hợp lệ hay không

            //xử lý thông tin người dùng và cho vào data sau khi thông tin người dùng nhập hợp lệ
            $errors = $this->userModel->validateRegisterData($_POST);
            if(!empty($errors)){
                $this->showRegisterForm($errors);
            }
            //Thực hiện thêm người dùng vào csdl nếu không có lỗi
            $isRegistered = $this->userModel->registerUser($_POST, $_FILES);
            
            if($isRegistered) $this->showLoginForm();
            else $this->showRegisterForm(['username'=>'Tên đăng nhập đã tồn tại']);

        } else header("location: ".$_SERVER['HTTP_REFERER']);
    }

    public function showLoginForm() {
            // Hiển thị form đăng nhập
            include_once 'views/pages/login.php';
    }

    public function loginRequest(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin từ form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Gọi phương thức đăng nhập từ UserModel, return true nếu đăng nhập thành công, false nếu không thành công
            $loginResult = $this->userModel->loginUser($username, $password);

            if ($loginResult) {
                // Đăng nhập thành công, chuyển hướng đến trang chủ
                //code chuyển hướng
            } else {
                // Đăng nhập không thành công, hiển thị thông báo đăng nhập không thành công
                echo "Login failed. Invalid username or password.";
            }
        }
    }

    public function logout()
    {
        // Xử lý đăng xuất, ví dụ: hủy phiên làm việc
        // Chuyển hướng đến trang chủ hoặc trang mặc định

        header('Location: /');
    }
}
