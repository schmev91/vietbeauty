<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css">

    <link rel="stylesheet" href="views/asset/css/payment.css">
</head>

<?php include_once "views/includes/header.php"?>


<main>
      <div class="container p-3">
        <section class="tientrinh">
        <ul class="list_tientrinh">
            <li>Đăng Nhập</li>
            <li><i class="fa-solid fa-angle-right" style="color:#000000"></i></li>
            <li>Thông tin nhận hàng</li>
            <li><i class="fa-solid fa-angle-right" style="color:#000000"></i></li>
            <li>Hình thức vận chuyển</li>
            <li><i class="fa-solid fa-angle-right" style="color:#000000"></i></li>
            <li>Thanh toán</li>
        </ul>
        </section>
      </div>
      <div class="container">
       <div class="row">
        <div class="col-7">
            <section class="thongtinnhanhang">
                <span style="font-size: 20px; font-weight: 500;">Thông tin nhận hàng</span>
               <div class="codiachi">
                <ul class="thongtin">
                    <li style=" font-weight: 500;">Nhà Riêng</li>
                    <li>Quyên Trương</li>
                    <li>Điện thoại:0397890813</li>
                    <li ><a href=""style="color:#990D23">Thay đổi thông tin</a></li>
                </ul>
                <span>Phần mềm Quang Trung, Quận 12, Tòa T.....</span>
               </div>
               <div class="chuadiachi">
                <input type="text" placeholder="Nhập địa chỉ..." style="width: 400px;margin-top: 10px; margin-bottom: 10px;" class="d-none" > <br>
               </div>
            </section>
            <div class="htvc mt-3">
                <span style="font-size: 20px;font-weight: 500;">Hình thức vận chuyển</span> <br>
                    <input type="radio" style="margin-top: 20px;"> Vận chuyển thường <br>
                    <input type="radio" style="margin-top: 20px;"> Vận chuyển nhanh
            </div>
            <div class="pttt mt-3">
                <span style="font-size: 20px;font-weight: 500;">Phương thức thanh toán</span> <br>
                    <input type="radio" style="margin-top: 20px;"> Thẻ ATM đăng ký Internet Banking (Miễn phí thanh toán) <br>
                    <input type="radio" style="margin-top: 20px;"> Ví điện tử <br>
                    <input type="radio" style="margin-top: 20px;"> Chuyển khoản ngân hàng <br>
                    <input type="radio" style="margin-top: 20px;"> Thanh toán tiền mặt khi nhận hàng (COD) <br>
            </div>
        </div>
        <div class="col-5">
            <span style="font-weight:500; font-size: 20px;">Đơn hàng</span>
            <span style="margin-left: 370px;">Sửa</span>
            <div class="tensp">
                <ul class="ttsp">
                    <li><img src="views/asset/img/general/thanhtoan_sonkemli.jpg" alt="" width="100px" height="100px" style="margin-top: 10px;"></li>
                    <li style="margin-top: 10px;">Son Kem Lì Black Rouge A12 Dashed Brown Nâu Gạch 4.5g
                        Air Fit Velvet Ver 2 Mood Filter #A12 Dashed Brown</li> <br>
                </ul>
               <div class="slgt" style="border-bottom: 1px solid #000000;padding-bottom: 10px;">
                <label for="" style="margin-top: 10px;">Số lượng</label>
                <input type="number" style="width: 50px;">
                <span style="margin-left: 280px;color: red; font-size: 20px;">x278.000 đ</span>
               </div>
                <div class="tamtinh mt-4">
                    <span style="font-weight: 500;">Tạm tính</span>
                    <span style="color:red;margin-left: 345px;font-size: 20px;">278.000đ</span> <br>
                </div>
                <div class="phivanchuyen mt-3">
                    <span>Phí vận chuyển:</span>
                    <span style="margin-left: 360px;font-size: 20px;">0đ</span> <br>
                </div>
                <div class="giamgia mt-3" style="border-bottom: 1px solid #000000;padding-bottom: 20px;">
                    <span>Giảm giá:</span>
                    <span style="margin-left: 400px;font-size: 20px;">-0đ</span> <br>
                </div>
                <div class="tt mt-4">
                    <span style="font-weight: 500;">Thành tiền:</span>
                    <span style="color:red;margin-left: 345px;font-size: 20px;">278.000đ</span> <br>
                    <button class="btn-button">ĐẶT HÀNG</button>
                </div>
            </div>
        </div>
       </div>
      </div>
</main>

<?php include_once "views/includes/footer.php" ?>
