<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/Public/Admin/css/WdatePicker.css" />
<title>美食吧</title>
<style type='text/css'>
	table tr .id{ width:50px; text-align: center;}
	table tr .name{ width:118px; padding-left:20px;}
	table tr .pid{ width:160px; padding-left:20px;}
	table tr .operate{ width:93px; padding-left:13px;}
</style>
</head>
<body>
<div class="title"><h2>分类管理</h2></div>
<div class="table-operate ue-clear">
	<a href="<?php echo U('add');?>"  class="add">添加</a>
    <a href="javascript:;" id='btndel' class="del">删除</a>
    <a href="javascript:;" id='btnedit' class="edit">编辑</a>
</div>
	<div class="table-box">
		<table>
	    	<thead>
	        	<tr>
	            	<th class="id">序号</th>
	                <th class="name">分类</th>
					<th class="pid">所属分类</th>
					<th class="operate">操作</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	            	<td class="id"><?php echo ($vo["id"]); ?></td>
	                <td class="name"><?php echo (str_repeat("&emsp;",$vo["level"]*2)); echo ($vo["name"]); ?></td>
	                <td class="pid"><?php if($vo["pid"] == 0): ?>顶级分类<?php endif; ?></td>
	                <td class="operate">
	               	 	<input type="checkbox" value="<?php echo ($vo["id"]); ?>"></input>
	                </td>
	            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	        </tbody>
	    </table>
	</div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<!-- <script type="text/javascript" src="/Public/Admin/js/jquery.pagination.js"></script> -->
<script type="text/javascript">
$(".select-title").on("click",function(){
	$(".select-list").hide();
	$(this).siblings($(".select-list")).show();
	return false;
})
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
})

/*$('.pagination').pagination(100,{
	callback: function(page){
		alert(page);	
	},
	display_msg: true,
	setPageNo: true
});*/

$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');
//jquery实现编辑和删除功能
//定义页面的载入事件 相当于window.onload = function(){}
$(function(){
    //给编辑按钮添加绑定事件，使用on方法进行绑定
    $('#btnedit').on('click',function(){
         //指定事件处理程序
         var id = $(':checkbox:checked').val();//表示获取第一个被选中的复选框的值
         window.location.href = '/index.php/Admin/Category/edit/id/'+id;//跳转到编辑页面
    });
    //给删除按钮添加点击事件
    //获取选中的值，可以同时删除多个
    $('#btndel').on('click',function(){
        var ids = $(':checkbox:checked');
        var id = '';
        for(var i = 0;i < ids.length;i++){
            id = id + ids[i].value + ',';
        }
            id = id.substring(0,id.length-1);
            window.location.href = '/index.php/Admin/Category/del/id/' + id;
    }); 
}); 
</script>
</html>