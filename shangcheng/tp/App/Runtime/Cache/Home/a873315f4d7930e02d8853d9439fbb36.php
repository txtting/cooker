<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Cooker</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="stylesheet" href="/Public/Home/css/style.css?v=2">
  <link rel="stylesheet" href="/Public/Home/../css/jcarousel.css">

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="/Public/Home/js/libs/modernizr-1.7.min.js"></script>
	
</head>

<body>
  
  <div class='
wrapper '>
    <header>
      <div class="top-nav">
        <nav>
           <ul>
          <?php if($_SESSION['fusername']!= ''): ?><li><a href="<?php echo U('Public/logout');?>" id="login-btn">退出登录</a></li>
          		<li><a href="#" id="login-btn">欢迎您 : <?php echo (session('fusername')); ?></a></li>
          		<li><a href="<?php echo U('Cart/cart');?>" id="login-btn">我的购物车</a></li>
          <?php else: ?>
	            <li><a href="<?php echo U('Public/login');?>" id="login-btn">登录</a></li>
	            <li><a href="<?php echo U('Public/register');?>" class="register-btn">注册</a></li><?php endif; ?>
	            <li><a href="<?php echo U('about');?>">简介</a></li>
	            <li><a href="<?php echo U('contact');?>">联系我们</a></li>
	            <li><a href="<?php echo U('menu');?>">菜单</a></li>
          </ul>
        </nav>
        
        <form class="search-form" method="post">
          <input type="text" class="search">
          <input type="submit" class="search-submit" value="">
        </form>
  
      </div>
      <a href="<?php echo U('index');?>" class="logo"><img src="/Public/Home/images/logo.png" alt="your logo" /></a>
			<nav class="main-menu">
				<ul>
					<li><a href="<?php echo U('rclist');?>">热菜</a></li>
					<li><a href="<?php echo U('lclist');?>">凉菜</a></li>
					<li><a href="<?php echo U('zslist');?>">主食</a></li>
					<li><a href="<?php echo U('tglist');?>">汤羹</a></li>
					<li><a href="<?php echo U('tdlist');?>">甜点</a></li>
					<li><a href="<?php echo U('yplist');?>">饮品</a></li>
					<li id="lava-elm"></li>
				</ul>
			</nav>
    </header>
		<div class="content clearfix">
			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo U('index');?>">主页</a></li>
					<li>联系我们</li>
				</ul>
			</div>
			<div class="left-content">
				
				
				<form method="post" action="" class="form contact-form">
					<fieldset>
						<label for="contact-your-name">您的姓名: <span class="required">*</span></label>
						<input type="text" id="contact-your-name" class="input text">
						<label for="contact-your-email">您的邮箱地址: <span class="required">*</span></label>
						<input type="text" id="contact-your-email" class="input text">
						<label for="contact-subject">Subject:</label>
						<input type="text" id="contact-subject" class="input text">
						<label for="contact-details">描述: <span class="required">*</span></label>
						<textarea id="contact-details" rows="30" cols="50" class="input textarea"></textarea>
						<span class="required-desr">* required fields</span>
						<button class="button">发送简信</button>
					</fieldset>
				</form>

				<div class="contact-address">
					<h2 class="heading">地址</h2>
					<p><strong>Cooker Online Food</strong><br>
					101 Timberlachen Circle, Suite 202<br>
					Lake Mary, FL 32746</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan lectus vel dolor dignissim laoreet. Nulla sagittis malesuada eros in imperdiet. Duis consequat volutpat dictum. </p>
					<p>Nulla sagittis malesuada eros in imperdiet. Duis consequat volutpdictum. Suspendisse accumsan lectus vel dolor dignissim laoreet.</p>
				</div>
				
				<hr />

				<h2 class="heading">Find us here</h2>

				<div class="contact-map">
				<iframe width='680' height='360' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://f.amap.com/4F3f_07C1qmG'></iframe>'
				</div>
			</div>
			<div class="right-content">
				<div class="call-us">
					<span class="label">Call us now!</span>
					<span class="pop phone">0800/ 567 345</span>
					<span class="label">Working time:</span>
					<span class="pop">0-24h</span>
				</div>
				
				<div class="cart-box">
					<div class="top">Cart</div>
					<div class="body">
						<ul>
							<li class="info">
								<span class="products"><strong>5</strong> products</span>
								<a href="#">View cart</a>
							</li>
							<li class="price">
								<span class="label">Shipping</span>
								<span class="value">$0.00</span>
							</li>
							<li class="price">
								<span class="label">Total</span>
								<span class="value">$0.00</span>
							</li>
						</ul>
						<a class="submit-button" href="check-out.html">Check out</a>
						<div class="graphic"></div>
					</div>
				</div>

				<hr />
				<div class="featured-meals">
					
					<h2 class="heading">Featured meals</h2>

					<div class="prev-next-buttons">
						<a href="#" class="prev"></a>
						<a href="#" class="next"></a>
					</div>

					<div class="block meal">
						<ul>
							<li>
								<div class="image">
									<img src="/Public/Home/images/meal-8.jpg" alt="">
								</div>
								<h1>Skewers</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
							</li>
							<li>
								<div class="image">
									<img src="/Public/Home/images/meal-8.jpg" alt="">
								</div>
								<h1>Skewers</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
							</li>
						</ul>
					</div>
				</div>
			</div>			
		</div>
	</div>
		<footer>
			<div class="footer-holder">
				<a href="" class="logo">Cooker Logo</a>
						<div class="newsletter">
							<div class="quote">
								<h6>时事通讯</h6>
								<p>注册为我们的时事通讯,总是意识到新的报价和服务:</p>
								<form method="post">
									<input type="text"><input type="submit" value="提交" class="submit-button">
								</form>
							</div>
						</div>
						<div class="links first">
							<h6>分享...</h6>
							<ul>
								<li class="facebook"><a href="#">Facebook</a></li>
								<li class="twitter"><a href="#">Twitter</a></li>
								<li class="rss"><a href="#">Rss feed</a></li>
							</ul>
						</div>
						<div class="links">
							<h6>友情链接</h6>
							<ul>
								<li><a href="#">降价</a></li>
								<li><a href="#">新订单</a></li>
								<li><a href="#">免费声明</a></li>
								<li><a href="#">简介</a></li>
								<li><a href="#">联系我们</a></li>
								<li><a href="#">网站地图</a></li>
							</ul>
						</div>
						<div class="links">
							<h6>分类</h6>
							<ul>
								<li><a href="<?php echo U('rclist');?>">热菜</a></li>
								<li><a href="<?php echo U('lclist');?>">凉菜</a></li>
								<li><a href="<?php echo U('zslist');?>">主食</a></li>
								<li><a href="<?php echo U('tglist');?>">汤羹</a></li>
								<li><a href="<?php echo U('tdlist');?>">甜点</a></li>
								<li><a href="<?php echo U('yplist');?>">饮品</a></li>
								<li id="lava-elm"></li>
							</ul>
						</div>
						<div class="credits clearfix">
							&copy; Copyright &copy; 2013.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
						</div>
			</div>
    </footer>
</body>
	<script src="/Public/Home/js/libs/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="/Public/Home/js/libs/jquery.easing.1.3.js"></script>
  <script src="/Public/Home/js/script.js"></script>
  <script src="/Public/Home/js/libs/jquery.jcarousel.min.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</html>