<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="views/asset/css/general.css">
    <link rel="stylesheet" href="views/asset/css/user.css">
</head>

<body>

    <?php include_once "views/includes/header.php" ?>

    <main>
      <div class="container">
        <div class="row">
            <div class="col-3 mt-3 user_3">
                <span style="font-size: 20px; margin-left:40px">Chào bạn</span>
              <ul class="list_user">
                <li>  <i class="fa-solid fa-circle-user" style="color:#000000; font-size:30px;margin-left: 25px; margin-top:10px;margin-left:70px"></i></li>
                <li><a href="" style="color:#000000; font-size:20px;gap:20px">Thông tin tài khoản</a></li>
                <li><a href="" style="color:#000000;font-size:20px">Đơn hàng</a></li>
                <li><a href="" style="color:#000000;font-size:20px;">Hỏi đáp</a></li>
              </ul>
            </div>
        </div>
      </div>
    </main>

    <?php include_once "views/includes/footer.php" ?>
</body>

</html>