<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 2016/4/11
 * Time: 23:38
 */

$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$mile = $_POST['mile'];
$price = $_POST['price'];
$fixed = $_POST['fixed'];

echo $fixed;

include_once('db.php');

$result = $con->query("insert into car (make, model, year, mile, price, fixed, type, description) values ('".$make."','".$model."','".$year."-1-1','".$mile."','".$price."','".$fixed."','eof', 'nothing here');");

if ($result != null) {
    echo 'success';
} else {
    echo 'failed';
}

