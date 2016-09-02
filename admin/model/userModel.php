<?php
namespace admin\model;
use core\lib\model;
/**
* 用户表操作model
*/
class userModel extends Model{
	public $t = "traval_user";
	public function addUser($data){
		dump($data);
		dump(new Model());
		dump($this->insert('traval_user',$data));
	}
}
?>