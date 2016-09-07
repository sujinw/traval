<?php
namespace admin\ctrl;
use admin\model\userModel;
use admin\model\userleveModel;
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
		$userInfo = $user->selectUserById(I('id'));
		if(IS_POST){

			$path = 'Upload/UserImages/'.date("Y/m/d");
			$upload= new Upload($path);
     		$userimg = $upload->upload();
     		$data = array(
	     		"username" => I("post.username"),
				"password" => md5(I("post.password")),
				"nickname" => I("post.nickname"),
				"surname" =>  I("post.surname"),
				"babayname" => I("post.babayname"),
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
     		$userId = $userModel->updateUser($data,I("id"));
     		// dump($userId);
     		if($userId){
     			if (file_exists(BASEDIR.$userInfo['userimg'])) {
     				unlink(BASEDIR.$userInfo['userimg']);
     			}
     			$this->success("会员修改成功！",__APP__."/user/index");
     		}
		}else{
			
			if($userInfo){
				$this->assign("user",$userInfo);
			}
			$this->display("user-edit.html");
		}
	}

	/**
	 * [del 会员删除动作]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T10:20:32+0800
	 * @return   [type]                   [description]
	 */
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

	/**
	 * [userLeve 会员等级]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T10:21:09+0800
	 * @return   [type]                   [description]
	 */
	public function leve(){
		$showrow = 2; //一页显示的行数

		//当前的页,还应该处理非数字的情况
		$curpage = isset($_GET['page']) ? $_GET['page']  : 1 ; 

		$url = "?page={page}"; //分页地址，如果有检索条件 ="?page={page}&q=".$_GET['q']

		
		$leve = new userLeveModel();
		$total = $leve->countTotal(); //记录总条数
		if (!isset($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow)){
			//当前页数大于最后页数，取最后一页
		    $curpage = ceil($total_rows / $showrow); 
		}
		$leveData = $leve->listLeveByPage($curpage,$showrow,$url);
		if($leveData){
			$this->assign("leves",$leveData);
			$this->assign("leve",$leveData['lists']);
		};
		$this->display('user-leve.html');
	}

	/**
	 * [addleve 添加会员等级]
	 * @return   [type]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T19:39:48+0800
	 */
	public function addleve(){
		if(IS_POST){
			$path = 'Upload/UserLeveImages/'.date("Y/m/d");
			$upload= new Upload($path);
     		$leveimg = $upload->upload();
			$data = array(
				'leve_name'		=>		I('name'),
				'leve_des'		=>		I('levedes'),
				'leve_rid'		=>		I('rid'),
				'is_display'	=>		I('is_display'),
				'leve_img'		=>		$leveimg[0]['path'],
				'create_time'	=>		time()
			);
			$user = new userleveModel();
			if($leveid = $user->addLeve($data)){
				$this->success("会员等级添加成功",__APP__."/user/leve");
			}else{
				$this->success("会员等级添加失败",__APP__."/user/addleve");
			}
		}else{
			$this->display("user-addleve.html");
		}
	}

	/**
	 * [editUserLeve 修改会员等级信息]
	 * @return   [type]             [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T20:23:53+0800
	 */
	public function editUserLeve(){
		$leve = new userleveModel();
		$leveDate = $leve->getLeveById(I("get.id"));
		if(IS_POST){
			$leveId = I("id");
			$path = 'Upload/UserLeveImages/'.date("Y/m/d");
			$upload= new Upload($path);
     		$leveimg = $upload->upload();
			$data = array(
				'leve_name'		=>		I('name'),
				'leve_des'		=>		I('levedes'),
				'leve_rid'		=>		I('rid'),
				'is_display'	=>		I('is_display'),
				'leve_img'		=>		$leveimg[0]['path'],
				'create_time'	=>		time()
			);
			if($leveId){
				$leve = new userleveModel();
				$leveData = $leve->setUserLeve($data,$leveId);
				if($leveData){
					$this->success("会员等级信息修改成功",__APP__."/user/leve");
				}else{
					$this->success("会员等级信息修改失败",__APP__."/user/leve");
				}
			}
		}else{
			$this->assign('leve',$leveDate);
			$this->display("user-editleve.html");
		}
	}

}