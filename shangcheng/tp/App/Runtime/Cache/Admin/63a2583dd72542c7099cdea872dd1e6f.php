<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 库存 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Js/jquery.js"></script>
<script type="text/javascript">
$(function(){
   $(":button").click(function(){
        var curr_tr = $(this).parent().parent();
        if($(this).val()=="[+]"){
            var new_tr = curr_tr.clone(true);
            new_tr.find(":button").val('[-]');
            curr_tr.after(new_tr);
        }else{
            curr_tr.remove();
        }
   });
});
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('add');?>">添加分类</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品分类 </span>
<div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
        <?php foreach($list as $v){?>
        <th><?php echo $v[0]['attr_name']?></th>
        <?php }?>
        <th>库存</th>
        <th>操作</th>
      </tr>
      <tr>
      <?php foreach($list as $k=>$v){?>
        <td><select name="attr[<?php echo $k?>][]">
                <option value=''>请选择....</option>
                <?php foreach($v as $v1){?>
                            <option value='<?php echo $v1["id"]?>'><?php echo $v1['attr_value']?></option>
                <?php }?>
        </select></td>
     <?php }?>
      <td><input type="text"  name="goods_number[]" ></input></td>
      <td><input type="button" value="[+]"></input></td>
   </tr>
   <tr>
      <input type="hidden" name="goods_id" value="<?php echo $_GET['id']?>"/>
      <td colspan="<?php echo count($v)?>"></td>
      <td><input type="submit" value="提交"></input></td>
     
   </tr>
 </table>
</div>
</form>

<div id="footer">
共执行 1 个查询，用时 0.015927 秒，Gzip 已禁用，内存占用 1.999 MB<br />

版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利
。</div>

</body>
</html>