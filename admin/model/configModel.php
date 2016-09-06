<?php
namespace admin\model;
use core\lib\model;
/**
* config model
*/
class configModel extends model{
	public $t="traval_siteconfig";
	public function setConfig($data){
		// dump($data);
		$res=$this->update('traval_siteconfig',$data);
		echo $this->last_query();
		if($res){
			//设置config文件
			//更新配置文件
			$dataStr = "<?php \nreturn ";
			// p($dataStr);die;
			$dataStr .=var_export($data,true).";\n?>";
			$file = CORE."/config/site.php";
			file_put_contents($file,$dataStr);

			return $res;
		}else{
			return false;
		}
	}
}
?>