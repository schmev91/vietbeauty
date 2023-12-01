<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
include_once "models/dao/giohang.php";
class cartModel
{
    private $cartInfo;
    public function __construct($ma_nd)
    {
        
        $this->cartInfo = getGiohangByNguoidung($ma_nd);
    }

    public static function getCartQuantity($ma_nd)
    {
        return getTotalQuantityInCart($ma_nd);
    }

    public function getCartData($ma_nd)
    {
        $data = getGiohangByNguoidung($ma_nd);
        if (empty($data)) return [];

        $data = getSpgiohang($data['ma_gh']);
        foreach ($data as $index => $row) {
            inlaidProductInfo($data[$index]);
            categoryInlaiding($data[$index]);
            brandInlaiding($data[$index]);
        }
        return $data;
    }

    public function add($ma_nd, $ma_sp, $soluong)
    {
        
        if (empty($this->cartInfo)) {
            addGiohang($ma_nd);
            $this->cartInfo = getGiohangByNguoidung($ma_nd);
        }
        extract($this->cartInfo);

        if (isSpgiohangExists($ma_gh, $ma_sp)) {
            //Nếu sản phẩm đã tồn tại mà vẫn thêm từ trang sản phẩm thì tăng số lượng
            increaseSoluongSpgiohang($ma_gh, $ma_sp, $soluong);
        } else {
            //Không tồn tại sẵn thì tiến hành thêm
            addSpgiohang($ma_gh, $ma_sp, $soluong);
        };

        updateLastActive($ma_gh);
    }

    public function delete($ma_sp)
    {
        if(empty($this->cartInfo)) return false;
        else {
            deleteSpgiohang($this->cartInfo['ma_gh'], $ma_sp);
            return true;
        }
    }

    public function updateQuantity($ma_sp, $soluong){
        updateSoluongSpgiohang($this->cartInfo['ma_gh'], $ma_sp, $soluong);
    }
}
