<?php
namespace core\lib\drive\log;

use core\lib\conf;

class file
{
    static public $path;

    public function __construct()
    {
        $conf = conf::get('OPTION', 'log');
        self::$path = $conf['path'];
    }

    public function log($message, $file = 'log')
    {
        /*
         * 1.确定文件存储位置
         * 2.写入日志
         * */
        if (!is_dir(self::$path . date('Ymd'))) {
            mkdir(self::$path . date('Ymd'), '0777', true);
        }
        return file_put_contents(self::$path . date('Ymd') . '/' . $file . '.php', date('Y-m-d H:i:s') . json_encode($message). PHP_EOL, FILE_APPEND);
    }
}
