<?php

class productController
{
    public static function show()
    {
        //xóa biến thread nếu tồn tại
        //vì nếu thread tồn tại nhưng user ở trang sản phẩm thì nghĩa là user vừa quay lại qua thread
        // if(isset($_SESSION['thread'])) unset($_SESSION['thread']);
        u::killThread();

        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp'];


            $product = new productModel($ma_sp);
            $danhgiaData = productModel::getProductDanhgia($ma_sp);
            $hoidapData = productModel::getProductHoidap($ma_sp);
            $soluongdanhgia = getSoluongDanhgiaBySanpham($ma_sp);

            extract($product->getData());
            include_once './views/pages/productDetail.php';
        } else header('location: index.php');
    }
    public function ratingRequest()
    {
        // diem danh gia, noidung
        if (isset($_GET['ma_sp'])) {
            $ma_nd = s('user')['ma_nd'];
            $ma_sp = $_GET['ma_sp'];
            extract($_POST);

            $isRateAble = !isUserRated($ma_nd, $ma_sp);

            if ($isRateAble) {
                addDanhgia($ma_nd, $ma_sp, $diem, $noidung);
            }

            header('location:' . u::link('product', 'show', ['ma_sp' => $ma_sp]));
        } else
            u::toHome();
    }

    public function questioningRequest()
    {
        // noi dung, ma_sp, ma_nd
        if (isset($_GET['ma_sp'])) {
            $ma_nd = s('user')['ma_nd'];
            $ma_sp = $_GET['ma_sp'];
            extract($_POST);


            addCauhoi($noidung, $ma_sp, $ma_nd);
            header('location:' . u::link('product', 'show', ['ma_sp' => $ma_sp]));
        } else
            u::toHome();
    }

    public function questionDelete()
    {
        u::setThread();
        extract($_POST);
        if (isset($ma_hoidap)) {
            deleteHoidap($ma_hoidap);
        }
        u::toThread();
    }
}
