<?php
namespace admin\ctrl;
use admin\model\travalModel;
use core\lib\library\upload;
use core\lib\library\Data;
/**
* 套餐管理
*/
class travalCtrl extends validateRbacCtrl{
	
	public function index(){
		$traval = new travalModel();

		$showrow = 2; //一页显示的行数

		//当前的页,还应该处理非数字的情况
		$curpage = isset($_GET['page']) ? $_GET['page']  : 1 ; 

		$url = "?page={page}"; //分页地址，如果有检索条件 ="?page={page}&q=".$_GET['q']

		$total = $traval->countTotal(); //记录总条数
		if (!isset($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow)){
			//当前页数大于最后页数，取最后一页
		    $curpage = ceil($total_rows / $showrow); 
		}
		$userData = $traval->slectTraval($curpage,$showrow,$url);
		dump($userData);
		if($userData){
			$this->assign("cont",$userData);
			$this->assign("users",$userData['lists']);
		};
		$this->assign('traval',$userData);
		$this->display('traval-index.html');
	}

	public function add(){
		$traval = new travalModel();
		if(IS_POST){
			$data = array(
				'area_id'		=>		(int)I('area_id'),
				'cid'			=>		(int)I('cid'),
				'title'			=>		I('title'),
				'yearold'		=>		I('yearold'),
				'signeuptime'	=>		I('signeuptime'),
				'gooutime'		=>		I('goouttime'),
				'address'		=>		I('address'),
				'contents'		=>		htmlentities(I('contents')),
				'imgs'			=>		I('imgs'),
				'sort'			=>		(int)I('sort'),
				'price'			=>		(int)I('price'),
				'days'			=>		(int)I('days'),
				'create_time'	=>		time(),
			);
			$res = $traval->addDetailes($data);
			// dump($res);
			// exit;
			if($res){
				$this->success("旅游套餐添加成功!",__APP__."/traval/index");
			}else{
				$this->error("旅游套餐添加失败!",__APP__."/traval/add");
			}
			return;
		}else{
			$class = $traval->selectClassBy(array('is_display'=>1));
			$area  = $traval->selectAreaBy(array('is_display'=>1));

			$data = new Data();
			$result = $data->tree($area,'name','id','pid');
			// dump(area_merge($result,0));
			$this->assign('area',$result);

			$this->assign('cla',$class);
			$this->display("traval-add.html");
			return;
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

	public function editClass(){
		$traval = new travalModel();
		$id = I('id');
		if(IS_POST){
			$userimg = I('classimgs');
			if(isset($_FILES['classimg']) && !empty($_FILES['classimg']) && $_FILES['classimg'] && $_FILES['classimg']['name'] != ""){
				dump($_FILES);exit;
				$path = 'Upload/UserImages/'.date("Y/m/d");
				$upload= new Upload($path);
	     		$userimg = $upload->upload()[0]['path'];
	     		if(file_exists(I('classimgs'))){
	     			unlink(I('classimgs'));
	     		}
			}
			// dump($userimg);
     		$data = array(
     			'title'	=>	I('title'),
     			'remark'	=>	I('desc'),
     			'is_display'	=>	(int)I('is_display'),
     			'classimg'		=>	$userimg,
     		);
     		$traval = new travalModel();
     		$res = $traval->updateClass($data,array('cid'=>$id));
     		if($res){
     			$this->success('分类修改成功!',__APP__."/traval/classify");
     		}else{
     			$this->error("分类修改失败!",__APP__."/traval/AddClassify");
     		}
		}else{
			$class = $traval->selectClassBy(array('cid'=>$id));
			$this->assign("cla",$class[0]);
			$this->display('traval-classify-edit.html');
		}
	}

	/**
	 * [delClass 删除分类]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T15:11:02+0800
	 * @return   [type]                   [description]
	 */
	public function delClass(){
		if(IS_POST){
			$traval = new travalModel();
			if($traval->delClass(array("cid"=>I('id')))){
				$this->json("ok",20001,"分类删除成功");
			}else{
				$this->json("error",40001,"分类删除失败");
			}
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

	/**
	 * [area 地区]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T10:39:51+0800
	 * @return   [type]                   [description]
	 */
	public function area(){
		$traval = new travalModel();
		$res = $traval->selectAreaAll();
		$data = new Data();
		$result = $data->tree($res,'name','id','pid');
		//dump();
		$this->assign('area',area_merge($result,0));
		$this->display('traval-area.html');
	}

	/**
	 * [addArea 添加地区]
	 * @Author   Rukic
	 * @DateTime 2016-09-09T14:24:37+0800
	 */
	public function addArea(){
		$traval = new travalModel();
		$data = new Data();
		if(IS_POST){
			// dump(I());
			$data = array(
				'name'		=>		I('name'),
				'remark'	=>		I('remark'),
				'sort'		=>		I('sort'),
				'pid'		=>		(int)I('pid'),
				'is_display'=>		(int)I('is_display'),
				'create_time'=>		(int)time(),
			);

			$res = $traval->addArea($data);
			if($res){
				$this->success("添加地区成功!",__APP__."/traval/area");
			}else{
				$this->error("添加地区失败!",__APP__."/traval/addArea");
			}
		}else{
			$res = $traval->selectAreaAll();
			// dump($res);exit;
			$result = $data->tree($res,'name','id','pid');
			$this->assign('area',$result);
			$this->display('traval-area-add.html');
		}
	}

	public function editArea(){
		$id = I('id');

		$traval = new travalModel();
		$data = new Data();
		if(IS_POST){
			// dump(I());
			$data = array(
				'name'		=>		I('name'),
				'remark'	=>		I('remark'),
				'sort'		=>		I('sort'),
				'pid'		=>		(int)I('pid'),
				'is_display'=>		(int)I('is_display'),
				'create_time'=>		(int)time(),
			);

			$res = $traval->updateArea($data,array('id'=>$id));
			if($res){
				$this->success("编辑地区成功!",__APP__."/traval/area");
			}else{
				$this->error("编辑地区失败!",__APP__."/traval/editArea");
			}
		}else{
			$res = $traval->selectAreaAll();
			// dump($res);exit;
			$result = $data->tree($res,'name','id','pid');
			$re = $traval->selectAreaBy(array('id'=>$id));
			$this->assign('id',$id);
			$this->assign('area',$result);
			$this->assign('are',$re[0]);
			$this->display('traval-area-edit.html');
		}
	}

	public function delArea(){
		if(IS_POST){
			$id = I('id');
			$traval = new travalModel();
			if($res = $traval->delArea(array('id'=>$id))){
				$this->json('ok',20001,"地区删除成功");
			}else{
				$this->json('ok',40001,"地区删除失败");
			}
		}
	}
}
?>