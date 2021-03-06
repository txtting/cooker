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
  <link rel="stylesheet" href="/Public/Home/css/info-mgt.css" />
  <script src="/Public/Home/js/libs/modernizr-1.7.min.js"></script>
  <style type='text/css'>
    table tr .name{ width:155px; text-align: center;}
    table tr .picture{ width:150px; text-align: center;}
    table tr .about{ width:250px; padding-left:5px;}
    table tr .p{ width:100px; text-align: center;}
    table tr .category_id{ width:90px; text-align: center;}
    table tr .operate{width:60px; text-align: center;}
    table tr .num{width:80px;text-align: center;}
    table tr .num a:hover{text-decoration:underline;}
</style>
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
					<li>购物车</li>
				</ul>
			</div>
			
			<div class="product-menu-header">
				<h2>购物车</h2>
			</div>
			<div class="product-menu-holder"><!-- 菜单开始-->
					<div class="table-operate ue-clear">
					    <a href="<?php echo U('index');?>"  class="add">添加</a>
					    <a href="javascript:;" id='btndel' class="del">删除</a>
					</div>
				<div >
			        <table  border="1" bordercolor="green">
		                <tr>
		                	<th class="operate">操 作</th>
		                	<th class="picture">缩略图</th> 
		                    <th class="name">美食名称</th>         
		                    <th class="p">价格</th>
		                    <th class="about">描述</th>
		                    <th class="category_id">所属分类</th>
		                    <th class="num">数量</th>
		                </tr>
		                <?php if(is_array($foods)): $i = 0; $__LIST__ = $foods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fo): $mod = ($i % 2 );++$i;?><tr>
			                	<td class="operate">
			                        <input type="checkbox" value="<?php echo ($fo["id"]); ?>"></input>
			                    </td>
			                	<td class="picture"><img src="<?php echo ($fo["picture"]); ?>" width="120px" height="120" alt="" /></td>
			                    <td class="name"><?php echo ($fo["name"]); ?></td>
			                    <td class="p">$<?php echo ($fo["price"]); ?></td>
			                    <td class="about"><?php echo (msubstr(html_entity_decode($fo["about"]),0,10)); ?></td>
			                    <td class="category_id"><?php echo ($fo["category_id"]); ?></td>
			                   	<td class="num">
				                   	<!-- <a href="javascript:;" class="decr"> - </a> -->
				                   	<button onclick="minus(this)"> - </button>
				                   	<button ><?php echo ($fo["num"]); ?></button>
				                   	<button onclick="plus(this)"> + </button>
				                   	<!-- <a href="javascript:;" class="incr"> + </a> -->
			                   	</td>
			                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		                <tr>
		                	<td colspan="2"><input type="checkbox" value="">全选</input></td>
		                	<td colspan="3">合计：￥ </td>
		                	<td colspan="2"><button class="submit">结算(数量)</button></td>
		                </tr>
			        </table>
			</div><!-- 菜单结束-->
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
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li >
						<a href="#" target="_self"><?php echo (str_repeat("&emsp;",$vo["level"]*1)); echo ($vo["name"]); ?></a>					
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript">
 	function minus(a){
		var num = $(a).next().html();
		num = num*1 - 1;
		if(num >= 1){
			$(a).next().html(num);
	    }
	}
	function plus(a){
		var num = $(a).prev().html();
		num = num*1 + 1;
		$(a).prev().html(num);
	}
    $(function(){
	    //给删除按钮添加点击事件
	    //获取选中的值，可以同时删除多个
	    $('#btndel').on('click',function(){
	        var ids = $(':checkbox:checked');
	        var id = '';
	        for(var i = 0;i < ids.length;i++){
	            id = id + ids[i].value + ',';
	        }
	            id = id.substring(0,id.length-1);
	            //alert(id);
	            window.location.href = '/index.php/Home/Index/delcart/id/' + id;
	    }); 
    }); 
  </script>		
</body>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</html>