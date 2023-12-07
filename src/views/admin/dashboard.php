<!-- TỔNG QUAN -->
<div class="text-white col-6 py-4 d-flex flex-column gap-3">


    <div class="d-flex gap-3">

        <div class="card bg-dark-subtle text-dark ">
            <h5 class="card-header  fs-3">Doanh thu tháng <?= $currentMonth ?></h5>
            <div class="card-body">
                <h2 class="card-title fs-6 fw-light " style="max-width: 20rem">Tổng số doanh thu bán hàng của trang web Viet Beauty trong tháng 12</h2>
                <p class="card-text fs-2 fw-bold  mt-4">
                    <!-- TỔNG DOANH THU CỦA THÁNG -->
                    <span><?= nf($totalRevenue) ?></span> ₫
                </p>
            </div>
        </div>

        <div class="card bg-dark-subtle text-dark flex-grow-1 ">
            <h5 class="card-header fs-3 ">Lượng đơn hàng tháng <?= $currentMonth ?></h5>
            <div class="card-body">
                <h2 class="card-title fs-6 fw-light " style="max-width: 20rem"></h2>
                <p class="card-text fs-2 fw-semibold   mt-2">
                    <!-- SÔ LƯỢNG ĐƠN HÀNG -->
                    <span><?= $ordersAmount ?></span> đơn hàng
                </p>
                <a href="<?= navigator('donhang') ?>" class="btn btn-danger  mt-3">Quản lý đơn hàng</a>
            </div>
        </div>

    </div>


    <div class="card bg-dark-subtle text-dark" style="max-width: 100%; max-height: fit-content;">
        <h5 class="card-header fw-medium fs-3">Doanh thu theo danh mục</h5>
        <div class="card-body">
            <!-- Vùng hiển thị biểu đồ -->
            <canvas id="myChart"></canvas>

            <script>
                // Lấy dữ liệu từ PHP và chuyển đổi thành mảng JavaScript
                var chartData = <?= $chartData ?>;

                // Chuẩn bị dữ liệu cho biểu đồ
                var labels = chartData.map(function(item) {
                    return item.TenDanhMuc;
                });
                var values = chartData.map(function(item) {
                    return item.TongDoanhThu;
                });

                // Tạo biểu đồ
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Tổng Doanh Thu',
                            data: values,
                            backgroundColor: 'white', // Màu nền
                            borderColor: 'rgba(75, 192, 192, 1)', // Màu đường viền
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            color: 'white',
                            y: {
                                display: true,
                                beginAtZero: true,
                                color: 'white'
                            },
                            x: {
                                display: true,
                                color: 'white'
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                labels: {
                                    color: '#333' // Màu chữ của nhãn
                                }
                            }
                        },
                        color: 'white'
                    }
                });
            </script>

        </div>

        <div class="card-footer text-body-secondary">
            <a href="<?= navigator('danhmuc') ?>" class="btn btn-danger  ms-2">Quản lý danh mục</a>
        </div>
    </div>


</div>


<div class="text-white col py-4 d-flex flex-column gap-3">

    <div class="rounded-3 overflow-hidden ">
        <table class="table table-dark caption-top m-0">
            <caption class="text-light p-2 bg-dark fs-5 fw-semibold ">Thống kê sản phẩm theo doanh thu</caption>
            <thead class="table-active ">
                <tr>
                    <th scope="col" class="fw-bold">#</th>
                    <th scope="col" class="fw-bold">Ảnh</th>
                    <th scope="col" class="fw-bold">Tên</th>
                    <th scope="col" class="fw-bold">Doanh thu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // code
                foreach ($topDoanhthuSp as $index => $sp) {
                    extract($sp);
                ?>
                    <!-- HTML -->
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td>
                            <a href="<?= u::link('product', 'show', ['ma_sp' => $ma_sp]) ?>">
                                <img src="<?= $anh ?>" class="rounded-3" style="max-width: 3rem" alt="">
                            </a>
                        </td>
                        <td><?= $ten_sp ?></td>
                        <td class="fw-semibold"><?= $doanhthu ?> ₫</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="rounded-3 overflow-hidden ">
        <table class="table table-dark caption-top m-0">
            <caption class="text-light p-2 bg-dark fs-5 fw-semibold ">Thống kê sản phẩm số lượng bán</caption>
            <thead class="table-active ">
                <tr>
                    <th scope="col" class="fw-bold">#</th>
                    <th scope="col" class="fw-bold">Ảnh</th>
                    <th scope="col" class="fw-bold">Tên</th>
                    <th scope="col" class="fw-bold">Số lượng bán</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // code
                foreach ($topBanchaySp as $index => $sp) {
                    extract($sp);
                ?>
                    <!-- HTML -->
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td>
                            <a href="<?= u::link('product', 'show', ['ma_sp' => $ma_sp]) ?>">
                                <img src="<?= $anh ?>" class="rounded-3" style="max-width: 3rem" alt="">
                            </a>
                        </td>
                        <td><?= $ten_sp ?></td>
                        <td class="fw-semibold fs-5 text-center "><?= $soluong ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>



</div>