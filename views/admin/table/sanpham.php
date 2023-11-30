<tr>
    <!-- ma_sp, ten_sp, dongia, anh, danhmuc, thuonghieu -->
    <td><?= $ma_sp ?></td>
    <td><img src="<?= $anh ?>" style="max-width: 4.5rem" alt=""></td>
    <td><?= $ten_sp ?></td>
    <td><?= nf($dongia) . ' ₫' ?></td>
    <td><?= $ten_dm ?></td>
    <td><?= $ten_th ?></td>

    <!-- CỘT CHỨC NĂNG -->
    <td>
        <a href="" class="px-1 p-0 btn btn-light">update</a>
        <a href="" class="px-1 p-0 btn btn-light">delete</a>
    </td>
</tr>