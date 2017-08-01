<?php
return array(
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'wx',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    'DB_PREFIX'  => 'wx_',   // 数据表前缀
    'APPID'=>'wxc54f71c6085fa836',
    'SECRET'=>'53f6a51a6a32216ef4add8a1c3a742bc',
    'TMPL_PARSE_STRING' => array(
        '__IMG__' => '/Public/Home/images', //增加新的JS类库路径替换规则
        '__CSS__'=> '/Public/Home/css',
        '__JS__'=> '/Public/Home/js',
        '__img__'=> '/Public/Home/img'
    ),
    'URL_HTML_SUFFIX'=>''
);
