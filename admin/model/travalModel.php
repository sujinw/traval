<?php
namespace admin\model;
use core\lib\model;
use core\lib\library\page;
use core\lib\conf;
/**
* 旅游套餐
*/
class travalModel extends Model{
	public $class = "traval_classify";
	public $tr 	  = "traval_details";
	public $area  = "traval_area";
	public static $total;

	/**
	 * [slectTraval 查询套餐]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T17:29:12+0800
	 * @return   [type]                   [description]
	 */
	public function slectTraval($curpage,$showrow,$url){

		$sql = "SELECT tr.id,tr.title,tr.thumb,tr.yearold,tr.signeuptime,tr.gooutime,tr.address,tr.days,tr.signnum,tr.tags,tr.cid,tr.area_id,tr.price,c.title ctitle,a.name cname FROM ".$this->tr." AS tr, ".$this->class." AS c, ".$this->area." AS a  WHERE tr.cid=c.cid AND tr.area_id=a.id ORDER BY tr.create_time DESC LIMIT ".($curpage - 1)*$showrow.",".$showrow;
		// echo $sql;exit;

		$userData['lists'] = $this->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
		$userData['page']  = null;
		// dump($this->query($sql)->fetchAll(\PDO::FETCH_ASSOC));
		// dump($this->last_query());exit;
		// exit;
		//总记录数大于每页显示数，显示分页
		if ($this->countTotal() > $showrow) {
            $page = new page($this->countTotal(), $showrow, $curpage, $url, 2);
            $userData['page']=htmlspecialchars_decode($page->myde_write());
        }

		return $userData;
	}

	/**
	 * [addDetailes 添加套餐]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T17:29:30+0800
	 * @param    [type]                   $data [description]
	 */
	public function addDetailes($data){
		$res = $this->insert($this->tr,$data);
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [updateDetailes 更新]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T22:49:06+0800
	 * @param    [type]                   $data  [description]
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function updateDetailes($data,$where){
		// dump($data);
		$res = $this->update($this->tr,$data,$where);
		// dump($this->last_query());exit;
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [delDetails 删除旅游]
	 * @Author   Rukic
	 * @DateTime 2016-09-10T14:45:57+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function delDetails($where){
		if($this->delete($this->tr,$where)){
			return true;
		}else{
			return false;
		}
	}

	/**
	 * [selectDetailsBy 查询]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T22:48:32+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function selectDetailsBy($where,$filed="*"){
		// dump($where);
		if($res = $this->select($this->tr,$filed,$where)){
			// dump($this->last_query());
			return $res;
		}else{
			// dump($this->last_query());

			return false;
		}
	}
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
		if($res = $this->select($this->class,"*",$where)){
			return $res;
		}else{
			return false;
		}
	}

	public function updateClass($data,$where){
		if($res = $this->update($this->class,$data,$where)){
			return $res;
		}else{
			return false;
		}
	}

	public function delClass($where){
		if($res = $this->delete($this->class,$where)){
			return $res;
		}else{
			return false;
		}
	}
	/**
	 * [selectAreaAll 获取所有的地区]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T11:01:21+0800
	 * @return   [type]                   [description]
	 */
	public function selectAreaAll(){

		if($res = $this->select($this->area,"*")){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [selectAreaBy 根据条件查询一个或则多个]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T14:33:19+0800
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function selectAreaBy($where){
		if($res = $this->select($this->area,"*",$where)){
			return $res;
		}else{
			return false;
		}
	}
	/**
	 * [addArea 添加地区]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T11:08:42+0800
	 * @param    [type]                   $data [description]
	 */
	public function addArea($data){
		$res = $this->insert($this->area,$data);
		// exit;
		if($res){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [updateArea 更新地区数据]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T14:37:45+0800
	 * @param    [type]                   $data  [description]
	 * @param    [type]                   $where [description]
	 * @return   [type]                          [description]
	 */
	public function updateArea($data,$where){
		if($res = $this->update($this->area,$data,$where)){
			return $res;
		}else{
			return false;
		}
	}

	public function delArea($where){
		if($res = $this->delete($this->area,$where)){
			return $res;
		}else{
			return false;
		}
	}

	/**
	 * [countTotal user表统计]
	 * @return   [num]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T10:00:05+0800
	 */
	public function countTotal(){
		if(!self::$total){
			return self::$total = $this->count($this->tr);
		}else{
			return self::$total;
		}
	}

}
?>