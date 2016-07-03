<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品列表 </title>
<meta name="robots" c>
<meta http-equiv="Content-Type" c />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Js/jquery.js"></script>
<script type="text/javascript">
$(function(){
  $('select[name=type_id]').change(function(){
      //alert('111');die;
      $('form[name=searchForm]').submit();
  });

});
</script>
<style type="text/css">
.prev {
        border:1px solid red;
        margin:2px;
        padding:5px;
        background:green
}
.next {
        border:1px solid red;
        margin:2px;
        padding:5px;
        background:green
}
.num {
        border:1px solid blue;
        margin:2px;
        padding:5px;
        background:blue;
}
.current {
        border:1px solid gray;
        margin:2px;
        padding:5px;
        background:gray;
}
</style>
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('add');?>">添加新属性</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">

  <form action="/Admin-Attribute-lst" method="get" name="searchForm">
    <img src="/Public/Admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
      
    <select name="type_id">
      <option value="0">所有分类</option>
      <?php if(is_array($typedata)): $i = 0; $__LIST__ = $typedata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ty): $mod = ($i % 2 );++$i;?><option value="<?php echo ($ty['id']); ?>" <?php if($ty['id'] == $type_id): ?>selected='selected' <?php else: endif; ?> ><?php echo ($ty["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>

  </form>
</div>
<form method="post" action="" name="listForm" >

  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" />
      <a href="#">编号</a><img src="/Public/Admin/images/sort_desc.gif"/>    </th>

    <th><a href="#">属性名称</a></th>
    <th><a href="#">商品类型</a></th>
    <th><a href="#">属性类型</a></th>
    <th><a href="#">属性值的录入方式</a></th>
    <th><a href="#">可选值列表</a></th>
    <th>操作</th>
  </tr>
      <?php if(is_array($attrdata)): $i = 0; $__LIST__ = $attrdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><tr>
          <td><input type="checkbox" name="checkboxes[]" value="32" /><?php echo ($va["id"]); ?></td>

          <td align="center" class="first-cell" style=""><?php echo ($va["attr_name"]); ?></td>
          <td align="center"><?php echo ($va["type_name"]); ?></td>
          <td align="center"><?php if($va["attr_type"] == 0): ?>唯一属性<?php else: ?>单选属性<?php endif; ?></td>
          <td align="center"><?php if($va["attr_input_type"] == 0): ?>手工输入<?php else: ?>列表选择<?php endif; ?></td>
          <td align="center"><?php echo ($va["attr_value"]); ?></td>
          <td align="center">
            <a href="#" target="_blank" title="查看"><img src="/Public/Admin/images/icon_view.gif" width="16" height="16" border="0" /></a>
            <a href="#" title="编辑"><img src="/Public/Admin/images/icon_edit.gif" width="16" height="16" border="0" /></a>
            <a href="#" title="复制"><img src="/Public/Admin/images/icon_copy.gif" width="16" height="16" border="0" /></a>
            <a href="#"  title="回收站"><img src="/Public/Admin/images/icon_trash.gif" width="16" height="16" border="0" /></a>
            <a href="#" title="货品列表"><img src="/Public/Admin/images/icon_docs.gif" width="16" height="16" border="0" /></a>          
          </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
        <?php echo ($show); ?>
    </td>
  </tr>

</table>

</div>
</form>

<div id="footer">
共执行 7 个查询，用时 0.112141 秒，Gzip 已禁用，内存占用 3.085 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>