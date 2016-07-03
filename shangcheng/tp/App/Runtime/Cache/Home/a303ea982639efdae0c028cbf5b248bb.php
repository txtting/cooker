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
		<div class="content full-content clearfix">

			<div class="breadcrumbs">
				<ul>
					<li><a href="<?php echo U('index');?>">主页</a></li>
					<li>菜单</li>
				</ul>
			</div>
			
			<div class="product-menu-header">
				<h2>菜单</h2>
			</div>
			
			<div class="product-menu-holder">
				<div>
					<div class="left-part">
						<h3>Drinks and Beverages</h3>
						<h4><span class="text">Coctails</span><span class="line"></span></h4>
						<ul>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a>a</h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
						</ul>
						<h3>Drinks and Beverages</h3>
						<h4><span class="text">Coctails</span><span class="line"></span></h4>
						<ul>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
						</ul>
					</div>
					<div class="right-part">
						<h3>Drinks and Beverages</h3>
						<h4><span class="text">Coctails</span><span class="line"></span></h4>
						<ul>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
						</ul>
						<h4><span class="text">Coctails</span><span class="line"></span></h4>
						<ul>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
							<li>
								<div class="img-holder"><div class="canvas"></div><img src="/Public/Home/images/meal-15.jpg" alt=""></div>
								<div class="price">
									<h5><a href="single.html">Bubbly Iced Tea</a></h5>
									<span>$5,99</span>
								</div>
								<div class="description">
										Pellentesque eu ipsum in massa semper condimentum. 
										Integer in augue vitae magna volutpat placerat sit amet 
										eu nibh.	
								</div>
							</li>
						</ul>
						
					</div>
				</div>
				<a href="#" class="prev">prev</a>
				<a href="#" class="next">next</a>
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
	<script type="text/javascript" src="/Public/Home/js/libs/jquery-1.7.1.min.js"></script>
  <script src="/Public/Home/js/libs/jquery.easing.1.3.js"></script>
  <script src="/Public/Home/js/script.js"></script>
  <script src="/Public/Home/js/libs/jquery.jcarousel.min.js"></script>		
</body>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</html>