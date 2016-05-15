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

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Custom styles for this template -->
    <link href="../dist/css/sell.css" rel="stylesheet">

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
<!--                <button type="button" class="btn btn-link navbar-btn navbar-right"><a href="profile_index.php">--><?php //echo $_COOKIE['nickname'] ?><!--</a></button>-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Notifications: style can be found in dropdown.less -->

                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--todo:这里放用户的照片,和用户名-->
                                <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $nickname;?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p style="color: #000;">
                                        <!--todo:用户名和职位-->
                                        <?php echo $nickname;?>
                                        <small>Nov. 2012 注册</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="my_favourite.php">收藏</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="my_post_car.php">发布</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="search.php">购买</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="profile_index.php" class="btn btn-default btn-flat">资料</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">退出</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
                <select name="make" id="sell_make" class="form-control" onchange="query_model()">
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

<script src="../dist/js/sell.js"></script>
</body>
</html>
