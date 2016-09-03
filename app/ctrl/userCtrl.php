<?php
namespace app\ctrl;
use core\lib\controller;
use app\model\userModel;
/**
* 前台登录功能
*/
class userCtrl extends authorCtrl{
	
	public function index(){

		$this->display("user-index.html");
	}
}
?>