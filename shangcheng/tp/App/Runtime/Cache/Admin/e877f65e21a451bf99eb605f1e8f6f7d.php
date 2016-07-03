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
<div class="title"><h2>修改美食信息</h2></div>
<form action="/index.php/Admin/Food/editOk" method="post" enctype="multipart/form-data">
<div class="main">
	<p class="short-input ue-clear">
    	<label>美食名称：</label>
        <input name="name" type="text" value="<?php echo ($data["name"]); ?>" placeholder="美食名称" />
        <input name="id" type="hidden" value="<?php echo ($data["id"]); ?>" />
    </p>
	<p class="short-input ue-clear">
    	<label>缩略图：</label>
        <input name="thumb" type="file" value="<?php echo ($data["thumb"]); ?>"/>
    </p>
    <p class="short-input ue-clear">
    	<label>价格：</label>
        <input name="price" type="text" value="<?php echo ($data["price"]); ?>" placeholder="价格" />
    </p>
    <p class="short-input ue-clear">
    	<label>描述：</label>
        <textarea name="about" style="font-family:Microsoft YaHei !important; font-size:14px;" placeholder="请输入内容..." ><?php echo ($data["about"]); ?></textarea>
    </p>
    <div class="short-input select ue-clear">
        <label>所属分类：</label>
        <div class="select-wrap">
            <select name="category_id">
        		<option value="0">请选择</option>
				<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($data['category_id'] == $vo['id']): ?>selected='selected'<?php endif; ?> ><?php echo (str_repeat("&emsp;",$vo["level"]*2)); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        	</select>
        </div>
    </div>
    <p class="short-input ue-clear">
    	<label>是否推荐：</label>
    	<input name="is_hot" type="radio" value="是" <?php if($data["is_hot"] == '是'): ?>checked='checked'<?php endif; ?> />是
		<input name="is_hot" type="radio" value="否" <?php if($data["is_hot"] == '否'): ?>checked='checked'<?php endif; ?> />否
    </p>
    <p class="short-input ue-clear">
    	<label>是否下架：</label>
        <input name="trash" type="radio" value="是" <?php if($data["trash"] == '1'): ?>checked='checked'<?php endif; ?> />是
		<input name="trash" type="radio" value="否" <?php if($data["trash"] == '0'): ?>checked='checked'<?php endif; ?> />否
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
<script type="text/javascript">
$(function(){
	$('#btnSubmit').on('click',function(){
		$('form').submit();
	});
	
	$('#btnReset').on('click',function(){
		$('form')[0].reset();
	});
});	

$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});
showRemind('input[type=text], textarea','placeholder');
</script>
</html>