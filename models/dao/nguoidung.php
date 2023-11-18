<?php
require_once 'pdo.php';


function nguoidung_insert($ma_nd, $isAdmin, $isBanned, $ten_dangnhap, $ten_nd, $matkhau, $email, $sdt, $diachi, $avatar){
    $sql = "INSERT INTO nguoidung(ma_nd, isAdmin, isBanned, ten_dangnhap, ten_nd, matkhau, email, sdt, diachi, avatar)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_nd, $isAdmin == 0, $isBanned == 0, $ten_dangnhap, $ten_nd, $matkhau, $email, $sdt, $diachi, $avatar);
}

function nguoidung_update($ma_nd, $isBanned, $ten_nd, $matkhau, $email, $sdt, $diachi, $avatar){
    $sql = "UPDATE nguoidung SET isBanned=?,ten_nd=?,matkhau=?,email=?,sdt=?,diachi=?,avatar=? WHERE ma_nd=?";
    pdo_execute($sql, $isBanned == 0, $ten_nd, $matkhau, $email, $sdt, $diachi, $avatar, $ma_nd);
}

function nguoidung_delete($ma_nd){
    $sql = "DELETE FROM nguoidung WHERE ma_nd=?";
    //Nếu xóa nhiều người dùng một lúc $ma_nd = [1, 2, 3, 4]
    if(is_array($ma_nd)){
        foreach ($ma_nd as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    //Nếu chỉ xóa 1 người dùng
    else{
        pdo_execute($sql, $ma_nd);
    }
}

function nguoidung_select_all(){
    $sql = "SELECT * FROM nguoidung";
    return pdo_query($sql);
}

function nguoidung_select_by_id($ma_nd){
    $sql = "SELECT * FROM nguoidung WHERE ma_nd=?";
    return pdo_query_one($sql, $ma_nd);
}

function nguoidung_exist($ma_nd){
    $sql = "SELECT count(*) FROM nguoidung WHERE $ma_nd=?";
    return pdo_query_value($sql, $ma_nd) > 0;
}

function nguoidung_change_password($ma_nd, $matkhau_moi){
    $sql = "UPDATE nguoidung SET matkhau=? WHERE ma_nd=?";
    pdo_execute($sql, $matkhau_moi, $ma_nd);
}