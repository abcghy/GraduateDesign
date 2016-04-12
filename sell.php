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
            if (isset($_COOKIE['nickname']) && isset($_COOKIE['email'])) {
                ?>
                <button type="button" class="btn btn-link navbar-btn navbar-right"><a href="profile_index.php"><?php echo $_COOKIE['nickname'] ?></a></button>
                <?php
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
                <select name="make" id="sell_make" class="form-control">
                    <?php
                    //            输出数据库中的各种品牌
                    //            value 就是传输过去的值
                    ?>
                    <option value="1">奥迪</option>
                    <option value="2">宝马</option>
                    <option value="3">保时捷</option>
                    <option value="4">奔驰</option>
                    <option value="5">本田</option>
                    <option value="6">比亚迪</option>
                    <option value="7">别克</option>
                    <option value="8">宾利</option>
                    <option value="9">大众</option>
                    <option value="0">东风</option>
                    <option value="">法拉利</option>
                    <option value="">丰田</option>
                    <option value="">福特</option>
                    <option value="">红旗</option>
                    <option value="">吉利</option>
                    <option value="">江淮</option>
                    <option value="">凯迪拉克</option>
                    <option value="">劳斯莱斯</option>
                    <option value="">雷克萨斯</option>
                    <option value="">雷诺</option>
                    <option value="">林肯</option>
                    <option value="">路虎</option>
                    <option value="">马自达</option>
                    <option value="">迈巴赫</option>
                    <option value="">奇瑞</option>
                    <option value="">日产</option>
                    <option value="">特斯拉</option>
                    <option value="">五菱</option>
                    <option value="">夏利</option>
                    <option value="">现代</option>
                    <option value="">雪佛兰</option>
                    <option value="">雪铁龙</option>
                    <option value="">一汽</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="sell_model" class="col-sm-2 control-label">型号</label>
            <div class="col-sm-10 input-group">
                <select name="model" id="sell_model" class="form-control">
                    <!--            根据上面选的 make 来确定下面的型号-->
                    <!--            这对数据库来说无疑不是一个挑战-->
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="sell_mile" class="col-sm-2 control-label">行驶公里数</label>
            <div class="col-sm-10 input-group">
                <input id="sell_mile" type="text" class="form-control">
                <div class="input-group-addon">万</div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">卖掉啦</button>

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
