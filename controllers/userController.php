<?php
include_once 'models/UserModel.php';

class UserController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //code kiểm tra thông tin người dùng nhập vào có hợp lệ hay không

            //xử lý thông tin người dùng và cho vào data sau khi thông tin người dùng nhập hợp lệ
            $data = [];

            // Gọi phương thức đăng ký từ UserModel
            //Trả về false nếu tên đăng nhập đã tồn tại
            $registrationResult = $this->userModel->registerUser($data);

            if ($registrationResult) {
                // Đăng ký thành công, có thể chuyển hướng hoặc hiển thị thông báo
                echo "Registration successful!";
            } else {
                // Đăng ký không thành công, có thể chuyển hướng hoặc hiển thị thông báo
                echo "Registration failed.";
            }
        } else {
            // Hiển thị form đăng ký
            include_once 'views/user/register.php';
        }
    }

    public function login() {
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
        } else {
            // Hiển thị form đăng nhập
            include_once 'views/user/login.php';
        }
    }

    public function logout()
    {
        // Xử lý đăng xuất, ví dụ: hủy phiên làm việc
        // Chuyển hướng đến trang chủ hoặc trang mặc định

        header('Location: /');
    }
}
