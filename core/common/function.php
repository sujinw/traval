<?php
/*
 * 获取输入参数
 * I('post.name') 即获取$_POST['name'}
 * I('post.') 即获取$_POST所有参数
 * htmlspecialchars()过滤，防止xss攻击
 * */
function I($name)
{
    if (is_string($name)) {
        $method = explode('.', $name, 2);

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
    } else {
        throw new \Exception('输入参数不对');
    }

}
