<?php
namespace app\ctrl;
use core\lib\controller;
use app\model\userModel;
use core\lib\library\session;
/**
* 前台登录功能
*/
class userCtrl extends valiCtrl{
	
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
		$userModel = new userModel();
		$user = $userModel->getUserById($_SESSION['traval_userName']);
		$this->assign('user',$user);
		$this->display('userinfo.html');
	}

	/**
	 * [editUserinfo 前台用户信息编辑]
	 * @return   [type]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T13:09:59+0800
	 */
	public function editUserinfo(){
		if(IS_POST){
			/*$data = array(
				"surname"	=>	I('Name'),
				"babayname"	=>	I('BodyName'),
				"babaybirthday"	=>	I('BodyBIrthDay'),
				"phone"		=>	I("Phone"),
				"email"		=>	I('Email'),
				"sex"		=>	I('Sex'),
				"address"	=>	I("Address")
			);*/
			if(I('Name')){
				$data['surname'] = I('Name');
			}
			if(I('BodyName')){
				$data['babayname'] = I('BodyName');
			}
			if(I('BodyBIrthDay')){
				$data['babaybirthday'] = I('BodyBIrthDay');
			}
			if(I('Phone')){
				$data['phone'] = I('Phone');
			}
			if(I('Email')){
				$data['email'] = I('Email');
			}
			if(I('Sex')){
				$data['sex'] = I('Sex');
			}
			if(I("Address")){
				$data['address'] = I("Address");
			}
			$user = new userModel();
			if ($data = $user->setUserInfo(I('username'),$data)) {
				$this->tips("会员信息修改成功，正在为您跳转请稍后...",__APP__."/user/index");
			}else{
				$this->tips("会员信息修改失败，请重新修改...",__APP__."/user/userinfo");
			}
			exit;
		}else{
			exit("no accesss");
		}
	}
	//出行人员信息
	public function userOut(){
	
		
		$this->display('outUserinfo.html');

	}

	public function outUserAdd(){
		
		$this->display('addUserOutinfo.html');
	}
}
?>