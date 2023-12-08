<!-- anhsp, ten nguoi dung, diem danh gia, noi dung -->
<tr>
    <form action="<?= navigator('hoidap', 'delete') ?>" method="post">
        <input type="text" hidden name="ma_hoidap" value="<?= $ma_hoidap ?>">

        <td>
            <a href="<?= u::link('product', 'show', ['ma_sp' => $ma_sp]) ?>">
                <img src="<?= $anh ?>" style="max-width: 4.5rem" alt=""></a>
        </td>

        <td>
            <img src="<?= $avatar ?>" style="width: 2rem;height: 2rem; border-radius: 50%; object-fit: cover;" alt="">
            <?= $ten_nd ?>
        </td>

        <td><?= $thoigian ?></td>

        <td>
            <div style="max-width: 30vw;">
                <span class="text-wrap text-break ">
                    <?= $noidung ?>
                </span>
            </div>
        </td>

        <!-- CỘT CHỨC NĂNG -->
        <td>
            <button type="submit" class="px-1 p-0 btn btn-light">delete</button>
        </td>
    </form>
</tr>