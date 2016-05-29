<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>栏目修改</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php
include_once('../../front/db.php');

$id = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// 创建一个字典, 存储类型 ID 与 description 的关系
$result = $con->query("select * from type;");
$type = null;
while ($row = $result->fetch_array()) {
    $type[$row['id']] = $row['description'];
}

$email = $nickname = '';
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
}
if (isset($_COOKIE['nickname'])) {
    $nickname = $_COOKIE['nickname'];
}

$car_result = $con->query('select * from car');
$car_id_array = null;
while ($car_row = $car_result->fetch_array()) {
    $car_id_array[] = $car_row['id'];
}

//echo var_dump($car_id_array);
?>
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../front/index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>闪腾</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>闪腾</b>二手车</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--todo:这里放用户的照片,和用户名-->
                            <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $nickname;?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    <!--todo:用户名和职位-->
                                    <?php echo $nickname;?>
                                    <small>Nov. 2012 注册</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">收藏</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">发布</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">购买</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <!--todo:用户名-->
                    <p><?php echo $nickname;?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">导航</li>
                <li class="">
                    <!--todo:网页需要修改-->
                    <a href="../dashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>信息概览</span>
                    </a>
                </li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span>主页管理</span>
                        <span class="label label-primary pull-right">3</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="carousel.php"><i class="fa fa-circle-o"></i> 滑动板</a></li>
                        <li><a href="../../pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 广告栏</a></li>
                        <li class="active"><a href="column_edit.php"><i class="fa fa-circle-o"></i> 栏目修改</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>用户管理</span>
                        <span class="label label-primary pull-right">2</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../user/userinfo.php"><i class="fa fa-circle-o"></i> 用户信息</a></li>
                        <li><a href="../../pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 用户查询</a></li>
                        <li><a href="../user/admininfo.php"><i class="fa fa-circle-o"></i> 管理员信息</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-car"></i>
                        <span>车辆管理</span>
                        <span class="label label-primary pull-right">2</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../car/carinfo.php"><i class="fa fa-circle-o"></i> 车辆信息</a></li>
                        <li><a href="../car/evaluate_car.php"><i class="fa fa-circle-o"></i> 车辆评估</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                主页管理
                <small>栏目修改</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="../../front/index.php"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active"><a href="#">后台管理</a></li>
                <li class="active">栏目修改</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">栏目</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>栏目 ID</th>
                                <th>栏目名称</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $board_result = $con->query("select * from board");
                            while ($board_row = $board_result->fetch_array()) {
                                echo '<tr>';
                                echo '<td>'.$board_row['id'].'</td>';
                                echo '<td>'.$board_row['description'].'</td>';
                                echo "<td><a href='column_edit.php?id=".$board_row['id']."'><button type='button' class='btn-xs btn-info'><i class='fa fa-cog'></i></button></a></td>";
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>栏目 ID</th>
                                <th>栏目名称</th>
                                <th>操作</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>

            <?php
            if ($id != null) {
            ?>
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">栏目车辆 <small>栏目 ID:<?php echo $id; ?></small></h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>展示 ID</th>
                                    <th>车辆 ID</th>
                                    <th>目标车辆 ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $display_result = $con->query("select * from display where board = ".$id.";");

                                while ($display_row = $display_result->fetch_array()) {
                                    echo '<tr>';
                                    echo '<td>'.$display_row['id'].'</td>';
                                    echo '<td>'.$display_row['car'].'</td>';
                                    echo '<td>';
                                    echo '<select name="option_car'.$display_row['id'].'" onchange="update('.$display_row['id'].', this.value)">';
                                    foreach ($car_id_array as $car_id) {
                                        echo '<option value="'.$car_id.'">'.$car_id.'</option>';
                                    }
                                    echo '</select>';
                                    echo '</td>';

                                    echo '</tr>';
                                }

                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>展示 ID</th>
                                    <th>车辆 ID</th>
                                    <th>目标车辆 ID</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->
                </div>
            <?php
            }
            ?>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>版本</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="#">闪腾二手车</a>.</strong> 保留所有权利.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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

    var xmlHttp;

    function update(id, car) {
        xmlHttp = new XMLHttpRequest();
        var url = 'column_car_edit.php';
        url = url + '?id=' + id + '&car=' + car;
        xmlHttp.onreadystatechange = stateChanged;
        xmlHttp.open("GET", url, true);
        xmlHttp.send();
    }

    function stateChanged() {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            // var json = xmlHttp.responseText;
            // jsonObj = JSON.parse(json);
            // // 如果 data 为 true 就说明数据库没有相同邮箱, 那么这一步就没有错误, 设置 submit 为可以按
            // // 如果为 false 就说明有相同邮箱, 那么按钮应该不能按,并且有提示信息
            // if (jsonObj.data == false) {
            //     document.getElementById('emailsignup_error').innerHTML = '邮箱已存在';
            //     document.getElementById('submitsignup').setAttribute('disabled', 'disabled');
            //     emailValidate = false;
            // } else {
            //     document.getElementById('emailsignup_error').innerHTML = '';
            //     // document.getElementById('submitsignup').setAttribute('disabled', 'abled');
            //     emailValidate = true;
            //     validate_button();
            // }
            // alert('success');
//            header();
            window.location.href = 'column_edit.php?id=<?php echo $id; ?>';
        }
    }
</script>
</body>
</html>
