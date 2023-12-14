<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link rel="icon" href="views/asset/img/general/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="views/asset/css/general.css?v=2">

    <link rel="stylesheet" href="views/asset/css/admin.css?v=1">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="bg-black ">

    <header class=" bg-dark d-flex">
        <div class="container d-flex py-2 align-items-center justify-content-between ">
            <div>
                <a href="index.php" class="logo">
                    <img src="<?= path('img', 'general/logo.png') ?>" alt="">
                </a>
            </div>

            <div>

                <div class="fw-bold ms-3 text-light d-flex flex-column gap-1">
                    <span class="">administrator</span>
                    <div class="d-flex align-items-center gap-2">
                        <!-- <i class="fa-solid fa-circle-user me-1"></i>  -->
                        <div class="header-avatar me-1">
                            <img src="<?= isset($_SESSION['user']) ? $_SESSION['user']['avatar'] : $DEFAULT_AVATAR ?>" alt="" style="width: 3rem;height: 3rem;">
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <a href="index.php?controller=user&action=show">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $ten_nd = $_SESSION['user']['ten_nd'];
                                    // if (strlen($ten_nd) > 12) $ten_nd = substr($ten_nd, 0, 12) . '...';
                                    echo $ten_nd;
                                } else echo 'Tài khoản';
                                ?>
                            </a>
                            <a href="index.php?controller=user&action=logout" style="font-size: .8rem;"><i class="fa-solid fa-right-from-bracket me-2"></i> Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <!-- HTML -->
    <main class="container-fluid">

        <div class="row">

            <div class="col-auto bg-dark py-5 nav-container p-0  border-2 border-0 border-end" style="border-color: #B4975A !important;">
                <nav class="d-flex flex-column gap-2 ">

                    <div class="mb-5">
                        <a href="admin.php" class="bg-golden p-3 rounded-end-3  py-3 fw-bold fs-5">
                            Tổng quan <i class="fa-solid fa-house bg-golden"></i>
                        </a>
                    </div>

                    <?php
                    // code

                    if (isset($createWhat)) {
                    ?>
                        <!-- HTML -->
                        <!-- Button trigger modal -->
                        <button type="button" class="add-btn btn btn-light btn-outline-secondary  fit-content py-2 mb-4 ms-auto rounded-end-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-plus text-secondary fw-bold"></i> <?= $createWhat ?>
                        </button>

                        <?php
                        // code
                        if (isset($errors)) {
                        ?>
                            <script>
                                const addBtn = document.querySelector('.add-btn')
                                addBtn.click();
                            </script>
                        <?php } ?>

                    <?php }

                    $menuItems = [
                        'Người dùng' => 'nguoidung',
                        'Sản phẩm' => 'sanpham',
                        'Đơn hàng' => 'donhang',
                        'Danh mục' => 'danhmuc',
                        'Thương hiệu' => 'thuonghieu',
                        'Đánh giá' => 'danhgia',
                        'Hỏi đáp' => 'hoidap'
                    ];

                    foreach ($menuItems as $label => $table) {
                        // Kiểm tra tab đang lặp qua có phải tab của table đang trỏ đến bằng GET hay không
                        $isActive = (isset($_GET['table']) && $_GET['table'] == $table)
                            || (empty($table) && !isset($_GET['table']));
                        // Nếu đúng tab thì thêm class active
                        $class = $isActive ? 'active' : '';
                        //Table người dùng là table default nên không cần trỏ
                        $href = "admin.php" . ($table ? "?table=$table" : '');

                        echo "<a href=\"$href\" class=\"px-5 py-3 border border-start border-5 border-0 $class\">$label</a>";
                    }

                    ?>

                </nav>
            </div>


            <?php

            if (isset($tableName)) {
                include_once "views/admin/table.php";
            } else {
                include_once "views/admin/dashboard.php";
            } ?>

        </div>

    </main>

</body>

</html>