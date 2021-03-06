<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
<title>移动办公自动化系统</title>
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
<div class="title"><h2>信息登记</h2></div>
<form action="/index.php/Admin/User/editOk" method="post">
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
    	<label>姓名：</label>
        <input name="truename" type="text" placeholder="姓名" value="<?php echo ($data["truename"]); ?>"/>
    </p>
	<p class="short-input ue-clear">
    	<label>昵称：</label>
        <input name="nickname" type="text" placeholder="昵称" value="<?php echo ($data["nickname"]); ?>"/>
    </p>
    <div class="short-input select ue-clear">
    	<label>所属部门：</label>
        <select name="dept_id">
        	<option value="0">请选择</option>
			<?php if(is_array($deptdata)): $i = 0; $__LIST__ = $deptdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($data['dept_id'] == $vo['id']): ?>selected='selected'<?php endif; ?> ><?php echo (str_repeat("&emsp;",$vo["level"]*2)); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
	<p class="short-input ue-clear">
    	<label>性别：</label>
    	<input name="sex" type="radio" value="男" <?php if($data["sex"] == '男'): ?>checked='checked'<?php endif; ?> />男
		<input name="sex" type="radio" value="女" <?php if($data["sex"] == '女'): ?>checked='checked'<?php endif; ?> />女
    </p>
	<p class="short-input ue-clear">
    	<label>生日：</label>
        <input name="birthday" type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" value="<?php echo ($data["birthday"]); ?>" />
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
    <p class="short-input ue-clear">
    	<label>备注：</label>
        <textarea name="remark" style="font-family:Microsoft YaHei !important; font-size:14px;" placeholder="请输入内容" name="remark"><?php echo ($data["remark"]); ?></textarea>
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