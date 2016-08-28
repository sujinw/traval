<?php
namespace app\model;
use core\lib\model;

class cityModel extends model{
    public function list1(){
        $datas = $this->select("city", "*",["id[<]"=>12]);
        return $datas;
    }
}