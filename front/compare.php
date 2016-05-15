<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/8
 * Time: 上午3:08
 */
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_COOKIE['first_compare'])) {
    header('Location: goods_compare.php?first='.$_COOKIE['first_compare'].'&second='.$id);
    setcookie('first_compare', $id, time() - 1);
} else {
    setcookie('first_compare', $id, time() + 60*60*24*30);
    header('Location: goods.php?id='.$id);
}

