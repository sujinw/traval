<?php
namespace app\ctrl;
use core\lib\controller;
use app\model\userModel;
/**
* 前台登录功能
*/
class loginCtrl extends authorCtrl{
	
	public function login(){
		if(IS_AJAX){
			$user = new userModel();
			$info = $user->getUserById(I('Phone'));
			if($info['password'] == md5(I("Pwd"))){
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