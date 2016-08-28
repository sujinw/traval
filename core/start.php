<?php
/*
 * 启动类
 * */
namespace core;

use core\lib\log;

class start
{
    public static $classMap = array();

    static public function run()
    {
        //加载日志
        log::init();

        //路由获取
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;

        //加载控制器和方法，并写入访问日志
        $ctrlFile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';
        $ctrlName = '\\' . M . '\ctrl\\' . $ctrlClass . 'Ctrl';
        if (is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlName;
            $ctrl->$action();
            log::log('ctrl :' . $ctrlClass . ' action :' . $action);
        } else {
            throw new \Exception('找不到控制器' . $ctrlClass);
        }
    }

    static public function load($class)
    {
        //加载类库
        if (isset($classMap['$class'])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = BASEDIR . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}