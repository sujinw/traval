<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

define('BASEDIR', realpath('./'));
define('CORE', BASEDIR . '/core');
define('APP', BASEDIR . '/admin');
define('M', 'app');
define('DEBUG', true);

$path = 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$path = str_replace('\\', '/', $path);
define('__APP__',$path);
define('__STATIC__',dirname(__APP__).'/'.APP.'/views/static');			
include "vendor/autoload.php";

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE . '/common/function.php';
include CORE . '/start.php';
spl_autoload_register('\core\start::load');

\core\start::run();