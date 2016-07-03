<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/Public/Admin/css/WdatePicker.css" />
<title>美食吧</title>
<style type='text/css'>
    table tr .id{ width:43px; text-align: center;}
    table tr .name{ width:120px; padding-left:5px;}
    table tr .thumb{ width:93px; padding-left:5px;}
    table tr .price{ width:70px; padding-left:5px;}
    table tr .addtime{ width:150px; padding-left:5px;}
    table tr .about{ width:250px; padding-left:5px;}
    table tr .category_id{ width:60px; padding-left:5px;}
    table tr .trash{ width:70px; padding-left:5px;}
    table tr .is_hot{width:50px;padding-left:5px;}
    table tr .is_tese{width:50px;padding-left:5px;}
    table tr .operate{padding-left:30px;}
</style>
</head>
<body>
<div class="title"><h2>美食信息管理</h2></div>
<div class="table-operate ue-clear">
    <a href="<?php echo U('add');?>"  class="add">添加</a>
    <a href="javascript:;" id='btndel' class="del">删除</a>
    <a href="javascript:;" id='btnedit' class="edit">编辑</a>
    <a href="<?php echo U('chart');?>" class="count">统计</a>
</div>
    <div class="table-box">
        <table>
            <thead>
                <tr>
                    <th class="id">序号</th>
                    <th class="name">美食名称</th>
                    <th class="thumb">缩略图</th>
                    <th class="price">价格</th>
                    <th class="addtime">添加时间</th>
                    <th class="about">描述</th>
                    <th class="category_id">所属分类</th>
                    <th class="trash">是否下架</th>
                    <th class="is_hot">热销</th>
                    <th class="is_tese">特色</th>
                    <th class="operate">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="id"><?php echo ($vo["id"]); ?></td>
                    <td class="name"><?php echo ($vo["name"]); ?></td>
                    <td class="thumb"><?php if($vo['thumb'] != ''): ?><a href ='javascript:;' class="view" data=<?php echo ($vo["id"]); ?> data-title=<?php echo ($vo["name"]); ?>><img src="<?php echo ($vo["thumb"]); ?>"/></a><?php endif; ?></td>
                    <td class="price">￥ <?php echo ($vo["price"]); ?></td>
                    <td class="addtime"><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></td>
                    <td class="about"><?php echo (msubstr(html_entity_decode($vo["about"]),0,20)); ?><a href ='javascript:;' class="yview" data="<?php echo ($vo["id"]); ?>" data-title="<?php echo ($vo["name"]); ?>">【查看】</a></td>
                    <td class="category_id"><?php echo ($vo["category_id"]); ?></td>
                    <td class="trash"><?php if($vo["trash"] == 1): ?><font color="red">停售中..</font><?php else: ?><font color="green">销售中..</font><?php endif; ?></td>
                    <td class="is_hot"><?php echo ($vo["is_hot"]); ?></td>
                    <td class="is_hot"><?php if($vo["is_tese"] == 1): ?><font color="red">是</font><?php else: ?><font color="green">否</font><?php endif; ?></td>
                    <td class="operate">
                        <input type="checkbox" value="<?php echo ($vo["id"]); ?>"></input>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
<div class="pagination ue-clear">
    <div class="pagin-list">
        <?php echo ($showPage); ?>
    </div>
    <div class="pxofy">显示第<?php echo ($start+1); ?> 条到 
    <?php if($start+1 == $count): echo ($count); ?>
    <?php else: ?>
        <?php echo ($startrow); endif; ?> 条记录，总共<?php echo ($count); ?>条记录</div>
</div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script src="/Public/Admin/js/layer/layer.js"></script>
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
         window.location.href = '/index.php/Admin/Food/edit/id/'+id;//跳转到编辑页面
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
            window.location.href = '/index.php/Admin/Food/del/id/' + id;
    }); 
    $('.view').on('click',function(){
        var kID = $(this).attr('data');
        //alert(kID);
        var kTitle = $(this).attr('data-title');
        //alert(kTitle);die;
        layer.open({
            type: 2,
            title: kTitle,
            shadeClose: true,
            shade: 0,
            area: ['550px', '90%'],
            content:'/index.php/Admin/Food/bigimage/id/'+kID
         });
    });
    $('.yview').on('click',function(){
        var kID = $(this).attr('data');
        //alert(kID);
        var kTitle = $(this).attr('data-title');
        //alert(kTitle);die;
        layer.open({
            type: 2,
            title: kTitle,
            shadeClose: true,
            shade: 0,
            area: ['550px', '90%'],
            content:'/index.php/Admin/Food/yulancontent/id/'+kID
         });
    });
}); 
</script>
</html>