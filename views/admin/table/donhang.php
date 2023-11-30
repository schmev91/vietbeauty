<!-- ma_dh, ngaydat, tongtien, diachi, vanchuyen, thanhtoan, trangthai
 -->
<td><?= $ma_dh ?></td>
<td><?= $ten_nd ?></td>
<td><?= $ngaydat ?></td>
<td><?= nf($tongtien) ?> ₫</td>
<td><?= $diachi ?></td>
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
        <?= setNavigator('donhang','updateTrangthai')?>
        <input type="text" hidden name='ma_dh' value="<?=$ma_dh?>">
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
    <script>
        const select = document.getElementsByName('trangthai')[0]
        , form = select.parentNode
        select.onchange = submitOnSelect;
        function submitOnSelect(){
            form.submit()
        }
    </script>
</td>