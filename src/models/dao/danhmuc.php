<?php
require_once 'pdo.php';

/**
 * Lấy tất cả danh mục
 *
 * @return array Mảng chứa tất cả danh mục
 */
function getAllDanhmuc()
{
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function getAllDanhmucDesc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY ma_dm DESC";
    return pdo_query($sql);
}

function uploadCategoryImg($file)
{
    $imgDirectory = 'views/asset/img/category/';

    // Tạo tên mới cho tệp ảnh
    $newFileName = uniqid() . '_' . $file['name'];

    // Di chuyển tệp vào thư mục img với tên mới
    move_uploaded_file($file['tmp_name'], $imgDirectory . $newFileName);

    // Địa chỉ URL của ảnh mới
    $imagePath = $imgDirectory . $newFileName;
    return $imagePath;
}

/**
 * Lấy thông tin một danh mục theo mã danh mục
 *
 * @param int $ma_dm Mã danh mục
 *
 * @return array Mảng chứa thông tin của danh mục
 */
function getDanhmucById($ma_dm)
{
    $sql = "SELECT * FROM danhmuc WHERE ma_dm = ?";
    return pdo_query_one($sql, $ma_dm);
}

function insertDanhmuc($ten_dm, $hinh_dm)
{
    $sql = "INSERT INTO danhmuc (ten_dm, hinh_dm) VALUES (?, ?)";
    pdo_execute($sql, $ten_dm, $hinh_dm);
}


/**
 * Cập nhật thông tin một danh mục
 *
 * @param int $ma_dm Mã danh mục
 * @param string $ten_dm Tên danh mục mới
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function updateDanhmuc($ma_dm, $ten_dm)
{
    $sql = "UPDATE danhmuc SET ten_dm = ? WHERE ma_dm = ?";
    pdo_execute($sql, $ten_dm, $ma_dm);
}

/**
 * Xóa một danh mục
 *
 * @param int $ma_dm Mã danh mục
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function deleteDanhmuc($ma_dm)
{
    $sql = "DELETE FROM danhmuc WHERE ma_dm = ?";
    pdo_execute($sql, $ma_dm);
}


/**
 * thêm biến ten_dm cho sản phẩm
 *
 * @param array $product mảng chứa thông tin sản phẩm
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function categoryInlaiding(&$product)
{
    $product['ten_dm'] = getDanhmucById($product['ma_dm'])['ten_dm'];
}


/**
 * Tính tổng doanh thu theo danh mục cho tháng hiện tại
 * @return array Mảng chứa danh mục và tổng doanh thu
 */
function calculateRevenueByCategory()
{
    $sql = "
        SELECT
            dm.ten_dm AS TenDanhMuc,
            SUM(ct.thanhtien) AS TongDoanhThu
        FROM
            danhmuc dm
        JOIN
            sanpham sp ON dm.ma_dm = sp.ma_dm
        JOIN
            ctdonhang ct ON ct.ma_sp = sp.ma_sp
        JOIN
            donhang dh ON ct.ma_dh = dh.ma_dh
        WHERE
            MONTH(dh.ngaydat) = MONTH(CURRENT_DATE())
            AND YEAR(dh.ngaydat) = YEAR(CURRENT_DATE())
        GROUP BY
            dm.ten_dm;
    ";

    try {
        $result = pdo_query($sql);
        return $result;
    } catch (PDOException $e) {
        // Return an empty array or handle the error as needed
        return array();
    }
}
