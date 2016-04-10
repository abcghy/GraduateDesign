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
	<link href="css/index.css" rel="stylesheet">

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
				<li><a href="#">首页</a></li>
				<li><a href="#">我要买车</a></li>
				<li><a href="#">我要卖车</a></li>
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
				<li id="model-search"><a href="#">型号</a></li>
				<li id="year-search"><a href="#">年限</a></li>
				<li id="price-search"><a href="#">价格</a></li>
				<li>来查询</li>
			</ul>
		</div>

		<!-- todo:之后改成从数据库读取响应数据,可用 ajax ,也可不用 -->
		<div class="make well">
			<ul class="list-inline">
				<li><a href="#">奥迪</a></li>
				<li><a href="#">宝马</a></li>
				<li><a href="#">保时捷</a></li>
				<li><a href="#">奔驰</a></li>
				<li><a href="#">本田</a></li>
				<li><a href="#">比亚迪</a></li>
				<li><a href="#">别克</a></li>
				<li><a href="#">宾利</a></li>
				<li><a href="#">大众</a></li>
				<li><a href="#">东风</a></li>
				<li><a href="#">法拉利</a></li>
				<li><a href="#">丰田</a></li>
				<li><a href="#">福特</a></li>
				<li><a href="#">红旗</a></li>
				<li><a href="#">吉利</a></li>
				<li><a href="#">江淮</a></li>
				<li><a href="#">凯迪拉克</a></li>
				<li><a href="#">劳斯莱斯</a></li>
				<li><a href="#">雷克萨斯</a></li>
				<li><a href="#">雷诺</a></li>
				<li><a href="#">林肯</a></li>
				<li><a href="#">路虎</a></li>
				<li><a href="#">马自达</a></li>
				<li><a href="#">迈巴赫</a></li>
				<li><a href="#">奇瑞</a></li>
				<li><a href="#">日产</a></li>
				<li><a href="#">特斯拉</a></li>
				<li><a href="#">五菱</a></li>
				<li><a href="#">夏利</a></li>
				<li><a href="#">现代</a></li>
				<li><a href="#">雪佛兰</a></li>
				<li><a href="#">雪铁龙</a></li>
				<li><a href="#">一汽</a></li>
				<li><a href="#">英菲尼迪</a></li>
			</ul>
		</div>
		<div class="model well">
			<ul class="list-inline">
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
		</div>
		<div class="year well">
			<ul class="list-inline">
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
		</div>
		<div class="price well">
			<ul class="list-inline">
				<li><a href="#">低于2万</a></li>
				<li><a href="#">2-5万</a></li>
				<li><a href="#">5-8万</a></li>
				<li><a href="#">8-12万</a></li>
				<li><a href="#">12-16万</a></li>
				<li><a href="#">16-20万</a></li>
				<li><a href="#">20-30万</a></li>
				<li><a href="#">30万以上</a></li>
			</ul>
		</div>

		<a id="make-btn" class="btn btn-primary" role="button" data-toggle="collapse" href="#make-collapse" aria-expanded="false" aria-controls="make-collapse">
			品牌
		</a>
		<a id="model-btn" class="btn btn-primary" role="button" data-toggle="collapse" href="#model-collapse" aria-expanded="false" aria-controls="model-collapse">
			型号
		</a>
		<a id="year-btn" class="btn btn-primary" role="button" data-toggle="collapse" href="#year-collapse" aria-expanded="false" aria-controls="year-collapse">
			年限
		</a>
		<a id="price-btn" class="btn btn-primary" role="button" data-toggle="collapse" href="#price-collapse" aria-expanded="false" aria-controls="price-collapse">
			价格
		</a>

		<div class="collapse" id="make-collapse">
			<div class="well">
				<ul class="list-inline">
					<li><a href="#">奥迪</a></li>
					<li><a href="#">宝马</a></li>
					<li><a href="#">保时捷</a></li>
					<li><a href="#">奔驰</a></li>
					<li><a href="#">本田</a></li>
					<li><a href="#">比亚迪</a></li>
					<li><a href="#">别克</a></li>
					<li><a href="#">宾利</a></li>
					<li><a href="#">大众</a></li>
					<li><a href="#">东风</a></li>
					<li><a href="#">法拉利</a></li>
					<li><a href="#">丰田</a></li>
					<li><a href="#">福特</a></li>
					<li><a href="#">红旗</a></li>
					<li><a href="#">吉利</a></li>
					<li><a href="#">江淮</a></li>
					<li><a href="#">凯迪拉克</a></li>
					<li><a href="#">劳斯莱斯</a></li>
					<li><a href="#">雷克萨斯</a></li>
					<li><a href="#">雷诺</a></li>
					<li><a href="#">林肯</a></li>
					<li><a href="#">路虎</a></li>
					<li><a href="#">马自达</a></li>
					<li><a href="#">迈巴赫</a></li>
					<li><a href="#">奇瑞</a></li>
					<li><a href="#">日产</a></li>
					<li><a href="#">特斯拉</a></li>
					<li><a href="#">五菱</a></li>
					<li><a href="#">夏利</a></li>
					<li><a href="#">现代</a></li>
					<li><a href="#">雪佛兰</a></li>
					<li><a href="#">雪铁龙</a></li>
					<li><a href="#">一汽</a></li>
					<li><a href="#">英菲尼迪</a></li>
				</ul>
			</div>
		</div>

		<div class="collapse" id="model-collapse">
			<div class="well">
				<ul class="list-inline">
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
			</div>
		</div>

		<div class="collapse" id="year-collapse">
			<div class="well">
				<ul class="list-inline">
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
			</div>
		</div>

		<div class="collapse" id="price-collapse">
			<div class="well">
				<ul class="list-inline">
					<li><a href="#">低于2万</a></li>
					<li><a href="#">2-5万</a></li>
					<li><a href="#">5-8万</a></li>
					<li><a href="#">8-12万</a></li>
					<li><a href="#">12-16万</a></li>
					<li><a href="#">16-20万</a></li>
					<li><a href="#">20-30万</a></li>
					<li><a href="#">30万以上</a></li>
				</ul>
			</div>
		</div>


<!--		这个部分应该是make type year price几个（中文）按钮，然后使用jquery在下方弹出一个框，是查询了数据库显示有哪些车型什么的。-->
	</div>
</div><!-- /.jumbotron -->

<div class="container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" src="images/background.jpg" alt="...">
				<div class="carousel-caption">
					...
				</div>
			</div>
			<div class="item">
				<img class="second-slide" src="images/whitecar.png" alt="...">
				<div class="carousel-caption">
					...
				</div>
			</div>
			<div class="item">
				<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="...">
				<div class="carousel-caption">
					...
				</div>
			</div>
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
				<img src="images/three_left_side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/three_car_1.jpg" alt="雪弗兰" /></a>
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
						<a href="#<?php ?>"><img src="images/cars/three_car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/three_car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/three_car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/three_car_6.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		
		
		<div role="tabpanel" class="tab-pane fade" id="owncar">
			<div class="col-md-4">
				<img src="images/individual_left_side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/individual_car_1.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/individual_car_2.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/individual_car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/individual_car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/individual_car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/individual_car_6.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="source">
			<div class="col-md-4">
				<img src="images/left-side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/car_1.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/car_2.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>s
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/car_6.jpg" alt="雪弗兰" /></a>
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
				<img src="images/suv_left_side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/suv_car_1.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/suv_car_2.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/suv_car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/suv_car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/suv_car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/suv_car_6.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="businesstype">
			<div class="col-md-4">
				<img src="images/business_left_side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/business_car_1.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/business_car_2.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/business_car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/business_car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/business_car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/business_car_6.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="forstep">
			<div class="col-md-4">
				<img src="images/forstep_left_side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/forstep_car_1.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/forstep_car_2.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/forstep_car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/forstep_car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/forstep_car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/forstep_car_6.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="capi">
			<div class="col-md-4">
				<img src="images/capi_left_side.jpg" alt="左侧展示栏">
			</div>

			<div class="col-md-8 col-xs-12 right-side">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/capi_car_1.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/capi_car_2.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/capi_car_3.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/capi_car_4.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/capi_car_5.jpg" alt="雪弗兰" /></a>
						<div class="caption">
							<a href="#<?php ?>"><h3>雪弗兰 2012款</h3></a>
							<a href="#<?php ?>"><p>科帕奇 2.4 手自一体 7座豪华导航版</p></a>
							<p class="priceforcar">￥15.28万</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="#<?php ?>"><img src="images/cars/capi_car_6.jpg" alt="雪弗兰" /></a>
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
</div>
<br /><br /><br />

<div class="container-fluid">
	<div class="container">
		<div class="col-md-3">
			<img class="littletip" src="images/head/quality.png" alt="品质" />
			<div class="adtitle"><h3>闪腾认证1088项检测</h3></div>
			<div class="adsubtitle"><p>反馈真实车况杜绝问题车</p></div>
		</div>
		<div class="col-md-3">
			<img class="littletip" src="images/head/ensurance.png" alt="保障" />
			<div class="adtitle"><h3>一年/两万公里质保</h3></div>
			<div class="adsubtitle"><p>提供主要部件保额内的免费保修</p></div>
		</div>
		<div class="col-md-3">
			<img class="littletip" src="images/head/dontworry.png" alt="品质" />

			<div class="adtitle"><h3>重大问题车15天包退</h3></div>
			<div class="adsubtitle"><p>杜绝重大问题车，让您买得放心</p></div>
		</div>
		<div class="col-md-3">
			<img class="littletip" src="images/head/tiexin.png" alt="品质" />

			<div class="adtitle"><h3>专业顾问全程陪买</h3></div>
			<div class="adsubtitle"><p>1对1全程陪您找车、看车、验车</p></div>
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
