<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加权限 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="catelist.html">权限分类</a></span>
<span class="action-span1"><a href="#">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加分类 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form action="/Admin-Privilege-add" method="post" name="theForm" enctype="multipart/form-data">
  <table width="100%" id="general-table">
      <tr>
        <td class="label">权限名称:</td>
        <td>
          <input type='text' name='priv_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
       <tr>
        <td class="label">上级权限:</td>
        <td>
           <select name="parent_id">
              <option value="0">顶级权限</option>
              <?php if(is_array($privdata)): $i = 0; $__LIST__ = $privdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo (str_repeat('--',$v["lev"])); echo ($v["priv_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
           </select>
        </td>
      </tr>
      <tr>
        <td class="label">对应模块名称:</td>
        <td>
          <input type='text' name='module_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
       <tr>
        <td class="label">对应控制器名称:</td>
        <td>
          <input type='text' name='controller_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
        </td>
      </tr>
       <tr>
        <td class="label">对应方法名称:</td>
        <td>
          <input type='text' name='action_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
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