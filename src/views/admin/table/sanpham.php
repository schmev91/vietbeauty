<tr id="<?= $ma_sp ?>">
    <form action="<?= navigator('sanpham', 'update') ?>" method="post">
        <input type="text" hidden name="ma_sp" value="<?= $ma_sp ?>">
        <td><?= $ma_sp ?></td>
        <td><img src="<?= $anh ?>" style="max-width: 4.5rem" alt=""></td>

        <td><input disabled name="ten_sp" type="text" class="form-control p-0  bg-none border-0 text-white " value="<?= $ten_sp ?>"></td>
        <td><input disabled name="dongia" type="text" class="form-control p-0  bg-none border-0 text-white " value="<?= $dongia ?>"></td>
        <td>
            <select disabled class="form-select p-0 bg-none border-0 text-white" name="ma_dm">
                <?php
                    // code
                    foreach($listDanhmuc as $dm){
                        
                        ?>
                    <!-- HTML -->
                    <option value="<?= $dm['ma_dm'] ?>" <?= $dm['ma_dm'] == $ma_dm ? 'selected' : null ?> ><?= $dm['ten_dm'] ?></option>
                    
                <?php } ?>

            </select>
        </td>
        <td>
            <select disabled class="form-select p-0 bg-none border-0 text-white" name="ma_th">
                <?php
                    // code
                    foreach($listThuonghieu as $th){
                        
                        ?>
                    <!-- HTML -->
                    <option value="<?= $th['ma_th'] ?>" <?= $th['ma_th'] == $ma_th ? 'selected' : null ?> ><?= $th['ten_th'] ?></option>
                    
                <?php } ?>

            </select>
        </td>

        
        <!-- CỘT CHỨC NĂNG -->
        <td>
            <button type="button" class="updateBtn px-1 p-0 btn btn-light">update</button>
            <button type="submit" hidden class="saveBtn px-2 p-0 btn btn-light bg-golden text-white  border-golden">save</button>
            <a href="<?= navigator('sanpham', 'delete') . '&ma_sp=' . $ma_sp ?>" class="px-1 p-0 btn btn-light">delete</a>
        </td>
    </form>
</tr>