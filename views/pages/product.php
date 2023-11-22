<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="stylesheet" href="views/asset/css/general.css">

    <link rel="stylesheet" href="views/asset/css/product.css">
</head>

<body>
    <?php include_once "views/includes/header.php" ?>

    <main>
        <section class="headerdetail ">
            <div class="container pt-3 detail">
                <div class="row">
                    <div class="imgdetail col-sm-4">
                        <div class="imgbig">
                            <img src="views/asset/img/productResource/chitietbig2.jpg" width="250px" height="300px" alt="">
                        </div>
                    </div>
                    <div class="contentdetail col-sm-8">
                        <h1 class="titledetail">Son Môi L'Oréal Mịn Lì 129 I Lead - Cam Đỏ Đất 1.7g Color Riche Intense Volume </h1>
                        <p>Thương hiệu: LOREAL PARIS</p>
                        <h2 class="price">179.000<sup>đ</sup></h2>
                        <img class="ratingscore" src="views/asset/img/productResource/rating.png" width="80px" height="22px" alt="">
                        <div>Số lượng:</div>
                        <input type="number" name="" id="">
                        <div>
                            <button class="buy">MUA NGAY</button>
                            <button class="add">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container info_main mt-2">
            <span style="font-size: 25px;font-weight:500;">Thông tin sản phẩm</span>
            <div class="info">Son mịn lì cao cấp Color Riche Intense Volume Matte 2g là dòng son môi cao cấp mới của thương hiệu L'Oréal, với thiết kế thanh lịch cùng đầu son vát cong mềm mại mang đến cho bạn hơi thở của sự sang trọng. Chất son mịn lì với hiệu ứng nhung mịn, lâu trôi lướt trên môi nhẹ nhàng. Dòng son còn được bổ sung thêm Hyaluronic Acid giúp khóa ẩm, cho đôi môi mềm căng mướt cả ngày dài.</div>
            <img class="infoimg" src="views/asset/img/productResource/chitiet2.jpg" height="400px" alt="">
        </div>
        <section class="danhgiabig mt-4">
            <div class="container danhgia">
                <div class="row">
                    <div class="diemdanhgia col-sm-3">
                        <h3 class="titletb">Đánh giá trung bình</h3>
                        <h1 class="diemtb">4.0</h1>
                        <p class="sodanhgia">30 lượt đánh giá</p>
                        <img class="starttb" src="views/asset/img/productResource/rating.png" width="150px" height="30px" alt="">
                    </div>
                    <div class="rating col-sm-4">
                        <div class="ratingstar">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class="full" for="star2"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1"></label>
                        </div>
                        <div class="xinsao">Hãy cho chúng tôi biết đánh giá của bạn</div>
                    </div>
                    <div class="lsrating col-sm-5">
                        <div class="userrt1">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commentbig mt-4">
            <div class="container comment">
                <span style="font-size: 25px;font-weight:500;margin-top: 30px;">Bình luận về sản phẩm</span>
                <div class="usercomment">
                    <textarea class="comment1" placeholder="Viết bình luận" id="" style="height: 60px; width: 1270px;"></textarea>
                    <hr>
                    <div class="comment2">
                        <div class="nameuser" style="background-color: #f5f5f5; border-radius: 10px; padding: 5px 5px 5px 5px; margin-top: 5px; margin-bottom: 5px;">Người dùng A: Sản phẩm rất OK!! </div>
                        <div class="nameuser" style="background-color: #f5f5f5; border-radius: 10px; padding: 5px 5px 5px 5px; margin-top: 5px; margin-bottom: 5px;">Người dùng A: Sản phẩm rất OK!! </div>
                        <div class="nameuser" style="background-color: #f5f5f5; border-radius: 10px; padding: 5px 5px 5px 5px; margin-top: 5px; margin-bottom: 5px;">Người dùng A: Sản phẩm rất OK!! </div>
                        <div class="nameuser" style="background-color: #f5f5f5; border-radius: 10px; padding: 5px 5px 5px 5px; margin-top: 5px; margin-bottom: 5px;">Người dùng A: Sản phẩm rất OK!! </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recomment mb-5 ">
            <div class="container pt-4">
                <span style="font-size: 25px;font-weight:500;margin-top: 30px;">Sản phẩm cùng loại</span>
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img" src="views/asset/img/productResource/chitietbig2.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="recomment-tittle" style="font-weight: 50px0;">Son Môi L'Oréal</h3>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">179.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img" src="views/asset/img/productResource/chitietbig2.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="recomment-tittle" style="font-weight: 50px0;">Son Môi L'Oréal</h3>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">179.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img" src="views/asset/img/productResource/chitietbig2.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="recomment-tittle" style="font-weight: 50px0;">Son Môi L'Oréal</h3>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">179.000 đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width:300px;height: 400px;">
                            <img class="card-img" src="views/asset/img/productResource/chitietbig2.jpg" alt="Card image">
                            <div class="card-body">
                                <h3 class="recomment-tittle" style="font-weight: 50px0;">Son Môi L'Oréal</h3>
                                <span style="font-size: 25px; font-weight: 500; color:red;margin-left:70px;">179.000 đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once "views/includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>