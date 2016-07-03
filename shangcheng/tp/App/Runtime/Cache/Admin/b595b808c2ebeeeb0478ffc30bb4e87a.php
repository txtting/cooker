<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/jquery.dialog.css" />
<link rel="stylesheet" href="/Public/Admin/css/index.css" />
<title>美食吧后台管理</title>
</head>

<body>
<div id="container">
  <div id="hd">
    <div class="hd-wrap ue-clear">
      <div class="top-light"></div>
      <h1 class="logo"></h1>
      <div class="login-info ue-clear">
              <div class="welcome ue-clear"><span>欢迎您,<?php echo (session('username')); ?></span><a href="javascript:;" class="user-name"></a></div>
              <div class="login-msg ue-clear"> <a href="<?php echo U('Email/recBox');?>" class="msg-txt" target="content">消息</a> <a href="<?php echo U('Email/recBox');?>" class="msg-num" target="content">0</a> </div>
      </div>
      <div class="toolbar ue-clear"> <a href="javascript:;" class="home-btn">首页</a> <a href="<?php echo U('Public/logout');?>" class="quit-btn exit"></a> </div>
    </div>
  </div>
  <div id="bd">
    <div class="wrap ue-clear">
      <div class="sidebar">
        <h2 class="sidebar-header">
          <p>功能导航</p>
        </h2>
        <ul class="nav">
          <li class="gongwen">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>美食分类管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Category/index');?>">分类列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Category/add');?>">添加分类</a></li>
            </ul>
          </li>
          <li class="nav-info">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>美食信息</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Food/index');?>">美食信息列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Food/add');?>">添加美食信息</a></li>
            </ul>
          </li>
          <li class="email">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>邮件管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Email/send');?>">发送邮件</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Email/sendBox');?>">发件箱</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Email/recBox');?>">收件箱</a></li>
            </ul>
          </li>
           <li class="agency">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>管理员管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Buser/index');?>">管理员列表</a></li>
              <li><a href="javascript:;" date-src="<?php echo U('Buser/add');?>">添加管理员</a></li>
            </ul>
          </li>
          <li class="agency">
            <div class="nav-header"><a href="javascript:;" class="ue-clear"><span>用户管理</span><i class="icon"></i></a></div>
            <ul class="subnav">
              <li><a href="javascript:;" date-src="<?php echo U('Fuser/index');?>">用户列表</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="content">
        <iframe src="<?php echo U('home');?>" id="iframe" name="content" width="100%" height="100%" frameborder="0" ></iframe>
      </div>
    </div>
  </div>
  <div id="ft" class="ue-clear">
    <div class="ft-left"> <span>中国移动</span> <em>Office&nbsp;System</em> </div>
    <div class="ft-right"> <span>Automation</span> <em>V2.0&nbsp;2014</em> </div>
  </div>
</div>
<div class="exitDialog">
  <div class="dialog-content">
    <div class="ui-dialog-icon"></div>
    <div class="ui-dialog-text">
      <p class="dialog-content">你确定要退出系统？</p>
      <p class="tips">如果是请点击“确定”，否则点“取消”</p>
      <div class="buttons">
        <input type="button" class="button long2 ok" value="确定" />
        <input type="button" class="button long2 normal" value="取消" />
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/core.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.dialog.js"></script>
<script type="text/javascript" src="/Public/Admin/js/index.js"></script>
<script type="text/javascript">
//用jQuery里的ajax 技术不刷新更新未读消息条数
//3秒钟调用用一次ajax请求
function getMsgCount(){
    $.get("<?php echo U('Email/getMsgCount');?>",function(data){
        //得到返回值data 去更新原来的未读消息值
        $('.msg-num').html(data);
    });
}
//框架加载完就启动反复性定时器
$(function(){
  setInterval('getMsgCount()',3000);
});
  
</script>
</html>