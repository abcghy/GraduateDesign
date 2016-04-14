<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/3/28
 * Time: 上午12:13
 */
include_once('db.php');

$email = $_GET['email'];


/**
 * @param mysqli $connection
 * @param string $email_p
 * @return bool
 */
function is_email_exist($connection, $email_p) {
    $email_result = $connection->query('select * from user where email="'.$email_p.'";');
    if ($email_result->num_rows) {
        // 已经有该email
        return true;
    } else {
        // 还没有该email
        return false;
    }
}

if (is_email_exist($con, $email)) {
    $json = array('code'=>0, 'data'=>false);
    echo json_encode($json);
} else {
	$json = array('code'=>0, 'data'=>true);
    echo json_encode($json);
}

?>