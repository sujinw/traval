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
define('M', 'admin');
define('DEBUG', true);

define("ROOT_PATH",BASEDIR);
$path = 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$path = str_replace('\\', '/', $path);
define('__APP__',$path);
define("__ROOT__",dirname(__APP__));

//静态资源
define('__STATIC__',dirname(__APP__).'/'.M.'/views/static');		
define('__VIEWS__',dirname(__APP__).'/'.M.'/views');

$_SERVER['REQUEST_METHOD'] == "POST" ? define("IS_POST", true) : define("IS_POST", false);
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
	define("IS_AJAX", true);
}else{
	define("IS_AJAX", false);
}		
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