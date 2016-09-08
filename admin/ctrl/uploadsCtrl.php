<?php
namespace admin\ctrl;
use core\lib\library\upload;
/**
* 上传
*/
class uploadsCtrl extends validateRbacCtrl{
	
	public function index(){
		if(IS_POST){
			$type = I('uploadType') ? I('uploadType') : "Images";
			$path = 'Upload/'.$type.'/'.date("Y/m/d");
			$upload= new Upload($path);
	     	$imgs = $upload->upload();
	     	if($imgs){
	     		echo __ROOT__."/".$imgs[0]['path'];
	     	}else{
	     		echo "error|上传失败";
	     	}
		}else{
			exit("no access");
		}
	}
}
?>