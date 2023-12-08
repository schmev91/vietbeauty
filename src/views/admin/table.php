 <!-- DATA PLACEHOLDER -->
 <div class="col p-0">
     <table class="table table-striped table-dark   table-bordered" style="width:100%">
         <thead>
             <tr>
                 <!-- COLUMN HEADING -->
                 <?php
                    foreach ($columnList as $column) {
                        echo '<th class="py-3 fw-bold">' . $column . '</th>';
                    }
                    ?>
                 <th class="py-3 fw-bold">Chức năng</th>
             </tr>
         </thead>
         <tbody>

             <!-- COLUMN ROW -->
             <?php
                // code
                foreach ($list as $row) {
                    extract($row)

                ?>
                 <!-- HTML -->

                 <!-- TABLE TD PLACEHOLDERS -->
                 <?php include "views/admin/table/$tableName.php" ?>

             <?php } ?>

         </tbody>
         <!-- COLUMN FOOTER -->
         <tfoot>
             <tr>
                 <?php
                    foreach ($columnList as $column) {
                        echo '<th class="py-3 fw-bold">' . $column . '</th>';
                    }
                    ?>
                 <th class="py-3 fw-bold">Chức năng</th>
             </tr>
         </tfoot>
     </table>
 </div>




 <?php
    // NẾU LÀ TABLE VÀ CÓ CHỨC NĂNG CREATE
    if (isset($createWhat)) {
    ?>
     <!-- HTML -->
     <!-- họ tên, tên đăng nhập, email, số điện thoại, mật khẩu, địa chỉ, avatar -->
     <!-- MODAL - START -->
     <form autocomplete="off" action="<?= navigator("$tableName", 'create'); ?>" enctype="multipart/form-data" method="post" class="modal fade " id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog ">
             <div class="modal-content bg-dark text-light ">

                 <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm <?= $createWhat ?></h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">

                     <?php include_once "views/admin/create-modal/$tableName.php"; ?>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary px-1" data-bs-dismiss="modal">Abort</button>
                     <button type="submit" class="btn btn-primary px-4">Add</button>
                 </div>

             </div>
         </div>
     </form>
     <!-- MODAL - END -->



 <?php } ?>


 <script src="views/asset/javascript/admin.js"></script>