<?php
require_once 'pdo.php';

/**
 * Lấy tất cả danh mục
 *
 * @return array Mảng chứa tất cả danh mục
 */
function getAllDanhmuc() {
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function getAllDanhmucDesc() {
    $sql = "SELECT * FROM danhmuc ORDER BY ma_dm DESC";
    return pdo_query($sql);
}

/**
 * Lấy thông tin một danh mục theo mã danh mục
 *
 * @param int $ma_dm Mã danh mục
 *
 * @return array Mảng chứa thông tin của danh mục
 */
function getDanhmucById($ma_dm) {
    $sql = "SELECT * FROM danhmuc WHERE ma_dm = ?";
    return pdo_query_one($sql, $ma_dm);
}

/**
 * Thêm mới một danh mục
 *
 * @param string $ten_dm Tên danh mục
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function insertDanhmuc($ten_dm) {
    $sql = "INSERT INTO danhmuc (ten_dm) VALUES (?)";
    pdo_execute($sql, $ten_dm);
}

/**
 * Cập nhật thông tin một danh mục
 *
 * @param int $ma_dm Mã danh mục
 * @param string $ten_dm Tên danh mục mới
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function updateDanhmuc($ma_dm, $ten_dm) {
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
function deleteDanhmuc($ma_dm) {
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
function categoryInlaiding(&$product){
    $product['ten_dm'] = getDanhmucById($product['ma_dm'])['ten_dm'];
}