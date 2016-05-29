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

	<title>闪腾二手车•主页</title>

	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="../dist/css/index.css" rel="stylesheet">
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

function changemile($length) {
	$llength = $length / 10000 ;
	return $llength.'万';
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
<!--				<button type="button" class="btn btn-link navbar-btn navbar-right"><a href="profile_index.php">--><?php //echo $_COOKIE['nickname'] ?><!--</a></button>-->
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

<div class="jumbotron">
	<div class="container">
		<h1>寻找适合你的二手车</h1>
		<form class="form-inline">
			<div class="form-group">
				<label for="make" class="sr-only">品牌:</label>
				<input type="text" class="form-control" name="make" id="make" placeholder="搜索品牌" />
			</div>
			<div class="form-group">
				<label for="model" class="sr-only">型号:</label>
				<input type="text" class="form-control" name="model" id="model" placeholder="搜索型号" />
			</div>
			<input type="submit" class="btn btn-default"/>
		</form>
		<br /><br />
		<div class="container">
			<ul class="list-inline">
				<li>通过</li>
				<li id="make-search"><a href="#">品牌</a></li>
				<li id="type-search"><a href="#">类型</a></li>
				<li id="year-search"><a href="#">年限</a></li>
				<li id="price-search"><a href="#">价格</a></li>
				<li>来查询</li>
			</ul>
		</div>

		<!-- todo:之后改成从数据库读取响应数据,可用 ajax ,也可不用 -->
		<div class="make well">
			<ul class="list-inline">
				<?php
				$result = $con->query("select * from make");
				while ($row = $result->fetch_array()) {
					echo '<li><a href="search.php?make='.$row['id'].'">'.$row['make'].'</a></li>';
				}
				?>
			</ul>
		</div>
		<div class="type well">
			<ul class="list-inline">
				<?php
				$result = $con->query("select * from type");
				while ($row = $result->fetch_array()) {
					echo '<li><a href="search.php?type='.$row['id'].'">'.$row['description'].'</a></li>';
				}
				?>
			</ul>
		</div>
		<div class="year well">
			<ul class="list-inline">
				<?php
				$result = $con->query("select * from year");
				while ($row = $result->fetch_array()) {
					echo '<li><a href="search.php?year='.$row['id'].'">'.$row['description'].'</a></li>';
				}
				?>
			</ul>
		</div>
		<div class="price well">
			<ul class="list-inline">
				<?php
				$result = $con->query("select * from price");
				while ($row = $result->fetch_array()) {
					echo '<li><a href="search.php?price='.$row['id'].'">'.$row['description'].'</a></li>';
				}
				?>
			</ul>
		</div>




<!--		这个部分应该是make type year price几个（中文）按钮，然后使用jquery在下方弹出一个框，是查询了数据库显示有哪些车型什么的。-->
	</div>
</div><!-- /.jumbotron -->

<div class="container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<?php
			$index_pic_result = $con->query('select count(*) from index_pic');
			$index_pic_row = $index_pic_result->fetch_array();
			$num = $index_pic_row['0'] - 1;
//			echo var_dump($index_pic_row);
			for ($i = 0; $i < $num; $i++) {
			?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i + 1;?>"></li>
			<?php
			}
			?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php
			$index_pic_result = $con->query("select * from index_pic");
			$index_pic_row = $index_pic_result->fetch_array();
			?>
			<div class="item active">
				<img class="first-slide" src="<?php echo $index_pic_row['url'];?>" alt="...">
				<div class="carousel-caption">
				</div>
			</div>
			<?php
			while ($index_pic_row = $index_pic_result->fetch_array()) {
				?>
				<div class="item">
				<img class="second-slide" src="<?php echo $index_pic_row['url']; ?>" alt="...">
				<div class="carousel-caption">
				</div>
			</div>
			<?php
			}
			?>

<!--			<div class="item active">-->
<!--				<img class="first-slide" src="../dist/img/background.jpg" alt="...">-->
<!--				<div class="carousel-caption">-->
<!--					...-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="item">-->
<!--				<img class="second-slide" src="../dist/img/whitecar.png" alt="...">-->
<!--				<div class="carousel-caption">-->
<!--					...-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="item">-->
<!--				<img class="third-slide" src="../dist/img/whitecar.png" alt="...">-->
<!--				<div class="carousel-caption">-->
<!--					...-->
<!--				</div>-->
<!--			</div>-->
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
	<div class="col-md-4">广告栏1</div>
	<div class="col-md-4">广告栏2</div>
	<div class="col-md-4">广告栏3</div>
</div>

<div class="container">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist" id="navtabsFrom">
		<li role="presentation" class="active"><a href="#threetime" aria-controls="home" role="tab" data-toggle="tab">三成开走</a></li>
		<li role="presentation"><a href="#owncar" aria-controls="profile" role="tab" data-toggle="tab">个人车源</a></li>
		<li role="presentation"><a href="#source" aria-controls="messages" role="tab" data-toggle="tab">原厂质保</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="threetime">
			<div class="col-md-4">
				<img src="../dist/img/three_left_side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 1;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
		
		
		<div role="tabpanel" class="tab-pane fade" id="owncar">
			<div class="col-md-4">
				<img src="../dist/img/individual_left_side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 2;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="source">
			<div class="col-md-4">
				<img src="../dist/img/left-side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 3;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist" id="navtabstype">
		<li role="presentation" class="active"><a href="#suvtype" aria-controls="home" role="tab" data-toggle="tab">SUV</a></li>
		<li role="presentation"><a href="#businesstype" aria-controls="profile" role="tab" data-toggle="tab">豪华商务</a></li>
		<li role="presentation"><a href="#forstep" aria-controls="messages" role="tab" data-toggle="tab">经济代步</a></li>
		<li role="presentation"><a href="#capi" aria-controls="messages" role="tab" data-toggle="tab">格调小资</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="suvtype">
			<div class="col-md-4">
				<img src="../dist/img/suv_left_side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 4;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="businesstype">
			<div class="col-md-4">
				<img src="../dist/img/business_left_side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 5;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="forstep">
			<div class="col-md-4">
				<img src="../dist/img/forstep_left_side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 6;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="capi">
			<div class="col-md-4">
				<img src="../dist/img/capi_left_side.jpg" alt="左侧展示栏">
			</div>

			<?php
			$board_result = $con->query("select * from display where board = 7;");
			?>

			<div class="col-md-8 col-xs-12">
				<?php
				while ($board_row = $board_result->fetch_array()) {
					$car_id = $board_row['car'];
					$image_result = $con->query("select * from image where car = ".$car_id.";");
					$image_row = $image_result->fetch_array();
					$car_result = $con->query('select * from car where id = '.$car_id.';');
					$car_row = $car_result->fetch_array();
//					echo '<div class="col-md-4">';
//					echo '	<div class="thumbnail">';
//					echo '		<a href="goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>';
//					echo '		<div class="caption">';
//					echo '			<a href=""><h3>'.$car_row['model'].' 2012款</h3></a>';
//					echo '			<a href=""><p>'.$car_row['title'].'</p></a>';
//					echo '			<p class="priceforcar">￥'.changemile($car_row['price']).'万</p>';
//					echo '		</div>';
//					echo '	</div>';
//					echo '</div>';

					echo '<div class="col-md-4">
                        <div class="thumbnail">
                            <a href="';
					echo 'goods.php?id='.$car_id.'"><img src="'.$image_row['src'].'" alt="雪弗兰" /></a>
                            <div class="caption">
                                <a href="';
					echo 'goods.php?id='.$car_id.'"><p>'.$car_row['title'].'</p></a>
                                <p>'.$car_row['year'].'上牌 | '.changemile($car_row['mile']);
					$userresult = $con->query("select * from user where id=".$car_row['user']);
					$userrow = $userresult->fetch_array();
					if ($userrow['city']) {
						echo ' | '.$userrow['city'];
					}
					echo '</p>
                                <p class="priceforcar">￥'.changemile($car_row['price']).'</p>
                            </div>
                        </div>
                    </div>';
				}
				?>
			</div>
		</div>
	</div>
</div>
<br /><br /><br />

<div id="index-littletip" class="container-fluid">
	<div class="col-md-3">
		<img class="littletip" src="../dist/img/head/quality.png" alt="品质" />
		<div class="adtitle"><h3>闪腾认证1088项检测</h3></div>
		<div class="adsubtitle"><p>反馈真实车况杜绝问题车</p></div>
	</div>
	<div class="col-md-3">
		<img class="littletip" src="../dist/img/head/ensurance.png" alt="保障"/>
		<div class="adtitle"><h3>一年/两万公里质保</h3></div>
		<div class="adsubtitle"><p>提供主要部件保额内的免费保修</p></div>
	</div>
	<div class="col-md-3">
		<img class="littletip" src="../dist/img/head/dontworry.png" alt="品质"/>
		<div class="adtitle"><h3>重大问题车15天包退</h3></div>
		<div class="adsubtitle"><p>杜绝重大问题车，让您买得放心</p></div>
	</div>
	<div class="col-md-3">
		<img class="littletip" src="../dist/img/head/tiexin.png" alt="品质"/>
		<div class="adtitle"><h3>专业顾问全程陪买</h3></div>
		<div class="adsubtitle"><p>1对1全程陪您找车、看车、验车</p></div>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<p class="text-muted"><?php include_once ("footer.php");?></p>
	</div>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="../dist/js/index.js"></script>
</body>
</html>
