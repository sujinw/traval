<?php
namespace admin\ctrl;

use admin\model\configModel;
use core\lib\library\upload;
use core\lib;
/**
* 网站配置
*/
class configCtrl extends authorCtrl{
	
	public function index(){
		if(IS_POST){
			
			$path = 'Upload/ConfigImages/';
			$upload= new Upload($path);
     		$userimg = $upload->upload();
     		$data=array(
     			"site_title"	=>	I('site_title'),
     			"site_des"		=>	I('site_des'),
     			"site_keywords"	=>	I('site_keywords'),
     			"site_mintitle"	=>	I('site_mintitle'),
     			"site_vbname"	=>	I('site_vbname'),
     			"site_registermessage"	=>	I('site_regitsermessage'),
     			"site_tovbfirst"	=>	I('site_tovbfirst'),
     			"site_icp"	=>	I('site_icp'),
     			"admin_email"	=>	I('admin_email'),
     			"admin_qq"	=>	I('admin_qq'),
     			"site_register_state"	=>	I('site_register_state'),
     			"site_qq_register"	=>	I('site_qq_register'),
     			"site_wx_register"	=>	I('site_wx_register'),
     			"site_wxpay_state"	=>	I('site_wxpay_state'),
     			"code_length"	=>	intval(I('code_length')),
     			"site_logo"	=>	$userimg[0]['path'],

     		);
     		$config = new configModel();
     		dump($data);
     		if($res = $config->setConfig($data)){

     			$this->success("网站配置成功！");
     		}else{
     			dump($res);exit;
     			$this->success("网站配置失败！");
     		}
		}else{
			$this->display('config-index.html');
		}
	}
}
?>