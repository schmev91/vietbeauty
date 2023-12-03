<tr>
    <!-- ma_dh, ngaydat, tongtien, diachi, vanchuyen, thanhtoan, trangthai
 -->
    <td><?= $ma_dh ?></td>
    <td class="text-truncate">
        <img src="<?= $avatar ?>" style="width: 1.5rem;height: 1.5rem; border-radius: 50%; object-fit: cover;" alt="">
        <?= $ten_nd ?>
    </td>
    <td><?= $ngaydat ?></td>
    <td><?= nf($tongtien) . "₫" ?></td>
    <td class="text-truncate"><?= $diachi ?></td>
    <td><?= $vanchuyen ?></td>
    <td><?= $thanhtoan ?></td>
    <td><?= $trangthai ?></td>
    <!-- CỘT CHỨC NĂNG -->
    <?php
    $listTrangthai = [
        'Đang chờ xác nhận',
        'Đang chuẩn bị hàng',
        'Đang vận chuyển',
        'Giao thành công'
    ];

    ?>
    <td>
        <form action="admin.php" method="get">
            <?= setNavigator('donhang', 'update') ?>
            <input type="text" hidden name='ma_dh' value="<?= $ma_dh ?>">
            <select class="form-select py-1 px-2" name='trangthai'>
                <option selected>cập nhật</option>
                <?php
                foreach ($listTrangthai as $tt) {
                    if ($trangthai != $tt)
                        echo "<option value='$tt'>$tt</option>";
                }
                ?>
            </select>
        </form>
    </td>
</tr>