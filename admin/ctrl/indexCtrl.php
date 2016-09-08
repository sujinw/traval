<?php
namespace admin\ctrl;

use core\lib;
use core\lib\library\session;

/**
* 初始化控制器
*/
class indexCtrl extends validateRbacCtrl{
	
	function index(){
		// dump($_SESSION);
		$this->display('admin-index.html');
	}
}