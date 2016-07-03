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
<body class="home">

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
      <div class="header-slider-canvas">
				<div class="parts part-1"></div>
				<div class="parts part-2"></div>
				<div class="parts part-3"></div>
			</div>
	  		
	   <ul id="mycarousel" class="jcarousel-skin-header-slider">			
	    <?php if(is_array($foodinfo)): $i = 0; $__LIST__ = $foodinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><li>
				<img src="<?php echo ($info["picture"]); ?>" width="680px" height="464" alt="" />
				<div class="description">
					<span class='price'>$<?php echo ($info["price"]); ?></span><br/><span class='name'><?php echo ($info["name"]); ?></span><br/>
					<a href="#" class="shop">查看</a><br/>
				</div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	  </ul>
    </header>
<div class="content clearfix">
<div id="meals-of-the-day">
				<h3 class="title-separator"><span class="title">今日特价</span><span class="sep"></span></h3>
				<ul>
					<?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><li class="meal">
							<div class="img-holder"><img src="<?php echo ($va["picture"]); ?>" width="324px" height="210" alt="" /></div>
	                        <div class="desc-holder">
								<h1><a href="#"><?php echo ($va["name"]); ?></a></h1>
								<p><?php echo (msubstr(html_entity_decode($va["about"]),0,40)); ?></p>
								<span class="price">$<?php echo ($va["price"]); ?></span>
								<a href="/index.php/Home/Index/addCart/id/<?php echo ($va["id"]); ?>" class="add-to-cart-button"> + 购物车</a>
			                   	
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<h3 class="title-separator"><span class="title">特色餐</span><span class="sep"></span></h3>
			
			
			<div id="featured-meals">
				<ul>
					<?php if(is_array($tese)): $i = 0; $__LIST__ = $tese;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li class="meal">
							<div class="img-holder"><img src="<?php echo ($vv["picture"]); ?>" width="210px" height="128" alt="" /></div>
	                        <div class="desc-holder">
								<h1><a href="#"><?php echo ($vv["name"]); ?></a></h1>
								<p><?php echo (msubstr(html_entity_decode($vv["about"]),0,10)); ?></p>
								<span class="price">$<?php echo ($vv["price"]); ?></span>
								<a href="/index.php/Home/Index/addCart/id/<?php echo ($vv["id"]); ?>" class="add-to-cart-button"> + 购物车</a>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>

			<div class="cart-box">
				<div class="top">Cart</div>
				<div class="body">
					<ul>
						<li class="info">
							<span class="products">已选 <strong><?php echo (session('sumn')); ?></strong> 菜品</span>
							<a href="<?php echo U('Cart/cart');?>">显示购物车</a>
						</li>
						<li class="price">
							<span class="label">共计</span>
							<span class="value">$<?php echo (session('sump')); ?></span>
						</li>
					</ul>
					<a class="submit-button" href="<?php echo U('Cart/order');?>">提交</a>
					<div class="graphic"></div>
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

	
  <script type="text/javascript" src="/Public/Home/js/libs/jquery-1.7.1.min.js"></script>
  <script src="/Public/Home/js/libs/jquery.easing.1.3.js"></script>
  <script src="/Public/Home/js/script.js"></script>
  <script src="/Public/Home/js/libs/jquery.jcarousel.min.js"></script>
	<script type="text/javascript">
	// FRONT SLIDER STARTER
	jQuery(document).ready(function() {
		jQuery('#mycarousel').jcarousel({
			auto: 3,
			wrap: 'last',
			scroll: 1,
			animation: 'slow',
			initCallback: mycarousel_initCallback,
		});
	}); 
	
</script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</html>