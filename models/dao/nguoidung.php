<?php
require_once 'pdo.php';

/**
 * Lấy thông tin người dùng theo tên đăng nhập
 *
 * @param string $ten_dangnhap Tên đăng nhập của người dùng
 *
 * @return array Mảng chứa thông tin của người dùng
 */
function getNguoidungByTenDangnhap($ten_dangnhap)
{
    $sql = "SELECT * FROM nguoidung WHERE ten_dangnhap = ?";
    return pdo_query_one($sql, $ten_dangnhap);
}

/**
 * Lấy thông tin người dùng theo mã người dùng
 *
 * @param int $ma_nd Mã người dùng
 *
 * @return array Mảng chứa thông tin của người dùng
 */
function getNguoidungById($ma_nd)
{
    $sql = "SELECT * FROM nguoidung WHERE ma_nd = ?";
    return pdo_query_one($sql, $ma_nd);
}

/**
 * Thêm mới một người dùng
 *
 * @param array $nguoidung Mảng chứa thông tin người dùng
 *
 * @return int Mã người dùng vừa thêm mới
 */
function insertNguoidung($nguoidung)
{

    $sql = "INSERT INTO nguoidung (isAdmin, isBanned, ten_dangnhap, ten_nd, matkhau, email, sdt, diachi, avatar) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute(
        $sql,
        0,
        0,
        $nguoidung['ten_dangnhap'],
        $nguoidung['ten_nd'],
        $nguoidung['matkhau'],
        $nguoidung['email'],
        $nguoidung['sdt'],
        $nguoidung['diachi'],
        $nguoidung['avatar']
    );
    // return pdo_query_value("SELECT LAST_INSERT_ID()");
}

function getUsernameById($ma_nd){
    return pdo_query_value("SELECT ten_nd FROM nguoidung WHERE ma_nd =".$ma_nd);
}

/**
 * Cập nhật thông tin một người dùng
 *
 * @param array $nguoidung Mảng chứa thông tin người dùng
 */
function updateNguoidung($nguoidung)
{
    $sql = "UPDATE nguoidung SET ten_nd = ?, matkhau = ?, email = ?, sdt = ?, diachi = ?, avatar = ? WHERE ma_nd = ?";
    pdo_execute(
        $sql,
        $nguoidung['ten_nd'],
        $nguoidung['matkhau'],
        $nguoidung['email'],
        $nguoidung['sdt'],
        $nguoidung['diachi'],
        $nguoidung['avatar'],
        $nguoidung['ma_nd']
    );
}

/**
 * Xóa một người dùng
 *
 * @param int $ma_nd Mã người dùng
 */
function deleteNguoidung($ma_nd)
{
    $sql = "DELETE FROM nguoidung WHERE ma_nd = ?";
    pdo_execute($sql, $ma_nd);
}


/**
 * Kiểm tra xem một người dùng có tồn tại hay không
 *
 * @param string $ten_dangnhap Tên đăng nhập của người dùng
 *
 * @return bool True nếu người dùng tồn tại, False nếu không tồn tại
 */
function nguoidungExists($ten_dangnhap, $email)
{
    $sql = "SELECT COUNT(*) FROM nguoidung WHERE ten_dangnhap = ? || email = ?";
    $count = pdo_execute($sql, $ten_dangnhap, $email);
    return $count > 0;
}

/**
 * Đăng nhập người dùng bằng tên đăng nhập và mật khẩu
 *
 * @param string $ten_dangnhap Tên đăng nhập của người dùng
 * @param string $matkhau Mật khẩu của người dùng
 *
 * @return array|false Mảng thông tin người dùng nếu đăng nhập thành công, False nếu thất bại
 */
function dangNhap($ten_dangnhap, $matkhau)
{
    $sql = "SELECT * FROM nguoidung WHERE ten_dangnhap = ? AND matkhau = ?";
    $user = pdo_query_one($sql, $ten_dangnhap, $matkhau);

    return $user;
}

//=====CÁC HÀM THAY ĐỔI MỘT FIELD=====
/**
 * Đổi tên người dùng
 *
 * @param int $ma_nd ID của người dùng
 * @param string $ten_nd Tên mới của người dùng
 */
function doiTenNguoiDung($ma_nd, $ten_nd)
{
    $sql = "UPDATE nguoidung SET ten_nd = ? WHERE ma_nd = ?";
    pdo_execute($sql, $ten_nd, $ma_nd);
}


/**
 * Đổi mật khẩu người dùng
 *
 * @param int $ma_nd ID của người dùng
 * @param string $matkhau Mật khẩu mới của người dùng
 */
function doiMatKhau($ma_nd, $matkhau)
{
    $sql = "UPDATE nguoidung SET matkhau = ? WHERE ma_nd = ?";
    pdo_execute($sql, $matkhau, $ma_nd);
}


/**
 * Đổi địa chỉ email người dùng
 *
 * @param int $ma_nd ID của người dùng
 * @param string $email Email mới của người dùng
 */
function doiEmail($ma_nd, $email)
{
    $sql = "UPDATE nguoidung SET email = ? WHERE ma_nd = ?";
    pdo_execute($sql, $email, $ma_nd);
}


/**
 * Đổi số điện thoại người dùng
 *
 * @param int $ma_nd ID của người dùng
 * @param string $sdt Số điện thoại mới của người dùng
 */
function doiSoDienThoai($ma_nd, $sdt)
{
    $sql = "UPDATE nguoidung SET sdt = ? WHERE ma_nd = ?";
    pdo_execute($sql, $sdt, $ma_nd);
}


/**
 * Đổi địa chỉ người dùng
 *
 * @param int $ma_nd ID của người dùng
 * @param string $diachi Địa chỉ mới của người dùng
 */
function doiDiaChi($ma_nd, $diachi)
{
    $sql = "UPDATE nguoidung SET diachi = ? WHERE ma_nd = ?";
    pdo_execute($sql, $diachi, $ma_nd);
}


/**
 * Đổi avatar người dùng
 *
 * @param int $ma_nd ID của người dùng
 * @param string $avatar Đường dẫn mới đến avatar của người dùng
 */
function doiAvatar($ma_nd, $avatar)
{
    $sql = "UPDATE nguoidung SET avatar = ? WHERE ma_nd = ?";
    pdo_execute($sql, $avatar, $ma_nd);
}


/**
 * Ban người dùng
 *
 * @param int $ma_nd ID của người dùng
 */
function banNguoiDung($ma_nd)
{
    $sql = "UPDATE nguoidung SET isBanned = 1 WHERE ma_nd = ?";
    pdo_execute($sql, $ma_nd);
}

/**
 * Mở khóa người dùng
 *
 * @param int $ma_nd ID của người dùng
 */
function moKhoaNguoiDung($ma_nd)
{
    $sql = "UPDATE nguoidung SET isBanned = 0 WHERE ma_nd = ?";
    pdo_execute($sql, $ma_nd);
}

/**
 * Thêm quản trị viên
 *
 * @param int $ma_nd ID của người dùng
 */
function themAdmin($ma_nd)
{
    $sql = "UPDATE nguoidung SET isAdmin = 1 WHERE ma_nd = ?";
    pdo_execute($sql, $ma_nd);
}


/**
 * Giáng chức quản trị viên
 *
 * @param int $ma_nd ID của người dùng
 */
function giangChucAdmin($ma_nd)
{
    $sql = "UPDATE nguoidung SET isAdmin = 0 WHERE ma_nd = ?";
    pdo_execute($sql, $ma_nd);
}


/**
 * thêm giá trị ten_nd cho biến truyền vào
 *
 * @param array $arr mảng chứa thông tin cần truyền giá trị tên nd
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function usernameInlaiding(&$arr)
{
    $arr['ma_nd'] = getThuonghieuById($arr['ma_th']);
}


/**
 * thêm ảnh vào hệ thống và trả về đường dẫn
 *
 * @param file $_FILE['uploadedImg'] file ảnh cần thêm
 * @return imgPath đường dẫn đến ảnh
 * 
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function uploadAvatar($file)
{
    $imgDirectory ='views/asset/img/avatar/';

    // Tạo tên mới cho tệp ảnh
    $newFileName = uniqid() . '_' . $file['name'];

    // Di chuyển tệp vào thư mục img với tên mới
    move_uploaded_file($file['tmp_name'], $imgDirectory . $newFileName);

    // Địa chỉ URL của ảnh mới
    $imagePath = $imgDirectory . $newFileName;
    return $imagePath;
}
