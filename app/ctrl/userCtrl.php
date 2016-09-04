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

	/**
	 * [userinfo 会员信息]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T10:10:11+0800
	 * @return   [type]                   [description]
	 */
	public function userinfo(){

		$this->display('userinfo.html');
	}
}
?>