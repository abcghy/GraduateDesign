<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 2016/4/14
 * Time: 23:59
 */

include_once('db.php');

$make = $_GET['make'];

$result = $con->query('select * from model where make="'.$make.'";');

$option = '<option value="0">请选择型号</option>';

while ($row = $result->fetch_array()) {
    $option = $option.'<option value="'.$row['id'].'">'.$row['model'].'</option>';
}

echo $option;

?>
