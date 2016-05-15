<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/3/26
 * Time: 下午1:41
 */

include_once('db.php');

//phpinfo();
$email = $_POST['email'];
$password = $_POST['password'];


$result = $con->query("select * from user where email='".$email."' and password='".$password."';");
$row = $result->fetch_array();

if (count($row)) {
    // 登录成功, 直接跳转到主页面
    $nickname = $row['nickname'];
    setcookie('email', $email, time() + 60*60*24*30);
    setcookie('nickname', $nickname, time() + 60*60*24*30);
    header('Location: index.php');
} else {
    // 登录失败
?>
    <p>登录失败, email或密码不正确, 正在自动跳转</p>
    <script language="JavaScript">
        setTimeout("this.location.href='login.html'", 3000);
    </script>
<?php
}

?>