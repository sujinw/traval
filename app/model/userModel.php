<?php
namespace app\model;
use core\lib\model;
class userModel extends model{
	public $t = "traval_user";
    public function list1(){
        $datas = $this->select("city", "*",["id[<]"=>12]);
        return $datas;
    }

    public function getUserById($username){
    	if($user = $this->get($this->t,'*',array("username"=>$username))){
    		return $user;
    	}else{
    		return false;
    	}
    }
}
?>