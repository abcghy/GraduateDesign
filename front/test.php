
<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/23
 * Time: 下午11:47
 */

$arr = range(1, 8);
shuffle($arr);

include_once ("../wait/wait".$arr[0].".html");

?>

<script>
    setTimeout(function () {
        location.href="../front/index.php";
    }, 1000);
</script>


