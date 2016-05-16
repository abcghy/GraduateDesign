<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 2016/4/11
 * Time: 23:38
 */

$make  = $_POST['make'];
$model = $_POST['model'];
$year  = $_POST['year'];
$mile  = $_POST['mile'];
$price = $_POST['price'];
$fixed = $_POST['fixed'];

$mile *= 10000;
$price *= 10000;

if ($fixed == '1') {
    $fixed = 1;
} else {
    $fixed = 0;
}

$email = '';
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
}

//echo $fixed;

include_once('db.php');

$id_result = $con->query('select * from user where email = "'.$email.'";');
$id_row = $id_result->fetch_array();
$user = $id_row['id'];

//$str = "insert into evaluate (model, year, mile, evaluate_price, fixed, user) values ('".$model."','".$year."','".$mile."','".$price."','".$fixed."','".$user."');";
$result = $con->query("insert into evaluate (model, year, mile, evaluate_price, fixed, user) values ('".$model."','".$year."','".$mile."','".$price."','".$fixed."','".$user."');");

//echo $str;
if ($result != null) {
    header('Location: sell.php?success=1');
} else {
    header('Location: sell.php?success=0');
}

