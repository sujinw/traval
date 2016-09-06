<?php
namespace admin\ctrl;
use core\lib;
use core\lib\library\session;
use core\lib\library\code;
/**
* 登录控制器
*/
class loginCtrl extends authorCtrl{

	public function index(){

		$this->display("login.html");
	}







	/**
	 * [code 生成二维码]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T20:47:07+0800
	 * @return   [type]                   [image]
	 */
	public function getcode(){
		$code = new code();
		return $code->show("admin_code");
	}

	public function check(){
		$code = I('code');
		$session = new session();
		//$_SESSION['']
		// dump($code);
		// print_r($_SESSION);
		if(strtoupper($code) == strtoupper($session->get('admin_code'))){
			return $this->json("ok",20001,"验证码验证成功");
		}else{
			return $this->json("error",40001,"验证码验证失败");
		}
	}

}
?>