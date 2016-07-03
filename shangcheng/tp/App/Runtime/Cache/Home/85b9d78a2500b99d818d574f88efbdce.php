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
  <link rel="stylesheet" href="/Public/Home/css/info-mgt.css" />

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
					<li>菜单</li>
					<li>主食</li>
				</ul>
			</div>
			<div class="left-content">				
				 <div class="pagination ue-clear">
				    <div class="pagin-list">
				        <?php echo ($showPage); ?>
				    </div>
				</div>

				<div class="meals-listing">
					<ul>
					 <?php if(is_array($zsfood)): $i = 0; $__LIST__ = $zsfood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zs): $mod = ($i % 2 );++$i;?><li class="meal-details">
							<div class="image"><img src="<?php echo ($zs["picture"]); ?>" width="277px" height="211" alt="<?php echo ($zs["name"]); ?>"></div>
							<div class="info">
								<div class="descr-holder">
									<h3><a href="single.html"><?php echo ($zs["name"]); ?></a></h3>
									<div class="date_categories"><?php echo (date('Y-m-d H:i:s',$zs["addtime"])); ?>| 分类: <a href="<?php echo U('menu');?>">菜单</a>, <a href="#">主食</a>, <a href="#"><?php if($zs["category_id"] == '7'): ?>米饭<?php elseif($zs["category_id"] == '8'): ?>饺子<?php elseif($zs["category_id"] == '9'): ?>面食<?php elseif($zs["category_id"] == '10'): ?>粥<?php elseif($zs["category_id"] == '11'): ?>饼<?php endif; ?></a></div>
									<p><?php echo (msubstr(html_entity_decode($zs["about"]),0,200)); ?> </p>
								</div>
								<span class="price">$<?php echo ($zs["price"]); ?></span>
								<a href="/index.php/Home/Index/addCart/id/<?php echo ($mf["id"]); ?>" class="add-to-cart-button"> + 购物车</a>
								<div class="rating-small">
									<div class="rating-small-over" style="width:60%"></div>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
						
					</ul>
				</div>

				<div class="pagination ue-clear">
				    <div class="pagin-list">
				        <?php echo ($showPage); ?>
				    </div>
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

				<div class="separator dark box-and-meals"></div>

				<div class="featured-meals">
					
					<h2 class="heading">特色菜</h2>

					<div class="prev-next-buttons">
						<a href="#" class="prev"></a>
						<a href="#" class="next"></a>
					</div>

					<div class="block meal">
						<ul>
							<?php if(is_array($drcfood)): $i = 0; $__LIST__ = $drcfood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$drc): $mod = ($i % 2 );++$i;?><li>
								<div class="image">
									<img src="<?php echo ($drc["picture"]); ?>" width="207px" height="158" alt="<?php echo ($drc["name"]); ?>">
								</div>
								<h1><?php echo ($drc["name"]); ?></h1>
								<p><?php echo (msubstr(html_entity_decode($drc["about"]),0,30)); ?></p>
								<span class="price">$<?php echo ($drc["price"]); ?></span>
								<a href="/index.php/Home/Index/addCart/id/<?php echo ($drc["id"]); ?>" class="add-to-cart-button"> + 购物车</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
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
	<script type="text/javascript" src="/Public/Home/js/libs/jquery-1.7.1.min.js"></script>
  <script src="/Public/Home/js/libs/jquery.easing.1.3.js"></script>
  <script src="/Public/Home/js/script.js"></script>
  <script src="/Public/Home/js/libs/jquery.jcarousel.min.js"></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</html>