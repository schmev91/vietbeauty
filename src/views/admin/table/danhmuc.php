<tr id="<?= $ma_dm ?>">
    <form action="<?= navigator('danhmuc', 'update') ?>" method="post">
        <input type="text" hidden name="ma_dm" value="<?= $ma_dm ?>">
        <td><?= $ma_dm ?></td>

        <td><input disabled name="ten_dm" type="text" class="form-control p-0  bg-none border-0 text-white " value="<?= $ten_dm ?>"></td>
        
        <td><img src="<?= $hinh_dm ?>" style="max-width: 4.5rem" alt=""></td>

        
        <!-- CỘT CHỨC NĂNG -->
        <td>
            <button type="button" class="updateBtn px-1 p-0 btn btn-light">update</button>
            <button type="submit" hidden class="saveBtn px-2 p-0 btn btn-light bg-golden text-white  border-golden">save</button>
            <a href="<?= navigator('danhmuc', 'delete') . '&ma_dm=' . $ma_dm ?>" class="px-1 p-0 btn btn-light">delete</a>
        </td>
    </form>
</tr>