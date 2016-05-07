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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="dist/css/balloon.min.css">

    <!-- Custom styles for this template -->
    <link href="css/goods.css" rel="stylesheet">

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
    <ol class="breadcrumb">
        <li><a href="index.php">主页</a></li>
        <li><a href="search.php">我要买车</a></li>
        <li class="active">商品详情</li>
    </ol>
</div>

<?php
$result = $con->query('select * from car where id = '.$id.';');
$row = $result->fetch_array();
$image_result = $con->query('select * from image where car = '.$row['id'].';');
?>

<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $data_slide = 0;
            $image_row = $image_result->fetch_array();
            echo '<li data-target="#carousel-example-generic" data-slide-to="'.$data_slide.'" class="active"></li>';
            while ($image_row = $image_result->fetch_array()) {
                $data_slide++;
                echo '<li data-target="#carousel-example-generic" data-slide-to="'.$data_slide.'"></li>';
            }
            ?>
        </ol>


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $image_result = $con->query('select * from image where car = '.$row['id'].';');
            $image_row = $image_result->fetch_array();
            echo '<div class="item active">';
            echo '<img class="first-slide" src="'.$image_row['src'].'" alt="...">';
            echo '<div class="carousel-caption">';
            echo '</div>';
            echo '</div>';
            while ($image_row = $image_result->fetch_array()) {
                echo '<div class="item">';
                echo '<img class="first-slide" src="'.$image_row['src'].'" alt="...">';
                echo '<div class="carousel-caption">';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div class="col-md-8">
        <h1><?php echo $row['title']; ?></h1>
    </div>
    <div class="col-md-4" style="margin-top: 15px">
        <button type="button" class="btn btn-lg btn-danger">
            <i class="fa fa-phone"></i>
            预约看车
        </button>
        &nbsp;&nbsp;&nbsp;&nbsp;
<!--        如果没收藏就是收藏该车-->
        <?php
        $favourite_result = $con->query("select * from favourite where user = ".$user_id." and car = ".$id.";");
        if ($favourite_result->num_rows == 0) {
        ?>
        <a href="favorite.php?user=<?php echo $user_id;?>&car=<?php echo $id;?>" type="button" class="btn btn-lg btn-primary">
            <i class="fa fa-heart"></i>
            收藏该车
        </a>
        <?php
        } else {
        ?>
        <a type="button" class="btn btn-lg btn-primary">
            <i class="fa fa-heart"></i>
            已收藏
        </a>
        <?php
        }
        ?>

<!--        如果收藏了就是 已收藏-->
    </div>
</div>

<div class="container" id="price_zone">
    闪腾价:  <span id="price_tag"><?php echo changemile($row['price']); ?></span><span id="price_wan">万</span>
</div>

<div class="container" id="four_thing">
    <div class="col-md-3">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">上牌时间</h3>
            </div>
            <div class="box-body"><?php echo $row['year']; ?>年</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">表显里程</h3>
            </div>
            <div class="box-body"><?php echo changemile($row['mile']); ?>万</div>
        </div>
    </div>
    <?php
    $type_result = $con->query('select * from type where id ='.$row['type'].';');
    $type_row = $type_result->fetch_array();
    ?>
    <div class="col-md-3">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">车辆类型</h3>
            </div>
            <div class="box-body"><?php echo $type_row['description'];?></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">车主信息</h3>
            </div>
            <div class="box-body">
                <?php
                $owner_result = $con->query('select * from user where id ='.$row['user'].';');
                $own_row = $owner_result->fetch_array();
                echo '姓名:'.$own_row['nickname'].'&nbsp;&nbsp;城市:';
                if ($own_row['city'] == '') {
                    echo '无';
                } else {
                    echo $own_row['city'];
                }
                ?>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="col-md-12">
        <div class="col-md-3">
            <h1>车况介绍</h1>
        </div>
        <div class="col-md-9">
            <?php
            $first_compare = '';
            if (isset($_COOKIE['first_compare'])) {
                $first_compare = $_COOKIE['first_compare'];
            }

            if (isset($first_compare)) {
            ?>
                <a type="button" class="btn btn-lg btn-info" style="margin-top: 15px" onclick="add_compare(<?php echo $id;?>)">
                    <i class="fa fa-arrows-h"></i>
                    查看对比
                </a>
            <?php
            } else {
            ?>
                <a type="button" class="btn btn-lg btn-info" style="margin-top: 15px" onclick="add_compare(<?php echo $id;?>)">
                    <i class="fa fa-arrows-h"></i>
                    参数对比
                </a>
            <?php
            }
            ?>

        </div>
    </div>
    <h3 style="text-align: center">发动机舱</h3>
    <div class="col-md-12">
    <ul class="col-md-8" style="list-style: none" >
        <?php
        $detail_result = $con->query("select * from detail where id = ".$row['detail'].";");
        $detail_row = $detail_result->fetch_array();
        $part_result = $con->query('select * from part;');
        $i = 0;
        while ($part_row = $part_result->fetch_array()) {
            if ($detail_row['a'.$i] == '') {
                echo '<li class="col-md-4">';
                echo '<i class="fa fa-check"></i> ';
            } else {
                echo '<li class="col-md-4" data-balloon="'.$detail_row['a'.$i].'" data-balloon-pos="up">';
                echo '<i class="fa fa-times"></i> ';
            }
            echo $part_row['description'].'</li>';
            $i++;
            if ($i >= 8) {
                break;
            }
        }
        echo '</ul><img class="col-md-4" src="images/goods_1.png"/></div><h3 style="text-align: center">内饰及电器</h3><div class="col-md-12"><ul class="col-md-8" style="list-style: none" >';
        while ($part_row = $part_result->fetch_array()) {
            if ($detail_row['a'.$i] == '') {
                echo '<li class="col-md-4">';
                echo '<i class="fa fa-check"></i> ';
            } else {
                echo '<li class="col-md-4" data-balloon="'.$detail_row['a'.$i].'" data-balloon-pos="up">';
                echo '<i class="fa fa-times"></i> ';
            }
            echo $part_row['description'].'</li>';
            $i++;
            if ($i >= 39) {
                break;
            }
        }
        echo '</ul><img class="col-md-4" src="images/goods_2.png"/></div><h3 style="text-align: center">底盘大梁</h3><div class="col-md-12"><ul class="col-md-8" style="list-style: none" >';
        while ($part_row = $part_result->fetch_array()) {
            if ($detail_row['a'.$i] == '') {
                echo '<li class="col-md-4">';
                echo '<i class="fa fa-check"></i> ';
            } else {
                echo '<li class="col-md-4" data-balloon="'.$detail_row['a'.$i].'" data-balloon-pos="up">';
                echo '<i class="fa fa-times"></i> ';
            }
            echo $part_row['description'].'</li>';
            $i++;
            if ($i >= 58) {
                break;
            }
        }
        echo '</ul><img class="col-md-4" src="images/goods_3.png"/></div><h3 style="text-align: center">外观</h3><div class="col-md-12"><ul class="col-md-8" style="list-style: none" >';
        while ($part_row = $part_result->fetch_array()) {
            if ($detail_row['a'.$i] == '') {
                echo '<li class="col-md-4">';
                echo '<i class="fa fa-check"></i> ';
            } else {
                echo '<li class="col-md-4" data-balloon="'.$detail_row['a'.$i].'" data-balloon-pos="up">';
                echo '<i class="fa fa-times"></i> ';
            }
            echo $part_row['description'].'</li>';
            $i++;
            if ($i >= 95) {
                break;
            }
        }
        echo '</ul><img class="col-md-4" src="images/goods_4.png"/></div><h3 style="text-align: center">其他</h3><div class="col-md-12"><ul class="col-md-12" style="list-style: none" >';
        while ($part_row = $part_result->fetch_array()) {
            if ($detail_row['a'.$i] == '') {
                echo '<li class="col-md-3">';
                echo '<i class="fa fa-check"></i> ';
            } else {
                echo '<li class="col-md-3" data-balloon="'.$detail_row['a'.$i].'" data-balloon-pos="up">';
                echo '<i class="fa fa-times"></i> ';
            }
            echo $part_row['description'].'</li>';
            $i++;
            if ($i >= 105) {
                break;
            }
        }
        ?>
    </ul>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">这是footer,写一些版权信息什么的</p>
    </div>
</footer>



</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/goods.js"></script>
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
