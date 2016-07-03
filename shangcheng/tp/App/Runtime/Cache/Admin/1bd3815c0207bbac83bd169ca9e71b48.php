<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/Public/Admin/css/WdatePicker.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>信息管理</h2></div>
<div class="table-operate ue-clear">
	<a href="<?php echo U('Dept/add');?>" class="add">添加</a>
    <a href="javascript:;" id='btndel' class="del">删除</a>
    <a href="javascript:;" id='btnedit' class="edit">编辑</a>
</div>
<div class="table-box">
	<table>
    	<thead> 
        	<tr>
            	<th class="num">序号</th>
                <th class="name">部门</th>
                <th class="process">所属部门</th>
                <th class="node">排序</th>
                <th class="time">备注</th>
                <th class="operate">操作</th>
            </tr>    
        </thead>
        <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            	<td class="num"><?php echo ($vo["id"]); ?></td>
                <td class="name"><?php echo (str_repeat("&emsp;",$vo["level"]*2)); echo ($vo["name"]); ?></td>
                <td class="process"><?php if($vo["pid"] == 0): ?>顶级部门<?php endif; ?></td>
                <td class="node"><?php echo ($vo["sort"]); ?></td>
                <td class="time"><?php echo ($vo["remark"]); ?></td>
                <td class="operate">
                    <input type="checkbox" value="<?php echo ($vo["id"]); ?>"></input>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
        </tbody>
    </table>
</div>
<div class="pagination ue-clear"></div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
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


$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');
//jquery实现编辑和删除功能
//定义页面的载入事件 相当于window.onload = function(){}
$(function(){
    //给编辑按钮添加绑定事件，使用on方法进行绑定
    $('#btnedit').on('click',function(){
         //指定事件处理程序
         var id = $(':checkbox:checked').val();//表示获取第一个被选中的复选框的值
         window.location.href = '/index.php/Admin/Dept/edit/id/'+id;//跳转到编辑页面
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
            window.location.href = '/index.php/Admin/Dept/del/id/' + id;
    }); 
}); 
</script>
</html>