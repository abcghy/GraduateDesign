<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/26
 * Time: 上午9:13
 */

include_once('../../front/db.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$index_pic_result = $con->query('delete from index_pic where id = '.$id.';');

if ($index_pic_result != null) {
    $arr = range(1, 8);
    shuffle($arr);

    include_once ("../wait/wait".$arr[0].".html");
} else {
    echo 'fail';
}
?>

<script>
setTimeout(function () {
    location.href="carousel.php";
}, 2000);
</script>