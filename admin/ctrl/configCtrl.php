<?php
namespace admin\ctrl;
/**
* 网站配置
*/
class configCtrl extends authorCtrl{
	
	public function index(){
		$this->display('config-index.html');
	}
}
?>