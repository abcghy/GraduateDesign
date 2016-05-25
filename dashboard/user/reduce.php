<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/4/26
 * Time: 上午12:02
 */

include_once('../../db.php');

$reduceid = '';

if (isset($_POST['reduceid'])) {
    $reduceid = $_POST['reduceid'];
}

$result = $con->query('update user set rate = 0 where id = '.$reduceid.';');

// 如果成功, 跳转到登录界面
if ($result != null) {
    // 首先有一段动画
    // 再跳转到登录界面,给人一种
//    header('Location: admininfo.php');
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
        location.href="admininfo.php";
    }, 2000);
</script>
