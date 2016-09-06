<?php
namespace admin\ctrl;

/**
* 套餐管理
*/
class travalCtrl extends authorCtrl{
	
	public function index(){

		$this->display('traval-index.html');
	}

	public function add(){

		if(IS_POST){

		}else{
			$this->display("traval-add.html");
		}
	}

	public function uploads(){

		
	}
}
?>