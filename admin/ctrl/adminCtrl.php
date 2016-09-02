<?php
namespace admin\ctrl;

/**
* 后台网站配置模块
*/
class adminCtrl extends authorCtrl{
	
	public function index(){

		$this->display("admin-index.html");
	}
}

?>