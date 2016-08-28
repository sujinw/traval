<?php
/*
 * 路由类
 * 1.隐藏index/php
 * 2.获取url参数部分
 * 3.返回对应控制器和方法
 * */
namespace core\lib;

use core\lib;

class route
{
    public function __construct()
    {
        //路由获取是判定$_SERVER['PATH_INFO']
        if (array_key_exists('PATH_INFO', $_SERVER)) {
            $path = $_SERVER['PATH_INFO'];
            $patharr = explode("/", $path);
            //$_SERVER['PATH_INFO']输出是 '/index/index/'因为分割的关系，我只能从第二个寻找
            if (isset($patharr[1])) {
                $this->ctrl = $patharr[1];
            }
            unset($patharr[1]);
            if (isset($patharr[2])) {
                $this->action = $patharr[2];
                unset($patharr[2]);
            } else {
                $this->action = conf::get('ACTION', 'route');
            }
            //url多余部分转为get
            unset($patharr[0]);
            $count = count($patharr) + 3;
            $i = 3;
            while ($i < $count) {
                if (isset($patharr[$i + 1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
        } else {
            $this->ctrl = conf::get('CTRL', 'route');
            $this->action = conf::get('ACTION', 'route');
        }
    }
}