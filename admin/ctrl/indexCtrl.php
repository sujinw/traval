<?php
namespace app\ctrl;
use core\lib;
use core\lib\library\session;
class indexCtrl extends app\ctrl\author{
    public function index(){
    	//var_dump($_SERVER);
    	dump(__APP__);
        $this->display('index.html');
    }
}