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
    <link href="../dist/css/goods.css" rel="stylesheet">

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

$id = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

function changemile($length) {
    $llength = $length / 10000;
    return $llength;
}

$user_result = $con->query('select * from user WHERE email="'.$email.'";');
$user_row = $user_result->fetch_array();
$user_id = $user_row['id'];

// 创建一个字典, 存储类型 ID 与 description 的关系
$result = $con->query("select * from type;");
$type = null;
while ($row = $result->fetch_array()) {
    $type[$row['id']] = $row['description'];
}

$first_id = $second_id = '';
if (isset($_GET['first'])) {
    $first_id = $_GET['first'];
}
if (isset($_GET['second'])) {
    $second_id = $_GET['second'];
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

<div class="container">
    <?php
    $car_result = $con->query("select * from car where id = ".$first_id.";");
    $car_row = $car_result->fetch_array();
    $model_result = $con->query("select * from model where id = ".$car_row['model'].";");
    $model_row = $model_result->fetch_array();
    $make_result = $con->query("select * from make where id = ".$model_row['make'].";");
    $make_row = $make_result->fetch_array();

    $detail_result = $con->query("select * from detail where id =".$car_row['detail'].";");
    $detail_row = $detail_result->fetch_array();

    $image_result = $con->query("select * from image where id = ".$first_id.";");
    $image_row = $image_result->fetch_array();
    ?>
    <div class="col-md-6">
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="<?php echo $image_row['src'];?>" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $car_row['title'];?></h3>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">

                    <li><a href="#">品牌 <span class="pull-right"><?php echo $make_row['make'];?></span></a></li>
                    <li><a href="#">型号 <span class="pull-right"><?php echo $model_row['model'];?></span></a></li>
                    <li><a href="#">类型 <span class="pull-right"><?php echo $type[$car_row['type']];?></span></a></li>
                    <li><a href="#">价格 <span class="pull-right"><?php echo changemile($car_row['price']);?>万</span></a></li>
                    <li><a href="#">年份 <span class="pull-right"><?php echo $car_row['year'];?>年</span></a></li>
                    <li><a href="#">距离 <span class="pull-right"><?php echo changemile($car_row['mile']);?>万</span></a></li>
                    <li><a href="#">维修 <span class="pull-right"><?php if ($car_row['fixed'] == 1) echo '有'; else echo '无'; ?></span></a></li>
                    <?php
                    $part_result = $con->query("select * from part");
                    $i = 0;
                    while ($part_row = $part_result->fetch_array()) {
                        echo '<li><a href="#">'.$part_row['description'];
                        if ($detail_row['a'.$i] == '') {
                            echo '<span class="pull-right">完好</span></a></li>';
                        } else {
                            echo '<span class="pull-right badge bg-blue">'.$detail_row['a'.$i].'</span></a></li>';
                        }
                        $i++;
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>

    <?php
    $car_result = $con->query("select * from car where id = ".$second_id.";");
    $car_row = $car_result->fetch_array();
    $model_result = $con->query("select * from model where id = ".$car_row['model'].";");
    $model_row = $model_result->fetch_array();
    $make_result = $con->query("select * from make where id = ".$model_row['make'].";");
    $make_row = $make_result->fetch_array();

    $detail_result = $con->query("select * from detail where id =".$car_row['detail'].";");
    $detail_row = $detail_result->fetch_array();

    $image_result = $con->query("select * from image where id = ".$second_id.";");
    $image_row = $image_result->fetch_array();
    ?>
    <div class="col-md-6">
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
                <div class="widget-user-image">
                    <img class="img-circle" src="<?php echo $image_row['src'];?>" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $car_row['title'];?></h3>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">

                    <li><a href="#">品牌 <span class="pull-right"><?php echo $make_row['make'];?></span></a></li>
                    <li><a href="#">型号 <span class="pull-right"><?php echo $model_row['model'];?></span></a></li>
                    <li><a href="#">类型 <span class="pull-right"><?php echo $type[$car_row['type']];?></span></a></li>
                    <li><a href="#">价格 <span class="pull-right"><?php echo changemile($car_row['price']);?>万</span></a></li>
                    <li><a href="#">年份 <span class="pull-right"><?php echo $car_row['year'];?>年</span></a></li>
                    <li><a href="#">距离 <span class="pull-right"><?php echo changemile($car_row['mile']);?>万</span></a></li>
                    <li><a href="#">维修 <span class="pull-right"><?php if ($car_row['fixed'] == 1) echo '有'; else echo '无'; ?></span></a></li>
                    <?php
                    $part_result = $con->query("select * from part");
                    $i = 0;
                    while ($part_row = $part_result->fetch_array()) {
                        echo '<li><a href="#">'.$part_row['description'];
                        if ($detail_row['a'.$i] == '') {
                            echo '<span class="pull-right">完好</span></a></li>';
                        } else {
                            echo '<span class="pull-right badge bg-blue">'.$detail_row['a'.$i].'</span></a></li>';
                        }
                        $i++;
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">这是footer,写一些版权信息什么的</p>
    </div>
</footer>



</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
