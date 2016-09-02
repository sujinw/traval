<?php
namespace admin\ctrl;
use admin\model\userModel;
use core\lib;
use core\lib\library\upload;

/**
* 初始化控制器
*/
class userCtrl extends authorCtrl{
	
	function index(){
		$this->display('user-index.html');
	}

	/**
	 * [add 添加会员]
	 * @Author   Rukic
	 * @DateTime 2016-09-02T20:54:34+0800
	 */
	public function add(){

		if(IS_POST){
			dump(I());
			dump($_FILES);
			$path = 'Upload/UserImages/'.date("Y/m/d");
			$upload= new Upload($path);
     		$userimg = $upload->upload();
     		$data = array(
	     		"username" => I("post.username"),
				"password" => md5(I("post.password")),
				"nickname" => I("post.nickname"),
				"surname" =>  I("post.surname"),
				"babayname" => I("post.babyname"),
				"babaybirthday" => I("post.babaybirthday"),
				"phone" => I("post.phone"),
				"email" => I("post.email"),
				"address" => I("post.address"),
				"sex" => I("post.sex"),
				"is_display" => I("post.is_display"),
				"create_time" => time(),
				"userimg" => $userimg[0]['path'],
     		);
     		//dump($userimg[0]['path']);die;
     		
     		$userModel = new userModel();
     		$userModel->addUser($data);
		}else{

			$this->display('user-add.html');
		}
	}
}