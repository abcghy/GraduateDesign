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
    <link href="css/search.css" rel="stylesheet">

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
                <li><a href="buy.php">我要买车</a></li>
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

<div class="container">
    <div class="col-md-10">
        <ul class="list-group">
            <li class="list-group-item">
                已选条件：
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>品牌：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#">宝马</a></li>
                    <li><a href="#">大众</a></li>
                    <li><a href="#">奥迪</a></li>
                    <li><a href="#">奔驰</a></li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>价格：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#">低于2万</a></li>
                    <li><a href="#">2-5万</a></li>
                    <li><a href="#">5-8万</a></li>
                    <li><a href="#">8-12万</a></li>
                    <li><a href="#">12-16万</a></li>
                    <li><a href="#">16-20万</a></li>
                    <li><a href="#">20-30万</a></li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>类型：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#">SUV</a></li>
                    <li><a href="#">轿车</a></li>
                    <li><a href="#">敞篷车</a></li>
                    <li><a href="#">跑车</a></li>
                    <li><a href="#">混合动力</a></li>
                    <li><a href="#">卡车</a></li>
                    <li><a href="#">房车</a></li>
                    <li><a href="#">省油车</a></li>
                    <li><a href="#">经济代步</a></li>
                    <li><a href="#">高性价比</a></li>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>车龄：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#">2016</a></li>
                    <li><a href="#">2015</a></li>
                    <li><a href="#">2014</a></li>
                    <li><a href="#">2013</a></li>
                    <li><a href="#">2012</a></li>
                    <li><a href="#">2011</a></li>
                    <li><a href="#">2010</a></li>
                    <li><a href="#">2009</a></li>
                    <li><a href="#">2008</a></li>
                    <li><a href="#">2000 - 2007</a></li>
                    <li><a href="#">1993 - 1999</a></li>
                </ul>
            </li>
        </ul>

        <div id="search_column">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#<?php ?>"><img src="images/cars/three_car_2.jpg" alt="雪弗兰" /></a>
                    <div class="caption">
                        <a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
                        <a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
                        <p class="priceforcar">￥15.28万</p>
                    </div>
                </div>
            </div>
        </div>
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

<script src="js/index.js"></script>
</body>
</html>
