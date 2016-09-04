<?php
namespace admin\model;

use core\lib\model;
use core\lib\library\page;
/**
* 会员等级表操作模型
*/
class userleveModel extends Model{
	public $t="traval_userleve";
	public static $total;
	/**
	 * [addUser 添加用户等级]
	 * @param    [array]                   $data [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T09:50:25+0800
	 */
	public function addLeve($data){
		$userId = $this->insert($this->t,$data);
		if($userId){
			$path = ROOT_PATH."/cache/dataBase/traval_userleve.txt";
			if(file_put_contents($path,$userId)){
				return true;
			}else{
				return false;
			}
		}
	}

	/**
	 * [listLeveByPage 获取用户分页]
	 * @return   [type]                   [array]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T09:51:12+0800
	 */
	public function listLeveByPage($curpage,$showrow,$url){
		$userData['lists'] = $this->select('traval_userleve','*',["LIMIT" => [($curpage - 1)*$showrow,$showrow]]);
		$userData['page'] = null;

		//总记录数大于每页显示数，显示分页
		if ($this->countTotal() > $showrow) {
            $page = new page($this->countTotal(), $showrow, $curpage, $url, 2);
            $userData['page']=htmlspecialchars_decode($page->myde_write());
        }
		return $userData;
	}

	/**
	 * [setUserLeve 修改会员信息]
	 * @param    [array]                   $data [description]
	 * @param    [int]                   $id   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-04T20:35:07+0800
	 */
	public function setUserLeve($data,$id){
		$res = $this->update($this->t,$data,array('leve_id'=>$id));
		if($res){
			return $res;
		}else{
			return false;
		}
	}
	/**
	 * [countTotal userleve表统计]
	 * @return   [num]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T10:00:05+0800
	 */
	public function countTotal(){
		if(!self::$total){
			return self::$total = $this->count($this->t);
		}else{
			return self::$total;
		}
	}
}
?>