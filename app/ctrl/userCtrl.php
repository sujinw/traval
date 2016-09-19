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
			$user = new userModel();
			$data = $user->getOutUserBy("*",array('is_display'=>1));
			//dump($data);
			$this->assign("data",$data);
			$this->assign('uid',$uid);
			$this->display('outUserinfo.html');

	}
	// 添加出行人员
	public function outUserAdd(){
		$uid = I('id');
		if(IS_POST){
			// dump(I());echo (int)I('Phone');die;
			$data = array(
				'uid' => (int)I('uid'),
				'name' => I('Name'),
				'mobile' => I('Phone'),
				'sex' => (int)I('SEX'),
				'AgeArea' => (int)I('AgeArea'),
				'id_type' => (int)I('id_type'),
				'idNum' => I('idNum'),
				'create_time'=>(int)time()
			);
			$user = new userModel();
			if($res = $user->addOutUser($data)){
				$this->tips("出行人信息添加成功！","/user/userOut/id/".$data['uid']);
			}else{
					$this->tips("出行人信息添加失败！","/user/outUserAdd/id/".$data['uid']);
			}

		}else{
			$this->assign('uid',$uid);
			$this->display('addUserOutinfo.html');
		}
	}

	//出行人员编辑
	public function editOutUser(){
		$id = I('Id');

		$user = new userModel();
		if(IS_POST){
			$data = array(
				'uid' => (int)I('uid'),
				'name' => I('Name'),
				'mobile' => I('Phone'),
				'sex' => (int)I('SEX'),
				'AgeArea' => (int)I('AgeArea'),
				'id_type' => (int)I('id_type'),
				'idNum' => I('idNum'),
				'create_time'=>(int)time()
			);
			//dump(I());die;
			$user = new userModel();
			if($res = $user->editOutUser($data,array('id'=>(int)$id))){
				$this->tips("出行人信息修改成功！","/user/userOut/id/".$data['uid']);
			}else{
					$this->tips("出行人信息修改失败！","/user/editOutUser/id/".$data['uid']);
			}
		}else{
			$info = $user->getOutUserBy('*',array('id'=>$id))[0];
			$this->assign("info",$info);
			$this->display('editUserOutinfo.html');
		}
	}

	//删除出行人员
	public function delUserOut(){
		$id = I('Id');
		if(IS_AJAX){
			$user = new userModel();
			$res = $user->delOutUser(array('id'=>$id));
			if($res){
				$this->json("ok",20001,"删除成功！");
			}else{
				$this->json("error",40001,"删除失败!");
			}
		}
	}
}
?>
