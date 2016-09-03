<?php
namespace app\ctrl;
use core\lib\controller;
use app\model\userModel;
use core\lib\library\session;
/**
* 前台登录功能
*/
class loginCtrl extends authorCtrl{
	
	public function login(){
		if(IS_AJAX){
			$user = new userModel();
			$info = $user->getUserById(I('Phone'));
			if($info['password'] == md5(I("Pwd"))){
				$session = new session();
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
}
?>