<!-- anhsp, ten nguoi dung, diem danh gia, noi dung -->
<tr>
    <form action="<?= navigator('danhgia', 'delete') ?>" method="post">
        <input type="text" hidden name="ma_nd" value="<?= $ma_nd ?>">
        <input type="text" hidden name="ma_sp" value="<?= $ma_sp ?>">
        <td>
            <a href="<?= u::link('product', 'show', ['ma_sp' => $ma_sp]) ?>">
                <img src="<?= $anh ?>" style="max-width: 4.5rem" alt=""></a>
        </td>
        <td>
            <img src="<?= $avatar ?>" style="width: 2rem;height: 2rem; border-radius: 50%; object-fit: cover;" alt="">
            <?= $ten_nd ?>
        </td>
        <td>

            <?php
            for ($i = 1; $i < 6; $i++) {
                $isHightlight = $i <= $diem;
                $starColor = $isHightlight ? 'orange' : 'secondary';
                echo "<i class='fas fa-star text-$starColor '></i>";
            }
            ?>
        </td>
        <td><?= $noidung ?></td>

        <!-- CỘT CHỨC NĂNG -->
        <td>
            <button href="<?= navigator('danhgia', 'delete') ?>" class="px-1 p-0 btn btn-light">delete</button>
        </td>
    </form>
</tr>