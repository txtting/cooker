<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo U('add');?>">添加管理员</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 管理员列表 </span>
<div style="clear:both"></div>
</h1>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

<table width="100%" cellspacing="1" cellpadding="2" id="list-table">
  <tr>
    <th>编号</th>
    <th>管理员名称</th>
    <th>管理员权限</th>
    <th>操作</th>
  </tr>
  <?php if(is_array($admindata)): $i = 0; $__LIST__ = $admindata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><tr align="center" class="0" id="0_1" id = 'tr_1'>
      <td align="left" class="first-cell" style = 'padding-left="0"'>
              <img src="/Public/Admin/images/menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:0em" />

              <span><a href="#" ><?php echo ($va["id"]); ?></a></span>
          </td>
      <td width="20%"><?php echo ($va["admin_name"]); ?></td>
      <td width="40%"><?php echo ($va["rolenames"]); ?></td>
      <td width="24%" align="center">
        <a href="<?php echo U('update',array('id'=>$va['id']));?>">编辑</a> |
        <a href="<?php echo U('delete',array('id'=>$va['id']));?>" title="移除">移除</a>
      </td>
   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 </table>
</div>
</form>

<div id="footer">
共执行 1 个查询，用时 0.015927 秒，Gzip 已禁用，内存占用 1.999 MB<br />

版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利
。</div>

</body>
</html>