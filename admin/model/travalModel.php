<?php
namespace admin\model;
use core\lib\model;
/**
* 旅游套餐
*/
class travalModel extends Model{
	public $class = "traval_classify";
	public $tr 	  = "traval_details";
	/**
	 * [addClass 添加分类]
	 * @param    [type]                   $data [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T21:41:52+0800
	 */
	public function addClass($data){
		$res = $this->insert($this->class,$data);
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	public function slectClass(){
		if($res = $this->select($this->class,"*")){
			return $res;
		}else{
			return false;
		}
	}
	/**
	 * [selectBy 查询class]
	 * @return   [type]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T22:00:59+0800
	 */
	public function selectClassBy($where){
		if($res = $this->select($this->class,$where)){
			return $res;
		}else{
			return false;
		}
	}
}
?>