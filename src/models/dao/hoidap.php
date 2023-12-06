<?php
require_once 'pdo.php';

/**
 * Lấy thông tin câu hỏi và trả lời theo sản phẩm
 *
 * @param int $ma_sp Mã sản phẩm
 *
 * @return array Mảng chứa thông tin câu hỏi và trả lời
 */
function getHoidapBySanpham($ma_sp)
{
    $sql = "SELECT * FROM hoidap WHERE ma_sp = ? ORDER BY thoigian DESC";
    return pdo_query($sql, $ma_sp);
}

function getAllHoidapDesc()
{
    $sql = "SELECT * FROM hoidap ORDER BY thoigian DESC";
    return pdo_query($sql);
}

/**
 * Thêm câu hỏi mới vào bảng hoidap
 *
 * @param string $noidung Nội dung câu hỏi
 * @param int $ma_sp Mã sản phẩm
 * @param int $ma_nd Mã người dùng đặt câu hỏi
 *
 * @return void
 */
function addCauhoi($noidung, $ma_sp, $ma_nd)
{
    $sql = "INSERT INTO hoidap (noidung, thoigian, ma_sp, ma_nd) VALUES (?, NOW(), ?, ?)";
    pdo_execute($sql, $noidung, $ma_sp, $ma_nd);
}

/**
 * Xóa câu hỏi và trả lời theo mã câu hỏi
 *
 * @param int $ma_hoidap Mã câu hỏi
 *
 * @return void
 */
function deleteHoidap($ma_hoidap)
{
    $sql = "DELETE FROM hoidap WHERE ma_hoidap = ?";
    pdo_execute($sql, $ma_hoidap);
}
