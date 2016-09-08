<?php
namespace admin\ctrl;
use admin\model\userModel;
use admin\model\rbacModel;
use admin\model\userleveModel;
use core\lib\library\upload;
use core\lib\library\Data;
use core\lib;

/**
* 初始化控制器
*/
class userCtrl extends validateRbacCtrl{

	
	
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

	/**
	 * [role 管理角色管理]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T18:17:09+0800
	 * @return   [type]                   [description]
	 */
	public function role(){
		$rbac = new rbacModel();
		$data = $rbac->selectAllRole();
		if($data){
			$this->assign('role',$data);
		}
		$this->display('user-role.html');
	}

	/**
	 * [addRole 添加会员角色]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T18:19:05+0800
	 */
	public function addRole(){
		if(IS_POST){
			$rbac = new rbacModel();
			$data = I();
			$res = $rbac->addRole($data);
			if($res){
				$this->success('角色添加成功!',__APP__."/user/role");
			}else{
				$this->error("角色添加失败!",__APP__."/user/addRole");
			}
		}else{
			$this->display("user-role-add.html");
		}
	}

	/**
	 * [editRole 编辑角色]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T21:48:34+0800
	 * @return   [type]                   [description]
	 */
	public function editRole(){
		$rbac = new rbacModel();
		if(IS_POST){
			$data = I();
			$res = $rbac->updateRole(array(
				'name'		=>	$data['name'],
				'status'	=> 	$data['status'],
				'remark'	=>	$data['remark']
			),array(
				'id'		=>	$data['id']
			));
			if($res){
				$this->success('角色修改成功',__APP__."/user/role");
			}else{
				$this->error("角色修改失败",__APP__."/user/editRole");
			}
		}else{
			$id = I('id');
			$data = $rbac->selectRole(array("id"=>$id));
			if($data){
				$this->assign('id',$id);
				$this->assign('role',$data);
			}
			$this->display('user-role-edit.html');
		}
	}
	/**
	 * [checkRole 检查角色是否存在]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T20:30:46+0800
	 * @return   [type]                   [description]
	 */
	public function checkRole(){
		$rbac = new rbacModel();
		$res = $rbac->selectRole(I());
		//dump(I());
		if($res){
			echo 0;
		}else{
			echo 1;
		}
	}

	public function userToRole(){
		$uid = I('id');
		$rbac = new rbacModel();
		if(IS_POST){
			$data = array(
				'role_id'	=> I('role'),
				'user_id'	=> I('uid')
			);
			$res = $rbac->userToRole($data);
			// dump($res);exit;
			if($res){
				$this->success("配置管理角色成功",__APP__."/user/index");
			}else{
				$this->error("配置管理角色失败",__APP__."/user/userToRole/id".$data['uid']);
			}
		}else{
			$role = $rbac->selectAllRole(array("status"=>1));
			// dump($role);
			$this->assign("uid",$uid);
			$this->assign("role",$role);
			$this->display('user-to-role.html');
		}
	}
	/**
	 * [node 节点]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T15:10:25+0800
	 * @return   [type]                   [description]
	 */
	public function node(){
		$rbac = new rbacModel();
		$node = $rbac->selectNode();
		$data = new Data();
		$tree = $data->tree($node,'name','id','pid');
		// dump($tree);
		$nodes = node_merge($tree);//递归重组数组
		// dump($nodes);
		$this->assign("node",$nodes);
		$this->display("user-node.html");
	}

	public function addNode(){
		$pid = I('pid') ? I('pid'): 0;
		$level = I('level') ? I('level'): 1;
		$rbac = new rbacModel();
		if(IS_POST){
			$data = I();
			if($res = $rbac->addNode($data)){
				$this->success('节点添加成功',__APP__."/user/node");
			}else{
				$this->error('节点添加失败','addNode',__APP__."/user/addNode/pid".$pid.'/level'.$level);
			}
			return;
		}
		switch ($level) {
			case 1:
				$this->assign('type','应用');
				break;
			case 2:
				$this->assign('type','控制器');
				break;
			case 3:
				$this->assign('type','动作方法');
				break;
		}
		$this->assign('pid',$pid);
		$this->assign('level',$level);
		$this->display('user-node-add.html');
	}

	/**
	 * [editNode 编辑]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T09:30:00+0800
	 * @return   [type]                   [description]
	 */
	public function editNode(){
		$rbac = new rbacModel();
		$data = I();
		if(IS_POST){
			$res = $rbac->updataNode(array(
				"name"=>$data["name"],
				"remark"=>$data['remark'],
				'status'=>$data['status']
			),array(
				"id"=>I('id')
			));
			if($res){
				$this->success("节点更新成功!",__APP__."/user/node");
			}else{
				$this->error("节点更新失败!",__APP__."/user/editNode/id/".$data['id']."level/".$data['level']);
			}
		}else{
			
			$id = I('id');
			$level = I('level');
			$res = $rbac->selectNodeBy(array("id"=>I('id')));
			if($res){
				$this->assign("node",$res);
			}
			switch ($level) {
				case 1:
					$this->assign('type','应用');
					break;
				case 2:
					$this->assign('type','控制器');
					break;
				case 3:
					$this->assign('type','动作方法');
					break;
			}
			$this->assign('id',$id);
			$this->assign('level',$level);
			$this->display("user-node-edit.html");
		}
	}

	/**
	 * [delNode 删除节点]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T11:07:47+0800
	 * @return   [type]                   [description]
	 */
	public function delNode(){
		if(IS_AJAX){
			$id = I('id');
			$rbac = new rbacModel();
			$res = $rbac->delNode(array('id'=>$id));
			if($res){
				$this->json("ok",20001,"删除成功");
			}else{
				$this->json("error",40001,"删除失败");
			}
		}
	}

	public function access(){
		$rbac = new rbacModel();
		if(IS_POST){
			$rid = I('rid') ? I('rid') : 0;
			$arr = array();
			$result = $rbac->delAccess(array('role_id'=>$rid));
			foreach (I('access') as $v) {
				$tmp = explode('_',$v);
				// p($tmp);
				$arr[] = array(
					'role_id' => $rid,
					'node_id' => $tmp[0],
					'level'   => $tmp[1]
				);
			}
			// dump($arr);#die;
			$res = $rbac->addAccess($arr);
			if($res){
				$this->success('权限修改成功',__APP__."/user/role");
			}else{
				$this->error('权限修改失败',__APP__."/user/access/rid/".$rid);
			}
			return;
		}else{
			$node = $rbac->selectNode();
			$access = $rbac->selectAccessBy(array("role_id"=>I('rid')));
			$data = new Data();
			$tree = $data->tree($node,'name','id','pid');
			// dump($tree);
			$role = array();
			foreach ($access as $v) {
				$role[] = $v['node_id'];
			}
			$res = node_merge($tree,$role);
			//$nodes = node_merge($tree);//递归重组数组
			// dump($nodes);
			// dump($res);
			$this->assign("rid",I('rid'));
			$this->assign("node",$res);
			$this->display('user-access.html');
		}
	}

}