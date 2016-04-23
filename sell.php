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

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sell.css" rel="stylesheet">

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
                    <button type="button" class="btn btn-link navbar-btn navbar-right"><a href="dashboard.php">后台管理</a></button>
                    <?php
                }
            } else {
                ?>
                <button type="button"  class="btn btn-link navbar-btn navbar-right"><a href="login.html">登录</a></button>
                <?php
            }
            ?>

        </div>

        <!--<div id="navbar" class="collapse navbar-collapse navbar-right">-->

        <!--</div>&lt;!&ndash;/.nav-collapse &ndash;&gt;-->
    </div>
</nav>

<div id="sell_bg" class="container-fluid">
    <form action="sell_car.php" method="POST" class="form-horizontal">
        <p>请填写您的车辆基本信息</p>
        <div class="form-group">
            <label for="sell_make" class="col-sm-2 control-label">品牌</label>
            <div class="col-sm-10 input-group">
                <select name="make" id="sell_make" class="form-control" onclick="query_model()">
                    <option value="0">请选择品牌</option>
                    <?php
                    //            输出数据库中的各种品牌
                    //            value 就是传输过去的值
                    include_once('db.php');
                    $result = $con->query('select * from make');
                    while ($row = $result->fetch_array()) {
                        echo '<option value="'.$row['id'].'">'.$row['make'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="sell_model" class="col-sm-2 control-label">型号</label>
            <div class="col-sm-10 input-group">
                <select name="model" id="sell_model" class="form-control">
                    <!--            根据上面选的 make 来确定下面的型号-->
                    <!--            这对数据库来说无疑不是一个挑战-->
                    <option value="0">请选择型号</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="sell_year" class="col-sm-2 control-label">购买时间</label>
            <div class="col-sm-10 input-group">
                <input name="year" id="sell_year" type="text" class="form-control">
                <div class="input-group-addon">年</div>
            </div>
        </div>

        <div class="form-group">
            <label for="sell_mile" class="col-sm-2 control-label">行驶公里数</label>
            <div class="col-sm-10 input-group">
                <input name="mile" id="sell_mile" type="text" class="form-control">
                <div class="input-group-addon">万</div>
            </div>
        </div>

        <div class="form-group">
            <label for="sell_price" class="col-sm-2 control-label">您的估价</label>
            <div class="col-sm-10 input-group">
                <input name="price" id="sell_price" type="text" class="form-control">
                <div class="input-group-addon">万</div>
            </div>
        </div>

        <div class="checkbox" style="float: left;">
            <label>
                <input name="fixed" type="checkbox" value="">
                是否修过
            </label>
        </div>


        <button type="submit" class="btn btn-primary" style="margin-left: 30px">卖掉啦</button>

    </form>
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

<script src="js/sell.js"></script>
</body>
</html>
