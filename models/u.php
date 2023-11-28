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
}

function nf($number){
    //use . as decimal seperator and as a thousand seperator
    return number_format($number, 0, '.', '.');
}

//short hand for $_SESSION cuz im lazy as fuck
function s($key = null, $value = null) {
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