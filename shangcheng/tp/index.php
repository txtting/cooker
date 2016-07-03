<?php
//设置字符集
header('Content-type:text/html;charset=utf-8');

// 定义应用目录
define('APP_PATH','./App/');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);//开始true 

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单