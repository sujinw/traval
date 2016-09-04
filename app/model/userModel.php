<?php
namespace app\model;
use core\lib\model;
class userModel extends model{
	public $t = "traval_user";

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
}
?>