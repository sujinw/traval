<?php
namespace app\ctrl;
use admin\model\travalModel;
use core\lib;

/**
* 旅游套餐
*/
class travalCtrl extends authorCtrl{
	
	public function detail(){
		$id = I('id');
		$traval = new travalModel();
		$info = $traval->selectDetailsBy(array('id'=>$id));
		$arr = array();
		// dump($info);
		foreach ($info as $v) {
			$v['imgs'] = explode(',',$v['imgs']);
			$v['tags'] = explode(',',$v['tags']);
			$v['contents'] = html_entity_decode($v['contents']);
			$arr[] = $v;
		}
		// dump($arr);
		$this->assign('info',$arr[0]);
		$this->display('info.html');
	}

	/**
	 * 订单
	 */
	public function setOrder(){
		$id = I('id');
		$traval = new travalModel();
		$info = $traval->selectDetailsBy(array('id'=>$id),array('id','title','signeuptime','orderTotalNum','orderYesNum','price','signnum'))[0];
		//dump($info);
		$this->assign("info",$info);
		$this->display('order.html');
	}

	public function getUserOut(){
		$uid = I('uid');

	}
}

?>