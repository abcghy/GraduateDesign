<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/4/26
 * Time: 上午1:22
 */

include_once('../../front/db.php');

$deleteid = '';

if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
}

$result = $con->query('delete from user where id = '.$deleteid.';');

// 如果成功, 跳转到登录界面
if ($result != null) {
    // 首先有一段动画
    // 再跳转到登录界面,给人一种
//    header('Location: userinfo.php');
//    echo 'success';
    $arr = range(1, 8);
    shuffle($arr);

    include_once ("../wait/wait".$arr[0].".html");
} else {
    echo 'fail';
}

?>

<script>
    setTimeout(function () {
        location.href="userinfo.php";
    }, 2000);
</script>
