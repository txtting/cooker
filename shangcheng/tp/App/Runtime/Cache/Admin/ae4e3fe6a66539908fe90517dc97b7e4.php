<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加分类 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="catelist.html">商品分类</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加分类 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="/Admin-Role-add" method="post" name="theForm" enctype="multipart/form-data">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">角色名称:</td>
        <td>
          <input type='text' name='role_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
      <tr>
        <td class="label">权限列表:</td>
        <td>
        <?php if(is_array($privdata)): $i = 0; $__LIST__ = $privdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?><input type="checkbox" name="priv_id[]" value="<?php echo ($va["id"]); ?>"><?php echo (str_repeat('--',$va["lev"])); echo ($va["priv_name"]); ?></input><br/><?php endforeach; endif; else: echo "" ;endif; ?> 
          <font color="red">*请选择角色权限</font>

        </td>
      </tr>
      <tr>
        <td class="label"></td>
        <td>
        <input type="submit" value=" 确定 " />
        <input type="reset" value=" 重置 " />
        </td>
      </tr>
      </table>
  </form>
</div>

<div id="footer">
共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

</body>
</html>