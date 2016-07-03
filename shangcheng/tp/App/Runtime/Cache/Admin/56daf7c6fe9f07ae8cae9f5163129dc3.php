<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
<title>Cooker</title>
<style type='text/css'>
	select {
		background: rgba(0, 0, 0, 0) url("../images/inputbg.png") repeat-x scroll 0 0;
	    border: 1px solid #c5d6e0;
	    height: 28px;
	    outline: medium none;
	    padding: 0 8px;
	    width: 240px;
	}
	.main p input {
		float:none;
	}
</style>
</head>

<body>
<div class="title"><h2>信息修改</h2></div>
<form action="/index.php/Admin/Buser/editOk" method="post">
<div class="main">
	<p class="short-input ue-clear">
    	<label>用户名：</label>
        <input name="username" type="text" placeholder="用户名" value="<?php echo ($data["username"]); ?>"/>
         <input type="hidden" name="id" value='<?php echo ($data["id"]); ?>' placeholder="部门序号" />
    </p>
	<p class="short-input ue-clear">
    	<label>密码：</label>
        <input name="password" type="password" placeholder="密码为空 不修改密码"  />
        <input type="hidden" name="oldpassword" value='<?php echo ($data["password"]); ?>'  />
    </p>
	<p class="short-input ue-clear">
    	<label>联系电话：</label>
        <input type="text" name="tel" placeholder="联系电话" value="<?php echo ($data["tel"]); ?>" />
    </p>
	<p class="short-input ue-clear">
    	<label>邮箱：</label>
        <input type="text" name="email" placeholder="电子邮箱" value="<?php echo ($data["email"]); ?>"/>
    </p>
    <p class="short-input ue-clear">
        <label>权限分配：</label>
        <input type="text" name="role_id" placeholder="分配权限" value="<?php echo ($data["role_id"]); ?>"/>
    </p>
</div>
<div class="btn ue-clear">
	<a href="javascript:;" class="confirm" id='btnSubmit'>确定</a>
    <a href="javascript:;" class="clear" id='btnReset'>清空内容</a>
</div>
</form>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.pagination.js"></script>
<script type="text/javascript">
$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});
showRemind('input[type=text], textarea','placeholder');
//定义页面的载入事件
$(function(){
	$('#btnSubmit').on('click',function(){
		$('form').submit();//提交表单
	});
	//给清空按钮定义点击事件
	$('#btnReset').on('click',function(){
		//事件处理复位
		$('form')[0].reset();
	});
});
</script>
</html>