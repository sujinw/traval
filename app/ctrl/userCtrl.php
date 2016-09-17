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
		$uid = session::get('traval_userId') ? session::get('traval_userId') : "";

		$this->assign("uid",$uid);
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
			$uid = session::get('traval_userId') ? session::get('traval_userId') : "";
			$this->assign('uid',$uid);
			$this->display('outUserinfo.html');

	}
	// 添加出行人员
	public function outUserAdd(){
		$uid = I('id');
		if(IS_POST){
			//dump(I());
			$data = array(
				'uid' => I('uid'),
				'name' => I('Name'),
				'mobile' => I('Phone'),
				'sex' => I('SEX'),
				'AgeArea' => I('AgeArea'),
				'id_type' => I('id_type'),
				'idNum' => I('idNum'),
			);
			$user = new userModel();
			if($res = $user->addOutUser($user)){
				$this->tips("出行人信息添加成功！","/user/userOut/id/".$uid);
			}else{
					$this->tips("出行人信息添加失败！","/user/outUserAdd/id/".$uid);
			}

		}else{
			$this->assign('uid',$uid);
			$this->display('addUserOutinfo.html');
		}
	}
}
?>
