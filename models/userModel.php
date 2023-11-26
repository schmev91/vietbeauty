<?php
include_once 'models/dao/nguoidung.php';
class UserModel
{
    public function registerUser($data, $files)
    {
        extract($data);
        // Thực hiện logic để thêm thông tin người dùng vào cơ sở dữ liệu
        // Trả về true nếu đăng ký thành công, false nếu thất bại

        //code kiểm tra tên đăng nhập của người dùng có trong cơ sở dữ liệu không và gán vào biến $isUserExist
        $isUserExist = nguoidungExists($username);

        if ($isUserExist) return false; // Trả về false nếu người dùng tồn tại và không thêm vào csdl

        //code thêm người dùng vào cơ sở dữ liệu
        $insertData = array();

        $insertData['ten_dangnhap'] = $data['username'];
        $insertData['ten_nd'] = trim($data['firstName'] . ' ' . $data['lastName']);
        $insertData['matkhau'] = $data['password'];
        $insertData['email'] = $data['email'];
        $insertData['sdt'] = $data['phone'];
        
        //Nếu có địa chỉ thì gán, không thì để trống
        $insertData['diachi'] = isset($data['diachi']) ? $data['diachi'] : '';

        // Nếu không có avatar, sử dụng default_avatar.png, nếu có thêm vào hệ thống và sử dụng
        $insertData['avatar'] = 
        isset($files['upload-avatar']) ? uploadAvatar($files['upload-avatar']) : 'views/asset/img/general/default_avatar.png';
        
        insertNguoidung($insertData);

        //trả về true do đăng ký thành công người dùng vào cơ sở dữ liệu
        return true;
    }

    public function validateRegisterData($data)
    {
        $errors = array();

        // Kiểm tra họ và tên
        $fullName = trim($data['firstName'] . ' ' . $data['lastName']);
        if (!preg_match("/[a-zA-ZÀ-ỹ]+/", $fullName)) {
            $errors['fullName'] = 'Họ và tên không được chứa số hoặc kí tự đặc biệt.';
        } else if(strlen($fullName) >= 256){
            $errors['fullName'] = 'Họ và tên không được dài hơn 256 kí tự.';
        }

        // Kiểm tra tên đăng nhập
        if (!preg_match("/^[a-zA-Z]+$/", $data['username'])) {
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
        if ($data['password'] !== $data['passwordconfirm']) {
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

    public function loginUser($username, $password)
    {
        // Thực hiện logic để kiểm tra thông tin đăng nhập và trả về kết quả

        //code kiểm tra
        //người dùng có tồn tại hay không, gán vào $isUserExist
        //nếu có thì mật khẩu có đúng hay không, gán vào $isPasswordValid
        $isUserExist = true;
        $isPasswordValid = true;

        //nếu người dùng tồn tại và đúng mật khẩu thì đăng nhập thành công
        if ($isUserExist && $isPasswordValid) {
            return true; // Đăng nhập thành công
        }

        return false; // Đăng nhập không thành công
    }

    // Các phương thức khác liên quan đến người dùng
}
