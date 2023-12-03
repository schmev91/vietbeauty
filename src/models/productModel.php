<?php
class productModel
{
    private $product;
    public function __construct($ma_sp)
    {
        $this->product = getSanphamByID($ma_sp);
        brandInlaiding($this->product);
        categoryInlaiding($this->product);
    }
    public function getData()
    {
        return $this->product;
    }

    public static function getProductHoidap($ma_sp)
    {
        $hoidapData = getHoidapBySanpham($ma_sp);
        foreach ($hoidapData as $hoidap) usernameInlaiding($hoidap);

        return $hoidapData;
    }

    public static function addProduct($data, $files)
    {

        // Nếu không có avatar, sử dụng default_avatar.png, nếu có thêm vào hệ thống và sử dụng
        $data['anh'] =
            isset($files['anh']) ? uploadProductImg($files['anh']) : './views/asset/img/general/default_product.png';


        insertSanpham($data['ten_sp'], $data['dongia'], $data['mota'], $data['anh'], $data['ma_dm'], $data['ma_th']);

        //trả về true do đăng ký thành công người dùng vào cơ sở dữ liệu
        return true;
    }
}
