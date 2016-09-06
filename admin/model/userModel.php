<?php
namespace admin\model;
use core\lib\model;
use core\lib\library\page;

/**
* 用户表操作model
*/
class userModel extends Model{
	public $t = 'traval_user';
	public static $total;
	/**
	 * [addUser 添加用户]
	 * @param    [array]                   $data [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T09:50:25+0800
	 */
	public function addUser($data){
		$userId = $this->insert('traval_user',$data);
		if($userId){
			$path = ROOT_PATH."/cache/dataBase/traval_user.txt";
			if(file_put_contents($path,$userId)){
				return true;
			}else{
				return false;
			}
		}
	}

	/**
	 * [listUserByPage 获取用户分页]
	 * @return   [type]                   [array]
	 * @Author   Rukic
	 * @DateTime 2016-09-03T09:51:12+0800
	 */
	public function listUserByPage($curpage,$showrow,$url){
		$userData['lists'] = $this->select('traval_user','*',["LIMIT" => [($curpage - 1)*$showrow,$showrow]]);
		$userData['page'] = null;

		//总记录数大于每页显示数，显示分页
		if ($this->countTotal() > $showrow) {
            $page = new page($this->countTotal(), $showrow, $curpage, $url, 2);
            $userData['page']=htmlspecialchars_decode($page->myde_write());
        }
		return $userData;
	}

	public function selectUserById($id){
		if($userInfo = $this->get($this->t,"*",array('id'=>$id))){
			return $userInfo;
		}else{
			return false;
		}
	}

	/**
	 * [updateUser description]
	 * @Author   Rukic
	 * @DateTime 2016-09-05T19:36:54+0800
	 * @param    [type]                   $data [description]
	 * @param    [type]                   $id   [description]
	 * @return   [type]                         [description]
	 */
	public function updateUser($data,$id){
		$res = $this->update($this->t,$data,array("id"=>$id));
		// echo $this->last_query();
		// dump($data);
		// dump($res);
		if($res){
			return $res;
		}else{
			return false;
		}

	}
	public function delUserById($id){
		if($user = $this->delete($this->t,array("id"=>$id))){
			return $user;
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
			return self::$total = $this->count($this->t);
		}else{
			return self::$total;
		}
	}



}
?>