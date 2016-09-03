<?php
namespace admin\ctrl;
use admin\model\userModel;
use core\lib\library\upload;
use core\lib;

/**
* 初始化控制器
*/
class userCtrl extends authorCtrl{
	
	function index(){
		$showrow = 2; //一页显示的行数

		//当前的页,还应该处理非数字的情况
		$curpage = isset($_GET['page']) ? $_GET['page']  : 1 ; 

		$url = "?page={page}"; //分页地址，如果有检索条件 ="?page={page}&q=".$_GET['q']

		$user = new userModel();
		$total = $user->countTotal(); //记录总条数
		if (!isset($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow)){
			//当前页数大于最后页数，取最后一页
		    $curpage = ceil($total_rows / $showrow); 
		}
		$userData = $user->listUserByPage($curpage,$showrow,$url);
		if($userData){
			$this->assign("userData",$userData);
			$this->assign("users",$userData['lists']);
		};
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
     		$userId = $userModel->addUser($data);
     		if($userId){
     			$this->success("会员添加成功！",__APP__."/user/index");
     		}
		}else{

			$this->display('user-add.html');
		}
	}
	/**
	 * [editUser 编辑会员]
	 * @return   [type]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T11:47:23+0800
	 */
	public function editUser(){
		$user = new userModel();
		$userInfo = $user->selectUserById(I('get.id'));
		if($userInfo){
			$this->assign("user",$userInfo);
		}
		$this->display("user-edit.html");
	}

	public function del(){
		if(IS_AJAX){
			$id = I("id");
			$user = new userModel();
			if($user->delUserById($id)){
				$this->json("删除成功",20001,"删除成功！");
			}else{
				$this->json("删除失败",40001,"删除失败！");
			}
		}
	}
}