<div class="d-flex gap-3">
                        <div class="fields flex-grow-1 ">
                            <!-- fields start -->
                            <!-- TÊN ĐĂNG NHẬP -->
                            <div class="input-group input-group mb-2">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="text-secondary fs-5 fa-solid fa-right-to-bracket"></i></span>
                                <input name="username" type="text" class="form-control" placeholder="Tên đăng nhập" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- HỌ VÀ TÊN -->
                            <div class="input-group input-group mb-2">
                                <input name="firstName" type="text" class="form-control" placeholder="Họ" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

                                <input name="lastName" type="text" class="form-control" placeholder="Tên" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- EMAIL -->
                            <div class="input-group input-group mb-2">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="text-secondary fs-5 fa-solid fa-envelope"></i></span>
                                <input name="email" type="text" class="form-control" placeholder="Email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- SỐ ĐIỆN THOẠI -->
                            <div class="input-group input-group mb-2">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="text-secondary fs-5 fa-solid fa-phone"></i></span>
                                <input name="phone" type="text" class="form-control" placeholder="Số điện thoại" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- MẬT KHẨU -->
                            <div class="input-group input-group mb-2">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="text-secondary fs-5 fa-solid fa-lock"></i></span>
                                <input name="password" type="password" class="form-control" placeholder="Mật khẩu" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- ĐỊA CHỈ -->
                            <div class="input-group input-group mb-2">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="text-secondary fs-5 fa-solid fa-location-dot"></i></span>
                                <input name="address" type="password" class="form-control" placeholder="Địa chỉ ( không bắt buộc )" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- UPLOAD AVATAR INPUT -->
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Avatar</label>
                                <input id="upload-avatar" name="upload-avatar" class="form-control" type="file" id="formFile">
                            </div>
                            <!-- fields end -->
                        </div>
                        <label for="upload-avatar"  class=" flex-grow-0 ">
                            <img id="uploadedImage" src="views\asset\img\general\default_avatar.png" style="max-width: 6rem; border-radius: 50%; object-fit: cover;" alt="">
                        </label>

                        <!-- LOADING UPLOADED AVATAR TO VIEW -->
                        <script>
                            document.getElementById('upload-avatar').addEventListener('change', function(event) {
                                const file = event.target.files[0];

                                if (file) {
                                    // Đọc dữ liệu ảnh và chuyển đổi sang Data URL
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        const dataURL = e.target.result;

                                        // Hiển thị ảnh trên trang web
                                        document.getElementById('uploadedImage').src = dataURL;
                                    };

                                    reader.readAsDataURL(file);
                                }
                            });
                        </script>
                    </div>