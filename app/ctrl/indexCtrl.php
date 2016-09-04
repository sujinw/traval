<?php
namespace app\ctrl;
use core\lib;
use core\lib\library\session;
class indexCtrl extends authorCtrl{
    public function index(){
    	
    	$this->display("index.html");
    }
} 