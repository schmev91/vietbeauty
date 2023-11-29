<?php initHeader('Liên hệ','contact') ?>

    <div class="container pb-3 ">
        <div style="padding-bottom: 20px;">
            <img src="views/asset/img/banner/contactBanner.png" class="mx-auto d-block" alt="..." width="1300">
        </div>

        <div class="row justify-content-around align-items-center my-5 px-5">
            <div class="col-4">
                <div class="text">
                    <h1 class="text-start fs-1 fw-bold mb-4 justify-content-start">Trò chuyện với chúng tôi</h1>
                    <p class="mb-4">Câu hỏi, đề xuất hay bình luân. Chỉ cần đơn giản điền vào form và chúng tôi sẽ liên hệ với bạn trong thời gian ngắn nhất!</p>
                    <div class="address mb-3 " style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" ">
                <path d=" M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <p><b>Tp. HCM, quận 12, phường Tân Chánh Hiệp, công viên phần <br> mềm Quang Trung, Tòa T</b></p>
                    </div>
                    <div class="phone mb-3 " style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <p><b>+84 976 xxxxxx</b></p>
                    </div>
                    <div class="email mb-3 " style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                        <p><b>vietbeauty@gmail.com</b></p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <form style="border: 1px solid #BDBDBD; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="forminf">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input-firstname">Họ</label>
                                <input type="text" class="form-control" id="input-firstname" placeholder="Họ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input-name">Tên</label>
                                <input type="text" class="form-control" id="input-name" placeholder="Tên">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="beruaso123@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="inputphone">Số điện thoại</label>
                            <input type="text" class="form-control" id="inputphone" placeholder="0947xxxxx">
                        </div>
                        <div class="form-floating">
                            <label for="floatingTextarea2">Lời nhắn</label>
                            <textarea class="form-control" placeholder="Lời nhắn" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div><br>

                        <button type="submit" class="btn btn-primary btn-lg btn-block border-0 " style="background-color: #B4975A; color:white;">Gửi</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php initFooter() ?>
