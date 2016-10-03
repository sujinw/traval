<?php
namespace app\model;
use core\lib\model;
class userModel extends model{
	public $t = "traval_user";
	public $out = "traval_outuser";
	public $order = "traval_order";
	public $traval = "traval_details";
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
			// dump($this->last_query());die;
			if($res){
				return $res;
			}else{
				return false;
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

		/**
		 * [addOrder 订单]
		 * @param    [type]                   $data [description]
		 * @Author   Rukic
		 * @DateTime 2016-10-03T22:15:43+0800
		 */
		public function addOrder($data){
			$res = $this->insert($this->order,$data);
			if($res){
				return $res;
			}else{
				return false;
			}
		}

	/**
	 * [getOrderBy 查询订单信息]
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 * @Author   Rukic
	 * @DateTime 2016-10-03T22:31:00+0800
	 */
	public function getOrderBy($where){
		$sql = "SELECT d.thumb,d.title,o.orderNum,o.id,o.user_outTime,o.create_time,o.pay_way,o.priceTotal FROM ".$this->traval." as d LEFT JOIN ".$this->order." AS o ON (o.did=d.id) WHERE o.id=".$where['id'];

		//dump($sql);die;
		$res = $this->query($sql)->fetchAll();
		// dump($res);die;
		if($res){
			return $res;
		}else{
			return false;
		}
	}
}
?>
