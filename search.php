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

<?php
include_once('db.php');

$carperpage = 6;

function changemile($length) {
    $llength = $length / 10000;
    return $llength.'万';
}

$make = $price = $type = $year = '';
$page = 1;
$mmake = $pprice = $ttype = $yyear = $ppage = '';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['make'])) {
        $make = $_GET['make'];
        $mmake = '='.$make;
    }
    if (isset($_GET['price'])) {
        $price = $_GET['price'];
        $pprice = '='.$price;
    }
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        $ttype = '='.$type;
    }
    if (isset($_GET['year'])) {
        $year = $_GET['year'];
        $yyear = '='.$year;
    }
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $ppage = '='.$page;
    }
}

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
                    <button type="button" class="btn btn-link navbar-btn navbar-right"><a href="dashboard/dashboard.php">后台管理</a></button>
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

<div class="container">
    <div class="col-md-10">
        <ul class="list-group">
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>已选条件：</li>
                    <?php
                    if ($make) {
                        // 如果有品牌，就从数据库里读取品牌数据
                        $result = $con->query("select * from make where id = '".$make."';");
                        if ($row = $result->fetch_array()) {
//                            echo '<li><a href="javascript:;">'.$row['make'].'</a></li>';
                            echo '<li><span class="label label-danger">'.$row['make'].'</span></li>';
                        }
                    }
                    if ($price) {
                        $result = $con->query("select * from price where id = '".$price."';");
                        if ($row = $result->fetch_array()) {
//                            echo '<li><a href="javascript:;">'.$row['description'].'</a></li>';
                            echo '<li><span class="label label-success">'.$row['description'].'</span></li>';
                        }
                    }
                    if ($type) {
                        $result = $con->query("select * from type where id = '".$type."';");
                        if ($row = $result->fetch_array()) {
//                            echo '<li><a href="javascript:;">'.$row['description'].'</a></li>';
                            echo '<li><span class="label label-info">'.$row['description'].'</span></li>';
                        }
                    }
                    if ($year) {
                        $result = $con->query("select * from year where id = '".$year."';");
                        if ($row = $result->fetch_array()) {
//                            echo '<li><a href="javascript:;">'.$row['description'].'</a></li>';
                            echo '<li><span class="label label-warning">'.$row['description'].'</span></li>';
                        }
                    }
//                    echo $_SERVER["REQUEST_METHOD"];
                    ?>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>品牌：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <?php
                    $result = $con->query("select * from make");
                    while ($row = $result->fetch_array()) {
                        if ($make) {
                            echo '<li>'.$row['make'].'</li>';
                        } else {
                            echo '<li><a href="search.php?make='.$row['id'].'&';
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            echo '">'.$row['make'].'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>价格：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <?php
                    $result = $con->query('select * from price;');
                    while ($row = $result->fetch_array()) {
                        if ($price) {
                            echo '<li>'.$row['description'].'</li>';
                        }
                        else {
                            echo '<li><a href="search.php?price='.$row['id'].'&';
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            echo '">'.$row['description'].'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>类型：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <?php
                    $result = $con->query('select * from type;');
                    while ($row = $result->fetch_array()) {
                        if ($type) {
                            echo '<li>'.$row['description'].'</li>';
                        }
                        else {
                            echo '<li><a href="search.php?type='.$row['id'].'&';
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            echo '">'.$row['description'].'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </li>
            <li class="list-group-item">
                <ul class="list-inline">
                    <li>车龄：&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <?php
                    $result = $con->query('select * from year;');
                    while ($row = $result->fetch_array()) {
                        if ($year) {
                            echo '<li>'.$row['description'].'</li>';
                        }
                        else {
                            echo '<li><a href="search.php?year='.$row['id'].'&';
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            echo '">'.$row['description'].'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </li>
        </ul>

        <?php
        $result = $con->query("select count(*) from car, model, make, price, year where car.model = model.id and make.id = model.make and make.id".$mmake." and car.price < price.end and car.price > price.start and price.id ".$pprice." and car.type ".$ttype." and car.year <= year.end and car.year >= year.start and year.id ".$yyear." ;");
        $row = $result->fetch_array();
        // 总共 $num 个
        $num = $row['count(*)'];
        $allPage = ceil($num / $carperpage);
        ?>

        <nav class="col-md-12">
            <ul class="pagination">
                <li class="<?php if ($page == 1) echo 'disabled'; ?>" aria-disabled="true">
                    <a href="search.php?<?php
                    if ($make) {
                        echo 'make='.$make.'&';
                    }
                    if ($price) {
                        echo 'price='.$price.'&';
                    }
                    if ($type) {
                        echo 'type='.$type.'&';
                    }
                    if ($year) {
                        echo 'year='.$year.'&';
                    }
                    echo 'page=';
                    if ($page - 1 >= 1) {
                        echo $page-1;
                    } else {
                        echo 1;
                    }
                    echo '&';
                    ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- 有几个就循环几个 当前页面disabled-->

                <?php

                if ($allPage <= 5) {
                    for ( $thePage = 1; $thePage <= $allPage; $thePage++ ) {
                        echo "<li class='";
                        if ($page == $thePage) {
                            echo 'active';
                        }
                        echo "'><a href='search.php?";
                        if ($make) {
                            echo 'make='.$make.'&';
                        }
                        if ($price) {
                            echo 'price='.$price.'&';
                        }
                        if ($type) {
                            echo 'type='.$type.'&';
                        }
                        if ($year) {
                            echo 'year='.$year.'&';
                        }
                        if ($thePage) {
                            echo 'page='.$thePage.'&';
                        }
                        echo "'>".$thePage."</a></li>";
                    }
                } else {
                    if ($page > 3) {
                        echo "<li><a href='search.php?";
                        if ($make) {
                            echo 'make='.$make.'&';
                        }
                        if ($price) {
                            echo 'price='.$price.'&';
                        }
                        if ($type) {
                            echo 'type='.$type.'&';
                        }
                        if ($year) {
                            echo 'year='.$year.'&';
                        }
                        echo 'page=1&';
                        echo "'>...</a></li>";
                    }
                    if ($page == 1 || $page == 2) {
                        for ( $thePage = 1; $thePage <= 5; $thePage++ ) {
                            echo "<li class='";
                            if ($page == $thePage) {
                                echo 'active';
                            }
                            echo "'><a href='search.php?";
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            if ($thePage) {
                                echo 'page='.$thePage.'&';
                            }
                            echo "'>".$thePage."</a></li>";
                        }
                    } elseif ($page == $allPage || $page == $allPage - 1) {
                        for ( $thePage = $allPage - 4; $thePage <= $allPage; $thePage++ ) {
                            echo "<li class='";
                            if ($page == $thePage) {
                                echo 'active';
                            }
                            echo "'><a href='search.php?";
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            if ($thePage) {
                                echo 'page='.$thePage.'&';
                            }
                            echo "'>".$thePage."</a></li>";
                        }
                    } else {
                        for ( $thePage = $page - 2; $thePage <= $page + 2; $thePage++ ) {
                            echo "<li class='";
                            if ($page == $thePage) {
                                echo 'active';
                            }
                            echo "'><a href='search.php?";
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            if ($thePage) {
                                echo 'page='.$thePage.'&';
                            }
                            echo "'>".$thePage."</a></li>";
                        }
                    }
                    if ($page < $allPage - 2) {
                        echo "<li><a href='search.php?";
                        if ($make) {
                            echo 'make='.$make.'&';
                        }
                        if ($price) {
                            echo 'price='.$price.'&';
                        }
                        if ($type) {
                            echo 'type='.$type.'&';
                        }
                        if ($year) {
                            echo 'year='.$year.'&';
                        }
                        echo 'page='.$allPage.'&';
                        echo "'>...</a></li>";
                    }
                }

                ?>
                <li class="<?php if ($page == $allPage) echo 'disabled'; ?>">
                    <a href="search.php?<?php
                    if ($make) {
                        echo 'make='.$make.'&';
                    }
                    if ($price) {
                        echo 'price='.$price.'&';
                    }
                    if ($type) {
                        echo 'type='.$type.'&';
                    }
                    if ($year) {
                        echo 'year='.$year.'&';
                    }
                    echo 'page=';
                    if ($page + 1 <= $allPage) {
                        echo $page+1;
                    } else {
                        echo $allPage;
                    }
                    echo '&';
                    ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div id="search_column">
            <?php
//            echo "select car.* from car, model, make where car.model = model.id and make.id = model.make and make.id".$mmake.";";
            $result = $con->query("select car.* from car, model, make, price, year where car.model = model.id and make.id = model.make and make.id".$mmake." and car.price < price.end and car.price > price.start and price.id ".$pprice." and car.type ".$ttype." and car.year <= year.end and car.year >= year.start and year.id ".$yyear." limit ".($page-1)*$carperpage.", ".$carperpage.";");
            if ($result != null) {

                while ($row = $result->fetch_array()) {
                    echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
                    echo 'goods.php?id='.$row['id'];
                    $image_result = $con->query("select * from image where car = ".$row['id'].";");
                    $image_row = $image_result->fetch_array();
                    echo '"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
                    echo 'goods.php?id='.$row['id'];
                    echo '"><p>'.$row['title'].'</p></a>
                                <p>'.$row['year'].'上牌 | '.changemile($row['mile']);
                    $userresult = $con->query("select * from user where id=".$row['user']);
                    $userrow = $userresult->fetch_array();
                    if ($userrow['city']) {
                        echo ' | '.$userrow['city'];
                    }
                    echo '</p>
                                <p class="priceforcar">￥'.changemile($row['price']).'</p>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>

        <nav class="col-md-12">
            <ul class="pagination">
                <li class="<?php if ($page == 1) echo 'disabled'; ?>" aria-disabled="true">
                    <a href="search.php?<?php
                    if ($make) {
                        echo 'make='.$make.'&';
                    }
                    if ($price) {
                        echo 'price='.$price.'&';
                    }
                    if ($type) {
                        echo 'type='.$type.'&';
                    }
                    if ($year) {
                        echo 'year='.$year.'&';
                    }
                    echo 'page=';
                    if ($page - 1 >= 1) {
                        echo $page-1;
                    } else {
                        echo 1;
                    }
                    echo '&';
                    ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- 有几个就循环几个 当前页面disabled-->

                <?php

                if ($allPage <= 5) {
                    for ( $thePage = 1; $thePage <= $allPage; $thePage++ ) {
                        echo "<li class='";
                        if ($page == $thePage) {
                            echo 'active';
                        }
                        echo "'><a href='search.php?";
                        if ($make) {
                            echo 'make='.$make.'&';
                        }
                        if ($price) {
                            echo 'price='.$price.'&';
                        }
                        if ($type) {
                            echo 'type='.$type.'&';
                        }
                        if ($year) {
                            echo 'year='.$year.'&';
                        }
                        if ($thePage) {
                            echo 'page='.$thePage.'&';
                        }
                        echo "'>".$thePage."</a></li>";
                    }
                } else {
                    if ($page > 3) {
                        echo "<li><a href='search.php?";
                        if ($make) {
                            echo 'make='.$make.'&';
                        }
                        if ($price) {
                            echo 'price='.$price.'&';
                        }
                        if ($type) {
                            echo 'type='.$type.'&';
                        }
                        if ($year) {
                            echo 'year='.$year.'&';
                        }
                        echo 'page=1&';
                        echo "'>...</a></li>";
                    }
                    if ($page == 1 || $page == 2) {
                        for ( $thePage = 1; $thePage <= 5; $thePage++ ) {
                            echo "<li class='";
                            if ($page == $thePage) {
                                echo 'active';
                            }
                            echo "'><a href='search.php?";
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            if ($thePage) {
                                echo 'page='.$thePage.'&';
                            }
                            echo "'>".$thePage."</a></li>";
                        }
                    } elseif ($page == $allPage || $page == $allPage - 1) {
                        for ( $thePage = $allPage - 4; $thePage <= $allPage; $thePage++ ) {
                            echo "<li class='";
                            if ($page == $thePage) {
                                echo 'active';
                            }
                            echo "'><a href='search.php?";
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            if ($thePage) {
                                echo 'page='.$thePage.'&';
                            }
                            echo "'>".$thePage."</a></li>";
                        }
                    } else {
                        for ( $thePage = $page - 2; $thePage <= $page + 2; $thePage++ ) {
                            echo "<li class='";
                            if ($page == $thePage) {
                                echo 'active';
                            }
                            echo "'><a href='search.php?";
                            if ($make) {
                                echo 'make='.$make.'&';
                            }
                            if ($price) {
                                echo 'price='.$price.'&';
                            }
                            if ($type) {
                                echo 'type='.$type.'&';
                            }
                            if ($year) {
                                echo 'year='.$year.'&';
                            }
                            if ($thePage) {
                                echo 'page='.$thePage.'&';
                            }
                            echo "'>".$thePage."</a></li>";
                        }
                    }
                    if ($page < $allPage - 2) {
                        echo "<li><a href='search.php?";
                        if ($make) {
                            echo 'make='.$make.'&';
                        }
                        if ($price) {
                            echo 'price='.$price.'&';
                        }
                        if ($type) {
                            echo 'type='.$type.'&';
                        }
                        if ($year) {
                            echo 'year='.$year.'&';
                        }
                        echo 'page='.$allPage.'&';
                        echo "'>...</a></li>";
                    }
                }

                ?>
                <li class="<?php if ($page == $allPage) echo 'disabled'; ?>">
                    <a href="search.php?<?php
                    if ($make) {
                        echo 'make='.$make.'&';
                    }
                    if ($price) {
                        echo 'price='.$price.'&';
                    }
                    if ($type) {
                        echo 'type='.$type.'&';
                    }
                    if ($year) {
                        echo 'year='.$year.'&';
                    }
                    echo 'page=';
                    if ($page + 1 <= $allPage) {
                        echo $page+1;
                    } else {
                        echo $allPage;
                    }
                    echo '&';
                    ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

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
