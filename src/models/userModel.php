<?php
class UserModel
{
    private $user;
    public function __construct($ma_nd = null)
    {
        if (isset($ma_nd))
            $this->user = getNguoidungById($ma_nd);
    }

    public function getDonhang()
    {
        $dataDonhang = array();
        $dataDonhang = getDonhangByNguoidungDesc($this->getId());

        return $dataDonhang;
    }

    public function reload()
    {
        $this->user = getNguoidungById($this->getId());
    }

    // Các phương thức khác liên quan đến người dùng
    public function getData()
    {
        return $this->user;
    }

    public function getId()
    {
        return $this->user['ma_nd'];
    }

    public function updateDiachi($diachi)
    {
        doiDiaChi($this->getId(), $diachi);
        $this->user['diachi'] = $diachi;
    }

    //Các phương thức liên quan đến đăng nhập đăng ký
    public static function registerUser($data, $files)
    {
        extract($data);
        // Thực hiện logic để thêm thông tin người dùng vào cơ sở dữ liệu
        // Trả về true nếu đăng ký thành công, false nếu thất bại

        //code kiểm tra tên đăng nhập của người dùng có trong cơ sở dữ liệu không và gán vào biến $isUserExist
        $isUserExist = nguoidungExists($username, $email);

        if ($isUserExist) return false; // Trả về false nếu người dùng tồn tại và không thêm vào csdl

        //code thêm người dùng vào cơ sở dữ liệu
        $insertData = array();

        $insertData['ten_dangnhap'] = $data['username'];
        $insertData['ten_nd'] = trim($data['firstName'] . ' ' . $data['lastName']);
        $insertData['matkhau'] = $data['password'];
        $insertData['email'] = $data['email'];
        $insertData['sdt'] = $data['phone'];

        //Nếu có địa chỉ thì gán, không thì để trống
        $insertData['diachi'] = isset($data['address']) ? $data['address'] : '';

        // Nếu không có avatar, sử dụng default_avatar.png, nếu có thêm vào hệ thống và sử dụng
        $insertData['avatar'] =
            isset($files['upload-avatar']) ? uploadAvatar($files['upload-avatar']) : './views/asset/img/general/default_avatar.png';

        insertNguoidung($insertData);

        //trả về true do đăng ký thành công người dùng vào cơ sở dữ liệu
        return true;
    }

    public static function validateRegisterData($data)
    {
        $errors = array();

        // Kiểm tra họ và tên
        $firstName = trim($data['firstName']);
        $lastName = trim($data['lastName']);

        // Kiểm tra `firstName`
        if (!preg_match("/^[a-zA-ZÀ-ỹ]+$/", $firstName)) {
            $errors['firstName'] = 'Họ không được chứa số hoặc kí tự đặc biệt.';
        } else if (strlen($firstName) >= 128) {
            $errors['firstName'] = 'Họ không được dài hơn 128 kí tự.';
        }

        // Kiểm tra `lastName`
        if (!preg_match("/^[a-zA-ZÀ-ỹ]+$/", $lastName)) {
            $errors['lastName'] = 'Tên không được chứa số hoặc kí tự đặc biệt.';
        } else if (strlen($lastName) >= 128) {
            $errors['lastName'] = 'Tên không được dài hơn 128 kí tự.';
        }

        // Kiểm tra tên đăng nhập
        if (!preg_match("/^[a-zA-Z\d]+$/", $data['username'])) {
            $errors['username'] = 'Tên đăng nhập không hợp lệ.';
        }

        // Kiểm tra email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email không hợp lệ.';
        }

        // Kiểm tra độ dài mật khẩu
        if (strlen($data['password']) >= 30) {
            $errors['password'] = 'Mật khẩu quá dài.';
        }

        // Kiểm tra xác nhận mật khẩu
        if (isset($data['passwordconfirm']) && $data['password'] !== $data['passwordconfirm']) {
            $errors['passwordconfirm'] = 'Mật khẩu không trùng khớp.';
        }

        // Kiểm tra số điện thoại
        if (!preg_match("/^\d{10,11}$/", $data['phone'])) {
            $errors['phone'] = 'Số điện thoại không hợp lệ.';
        }

        // Kiểm tra địa chỉ (cho phép không nhập)
        // // Nếu nhập, kiểm tra độ dài
        // if (!empty($data['address']) && strlen($data['address']) >= 256) {
        //     $errors['address'] = 'Địa chỉ quá dài.';
        // }

        return $errors;
    }

    public static function loginUser($loginKey, $password)
    {
        // Thực hiện logic để kiểm tra thông tin đăng nhập và trả về kết quả

        //code kiểm tra
        //người dùng có tồn tại hay không, gán vào $isUserExist
        //nếu có thì mật khẩu có đúng hay không, gán vào $isPasswordValid
        $user = pdo_query_one("SELECT * FROM nguoidung
        WHERE ten_dangnhap = '$loginKey'
           OR email = '$loginKey';");

        $isUserExist = !empty($user);
        $isPasswordValid = $isUserExist ? ($user['matkhau'] == $password ? true : false) : false;

        //nếu người dùng tồn tại và đúng mật khẩu thì đăng nhập thành công
        if ($isPasswordValid) {
            $_SESSION['user'] = $user;
            return true; // Đăng nhập thành công
        }

        return false; // Đăng nhập không thành công
    }

    public static function validateLoginData($data)
    {
        $errors = array();


        // Kiểm tra tên đăng nhập
        if (!preg_match("/^[\da-zA-Z@.]+$/", $data['loginKey'])) {
            $errors['loginKey'] = 'Tên đăng nhập không hợp lệ.';
        }


        // Kiểm tra độ dài mật khẩu
        if (strlen($data['password']) >= 30) {
            $errors['password'] = 'Mật khẩu quá dài.';
        }

        return $errors;
    }
}
