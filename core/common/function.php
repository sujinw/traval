<?php
/*
 * 获取输入参数
 * I('post.name') 即获取$_POST['name'}
 * I('post.') 即获取$_POST所有参数
 * htmlspecialchars()过滤，防止xss攻击
 * */
function I($name = NULL)
{
    if (is_string($name)) {
        $method = explode('.', $name, 2);
        if(count($method) == 1){
            if(isset($_POST[$method[0]])){
                return $_POST[$method[0]];
            }elseif(isset($_GET[$method[0]])){
                return $_GET[$method[0]];
            }else{
                throw new \Exception('输入参数不对');
                exit();
            }
        }
        if ($method[0] == 'get') {
            $input = $_GET;
        } else if ($method[0] == 'post') {
            $input = $_POST;
        } else{
            throw new \Exception('输入参数不对');
            exit();
        }

        if ($method[1]) {
            $name = isset($input[$method[1]]) ? $input[$method[1]] : "";
            return htmlspecialchars($name);
        } else {
            foreach ($input as $key => $val) {
                $input[$key] = htmlspecialchars($val);
            }
            return $input;
        }
    }elseif(is_null($name)){
        if(!empty($_POST)){
            return $_POST;
        }elseif(!empty($_GET)){
            return $_GET;
        }
    } else {
        throw new \Exception('输入参数不对');
    }

}

/**
 * 将数组中的值全部转为大写或小写
 * @param array $arr
 * @param int $type 类型 1值大写 0值小写
 * @return array
 */
function array_change_value_case($arr, $type = 0){
    $function = $type ? 'strtoupper' : 'strtolower';
    $newArr = array(); //格式化后的数组
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            $newArr[$k] = array_change_value_case($v, $type);
        } else {
            $newArr[$k] = $function($v);
        }
    }
    return $newArr;
}