<?php
namespace app\ctrl;
use core\lib;
use core\lib\library\session;
use admin\model\travalModel;
class indexCtrl extends authorCtrl{

    public function index(){
    	$traval = new travalModel();
    	// dump($traval);
    	$info = $traval->selectDetailsBy(array('is_display'=>1));
    	// dump($info);exit;
    	$arr = array();
    	foreach ($info as $v) {
    		$v['tags'] = explode(",",$v['tags']);
    		$arr[] = $v;
    	}
    	// dump($arr);
    	$this->assign('info',$arr);
    	$this->display("index.html");
    }
} 