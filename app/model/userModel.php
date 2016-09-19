<?php
namespace app\model;
use core\lib\model;
class userModel extends model{
	public $t = "traval_user";
	public $out = "traval_outuser";
    /**
     * [getUserById 通过username获取用户信息]
     * @param    [type]                   $username [description]
     * @return   [type]                             [description]
     * @Author   Rukic
     * @DateTime 2016-09-04T13:17:02+0800
     */
    public function getUserById($username){
    	if($user = $this->get($this->t,'*',array("username"=>$username))){
    		return $user;
    	}else{
    		return false;
    	}
    }

    /**
     * [setUserInfo 更新用户信息]
     * @param    [type]                   $username [description]
     * @Author   Rukic
     * @DateTime 2016-09-04T13:17:47+0800
     */
    public function setUserInfo($username,$data){
        if($res = $this->update($this->t,$data,array("username"=>$username))){
            return $res;
        }else{
            return false;
        }
    }

		/**
		 * [addOutUser 添加出行表记录]
		 * @param [type] $data [description]
		 */
		public function addOutUser($data){
			//print_r($data);
			$res = $this->insert($this->out,$data);
			// dump($this->last_query());
			if($res){
				return $res;
			}else{
				return false;
			}
		}

		/**
		 * [getOutUserBy 根据条件查询所列字段]
		 * @param  [array Or *] $field [description]
		 * @param  [array] $where [description]
		 * @return [type]        [description]
		 */
		public function getOutUserBy($field,$where){
			$res = $this->select($this->out,$field,$where);#die;
			if($res){
				return $res;
			}else{
				return $res;
			}
		}

		/**
		 * [editOutUser 修改出行人员表记录]
		 * @param  [type] $data  [description]
		 * @param  [type] $where [description]
		 * @return [type]        [description]
		 */
		public function editOutUser($data,$where){
			$res = $this->update($this->out,$data,$where);#die;
			if($res){
				return $res;
			}else{
				return false;
			}
		}

		/**
		 * [delOutUser 删除出行人员记录]
		 * @param  [type] $where [description]
		 * @return [type]        [description]
		 */
		public function delOutUser($where){
			if($res = $this->delete($this->out,$where)){
				return $res;
			}else{
				return false;
			}
		}
}
?>
