<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/4/4
 * Time: 下午4:05
 */

$nickname = $_POST['nickname'];
$phone = $_POST['phone'];
$province = $_POST['province'];
$city = $_POST['city'];
$address = $_POST['address'];
$motto = $_POST['motto'];

$email = $_COOKIE['email'];

include_once('db.php');

$result = $con->query("update user set nickname = '".$nickname."', phone = '".$phone."', province = '".$province."', city='".$city."', address ='".$address."', motto = '".$motto."' where email ='".$email."';");

if ($result != null) {
    // 成功
    // cookie 改一下
    setcookie('nickname', $nickname, time() + 60*60*24*30);
    header("Location: profile_manage.php");
} else {
    // 失败
}

?>