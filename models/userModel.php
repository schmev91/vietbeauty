<?php
class UserModel {
    public function registerUser($data) {
        extract($data);
        // Thực hiện logic để thêm thông tin người dùng vào cơ sở dữ liệu

        // Trả về true nếu đăng ký thành công, false nếu thất bại

        //code kiểm tra tên đăng nhập của người dùng có trong cơ sở dữ liệu không và gán vào biến $isUserExist
        $isUserExist;

        if ($isUserExist) return false; // Trả về false nếu người dùng tồn tại và không thêm vào csdl
        
        //code thêm người dùng vào cơ sở dữ liệu
       
        //trả về true do đăng ký thành công người dùng vào cơ sở dữ liệu
        return true;
    }

    public function loginUser($username, $password) {
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
?>
