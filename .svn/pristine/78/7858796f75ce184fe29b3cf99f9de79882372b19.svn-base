<?php
/*
$allow_origin = array(
    'http://turtletl.com',
    'http://www.turtletl.com',
);

$origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : '';
if(in_array($origin, $allow_origin)){
    header('Access-Control-Allow-Origin:'.$origin);
    header('Access-Control-Allow-Headers:x-requested-with,content-type');
};*/
/*
防止其他域名绑定
*/
$allow_host = array(
    'turtletl.com',
    'www.turtletl.com',
);
$http_host = $_SERVER['HTTP_HOST'];
if (!in_array($http_host, $allow_host)) {
    Header('Location:http://turtletl.com/index/error');
}
if ($http_host === $allow_host[1]) {
    Header('Location:http://turtletl.com');
	
}
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers:x-requested-with,content-type');

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
