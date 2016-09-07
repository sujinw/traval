<?php
namespace admin\ctrl;
use core\lib;
use admin\model\userModel;
use core\lib\library\session;
use core\lib\library\code;
use core\lib\library\Rbac;
/**
* 登录控制器
*/
class loginCtrl extends authorCtrl{

	public function index(){

		$this->display("login.html");
	}

	public function adminLogin(){
		$data = array(
			'username'=>I('traval_username'),
			'password'=>I('traval_password')
		);
		$code = I('code');
		$session = new session();
		$user = new userModel();
		// dump($session->get('admin_code'));exit;
		if($user->validate($data)){
			$this->error("登录失败，请检查用户名或密码！",__APP__."/login/index");
			return false;
		}
		if(strtoupper($code) != strtoupper($session->get('admin_code'))){
			$this->error("验证码错误，请检查验证码！",__APP__."/login/index");
			return false;
		}
		// dump($data);exit;
		Rbac::login($data['username'], md5($data['password']));exit;
		$this->success("登录成功，正在跳转至管理首页",__APP__."/index/index");
		
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