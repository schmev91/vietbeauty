<?php
require_once 'pdo.php';

/**
 * Lấy thông tin giỏ hàng theo mã người dùng
 *
 * @param int $ma_nd Mã người dùng
 *
 * @return array Mảng chứa thông tin giỏ hàng
 */
function getGiohangByNguoidung($ma_nd) {
    $sql = "SELECT * FROM giohang WHERE ma_nd = ?";
    return pdo_query($sql, $ma_nd);
}

/**
 * Thêm giỏ hàng mới cho người dùng
 *
 * @param int $ma_nd Mã người dùng
 *
 * @return void
 */
function addGiohang($ma_nd) {
    $sql = "INSERT INTO giohang (lastactive, ma_nd) VALUES (CURRENT_TIMESTAMP, ?)";
    pdo_execute($sql, $ma_nd);
}

/**
 * Cập nhật thời gian last active của giỏ hàng
 *
 * @param int $ma_gh Mã giỏ hàng
 *
 * @return void
 */
function updateLastActive($ma_gh) {
    $sql = "UPDATE giohang SET lastactive = CURRENT_TIMESTAMP WHERE ma_gh = ?";
    pdo_execute($sql, $ma_gh);
}

/**
 * Xóa giỏ hàng theo mã người dùng
 *
 * @param int $ma_nd Mã người dùng
 *
 * @return void
 */
function deleteGiohangByNguoidung($ma_nd) {
    $sql = "DELETE FROM giohang WHERE ma_nd = ?";
    pdo_execute($sql, $ma_nd);
}

/**
 * Lấy thông tin sản phẩm trong giỏ hàng
 *
 * @param int $ma_gh Mã giỏ hàng
 *
 * @return array Mảng chứa thông tin sản phẩm trong giỏ hàng
 */
function getSpgiohang($ma_gh) {
    $sql = "SELECT * FROM spgiohang WHERE ma_gh = ?";
    return pdo_query($sql, $ma_gh);
}

/**
 * Thêm sản phẩm vào giỏ hàng
 *
 * @param int $ma_gh Mã giỏ hàng
 * @param int $ma_sp Mã sản phẩm
 * @param int $soluong Số lượng sản phẩm
 *
 * @return void
 */
function addSpgiohang($ma_gh, $ma_sp, $soluong) {
    $sql = "INSERT INTO spgiohang (ma_gh, ma_sp, soluong) VALUES (?, ?, ?)";
    pdo_execute($sql, $ma_gh, $ma_sp, $soluong);
}

/**
 * Cập nhật số lượng sản phẩm trong giỏ hàng
 *
 * @param int $ma_gh Mã giỏ hàng
 * @param int $ma_sp Mã sản phẩm
 * @param int $soluong Số lượng sản phẩm
 *
 * @return void
 */
function updateSoluongSpgiohang($ma_gh, $ma_sp, $soluong) {
    $sql = "UPDATE spgiohang SET soluong = ? WHERE ma_gh = ? AND ma_sp = ?";
    pdo_execute($sql, $soluong, $ma_gh, $ma_sp);
}

/**
 * Xóa sản phẩm khỏi giỏ hàng
 *
 * @param int $ma_gh Mã giỏ hàng
 * @param int $ma_sp Mã sản phẩm
 *
 * @return void
 */
function deleteSpgiohang($ma_gh, $ma_sp) {
    $sql = "DELETE FROM spgiohang WHERE ma_gh = ? AND ma_sp = ?";
    pdo_execute($sql, $ma_gh, $ma_sp);
}

/**
 * Xóa tất cả sản phẩm trong giỏ hàng của người dùng
 *
 * @param int $ma_nd Mã người dùng
 *
 * @return void
 */
function deleteAllSpgiohangByNguoidung($ma_nd) {
    // Lấy mã giỏ hàng của người dùng
    $giohang = getGiohangByNguoidung($ma_nd);

    // Xóa tất cả sản phẩm trong giỏ hàng
    foreach ($giohang as $gh) {
        $sql = "DELETE FROM spgiohang WHERE ma_gh = ?";
        pdo_execute($sql, $gh['ma_gh']);
    }
}
