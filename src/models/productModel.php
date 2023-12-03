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
    public static function getProductHoidap($ma_sp){
        $hoidapData = getHoidapBySanpham($ma_sp);
        foreach($hoidapData as $hoidap) usernameInlaiding($hoidap);
        
        return $hoidapData;
    }
}
