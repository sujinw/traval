<?php
namespace app\ctrl;
use core\lib;
use core\lib\library\session;
class indexCtrl extends lib\controller{
    public function index(){
        echo I('get.2');
        dump("aaaa");
    }
    public function test(){
    	dump("test");
    }
} 