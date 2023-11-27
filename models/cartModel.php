<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
include_once "models/dao/giohang.php";
class cartModel
{
    public static function getCartQuantity($ma_nd){
        return getTotalQuantityInCart($ma_nd);
    }
    public function add($ma_nd, $ma_sp, $soluong)
    {
        $cart = getGiohangByNguoidung($ma_nd);
        if(empty($cart)){
            addGiohang($ma_nd);
            $cart = getGiohangByNguoidung($ma_nd);
        }
        extract($cart);

        if(isSpgiohangExists($ma_gh, $ma_sp)){
            //Nếu sản phẩm đã tồn tại mà vẫn thêm từ trang sản phẩm thì tăng số lượng
            increaseSoluongSpgiohang($ma_gh, $ma_sp, $soluong);
        } else {
            //Không tồn tại sẵn thì tiến hành thêm
            addSpgiohang($ma_gh, $ma_sp, $soluong);
        };

        updateLastActive($ma_gh);

        
    }
    public function createCart($ma_nd)
    {
        
    }
    
}
