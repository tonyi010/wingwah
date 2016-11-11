<script src="https://use.typekit.net/jvr6red.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<!-- header -->
<?php 
	$fn = $_SERVER['SCRIPT_FILENAME'];
	$file = preg_match('/[a-zA-Z0-9-_]*.\.php$/', $fn, $match);
	$file = preg_replace('/\.php/', '', $match[0]);
?>

<nav class="navbar navbar-default">
	<div class="container">
	<div class="col-md-4 navbar-right nav-links">
		<div class="row">
			<ul class="top-nav list-unstyled animated wow slideInRight visible-md visible-lg visible-sm navbar-right" data-wow-delay=".5s">
				<li>
					<a class="lang" data-lang="zh" href="<?php echo $file ?>.php">繁</a>
				</li>
				<li>
					<a class="lang" data-lang="cn" href="<?php echo $file ?>_cn.php">简</a>
				</li>
				<li class=""><a href="login_cn.php">&nbsp;登入</a></li>
				<li class=""><a href="register_cn.php">&nbsp;注册</a></li>
				<li class="cart box_1 ">
					<a href="checkout.php">
					<h3> <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> 件)</div>
					<img src="<?php asset('images/bag.png') ?>" alt="" />
					</h3>
					</a>
					<!--<p><a href="javascript:;" class="simpleCart_empty">沒有貨品</a></p>-->
					<div class="clearfix"> </div>
				</li>				
			</ul>
		</div>
		<div class="row">
			<ul class="top-nav list-unstyled animated wow slideInRight navbar-right" data-wow-delay=".5s">
				<li class="visible-xs">
					<a class="lang" data-lang="zh" href="<?php echo $file ?>.php">繁</a>
				</li>
				<li class="visible-xs">
					<a class="lang" data-lang="cn" href="<?php echo $file ?>_cn.php">简</a>
				</li>
				<li>
					<a href="https://www.facebook.com/hkwingwah/" target="_blank" class="facebook"><img src="<?php asset('images/fb.png') ?>" alt="" /></a>
				</li>
				<li>
					<a href="#" class="wechat"><img src="<?php asset('images/wechat.png') ?>" alt="" /></a>
				</li>
				<li>
					<a href="http://wmchk.taobao.com/" target="_blank" class="taobao"><img src="<?php asset('images/tao.png') ?>" alt="" /></a>
				</li>
			</ul>
		</div>
	</div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo-wrapper col-md-5 col-sm-6">
			<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
			<a class="navbar-brand" id="logo" href="index.php" style="display: inline-block; width: 100%; height: auto;">
				<img src="<?php asset('images/wwlogo-chi.png') ?>" width="100%" alt="" />
			</a></div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div><!-- /.container-fluid -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse lower-nav" id="bs-example-navbar-collapse-1">
    <div class="container">
      <ul class="nav navbar-nav nav-tab-left navbar-right nav-check">
        <li><a href="about_cn.php">关於荣华<span class="sr-only">(current)</span></a></li>
		<li><a href="china_cn.php">国内发展</a></li>
		<li><a href="product_cn.php">网上购物</a></li>
		<li><a href="shop_cn.php">分店地址</a></li>
		<li><a href="video_cn.php">视频分享</a></li>
		<li><a href="contact_cn.php">联络我们</a></li>
		<li class="visible-xs"><a href="login_cn.php">登入</a></li>
		<li class="visible-xs"><a href="register_cn.php">登记</a></li>
		<li class="visible-xs"><a href="checkout_cn.php">购物篮</a></li>
	</ul>
    </div>
    </div><!-- /.navbar-collapse -->
</nav>