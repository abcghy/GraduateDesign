<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/3
 * Time: 下午8:06
 */

include_once('db.php');

$user = $car = '';

if (isset($_GET['user'])) {
    $user = $_GET['user'];
}

if (isset($_GET['car'])) {
    $car = $_GET['car'];
}

$favouriteResult = $con->query("insert into favourite (user, car) VALUES (".$user.",".$car.");");
if ($favouriteResult != null) {
    header("Location: goods.php?id=".$car);
} else {
    echo 'fail';
}

?>