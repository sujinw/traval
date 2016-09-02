<?php
namespace admin\ctrl;

use core\lib;
use core\lib\library\session;

/**
* 初始化控制器
*/
class indexCtrl extends authorCtrl{
	
	function index(){
		$this->display('index.html');
	}
}