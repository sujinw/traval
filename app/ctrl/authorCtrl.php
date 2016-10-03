<?php
namespace app\ctrl;

use core\lib;
use core\lib\library\session;

/**
* 初始化控制器
*/
class authorCtrl extends lib\controller{
	
	function __construct(){
		$referurl = $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
		$_SESSION ['referurl'] = $referurl;
		$this->assign("static",__STATIC__);
		$this->assign("views",__VIEWS__);
		$this->assign("APP",__APP__);
		
	}

	public function tips($mesages,$url){
		$this->assign("messages",$mesages);
		$this->assign("url",$url);
		$this->display("tips.html");
		exit;
	}
}
?>