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

setcookie('first_compare', $id, time() + 60*60*24*30);