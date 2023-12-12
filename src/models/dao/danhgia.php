<?php
require_once 'pdo.php';

/**
 * Thêm đánh giá sản phẩm của người dùng
 *
 * @param int $ma_nd Mã người dùng
 * @param int $ma_sp Mã sản phẩm
 * @param float $diem Điểm đánh giá
 * @param string $noidung Nội dung đánh giá
 *
 * @return void
 */
function addDanhgia($ma_nd, $ma_sp, $diem, $noidung)
{
    $sql = "INSERT INTO danhgia (ma_nd, ma_sp, diem, noidung) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $ma_nd, $ma_sp, $diem, $noidung);
}

/**
 * Lấy đánh giá của người dùng cho một sản phẩm
 *
 * @param int $ma_nd Mã người dùng
 * @param int $ma_sp Mã sản phẩm
 *
 * @return array|false Mảng thông tin đánh giá hoặc false nếu không có đánh giá
 */
function getDanhgiaByNguoidungAndSanpham($ma_nd, $ma_sp)
{
    $sql = "SELECT * FROM danhgia WHERE ma_nd = ? AND ma_sp = ?";
    return pdo_query_one($sql, $ma_nd, $ma_sp);
}

/**
 * Lấy tất cả đánh giá của một sản phẩm
 *
 * @param int $ma_sp Mã sản phẩm
 *
 * @return array Danh sách tất cả đánh giá của sản phẩm
 */
function getAllDanhgiaBySanpham($ma_sp)
{
    $sql = "SELECT * FROM danhgia WHERE ma_sp = ?";
    return pdo_query($sql, $ma_sp);
}

function getSoluongDanhgiaBySanpham($ma_sp)
{
    $sql = "SELECT count(*) as soluongdg FROM danhgia WHERE ma_sp = ?";
    return pdo_query($sql, $ma_sp)[0]['soluongdg'];
}

function getAllDanhgia()
{
    $sql = "SELECT * FROM danhgia ";
    return pdo_query($sql);
}


/**
 * Tổng hợp số điểm đánh giá của một sản phẩm
 *
 * @param int $ma_sp Mã sản phẩm
 *
 * @return float Số điểm trung bình của sản phẩm
 */
function getAverageRatingBySanpham($ma_sp)
{
    $sql = "SELECT AVG(diem) as avg_rating FROM danhgia WHERE ma_sp = ?";
    return pdo_query_value($sql, $ma_sp);
}


/**
 * Xóa đánh giá của một người dùng cho một sản phẩm
 *
 * @param int $ma_nd Mã người dùng
 * @param int $ma_sp Mã sản phẩm
 *
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function deleteDanhgia($ma_nd, $ma_sp)
{
    $sql = "DELETE FROM danhgia WHERE ma_nd = ? AND ma_sp = ?";
    pdo_execute($sql, $ma_nd, $ma_sp);
}

/**
 * Kiểm tra xem người dùng đã đánh giá sản phẩm chưa
 *
 * @param int $ma_nd Mã người dùng
 * @param int $ma_sp Mã sản phẩm
 * 
 * @return bool Trả về true nếu người dùng đã đánh giá sản phẩm, ngược lại trả về false
 * @throws PDOException Lỗi thực thi câu lệnh
 */
function isUserRated($ma_nd, $ma_sp)
{
    $sql = "SELECT COUNT(*) FROM danhgia WHERE ma_nd = ? AND ma_sp = ?";
    $count = pdo_query_value($sql, $ma_nd, $ma_sp);

    // Nếu số lượng bản ghi là lớn hơn 0, người dùng đã đánh giá sản phẩm
    return $count > 0;
}
