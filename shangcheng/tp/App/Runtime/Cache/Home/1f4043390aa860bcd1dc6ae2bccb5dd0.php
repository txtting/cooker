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
 
<!-- LOGIN POP UPS -->
<div id="popup-overlay"></div>
<div class="popup" id="popup-login">
	<h2>用户登录</h2>
	<hr class="separator">
	<form method="post" action="" class="form clearfix">
		<fieldset>
			<label for="login-username">用户名:</label>
			<input type="text" name="" id="login-username" class="input text">
			<label for="login-password">密码:</label>
			<input type="password" name="" id="login-password" class="input text">
		</fieldset>
	</form>
	<hr class="separator">
	<button class="button submit">登录</button>
	<div class="links"><a href="#">忘记密码 </a> | <a href="#" class="register-btn"> 新账户</a></div>
	<a class="close" href="#"></a>
</div>
<div class="popup" id="popup-register">
		<h2>注册</h2>
		<hr class="separator">
		<form method="post" action="" class="form clearfix">
			<fieldset>
				<label for="login-username">用户名:</label>
				<input type="text" name="" id="login-username" class="input text">
				<label for="login-email">邮箱:</label>
				<input type="text" name="" id="login-email" class="input text error" value="Error">
				<label for="login-password">密码:</label>
				<input type="password" name="" id="login-password" class="input text">
				<label for="login-confirm-password">重复密码:</label>
				<input type="password" name="" id="login-confirm-password" class="input text">
			</fieldset>
		
			<hr class="separator">
			
			<div class="checks">
				<div class="check-row">
					<label><input type="checkbox" class="input checkbox">我已阅读并同意 <a href="#">条款的 &amp; 条件</a></label>
				</div>
				<div class="check-row">
					<label><input type="checkbox" class="input checkbox">我同意接收促销邮件</label>
				</div>
			</div>

			<button class="button submit">立即注册</button>
		</form>
		<a class="close" href="#"></a>
	</div>
<!-- END LOGIN POP UPS -->
  <div class='
wrapper '>
    <header>
      <div class="top-nav">
        <nav>
          <ul>
             <li><a href="#" id="login-btn">登录</a></li>
            <li><a href="#" class="register-btn">注册</a></li>
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
					<li class="current"><a href="listing.html">热菜</a></li>
					<li><a href="listing.html">凉菜</a></li>
					<li><a href="listing.html">主食</a></li>
					<li><a href="listing.html">汤羹</a></li>
					<li><a href="listing.html">甜点</a></li>
					<li><a href="listing.html">饮品</a></li>
					<li id="lava-elm"></li>
				</ul>
			</nav>
    </header>
		<div class="content clearfix">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Entrees</li>
				</ul>
			</div>
			<div class="left-content">				
				<div class="paging">
					<ul>
						<li class="prev"><a href="#">prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li  class="active"><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">next</a></li>
					</ul>
				</div>

				<div class="meals-listing">
					<ul>
						<li class="meal-details">
							<div class="image"><img src="/Public/Home/images/meal-9.jpg" alt=""></div>
							<div class="info">
								<div class="descr-holder">
									<h3><a href="single.html">Fried potatoes</a></h3>
									<div class="date_categories">Date added: 04 May | Categories: <a href="#">Entrees</a>, <a href="#">Seafood</a></div>
									<p>Vestibulum ut leo erat. Integer ac est at enim suscipit vulputate. Phasellus ante erat, euismod et posuere ut, convallis sit amet tellus. Nulla in elit non erat tempus luctus at a est. Nullam non orci tortor. Donec congue eleifend tempus. Morbi malesuada consectetur sem ac pharetra. </p>
								</div>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
								<div class="rating-small">
									<div class="rating-small-over" style="width:60%"></div>
								</div>
							</div>
						</li>
						<li class="meal-details">
							<div class="image"><img src="/Public/Home/images/meal-10.jpg" alt=""></div>
							<div class="info">
								<div class="descr-holder">
									<h3><a href="single.html">Fried potatoes</a></h3>
									<div class="date_categories">Date added: 04 May | Categories: <a href="#">Entrees</a>, <a href="#">Seafood</a></div>
									<p>Vestibulum ut leo erat. Integer ac est at enim suscipit vulputate. Phasellus ante erat, euismod et posuere ut, convallis sit amet tellus. Nulla in elit non erat tempus luctus at a est. Nullam non orci tortor. Donec congue eleifend tempus. Morbi malesuada consectetur sem ac pharetra. </p>
								</div>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
								<div class="rating-small">
									<div class="rating-small-over" style="width:60%"></div>
								</div>
							</div>
						</li>
						<li class="meal-details">
							<div class="image"><img src="/Public/Home/images/meal-11.jpg" alt=""></div>
							<div class="info">
								<div class="descr-holder">
									<h3><a href="single.html">Fried potatoes</a></h3>
									<div class="date_categories">Date added: 04 May | Categories: <a href="#">Entrees</a>, <a href="#">Seafood</a></div>
									<p>Vestibulum ut leo erat. Integer ac est at enim suscipit vulputate. Phasellus ante erat, euismod et posuere ut, convallis sit amet tellus. Nulla in elit non erat tempus luctus at a est. Nullam non orci tortor. Donec congue eleifend tempus. Morbi malesuada consectetur sem ac pharetra. </p>
								</div>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
								<div class="rating-small">
									<div class="rating-small-over" style="width:60%"></div>
								</div>
							</div>
						</li>
						<li class="meal-details">
							<div class="image"><img src="/Public/Home/images/meal-12.jpg" alt=""></div>
							<div class="info">
								<div class="descr-holder">
									<h3><a href="single.html">Fried potatoes</a></h3>
									<div class="date_categories">Date added: 04 May | Categories: <a href="#">Entrees</a>, <a href="#">Seafood</a></div>
									<p>Vestibulum ut leo erat. Integer ac est at enim suscipit vulputate. Phasellus ante erat, euismod et posuere ut, convallis sit amet tellus. Nulla in elit non erat tempus luctus at a est. Nullam non orci tortor. Donec congue eleifend tempus. Morbi malesuada consectetur sem ac pharetra. </p>
								</div>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
								<div class="rating-small">
									<div class="rating-small-over" style="width:60%"></div>
								</div>
							</div>
						</li>
						<li class="meal-details">
							<div class="image"><img src="/Public/Home/images/meal-13.jpg" alt=""></div>
							<div class="info">
								<div class="descr-holder">
									<h3><a href="single.html">Fried potatoes</a></h3>
									<div class="date_categories">Date added: 04 May | Categories: <a href="#">Entrees</a>, <a href="#">Seafood</a></div>
									<p>Vestibulum ut leo erat. Integer ac est at enim suscipit vulputate. Phasellus ante erat, euismod et posuere ut, convallis sit amet tellus. Nulla in elit non erat tempus luctus at a est. Nullam non orci tortor. Donec congue eleifend tempus. Morbi malesuada consectetur sem ac pharetra. </p>
								</div>
								<span class="price">$18.32</span>
								<a href="check-out.html" class="add-to-cart-button">add to cart</a>
								<div class="rating-small">
									<div class="rating-small-over" style="width:60%"></div>
								</div>
							</div>
						</li>
					</ul>
				</div>

				<div class="paging mar-t-20">
					<ul>
						<li class="prev"><a href="#">prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">next</a></li>
					</ul>
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

				<div class="separator dark box-and-meals"></div>

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
								<li><a href="listing.html">热菜</a></li>
								<li><a href="listing.html">凉菜</a></li>
								<li><a href="listing.html">主食</a></li>
								<li><a href="listing.html">汤羹</a></li>
								<li><a href="listing.html">甜点</a></li>
								<li><a href="listing.html">饮品</a></li>
								<li id="lava-elm"></li>
							</ul>
						</div>
						<div class="credits clearfix">
							&copy; Copyright &copy; 2013.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
						</div>
			</div>
    </footer>
</body>
	<script type="text/javascript" src="/Public/Home/js/libs/jquery-1.7.1.min.js"></script>
  <script src="/Public/Home/js/libs/jquery.easing.1.3.js"></script>
  <script src="/Public/Home/js/script.js"></script>
  <script src="/Public/Home/js/libs/jquery.jcarousel.min.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</html>