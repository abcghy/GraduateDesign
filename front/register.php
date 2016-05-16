<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/3/27
 * Time: 上午9:50
 */
$email = $_POST['emailsignup'];
$password = $_POST['passwordsignup'];
$password_cofirm = $_POST['passwordsignup_confirm'];
$nickname = $_POST['usernamesignup'];

//$con = new mysqli('localhost', 'root', 'root', 'test', '8889');
include_once('db.php');

// 首先密码和再次输入密码因该要相同,但是这应该是前端直接干的事
// 而不是在 PHP 里判断的事,我们在这里默认已经相同?

/**
 * @param mysqli $connection
 * @param string $email_p
 * @return bool
 */
function is_email_exist($connection, $email_p) {
    $email_result = $connection->query('select * from user where email="'.$email_p.'";');
    if ($email_result->num_rows) {
        // 已经有该email
        return true;
    } else {
        // 还没有该email
        return false;
    }
}

/**
 * @param string $pass
 * @param string $pass_confirm
 * @return bool
 */
function is_password_same($pass, $pass_confirm) {
    if ($pass == $pass_confirm) {
        return true;
    } else {
        return false;
    }
}

$result = $con->query("insert into user (email, password, nickname, rate) values ('".$email."', '".$password."', '".$nickname."', 0);");

// 如果成功, 跳转到登录界面
if ($result != null) {
    // 首先有一段动画
    // 再跳转到登录界面,给人一种
    header('Location: login.html');
//    echo 'success';
} else {
    echo 'fail';
}