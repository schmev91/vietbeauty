<?php
/**
 * Thêm sản phẩm vào bảng sanpham
 * @param string $ten_sp Tên sản phẩm
 * @param float $dongia Đơn giá sản phẩm
 * @param string $mota Mô tả sản phẩm
 * @param string $anh Đường dẫn đến ảnh sản phẩm
 * @param int $ma_dm Mã danh mục
 * @param int $ma_th Mã thương hiệu
 */
function insertSanpham($ten_sp, $dongia, $mota, $anh, $ma_dm, $ma_th) {
    $sql = "INSERT INTO sanpham (ten_sp, dongia, mota, anh, ma_dm, ma_th) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_sp, $dongia, $mota, $anh, $ma_dm, $ma_th);
}

/**
 * Cập nhật thông tin sản phẩm trong bảng sanpham
 * @param int $ma_sp Mã sản phẩm cần cập nhật
 * @param string $ten_sp Tên sản phẩm
 * @param float $dongia Đơn giá sản phẩm
 * @param string $mota Mô tả sản phẩm
 * @param string $anh Đường dẫn đến ảnh sản phẩm
 * @param int $ma_dm Mã danh mục
 * @param int $ma_th Mã thương hiệu
 */
function updateSanpham($ma_sp, $ten_sp, $dongia, $mota, $anh, $ma_dm, $ma_th) {
    $sql = "UPDATE sanpham SET ten_sp = ?, dongia = ?, mota = ?, anh = ?, ma_dm = ?, ma_th = ? WHERE ma_sp = ?";
    pdo_execute($sql, $ten_sp, $dongia, $mota, $anh, $ma_dm, $ma_th, $ma_sp);
}

/**
 * Xóa sản phẩm từ bảng sanpham
 * @param int $ma_sp Mã sản phẩm cần xóa
 */
function deleteSanpham($ma_sp) {
    $sql = "DELETE FROM sanpham WHERE ma_sp = ?";
    pdo_execute($sql, $ma_sp);
}

/**
 * Lấy thông tin sản phẩm theo ID từ bảng sanpham
 * @param int $ma_sp Mã sản phẩm
 * @return array Mảng chứa thông tin sản phẩm
 */
function getSanphamByID($ma_sp) {
    $sql = "SELECT * FROM sanpham WHERE ma_sp = ?";
    return pdo_query_one($sql, $ma_sp);
}

/**
 * Lấy tất cả thông tin sản phẩm từ bảng sanpham
 * @return array Mảng chứa tất cả thông tin sản phẩm
 */
function getAllSanpham() {
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}

/**
 * Lấy ngẫu nhiên một số lượng sản phẩm từ bảng sanpham
 *
 * @param int $quantity Số lượng sản phẩm cần lấy
 *
 * @return array Mảng chứa thông tin các sản phẩm ngẫu nhiên
 */
function getRandomSanpham($quantity) {
    $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT ?";
    return pdo_query($sql, $quantity);
}

/**
 * Lấy ngẫu nhiên một số lượng sản phẩm từ bảng sanpham theo phạm vi giá
 *
 * @param int $quantity Số lượng sản phẩm cần lấy
 * @param float $minPrice Giá tối thiểu
 * @param float $maxPrice Giá tối đa
 *
 * @return array Mảng chứa thông tin các sản phẩm ngẫu nhiên theo phạm vi giá
 */
function getRandomSanphamByPriceRange($quantity, $minPrice, $maxPrice) {
    $sql = "SELECT * FROM sanpham WHERE dongia BETWEEN ? AND ? ORDER BY RAND() LIMIT ?";
    return pdo_query($sql, $minPrice, $maxPrice, $quantity);
}

