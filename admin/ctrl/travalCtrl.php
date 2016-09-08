<?php
namespace admin\ctrl;
use admin\model\travalModel;
use core\lib\library\upload;
/**
* 套餐管理
*/
class travalCtrl extends validateRbacCtrl{
	
	public function index(){

		$this->display('traval-index.html');
	}

	public function add(){

		if(IS_POST){

		}else{
			$this->display("traval-add.html");
		}
	}

	public function classify(){
		$traval = new travalModel();
		$res = $traval->slectClass();
		$this->assign("class",$res);
		$this->display('traval-classify.html');
	}
	/**
	 * [addClassify 添加class]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T22:31:23+0800
	 */
	public function addClassify(){
		if(IS_POST){
			// dump($_FILES);exit;
			$path = 'Upload/UserImages/'.date("Y/m/d");
			$upload= new Upload($path);
     		$userimg = $upload->upload();
     		// dump($userimg);
     		$data = array(
     			'title'	=>	I('title'),
     			'remark'	=>	I('desc'),
     			'is_display'	=>	(int)I('is_display'),
     			'classimg'		=>	$userimg[0]['path'],
     			'create_time'			=>	(int)time()
     		);
     		$traval = new travalModel();
     		$res = $traval->addClass($data);
     		if($res){
     			$this->success('分类添加成功!',__APP__."/traval/classify");
     		}else{
     			$this->error("分类添加失败!",__APP__."/traval/AddClassify");
     		}
		}else{
			$this->display('traval-classify-add.html');
		}
	}

	/**
	 * [checkClass 验证是否存在]
	 * @return   [type]                   [description]
	 * @Author   Rukic
	 * @DateTime 2016-09-08T21:46:44+0800
	 */
	public function checkClass(){
		$traval = new travalModel();
		if($traval->selectClassBy(I())){
			echo 0;
		}else{
			echo 1;
		}
	}
}
?>