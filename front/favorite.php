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
//    header("Location: goods.php?id=".$car);

    $arr = range(1, 8);
    shuffle($arr);

    include_once ("../wait/wait".$arr[0].".html");
} else {
    echo 'fail';
}

?>

<script>
    setTimeout(function () {
        location.href="goods.php?id=" + "<?php echo $car; ?>";
    }, 2000);
</script>
