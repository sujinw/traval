<?php
/**
 * 日志类
 * 1.日志存储方式
 * 2.写日志
 */
namespace core\lib;

use core\lib\conf;

class log
{
    static $class;

    static public function init()
    {
        //确定存储方式
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\' . $drive;
        self::$class = new $class;
    }

    static public function log($name, $file = 'log')
    {
        self::$class->log($name, $file);
    }
}