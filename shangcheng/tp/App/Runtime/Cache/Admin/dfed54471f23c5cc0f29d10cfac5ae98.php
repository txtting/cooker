<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
<title>美食吧</title>
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
<div class="title"><h2>修改分类</h2></div>
<form action="/index.php/Admin/Category/editOk" method="post">
<div class="main">
    <p class="short-input ue-clear">
        <label>分类名称：</label>
        <input type="text" name="name" placeholder="分类名称"  value="<?php echo ($data["name"]); ?>"/>
        <input type="hidden" name="id"   value="<?php echo ($data["id"]); ?>"/>
    </p>
    <div class="short-input select ue-clear">
        <label>所属分类：</label>
        <div class="select-wrap">
        	<select name="pid">
                <option value="0" <?php if($data["pid"] == 0): ?>selected='selected'<?php endif; ?> >顶级分类</option>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($data["pid"] == $vo['id']): ?>selected='selected'<?php endif; ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
	    </div>
    </div>
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