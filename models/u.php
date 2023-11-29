<?php
include_once "models/dao/sanpham.php";
include_once "models/dao/danhmuc.php";
include_once "models/dao/thuonghieu.php";
include_once 'models/cartModel.php';

class u
{

    public static function link($controller, $action, $params = [])
    {
        $link = "index.php?controller={$controller}&action={$action}";

        // Concatenate parameters if provided
        if (!empty($params) && is_array($params)) {
            foreach ($params as $key => $value) {
                $link .= "&{$key}={$value}";
            }
        }

        return $link;
    }
    public static function getCartQuantity($ma_nd)
    {
        return cartModel::getCartQuantity($ma_nd);
    }

    public static function setThread()
    {
        $_SESSION['thread'] = $_SERVER['HTTP_REFERER'];
    }

    public static function toThread()
    {
        if (isset($_SESSION['thread'])) {
            $thread = $_SESSION['thread'];
            unset($_SESSION['thread']);
            header('location: ' . $thread);
        }
    }
    public static function isThreading()
    {
        return isset($_SESSION['thread']);
    }
}

function nf($number)
{
    //use . as decimal seperator and as a thousand seperator
    return number_format($number, 0, '.', '.');
}

//short hand for $_SESSION cuz im lazy as fuck
function s($key = null, $value = null)
{
    if ($key !== null && $value !== null) {
        // Set a session variable
        $_SESSION[$key] = $value;
    } elseif ($key !== null) {
        // Get a session variable
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    } else {
        // Get all session variables
        return $_SESSION;
    }
}

function vd($var){
    var_dump($var);
}

function initHeader($title, $cssName)
{


?>

    <!-- html code -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <link rel="stylesheet" href="views/asset/css/general.css?v=1.0">

        <link rel="stylesheet" href="views/asset/css/<?= $cssName ?>.css?v=1">
    </head>

    <body>


    <?php
    include_once "views/includes/header.php";
}

function initFooter()
{
    include_once "views/includes/footer.php"
    ?>
        <!-- html code -->
    </body>

    </html>

<?php

}
