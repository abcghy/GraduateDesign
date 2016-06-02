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

    <title>闪腾二手车•个人•资料管理</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

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
$email = $_COOKIE['email'];

include_once('db.php');
$result = $con->query("select * from user where email = '".$email."';");
$row = $result->fetch_array();
$nickname = $row['nickname'];
$phone = $row['phone'];
$province = $row['province'];
$city = $row['city'];
$address = $row['address'];
$motto = $row['motto'];

$email = $nickname = '';
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
}
if (isset($_COOKIE['nickname'])) {
    $nickname = $_COOKIE['nickname'];
}
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
<!--    <p class="pull-right visible-xs">-->
<!--        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>-->
<!--    </p>-->
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
        <div class="list-group">
            <a href="profile_index.php" class="list-group-item">个人主页</a>
            <a href="my_favourite.php" class="list-group-item">我的收藏</a>
            <a href="my_post_car.php" class="list-group-item">我发布的车辆</a>
            <a href="profile_manage.php" class="list-group-item active">资料管理</a>
        </div>
    </div>
    <form action="../change_profile.php" method="post">
        <div class="col-xs-12 col-sm-9">
            <div class="nickname">
                <div class="col-md-2 col-sm-2 text-right">昵称:</div>
                <div class="col-md-3 col-sm-3"><input name="nickname" value="<?php if (isset($nickname)) echo $nickname; ?>" /></div>
                <div class="col-md-7 col-sm-7">取一个你喜欢的昵称吧!（请勿频繁更换,否则会影响您的正常交易）</div>
            </div><br /><br />
            <div class="email">
                <div class="col-md-2 col-sm-2 text-right">邮箱:</div>
                <div class="col-md-3 col-sm-3"><?php if (isset($email)) echo $email; ?></div>
                <div class="col-md-7 col-sm-7">邮箱可以用于登录,找回密码,接受重要信息</div>
            </div><br /><br />
            <div class="phone">
                <div class="col-md-2 col-sm-2 text-right">手机:</div>
                <div class="col-md-3 col-sm-3"><input name="phone" value="<?php if (isset($phone)) echo $phone; ?>" /></div>
                <div class="col-md-7 col-sm-7">必须得绑定手机号码后,才可以进行交易</div>
            </div><br /><br />
            <div class="province">
                <div class="col-md-2 col-sm-2 text-right">省份:</div>
                <div class="col-md-3 col-sm-3"><input name="province" value="<?php if (isset($province)) echo $province; ?>" /></div>
                <div class="col-md-7 col-sm-7">您的居住地所在的省份</div>
            </div><br /><br />
            <div class="city">
                <div class="col-md-2 col-sm-2 text-right">城市:</div>
                <div class="col-md-3 col-sm-3"><input name="city" value="<?php if (isset($city)) echo $city; ?>" /></div>
                <div class="col-md-7 col-sm-7">您的居住地所在的城市</div>
            </div><br /><br />
            <div class="address">
                <div class="col-md-2 col-sm-2 text-right">详细地址:</div>
                <div class="col-md-3 col-sm-3"><input name="address" value="<?php if (isset($address)) echo $address; ?>" /></div>
                <div class="col-md-7 col-sm-7">您的居住地的详细地址</div>
            </div><br /><br />
            <div class="motto">
                <div class="col-md-2 col-sm-2 text-right">个人宣言:</div>
                <div class="col-md-3 col-sm-3"><textarea name="motto"><?php if (isset($motto)) echo $motto; ?></textarea></div>
                <div class="col-md-7 col-sm-7">在别人查看您的资料时,会展现您的个人宣言</div>
            </div><br /><br /><br /><br /><br />
            <div>
                <button class="btn btn-danger" type="submit">提交</button>
            </div>
        </div>
    </form>
</div>



<footer class="footer">
    <div class="container">
        <p class="text-muted"><?php include_once ('footer.php')?></p>
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
