<?php
namespace app\ctrl;

/**
* 前台权限验证控制器
*/
class valiCtrl extends authorCtrl{

	public function __construct(){
		parent:: __construct();  
		if(!isset($_SESSION['traval_userName']) || !isset($_SESSION['traval_userId'])){
			$this->tips("您还没有登录，请先登录...","/login/login");
		}
	}
}

?>
