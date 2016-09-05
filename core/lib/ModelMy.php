<?php 
namespace core\lib;
use core\lib\conf;
/**
 * 数据库模型类
 */
class ModelMy{
	//保存链接信息
	public static $link;
	//保存表名
	public $table = NULL;
	//初始化表信息
	private $opt;
	//记录发送的sql
	public static $sqls = array();
	/**
	 * [__construct 自动组合表名并连接数据库初始化sql]
	 * @param [type] $table [description]
	 */
	public function __construct($table=NULL){
		$this->table = is_null($table) ? conf::get('DB_PREFIX','db') . $this->table : conf::get('DB_PREFIX','db'). $table;
		//连接数据库
		$this->_connect();
		//初始化sql信息
		$this->_opt();
	}
	/**
	 * [_connect 链接数据库]
	 * @return [type] [description]
	 */
	private function _connect(){
		if(is_null(self::$link)){
			$db = conf::get('DB_DATABASE','db');
			if(empty($db)) halt("请先配置数据库！");
			$link = new Mysqli(conf::get('DB_HOST','db'),conf::get('DB_USER','db'),conf::get('DB_PASSWORD','db'),$db,conf::get('DB_PORT','db'));
			if($link->connect_error)halt("数据库连接出错，请检查数据库配置");
			$link->set_charset(conf::get('DB_CHARSET','db');
			self::$link = $link;
		}
	}
	/**
	 * [_opt 初始化sql信息]
	 * @return [type] [description]
	 */
	private function _opt(){
		$this->opt = array(
			'field' => '*',
			'where' => '',
			'group' => '',
			'having'=> '',
			'order' => '',
			'limit' => ''
			);
	}
	/**
	 * 查询数据表的条数
	 */
	public function count(){
		$sql = "SELECT count(*) FROM ".$this->table;
		$result = $this->query($sql);
		$res = current($result);
		return $res['count(*)'];
	}
	/**
	 * [query sql查询方法]
	 * @param  [type] $sql [description]
	 * @return [type]      [description]
	 */
	public function query($sql){
		self::$sqls[] = $sql;
		$link = self::$link;
		// echo $sql;//die;
		$result = $link->query($sql);
		if($link->errno)halt("mysql错误：".$link->error.'<br />SQL:'.$sql);//有错误则输出错误
		$rows = array();
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		$result->free();//释放结果集
		$this->_opt();//初始化sql
		return $rows;
	}
	/**
	 * [all 查询所有记录]
	 * @return [type] [description]
	 */
	public function all(){
		// echo $this->table;die;
		$sql = "SELECT " . $this->opt['field'] . " FROM " . $this->table . $this->opt['where'] . $this->opt['having']  . $this->opt['group']  . $this->opt['order']. $this->opt['limit'];
		//echo $sql;
		return $this->query($sql);
	}
	/**
	 * [findAll all的别名]
	 * @return [type] [description]
	 */
	public function findAll(){
		return $this->all(); 
	}
	/**
	 * [find 查找一条记录]
	 * @return [type] [description]
	 */
	public function find(){
		$data = $this->limit(1)->all();
		$data = current($data);
		return $data;
	}
	/**
	 * [one find()的别名]
	 * @return [type] [description]
	 */
	public function one(){
		return $this->find();
	}
	/**
	 * [field 根据filed的条件查询]
	 * @param  [type] $filed [description]
	 * @return [type]        [description]
	 */
	public function field($field){
		$fields = '';
		if(is_array($field)){
			foreach ($field as $key => $value) {
				$fields .= '`'. $value .'`,';
			}
			$fields = trim($fields,',');
			// echo $fields;die;
			$this->opt['field'] = $fields;
		}else{
			$this->opt['field'] = $field;
		}
		
		return $this;
	}
	/**
	 * [where 根据where条件查询]
	 * @param  [type] $where [description]
	 * @return [type]        [description]
	 */
	public function where($where){
		if($where == '' || strlen($where) == 0) return $this;
		$this->opt['where'] = " WHERE ".$where;
		return $this;
	}
	/**
	 * [group 根据group条件查询]
	 * @param  [type] $group [description]
	 * @return [type]        [description]
	 */
	public function group($group){
		$this->opt['group'] = " GROUP ". $group;
		return $this;
	}
	/**
	 * [order 根据order条件查询]
	 * @param  [type] $order [description]
	 * @return [type]        [description]
	 */
	public function order($order){
		$this->opt['order'] = " ORDER BY " . $order;
		return $this;
	}
	/**
	 * [limit 根据limit条件查询]
	 * @param  [type] $limit [1,2]
	 * @return [type]        [description]
	 */
	public function limit($limit){
		$this->opt['limit'] = " LIMIT " . $limit;
		return $this;
	}
	/**
	 * [exe 实现除了查询之外的mysql操作]
	 * @param  [type] $sql [description]
	 * @return [type]      [description]
	 */
	public function exe($sql){
		// p($sql);
		self::$sqls[] = $sql;
		$link = self::$link;
		$bool = $link->query($sql);
		$this->_opt();
		if (is_object($bool)) {
			halt("请用query()方法来实现查询！");
		}
		if($bool){
			return $link->insert_id ? $link->insert_id : $link->affected_rows;
		}else{
			halt("mysql错误：".$link->error."<br />SQL:".$sql);
		}
	}
	/**
	 * [delete 删除数据库数据]
	 * @return [type] [description]
	 */
	public function delete(){
		if(empty($this->opt['where']))halt("删除语句必须要where条件");
		$sql = "DELETE FROM " .$this->table . $this->opt['where'];
		return $this->exe($sql);
	}
	/**
	 * [_safe_str sql字符串安全转义]
	 * @param  [type] $str [description]
	 * @return [type]      [description]
	 */
	private function _safe_str($str){
		if(get_magic_quotes_gpc()){
			$str = stripslashes($str);
		}
		return self::$link->real_escape_string($str);
	}
	/**
	 * [add 添加数据库记录]
	 * @param [type] $data [description]
	 */
	public function add($data=NULL){
		if(is_null($data)) $data = $_POST;
		$fields = '';
		$values = '';
		foreach ($data as $k => $v) {
			$fields .= '`' . $this->_safe_str($k) . '`,';
			$values .= "'" . $this->_safe_str($v) . "',";
		}
		$fields = trim($fields, ',');
		$values = trim($values, ',');
		$sql = "INSERT INTO " . $this->table . " (". $fields .") VALUES (". $values .")";
		return $this->exe($sql);
	}
	public function addAll($data = NULL){
		if(is_null($data)) $this->add();
		if(arrayLevel($data) > 1){
			foreach ($data as $v) {
				// p($v);
				// p(arrayLevel($v));
				if(arrayLevel($v) == 1){
					// echo 1;die;
					
					$result = $this->add($v);
				}else{
					$result = $this->addAll($v);
				}
			}
		}else{
			$result = $this->add($data);
		}
		return $result;
	}
	/**
	 * [update 更新数据库记录操作]
	 * @param  [array] $data [description]
	 * @return [type]       [description]
	 */
	public function update($data = NULL){
		if(empty($this->opt['where']))halt('更新语句必须含有where条件');
		if(is_null($data)) $data = $_POST;
		$fields = '';
		foreach ($data as $k => $v) {
			$fields .= "`" . $this->_safe_str($k) . "`='" . $this->_safe_str($v) ."',";
		}
		$fields = trim($fields, ',');
		// update hd_message set `nickname`='kuaixue',content='快学' where mid=13;
		// p($this->opt['where']);
		$sql = "UPDATE " . $this->table . " SET " . $fields . $this->opt['where'];
		// p($sql);die;
		return $this->exe($sql);
	}
}
?>