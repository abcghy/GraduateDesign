<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/26
 * Time: 下午12:15
 */

include_once ('../../front/db.php');

$url = null;

if (isset($_POST['url'])) {
    $url = $_POST['url'];
}

$index_pic_result = $con->query('insert into index_pic (url) values ("'.$url.'");');

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
