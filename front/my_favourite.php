<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>闪腾二手车•主页</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="../dist/css/balloon.min.css">
    <!-- Custom styles for this template -->
    <link href="../dist/css/index.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
include_once('db.php');

$email = $nickname = '';
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
}
if (isset($_COOKIE['nickname'])) {
    $nickname = $_COOKIE['nickname'];
}

// 创建一个字典, 存储类型 ID 与 description 的关系
$result = $con->query("select * from type;");
$type = null;
while ($row = $result->fetch_array()) {
    $type[$row['id']] = $row['description'];
}

function changemile($length) {
    $llength = $length / 10000;
    return $llength;
}

$user_result = $con->query('select * from user WHERE email="'.$email.'";');
$user_row = $user_result->fetch_array();
$user_id = $user_row['id'];
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- 头顶部分也应该弄点买车、卖车的按钮，毕竟这是navbar -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> 闪腾二手车</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="search.php">我要买车</a></li>
                <li><a href="sell.php">我要卖车</a></li>
            </ul>

            <!-- 如果已经登录就变成一个自己的个人头像-->
            <!-- 然后点击变成个人主页, 等等-->
            <?php
            if ($email && $nickname) {
                $result = $con->query('select * from user where email="'.$email.'";');
                $row = $result->fetch_array();

                ?>
                <button type="button" class="btn btn-link navbar-btn navbar-right"><a href="profile_index.php"><?php echo $_COOKIE['nickname'] ?></a></button>
                <?php
                if ($row['rate'] == 1) {
                    ?>
                    <button type="button" class="btn btn-link navbar-btn navbar-right"><a href="../dashboard/dashboard.php">后台管理</a></button>
                    <?php
                }
            } else {
                ?>
                <button type="button"  class="btn btn-link navbar-btn navbar-right"><a href="login.html">登录</a></button>
                <?php
            }
            ?>
        </div>
    </div>
</nav>


<div class="container">
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
        <div class="list-group">
            <a href="profile_index.php" class="list-group-item">个人主页</a>
            <a href="my_favourite.php" class="list-group-item active">我的收藏</a>
            <a href="my_post_car.php" class="list-group-item">我发布的车辆</a>
            <a href="profile_manage.php" class="list-group-item">资料管理</a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>标题</th>
                <th>品牌</th>
                <th>型号</th>
                <th>类型</th>
                <th>价格</th>
                <th>年份</th>
                <th>距离</th>
                <th>维修</th>
                <th>车主 ID</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $favourite_result = $con->query("select * from favourite where user = ".$user_id.";");
            while ($favourite_row = $favourite_result->fetch_array()) {
                $car_result = $con->query("select * from car where id = ".$user_id.";");
                $car_row = $car_result->fetch_array();
                $modelresult = $con->query('select * from model where id ='.$car_row['model']);
                $modelrow = $modelresult->fetch_array();
                $makeresult = $con->query('select * from make where id ='.$modelrow['make']);
                $makerow = $makeresult->fetch_array();
                echo '<tr><td><a href="goods.php?id='.$car_row['id'].'">'.$car_row['title'].'</a></td>';
                echo '<td>'.$makerow['make'].'</td>';
                echo '<td>'.$modelrow['model'].'</td>';
                echo '<td>'.$type[$car_row['type']].'</td>';
                echo '<td>'.changemile($car_row['price']).'万</td>';
                echo '<td>'.$car_row['year'].'</td>';
                echo '<td>'.changemile($car_row['mile']).'万</td>';
                echo '<td>';
                if ($car_row['fixed'] == 0) {
                    echo '无';
                } else {
                    echo '有';
                }
                echo '</td>';
                echo '<td>'.$car_row['user'].'</td>';
            }
            ?>
            </tbody>
        </table>
    </div>

</div>



<footer class="footer">
    <div class="container">
        <p class="text-muted">这是footer,写一些版权信息什么的</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
