<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'     =>  array('Home','Admin'),
	'TMPL_DENY_PHP'         =>  false,
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'bishop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'it_', 
    //开启缓存文件 
    //'DB_FIELDS_CACHE'       =>  true, 
    //字段映射的反映射
    //'READ_DATA_MAP         '=>  true,//主配置文件中没有
    //开启跟踪信息
    //'SHOW_PAGE_TRACE'      =>   true ,//主配置文件中没有
    //加载指定的自定义文件
    'LOAD_EXT_FILE'        =>   'test', //加载test.php 文件
    //用户权限控制
    'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'URL_PATHINFO_DEPR'     =>  '-',    // PATHINFO模式下，各参数之间的分割符号
    'UPLOAD_ROOT_PATH' => './Public/uploads/',//上传文件保存的根路径
    'UOLOAD_MAX_FILESIZE' => '3M',//上传文件的大小
    'UPLOAD_ALLOW_EXT'  => array('jpeg','jpg','gif','png','bmp'),


    
);