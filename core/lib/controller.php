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
        
        echo json_encode($returnDate);
    }
}