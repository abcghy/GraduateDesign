<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/4/26
 * Time: 上午12:02
 */

include_once('../../db.php');

$improveid = '';

if (isset($_POST['improveid'])) {
    $improveid = $_POST['improveid'];
}

$result = $con->query('update user set rate = 1 where id = '.$improveid.';');

// 如果成功, 跳转到登录界面
if ($result != null) {
    // 首先有一段动画
    // 再跳转到登录界面,给人一种
//    header('Location: admininfo.php');
    $arr = range(1, 8);
    shuffle($arr);

    include_once ("../wait/wait".$arr[0].".html");
    
//    echo 'success';
} else {
    echo 'fail';
}
?>

<script>
    setTimeout(function () {
        location.href="admininfo.php";
    }, 2000);
</script>
