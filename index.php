<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

define('BASEDIR', realpath('./'));
define('CORE', BASEDIR . '/core');
define('APP', BASEDIR . '/app');
define('M', 'app');
define('DEBUG', true);

//var_dump($_SERVER);

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