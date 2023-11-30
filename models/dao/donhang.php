<?php
require_once 'pdo.php';

/**
 * Lấy thông tin một đơn hàng theo mã đơn hàng
 *
 * @param int $ma_dh Mã đơn hàng
 *
 * @return array Mảng chứa thông tin của đơn hàng
 */
function getDonhangById($ma_dh) {
    $sql = "SELECT * FROM donhang WHERE ma_dh = ?";
    return pdo_query_one($sql, $ma_dh);
}

/**
 * Lấy chi tiết sản phẩm trong một đơn hàng
 *
 * @param int $ma_dh Mã đơn hàng
 *
 * @return array Mảng chứa thông tin chi tiết sản phẩm trong đơn hàng
 */
function getCTDonhangById($ma_dh) {
    $sql = "SELECT * FROM ctdonhang WHERE ma_dh = ?";
    return pdo_query($sql, $ma_dh);
}

/**
 * Thêm mới một đơn hàng
 *
 * @param array $donhang Mảng chứa thông tin đơn hàng
 *
 * @return int Mã đơn hàng vừa thêm mới
 */
function insertDonhang($donhang) {
    $sql = "INSERT INTO donhang (ma_dh ,ngaydat, tongtien, diachi, vanchuyen, thanhtoan, ma_gh, ma_nd) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $donhang['ma_dh'],$donhang['ngaydat'], $donhang['tongtien'], $donhang['diachi'], $donhang['vanchuyen'], $donhang['thanhtoan'], $donhang['ma_gh'], $donhang['ma_nd']);
    return pdo_query_value("SELECT LAST_INSERT_ID()");
}

/**
 * Thêm mới chi tiết sản phẩm trong đơn hàng
 *
 * @param array $ctdonhang Mảng chứa thông tin chi tiết sản phẩm
 */
function insertCTDonhang($ctdonhang) {
    $sql = "INSERT INTO ctdonhang (ma_dh, ma_sp, soluong, dongia, thanhtien) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $ctdonhang['ma_dh'], $ctdonhang['ma_sp'], $ctdonhang['soluong'], $ctdonhang['dongia'], $ctdonhang['thanhtien']);
}

/**
 * Cập nhật thông tin một đơn hàng
 *
 * @param array $donhang Mảng chứa thông tin đơn hàng
 */
function updateDonhang($donhang) {
    $sql = "UPDATE donhang SET ngaydat = ?, tongtien = ?, diachi = ?, vanchuyen = ?, thanhtoan = ?, ma_gh = ? WHERE ma_dh = ?";
    pdo_execute($sql, $donhang['ngaydat'], $donhang['tongtien'], $donhang['diachi'], $donhang['vanchuyen'], $donhang['thanhtoan'], $donhang['ma_gh'], $donhang['ma_dh']);
}

/**
 * Xóa một đơn hàng
 *
 * @param int $ma_dh Mã đơn hàng
 */
function deleteDonhang($ma_dh) {
    $sql = "DELETE FROM donhang WHERE ma_dh = ?";
    pdo_execute($sql, $ma_dh);
}

/**
 * Xóa chi tiết sản phẩm trong một đơn hàng
 *
 * @param int $ma_dh Mã đơn hàng
 */
function deleteCTDonhang($ma_dh) {
    $sql = "DELETE FROM ctdonhang WHERE ma_dh = ?";
    pdo_execute($sql, $ma_dh);
}
