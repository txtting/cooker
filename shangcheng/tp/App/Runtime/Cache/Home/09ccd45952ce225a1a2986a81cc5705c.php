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
					<li>简介</li>
				</ul>
			</div>
						
			<p><img src="/Public/Home/images/content-image.jpg" alt="" style="float: left" class="img-canvas mar-r-10">&nbsp;&nbsp;&nbsp;&nbsp;新世纪青年饮食（青年餐厅），创立于1999年初，是由一批勇于开拓、积极进取，敢为天下先的青年精英组成的优秀团队。经过不懈的努力，迅速发展成为具有专业水准的大型餐饮连锁企业。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;多年来，青年人本着“用心、专注、凝聚、求变”的经营理念，融入了多元化的饮食元素，继承了悠久的中华饮食文明，不断追求时代饮食文化的真谛，续写着一个又一个新的奇迹！</p>

			<p><img src="/Public/Home/images/content-image.jpg" alt="" style="float: right" class="img-canvas  mar-l-10">&nbsp;&nbsp;&nbsp;&nbsp;源于对饮食文化的高度热爱，青年人经过多年的艰苦创业，新世纪青年已经遍布北京各大城区，已经发展成为集传统中餐、快餐及物流配送于一体的多元化餐饮连锁集团。青年餐饮全面致力于营养、健康、食尚的完美结合。同时，自主创建了受大众青睐的子品牌：易小吃、徽湘苑、易宴等。</p>

			<p>&nbsp;&nbsp;&nbsp;&nbsp;面对新世纪开始，企业将以集团化的方式，面向全国开辟新的市场。目前，我们在上海、天津、云南等城市进行考察、调研、策划，做好新一轮的拓展工作。把新世纪青年饮食做成中国真正意义上的餐饮连锁集团。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;北京新世纪青年饮食有限公司，经过将近10年的努力开创和奋进，从一个规模很小的餐厅发展到如今具有13家直属店的相当规模的餐饮连锁集团。公司在易董事长的带领下，不断的创造佳绩，为企业赢得了一个又一个的荣誉。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;但是，我们深知，企业所赢得的荣誉终归是来自于大众的厚爱与支持，以及青年人的共同努力。我们会给您提供更加优质的服务和菜品，来报答顾客。</p>
			<hr>

			<h2>总经理致辞：</h2>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;各界朋友、同仁们：</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;大家好!</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;餐饮消费大众化和个性化的迅猛发展，给中国的餐饮行业带来了巨大的机遇和挑战。青年餐饮紧抓机遇、迎接挑战，博采众家之长、依托人才和技术优势、不断追求“食代不变”的真谛。在“用心、专注、凝聚、求变”的经营理念的引导下，实现了健康、快速的成长，利用短暂的时间取得了长足进步，成为餐饮界的新锐。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;回首几年来的成长历程，"青年人"都付出了不懈的努力和艰辛的汗水，这样一个追求精益求精、不断完善自我的团队，是青年餐饮最宝贵的财富，是企业永葆生机、不断发展的动力源泉。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;21世纪是一个崭新的开始，新世纪青年饮食将一如既往的本着“尊重员工、服务顾客”的企业宗旨，进一步增强企业的综合竞争力，在公司规模、经营业绩、核心竞争力等方面都将迈向一个新的台阶！为北京乃至中国餐饮市场的发展贡献自己的力量！</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;感谢所有人对青年餐饮的关心和支持，我们将再接再厉、再创辉煌！</p>	
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