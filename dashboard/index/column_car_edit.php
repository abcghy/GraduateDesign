<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/29
 * Time: 下午9:13
 */
include_once ('../../front/db.php');

$id = null;
$car = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['car'])) {
    $car = $_GET['car'];
}

$display_result = $con->query('update display set car = '.$car.' where id = '.$id.';');

if ($display_result != null) {
    echo 'success';
} else {
    echo 'fail';
}