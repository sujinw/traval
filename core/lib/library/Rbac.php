<?php
namespace core\lib\library;
use admin\model\userModel;
use core\lib\conf;
use core\lib\model;

/* CREATE TABLE IF NOT EXISTS `access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  KEY `role_id` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `show` tinyint(1) unsigned NOT NULL default 1,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,auto_increment,
  `username` char(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
   PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `user_role` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
*/
/**
 * RBAC基于角色的权限控制
 * @package     tools_class
 * @author      后盾向军 <houdunwangxj@gmail.com>
 */
final class Rbac
{

    static public $error; //错误信息

    /**
     * 获得所有RBAC表，自动根据配置文件处理，加表前缀
     * @return array
     */

    static private function getRbacTable()
    {
        $tableName = array(
            "RBAC_USER_TABLE", "RBAC_ROLE_TABLE", "RBAC_NODE_TABLE", "RBAC_ROLE_USER_TABLE", "access_table"
        );
        $preFix = conf::get('DB_PREFIX', 'db');
        $tables = array();
        foreach ($tableName as $name) {
            $table = C($name);
            if (strpos($preFix, $name) !== 0) {
                $table = $preFix . $table;
            }
            $tables[$name] = $table;
        }
        return $tables;
    }

    /**
     * 根据SESSION值验证用户是否登录
     * @return boolean
     */
    static public function isLogin()
    {
        return session(conf::get('RBAC_AUTH_KEY', 'rbac')) ? true : false;
    }

    /**
     * 用户登录操作
     * 用户登录成功后将权限信息写入$_SESSION
     * 如果用户登录成功并且用户名与$superadmin参数相同，此用户即为超级用户，不受任何访问权限限制
     * @param string $username              用户名
     * @param string $password              密码
     * @param string $superadmin            超级管理员帐号
     * @param string $fieldUserName         用户表中的用户名字段名称
     * @param string $fieldPassword         用户表中的密码字段名称
     * @return boolean
     */
    static public function login($username, $password, $superadmin = null, $fieldUserName = null, $fieldPassword = null){
        $superadmin = is_null($superadmin) ? conf::get('RBAC_SUPER_ADMIN', 'rbac') : $superadmin;
        $fieldUserName = is_null($fieldUserName) ? conf::get('RBAC_USERNAME_FIELD', 'rbac') : $fieldUserName; //用户表中的用户名字段名称
        $fieldPassword = is_null($fieldPassword) ? conf::get('RBAC_PASSWORD_FIELD', 'rbac') : $fieldPassword; //用户表中的密码字段名称
        if (!conf::get('RBAC_USER_TABLE', 'rbac')) {
            halt('用户表设置错误，请在配置文件中添加用户表');
        }
        $table_user = str_ireplace(conf::get('DB_PREFIX', 'db'), "", conf::get('RBAC_USER_TABLE', 'rbac')); //验证有无前缀得到用户表
        // echo "$fieldUserName='$username'";die;
        // echo $fieldUserName."++".$username;
        $db = new userModel();;
        $user = $db->selectUserByName($fieldUserName,$username);
        // dump($user);die;
        if (!$user) {
            self::$error = '用户不存在';
            return false;
        }
        if ($user[0][$fieldPassword] != $password) {
            self::$error = '密码输入错误';
            return false;
        }
        $uid = conf::get('RBAC_AUTH_KEY', 'rbac');//验证session中的key
        $db->table= conf::get('RBAC_ROLE_USER_TABLE', 'rbac');
        $sql = "SELECT * FROM " . conf::get('DB_PREFIX', 'db') . conf::get('RBAC_ROLE_TABLE', 'rbac') . " AS r," .
            conf::get('DB_PREFIX', 'db') .conf::get('RBAC_ROLE_USER_TABLE', 'rbac')  .
            " AS r_u WHERE r_u.role_id = r.id AND user_id = '" .
            $user[0]['id'] . "'";
        // echo $sql;die;
        $mdb = new Model();
        $userRoleInfo = $mdb->query($sql); //获得用户组信息
        dump($userRoleInfo);exit;

        $_SESSION['username'] = $user[0]['username'];
        $_SESSION[conf::get('RBAC_AUTH_KEY', 'rbac')] = $user[0]['id'];
        $_SESSION['role'] = $userRoleInfo[0]['name'];
        $_SESSION['rid'] = $userRoleInfo[0]['role_id'];
        // 是否判断超管理员
        // echo strtoupper($user[0]['username']);
        // echo strtoupper($superadmin);
        // p($superadmin);die;
        // p($_SESSION);die;
        if (strtoupper($user[0]['username']) == strtoupper($superadmin)) {
            //登录成功
            // echo C("RBAC_SUPER_ADMIN");die;
            $_SESSION[conf::get('RBAC_SUPER_ADMIN', 'rbac')] = 1;
            $_SESSION["RBAC"] = array();
            return true;
        }
        if (!$_SESSION['rid']) { //不属于任何角色
            self::$error = '不属于任何组，没有访问权限';
            return false;
        }
        self::getAccess(); //获得权限写入SESSION
        return true;
    }

    /**
     * 将rbac信息保存到$_SESSION中
     * $_SESSION['RBAC'] 权限数据组
     */
    static private function getAccess()
    {
        //清空原RBAC数据
        if (isset($_SESSION['RBAC'])) {
            $_SESSION['RBAC'] = '';
        }
        $table = self::getRbacTable(); //获得所有RBAC表
        $nodeTable = $table['RBAC_NODE_TABLE']; //节点表
        $accessTable = $table['access_table']; //权限表
        $roleTable = $table['RBAC_ROLE_TABLE']; //角色表
        $rid = intval($_SESSION['rid']); //角色ID
        //数据库权限
        $sql = "SELECT  n.id AS n_nid, n.name AS n_name, " .
            "n.title AS n_title,n.level AS n_level, n.pid AS n_pid " .
            "FROM " . $nodeTable . " AS n " .
            "INNER JOIN " . $accessTable . " AS a ON n.id = a.node_id " .
            "INNER JOIN " . $roleTable . " AS r ON r.id = a.role_id " .
            "WHERE a.role_id =" . $rid . " AND n.status =0 " .
            "AND r.status =0 " .
            "ORDER BY n.level,n.sort";
        // echo $sql;die;
        $db = new Model();
        $info =$db->query($sql);
        // p($info);die;
        if (!$info)
            return false;
        $accessNode = array_change_value_case($info);
        $access = array();
        foreach ($accessNode as $v) {
            if ($v['n_level'] == 1) {
                $access[$v['n_name']] = array();
                foreach ($info as $n) {
                    if ($n['n_pid'] == $v['n_nid']) {
                        $access[$v['n_name']][$n['n_name']] = array();
                        foreach ($info as $j) {
                            if ($j['n_pid'] == $n['n_nid']) {
                                $access[$v['n_name']][$n['n_name']][] = $j["n_name"];
                            }
                        }
                    }
                }
            }
        }
        $_SESSION["RBAC"] = array_change_key_case_d(array_change_value_case($access)); //将权限保存到SESSION
        return true;
    }

    /**
     * 获得角色所有节点
     * @param int $rid 角色ID，角色id如果传值将获得角色的所有权限信息
     * @return array
     */
    static public function getNodeList($rid = null)
    {
        $table = self::getRbacTable(); //获得所有RBAC表
        $nodeTable = $table['RBAC_NODE_TABLE']; //节点表
        $accessTable = $table['access_table']; //权限表
        $where = $rid ? " WHERE rid =$rid" : "";
        $sql = "SELECT n.nid,n.name ,n.title,n.state,n.pid ,n.level, " .
            " a.rid AS rid FROM " .
            $nodeTable . " AS n " .
            "LEFT JOIN (select * from $accessTable  $where) AS a " .
            "ON n.nid = a.nid " .
            "ORDER BY n.level,n.sort ASC";
        $data = M()->query($sql);
        if (!$data)
            return array();
        $nodes = array(); //组合后的节点
        foreach ($data as $n) {
            if ($n['level'] == 1) {
                $nodes[$n['nid']] = $n;
                $nodes[$n['nid']]['node'] = array();
                foreach ($data as $m) {
                    if ($n['nid'] == $m['pid']) {
                        $nodes[$n['nid']]['node'][$m['nid']] = $m;
                        $nodes[$n['nid']]['node'][$m['nid']]['node'] = array();
                        foreach ($data as $c) {
                            if ($m['nid'] == $c['pid']) {
                                $nodes[$n['nid']]['node'][$m['nid']]['node'][$c['nid']] = $c;
                            }
                        }
                    }
                }
            }
        }
        return array_change_key_case_d(array_change_value_case($nodes));
    }

    /**
     * 验证用户访问权限
     * @return boolean
     */
    static public function checkAccess(){
                // p($_SESSION);die;

        //不验证标识
        if (isset($_SESSION[conf::get('RBAC_SUPER_ADMIN', 'rbac')]) && !empty($_SESSION[conf::get('RBAC_SUPER_ADMIN', 'rbac')]))
            return true;
        //不需要验证
        if (self::noAuth()) {
            return true;
        }
        //没有登录
        if (!isset($_SESSION[conf::get('RBAC_AUTH_KEY', 'rbac')])) {
            return false;
        }
        //时时认证
        if (C("RBAC_TYPE") == 1) {
            self::getAccess();
        }
        //不需要验证的方法 例app/control/method
        if (self::noAuth()) {
            return true;
        }
        //如果不存在RBAC内容 不验证返回
        if (!isset($_SESSION['RBAC']) || empty($_SESSION['RBAC'])) {
            return false;
        }
        $access = $_SESSION['RBAC'];
        if (!is_array($access)) {
            return false;
        }
        $_app = strtolower(APP);
        $_control = strtolower(CONTROLLER);
        $_method = strtolower(ACTION);
        // p($access);die;
        if (array_key_exists_d($_app, $access)) {
            if (array_key_exists_d($_control, $access[$_app])) {
                if (in_array($_method, $access[$_app][$_control])) {
                    return true;
                }
            }
        }
        return false;
    }

    //检测不需要验证的方法
    static private function noAuth()
    {
        $noAuth = conf::get('RBAC_NO_AUTH', 'rbac');
        if (empty($noAuth) || !is_array($noAuth)) {
            return false;
        }
        // p($noAuth);die;
        foreach ($noAuth as $v) {
            $arr = preg_split("/\||\//", $v);
            // p($arr);
            if (count($arr) != 2) {
                error("配置项:RBAC_NO_AUTH 设置错误必须为[控制器/方法]格式", false);
            }
            if (strtolower(CONTROLLER) == strtolower($arr[0]) AND strtolower(ACTION) == strtolower($arr[1])) {
                return true;
            }
        }
        return false;
    }

}