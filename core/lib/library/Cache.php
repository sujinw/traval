<?php
 
class Cache {
   /**
    * $dir : 缓存文件存放目录
    * $lifetime : 缓存文件有效期,单位为秒
    * $cacheid : 缓存文件路径,包含文件名
    * $ext : 缓存文件扩展名(可以不用),这里使用是为了查看文件方便
   */
   private $dir;
   private $lifetime;
   private $cacheid;
   private $ext;
   /**
    * 析构函数,检查缓存目录是否有效,默认赋值
   */
   function __construct($dir='',$lifetime=1800) {
       if ($this->dir_isvalid($dir)) {
           $this->dir = $dir;
           $this->lifetime = $lifetime;
           $this->ext = '.Php';
           $this->cacheid = $this->getcacheid();
       }
   }
   /**
    * 检查缓存是否有效
   */
   private function isvalid() {
       if (!file_exists($this->cacheid)) return false;
       if (!(@$mtime = filemtime($this->cacheid))) return false;
       if (mktime() - $mtime > $this->lifetime) return false;
       return true;
   }
   /**
    * 写入缓存
    * $mode == 0 , 以浏览器缓存的方式取得页面内容
    * $mode == 1 , 以直接赋值(通过$content参数接收)的方式取得页面内容
    * $mode == 2 , 以本地读取(fopen ile_get_contents)的方式取得页面内容(似乎这种方式没什么必要)
   */
   public function write($mode=0,$content='') {
       switch ($mode) {
           case 0:
               $content = ob_get_contents();
               break;
           default:
               break;
       }
       ob_end_flush();
       try {
           file_put_contents($this->cacheid,$content);
       }
       catch (Exception $e) {
           $this->error('写入缓存失败!请检查目录权限!');
       }
   }
   /**
    * 加载缓存
    * exit() 载入缓存后终止原页面程序的执行,缓存无效则运行原页面程序生成缓存
    * ob_start() 开启浏览器缓存用于在页面结尾处取得页面内容
   */
   public function load() {
       if ($this->isvalid()) {
           echo "<span style='display:none;'>This is Cache.</span> ";
           //以下两种方式,哪种方式好?????
           require_once($this->cacheid);
           //echo file_get_contents($this->cacheid);
           exit();
       }
       else {
           ob_start();
       }
   }
   /**
    * 清除缓存
   */
   public function clean() {
       try {
           unlink($this->cacheid);
       }
       catch (Exception $e) {
           $this->error('清除缓存文件失败!请检查目录权限!');
       }
   }
   /**
    * 取得缓存文件路径
   */
   private function getcacheid() {
       return $this->dir.md5($this->geturl()).$this->ext;
   }
   /**
    * 检查目录是否存在或是否可创建
    */
   private function dir_isvalid($dir) {
       if (is_dir($dir)) return true;
       try {
           mkdir($dir,0777);
       }
       catch (Exception $e) {
             $this->error('所设定缓存目录不存在并且创建失败!请检查目录权限!');
             return false;            
       }
       return true;
   }
   /**
    * 取得当前页面完整url
   */
   private function geturl() {
       $url = '';
       if (isset($_SERVER['REQUEST_URI'])) {
           $url = $_SERVER['REQUEST_URI'];
       }
       else {
           $url = $_SERVER['Php_SELF'];
           $url .= empty($_SERVER['QUERY_STRING'])?'':'?'.$_SERVER['QUERY_STRING'];
       }
       return $url;
   }
   /**
    * 输出错误信息
   */
   private function error($str) {
       echo '<div style="color:red;">'.$str.'</div>';
   }
}

/*------------------------------------Demo1-------------------------------------------
 
   require_once('cache.inc.php');
   $cachedir = './Cache/'; //设定缓存目录
   $cache = new Cache($cachedir,10); //省略参数即采用缺省设置, $cache = new Cache($cachedir);
   if ($_GET['cacheact'] != 'rewrite') //此处为一技巧,通过xx.Php?cacheact=rewrite更新缓存,以此类推,还可以设定一些其它操作
       $cache->load(); //装载缓存,缓存有效则不执行以下页面代码
   //页面代码开始
   echo date('H:i:s jS F');
   //页面代码结束
   $cache->write(); //首次运行或缓存过期,生成缓存
 
------------------------------------Demo2-------------------------------------------
 
   require_once('cache.inc.php');
   $cachedir = './Cache/'; //设定缓存目录
   $cache = new Cache($cachedir,10); //省略参数即采用缺省设置, $cache = new Cache($cachedir);
   if ($_GET['cacheact'] != 'rewrite') //此处为一技巧,通过xx.Php?cacheact=rewrite更新缓存,以此类推,还可以设定一些其它操作
       $cache->load(); //装载缓存,缓存有效则不执行以下页面代码
   //页面代码开始
   $content = date('H:i:s jS F');
   echo $content;
   //页面代码结束
   $cache->write(1,$content); //首次运行或缓存过期,生成缓存
 
------------------------------------Demo3-------------------------------------------
 
   require_once('cache.inc.php');
   define('CACHEENABLE',true);
    
   if (CACHEENABLE) {
       $cachedir = './Cache/'; //设定缓存目录
       $cache = new Cache($cachedir,10); //省略参数即采用缺省设置, $cache = new Cache($cachedir);
       if ($_GET['cacheact'] != 'rewrite') //此处为一技巧,通过xx.Php?cacheact=rewrite更新缓存,以此类推,还可以设定一些其它操作
           $cache->load(); //装载缓存,缓存有效则不执行以下页面代码    
   }
   //页面代码开始
   $content = date('H:i:s jS F');
   echo $content;
   //页面代码结束
   if (CACHEENABLE)
       $cache->write(1,$content); //首次运行或缓存过期,生成缓存
*/?>