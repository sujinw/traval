<?php
namespace admin\ctrl;
use core\lib\library\session;
use core\lib\library\Rbac;

/**
* 权限识别控制器
*/
class validateRbacCtrl extends authorCtrl{
	
	function __construct(){
		parent::__construct();
		// dump($_SESSION);die;
		if(!isset($_SESSION['id']) || !isset($_SESSION['username']) || !Rbac::isLogin() ){
			go(__APP__ . '/login/index');
		}
		if(!Rbac::checkAccess()){
			$this->error('对不起没有操作权限，请联系管理员获取0_0',__APP__.'/index/index');
		}
	}
}

?>