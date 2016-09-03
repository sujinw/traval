<?php
/*
 * 控制器类
 * */
namespace core\lib;
class controller
{
    /*
     * 视图文件引入
     * $assign 保存输入变量
     * dispaly 输出视图
     * assign 设置输入变量
     * */
    public $assign;

    public function assign($name, $val)
    {
        $this->assign[$name] = $val;
    }

    public function display($file)
    {
        $filepath = APP . '/views/' . $file;
        if (is_file($filepath)) {
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP . '/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => BASEDIR . '/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate($file);
            $template->display($this->assign ? $this->assign : []);
        }
    }

    /*
     * 以json格式返回数据
     * code 返回代码号,默认200
     * msg 返回信息
     * data 返回的数据
     * */
    public function json($data,$code='',$msg=''){
        if($code == ''){
            $code = 200;
        }
        
        $returnDate = array(
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data
        );
        header('Content-Type: application/json');
        echo json_encode($returnDate);
    }

    /**
     * [success 操作成功]
     * @Author   Rukic
     * @DateTime 2015-11-10T22:59:14+0800
     * @return   [type]                   [description]
     */
    protected function success($msg, $url = NULL, $time=3){
        if (IS_AJAX) {
            $this->ajax(array('status' => 1, 'message' => $msg));
        }else{
            $url = $url ? "window.location.href='". $url ."'" : 'window.history.back(-1)';
            include(APP.'/views/error/success.html');
        }
        exit;
    }
    /**
     * [error 错误提示]
     * @Author   Rukic
     * @DateTime 2015-11-10T23:10:01+0800
     * @return   [type]                   [description]
     */
    protected function error($msg, $url = NULL, $time = 3){
        if (IS_AJAX) {
            $this->ajax(array('status' => 0, 'message' => $msg));
        }else{
            $url = $url ? "window.location.href='". $url ."'" : 'window.history.back(-1)';
            include(APP.'/views/error/error.html');

        }
        exit;
    }
}