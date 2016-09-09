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
                return false;
            }
        }
        if ($method[0] == 'get') {
            $input = $_GET;
        } else if ($method[0] == 'post') {
            $input = $_POST;
        } else{
            return false;
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
        return false;
    }

}
/**
 * [go 跳转函数]
 * @Author   Rukic
 * @DateTime 2016-09-08T16:43:34+0800
 * @param    [type]                   $url  [description]
 * @param    integer                  $time [description]
 * @param    string                   $msg  [description]
 * @return   [type]                         [description]
 */
function go($url, $time = 0, $msg = ''){
    // echo $url;die;
    if(!headers_sent()){
        $time == 0 ? header("Location:". $url) : header("Refresh:{$time},url=".$url);
        die($msg);
    }else{
        echo "<meta http-equiv='Refresh' content='{$time}, url='{$url}'";
        if($time)die($msg);
    }
}

/**
 * session处理
 * @param string|array $name 数组为初始session
 * @param string $value 值
 * @return mixed
 */
function session($name = '', $value = '')
{
    if (is_array($name)) {
        ini_set('session.auto_start', 0);
        if (isset($name['name']))
            session_name($name['name']);
        if (isset($_REQUEST[session_name()]))
            session_id($_REQUEST[session_name()]);
        if (isset($name['path']))
            session_save_path($name['path']);
        if (isset($name['domain']))
            ini_set('session.cookie_domain', $name['domain']);
        if (isset($name['expire'])) {
            ini_set('session.gc_maxlifetime', $name['expire']);
            session_set_cookie_params($name['expire']);
        }
        if (isset($name['use_trans_sid']))
            ini_set('session.use_trans_sid', $name['use_trans_sid'] ? 1 : 0);
        if (isset($name['use_cookies']))
            ini_set('session.use_cookies', $name['use_cookies'] ? 1 : 0);
        if (isset($name['cache_limiter']))
            session_cache_limiter($name['cache_limiter']);
        if (isset($name['cache_expire']))
            session_cache_expire($name['cache_expire']);
        if (isset($name['type'])) {
            $class = 'Session' . ucwords($name['type']);
            require_cache(HDPHP_DRIVER_PATH . '/Session/' . $class . '.class.php');
            $hander = new $class();
            $hander->run();
        }
        //自动开启SESSION
        if (C("SESSION_AUTO_START")) {
            session_start();
        }
    } elseif ($name === '') {
        return $_SESSION;
    } elseif (is_null($name)) {
        $_SESSION = array();
        session_unset();
        session_destroy();
    } elseif ($value === '') {
        if ('[pause]' == $name) { // 暂停
            session_write_close();
        } elseif ('[start]' == $name) { //开启
            session_start();
        } elseif ('[destroy]' == $name) { //销毁
            $_SESSION = array();
            session_unset();
            session_destroy();
        } elseif ('[regenerate]' == $name) { //生成id
            session_regenerate_id();
        } elseif (0 === strpos($name, '?')) { // 检查session
            $name = substr($name, 1);
            return isset($_SESSION[$name]);
        } elseif (is_null($name)) { // 清空session
            $_SESSION = array();
        } else {
            return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
        }
    } elseif (is_null($value)) { // 删除session
        if (isset($_SESSION[$name]))
            unset($_SESSION[$name]);
    } else { //设置session
        $_SESSION[$name] = $value;
    }
}
/**
 * cookie处理
 * @param        $name   名称
 * @param string $value 值
 * @param mixed $option 选项
 * @return mixed
 */
function cookie($name, $value = '', $option = array())
{
    // 默认设置
    $config = array('prefix' => C('COOKIE_PREFIX'), // cookie 名称前缀
        'expire' => C('COOKIE_EXPIRE'), // cookie 保存时间
        'path' => C('COOKIE_PATH'), // cookie 保存路径
        'domain' => C('COOKIE_DOMAIN'), // cookie 有效域名
    );
    // 参数设置(会覆盖黙认设置)
    if (!empty($option)) {
        if (is_numeric($option))
            $option = array('expire' => $option);
        elseif (is_string($option))
            parse_str($option, $option);
        $config = array_merge($config, array_change_key_case($option));
    }
    // 清除指定前缀的所有cookie
    if (is_null($name)) {
        if (empty($_COOKIE)) return;
        // 要删除的cookie前缀，不指定则删除config设置的指定前缀
        $prefix = empty($value) ? $config['prefix'] : $value;
        if (!empty($prefix)) { // 如果前缀为空字符串将不作处理直接返回
            foreach ($_COOKIE as $key => $val) {
                if (0 === stripos($key, $prefix)) {
                    setcookie($key, '', time() - 3600, $config['path'], $config['domain']);
                    unset($_COOKIE[$key]);
                }
            }
        }
        return $_COOKIE;
    }
    $name = $config['prefix'] . $name;
    if ('' === $value) {
        // 获取指定Cookie
        return isset($_COOKIE[$name]) ? json_decode(MAGIC_QUOTES_GPC ? stripslashes($_COOKIE[$name]) : $_COOKIE[$name]) : null;
    } else {
        if (is_null($value)) {
            setcookie($name, '', time() - 3600, $config['path'], $config['domain']);
            unset($_COOKIE[$name]);
            // 删除指定cookie
        } else {
            // 设置cookie
            $value = json_encode($value);
            $expire = !empty($config['expire']) ? time() + intval($config['expire']) : 0;
            setcookie($name, $value, $expire, $config['path'], $config['domain']);
            $_COOKIE[$name] = $value;
        }
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


/**
 * 不区分大小写检测数据键名是否存在
 */
function array_key_exists_d($key, $arr)
{
    return array_key_exists(strtolower($key), array_change_key_case_d($arr));
}
/**
 * 将数组键名变成大写或小写
 * @param array $arr 数组
 * @param int $type 转换方式 1大写   0小写
 * @return array
 */
function array_change_key_case_d($arr, $type = 0)
{
    $function = $type ? 'strtoupper' : 'strtolower';
    $newArr = array(); //格式化后的数组
    if (!is_array($arr) || empty($arr))
        return $newArr;
    foreach ($arr as $k => $v) {
        $k = $function($k);
        if (is_array($v)) {
            $newArr[$k] = array_change_key_case_d($v, $type);
        } else {
            $newArr[$k] = $v;
        }
    }
    return $newArr;
}
/**
 * [node_merge 递归重组节点信息为多维数组]
 * @Author   Rukic
 * @DateTime 2015-11-28T22:37:50+0800
 * @param    [type]                   $node [要处理的节点数组]
 * @param    integer                  $pid  [父级ID]
 * @return   [type]                         [description]
 */
function node_merge($node,$access=NULL,$pid=0){
    $arr = array();
    foreach ($node as $v) {
        if(is_array($access)){
            $v['access'] = in_array($v['id'],$access) ? 1:0; 
        }
        if($v['pid'] == $pid){
            $v['child'] = node_merge($node,$access,$v['id']);
            $arr[] = $v;
        }
    }
    return $arr;
}
/**
 * [area_merge 递归重组地区节点]
 * @Author   Rukic
 * @DateTime 2016-09-09T14:10:00+0800
 * @param    [type]                   $area [description]
 * @param    integer                  $pid  [description]
 * @return   [type]                         [description]
 */
function area_merge($area,$pid=0){
    $arr = array();

    foreach ($area as $v) {
        if($v['pid'] == $pid){
            $v['child'] = area_merge($area,$v['id']);
            $arr[] = $v;
        }
    }

    return $arr;
}