<?php
namespace app\ctrl;
use admin\model;
use core\lib\controller;
use app\model\userModel;
use core\lib\library\session;
use core\lib\library\code;
/**
* 前台登录功能
*/
class loginCtrl extends authorCtrl{
	/**
	 * [login 前台登录]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T19:24:12+0800
	 * @return   [type]                   [description]
	 */
	public function login(){
		if(IS_AJAX){
			$user = new userModel();
			$session = new session();
			$info = $user->getUserById(I('Phone'));
			$info['backUrl'] = $session->get('referurl');
			if($info['password'] == md5(I("Pwd"))){
				$session->set('traval_userName',$info['username']);
				$session->set('traval_userId',$info['id']);

				$this->json($info,20001,"登录成功！");
			}else{
				$this->json("error",40001,"登录失败！");
			}
		}else{
			$this->display("login.html");
		}
	}

	/**
	 * [register 前台注册]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T19:24:06+0800
	 * @return   [type]                   [description]
	 */
	public function register(){
		if(IS_AJAX){
			$data = array(
				'username'		=>	I('Phone'),
				'password'		=>	md5(I('Pwd')),
			);
			$user = new \admin\model\userModel();
			if($userData = $user->addUser($data)){
				$this->json("ok",20001,"注册成功");
			}else{
				$this->json("error",40001,"注册失败");
			}
			return;
		}else{
			$this->display("register.html");
		}
	}

	/**
	 * [code 生成二维码]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T20:47:07+0800
	 * @return   [type]                   [image]
	 */
	public function code(){
		$code = new code();
		return $code->show("register_code");
	}

	public function check(){
		$code = I('code');
		$session = new session();
		//$_SESSION['']
		// dump($code);
		// print_r($_SESSION);
		if(strtoupper($code) == strtoupper($session->get('register_code'))){
			return $this->json("ok",20001,"验证码验证成功");
		}else{
			return $this->json("error",40001,"验证码验证失败");
		}
	}

}
?>
