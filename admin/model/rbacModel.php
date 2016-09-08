<?php
namespace admin\model;

use core\lib\model;
/**
* rbac权限控制类
*/
class rbacModel extends model{
	public $role = "traval_role";
	public $node = "traval_node";
	public $user = "traval_user";
	public $access = "traval_access";
	public $userRole = "traval_user_role";

	/**
	 * [addRole 添加角色]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T18:22:31+0800
	 * @param    [type]                   $data [description]
	 */
	public function addRole($data){
		if($res = $this->insert($this->role,$data)){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [selectAllRole 查询所有的角色]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T21:34:08+0800
	 * @return   [type]                   [description]
	 */
	public function selectAllRole($where=array()){
		if($res = $this->select($this->role,"*",$where)){
			return $res;
		}else{
			return false;
		}
	}
	/**
	 * [selectRole 查role]
	 * @Author   Rukic
	 * @DateTime 2016-09-07T20:32:52+0800
	 * @return   [type]                   [description]
	 */
	public function selectRole($data){
		if($res = $this->get($this->role,"*",$data)){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [userToRole 给会员赋角色]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T15:47:58+0800
	 * @param    [type]                   $data [description]
	 * @return   [type]                         [description]
	 */
	public function userToRole($data){
		$res = $this->get($this->userRole,"*",array("user_id"=>(int)$data['user_id']));
		// dump($res);
		if($res){
			$result = $this->update($this->userRole,array('role_id'=>$data['role_id']),array('user_id'=>$data['user_id']));
			// exit;
			if($result){
				return $result;
			}else{
				return false;
			}
		}else{
			$re = $this->insert($this->userRole,$data);
			if($re){
				return $re;
			}else{
				return false;
			}
		}
	}
	/**
	 * [updateRole 更新role]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T07:58:34+0800
	 * @param    [type]                   $data  [description]
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function updateRole($data,$where){
		if($res = $this->update($this->role,$data,$where)){
			return $res;
		}else{
			return false;
		}
	}

	//============================================================
	/**
	 * [addNode 添加节点]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T08:23:43+0800
	 * @param    [type]                   $data [description]
	 */
	public function addNode($data){
		$res = $this->insert($this->node,$data);
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * 查询节点
	 * @Author   Rukic
	 * @DateTime 2016-09-08T08:23:56+0800
	 * @return   [type]                   [description]
	 */
	public function selectNode(){
		if($res = $this->select($this->node,"*")){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [selectNodeBy 根据条件查询node]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T10:52:44+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function selectNodeBy($where){
		$res = $this->get($this->node,"*",$where);
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [updataNode 根据条件更新node]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T10:53:07+0800
	 * @param    [type]                   $data  [description]
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function updataNode($data,$where){
		$res = $this->update($this->node,$data,$where);
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [delNode 删除node]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T11:08:31+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function delNode($where){
		$res = $this->delete($this->node,$where);
		if($res){
			return $res;
		}else{
			return false;
		}
	}
	//====================================================================================
	
	/**
	 * [selectAccessBy 根据条件查询acces]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T14:08:49+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function selectAccessBy($where){
		$res = $this->select($this->access,"*",$where);

		if($res){
			return $res;
		}else{
			return array();
		}
	}

	/**
	 * [addAccess 添加权限]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T14:59:12+0800
	 * @param    [type]                   $data [description]
	 */
	public function addAccess($data){
		$res = $this->insert($this->access,$data);
		//$this->last_query();exit;
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [delAccess 删除权限]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T14:26:28+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function delAccess($where){
		if($res = $this->delete($this->access,$where)){
			return $res;
		}else{
			return false;
		}
	}


}
?>