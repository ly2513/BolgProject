<?php
	//模型基类
	class Model{
		public $error;//记录错误信息
		public $table;//表名
		public $opt=array(
				'field'=>'*',
				'where'=>'',
				'group'=>'',
				'having'=>'',
				'order'=>'',
				'limit'=>'',
			);
		//构造方法
		public function __construct($table=null){
			if($table)$this->table=$table;
			//数据库连接
			@mysql_connect(C('DB_HOST'),C('DB_USER'),C('DB_PASSWORD')) or die('数据库连接失败');
			//设置字符集
			mysql_query("SET NAMES ".C('DB_CHARSET'));
			//连接数据库
			// p(C());
			@mysql_select_db(C("DB_NAME")) or die('连接数据库失败');
		}
		public function field($opt){
			$this->opt['field']=$opt;
			return $this;
		}
		public function where($opt){
			$this->opt['where']=" WHERE ".$opt;
			return $this;
		}
		public function group($opt){
			$this->opt['group']=" GROUP BY ".$opt;
			return $this;
		}
		public function having($opt){
			$this->opt['having']=" HAVING ".$opt;
			return $this;
		}
		public function order($opt){
			$this->opt['order']=" ORDER BY ".$opt;
			return $this;
		}
		public function limit($opt){
			$this->opt['limit']=" LIMIT ".$opt;
			return $this;
		}
		//有结果集的查询
		public function query($sql){
			// echo $sql;exit;
			$result=mysql_query($sql);
			if($result){
				$rows=array();
				while($row=mysql_fetch_assoc($result)){
					$rows[]=$row;
				}

				// p($rows);exit;
				return $rows;
			}else{
				die(mysql_error());
			}
		}
		//没有结果集的查询
		public function exe($sql){
			$state=mysql_query($sql);
			if($state){
				$insertId=mysql_insert_id();
				return $insertId?$insertId:true;
			}else{
				die(mysql_error());
			}
		}
		//查询操作
		public function select(){
			$sql="SELECT {$this->opt['field']} FROM ".$this->table.$this->opt['where'].$this->opt['group'].$this->opt['having'].$this->opt['order'].$this->opt['limit'];
			// p(C());exit;
			// echo $sql;exit;
			return $this->query($sql);
		}
		//插入操作
		public function insert($data){
			//insert into table (cid,cname) values (1,'2');
			$sql="INSERT INTO ".$this->table;
			$field=array_keys($data);
			$value=array_values($data);
			$sql .= "(".implode(',', $field).") VALUES ('".implode("','", $value)."')";

			// echo $sql;
			return $this->exe($sql);
		}
		//更新操作
		public function update($data){
			//update table set cname='sbann' where cid=1;
			//没有条件，不执行更新操作
			if(empty($this->opt['where']))return false;
			$sql="UPDATE ".$this->table." SET ";
			foreach ($data as $name => $value) {
				$sql.=$name."='$value',";
			}
			$sql=substr($sql,0,-1).$this->opt['where'];
			// echo $sql;exit;
			return $this->exe($sql);
		}
		//删除操作
		public function delete(){
			//delete from table where cid=1;
			//没有条件，不执行更新操作
			if(empty($this->opt['where']))return false;
			$sql="DELETE FROM ".$this->table.$this->opt['where'].$this->opt['order'].$this->opt['limit'];
			return $this->exe($sql);
		}
		//查询一条记录
		public function find(){
			$data=$this->select();
			return $data?current($data):$data;
		}
		//获得受影响的记录条数
		public function getAfacterRow(){
			return mysql_affected_rows();
		}
		//获取总的记录数
		public function count(){
			$data=$this->query("select count(*) as c from ".$this->table);
			return $data[0]['c'];
		}
		//统计每个人栏目的记录数
		public function countcategory(){
			$cid=$_GET['cid'];
			$this->opt['where']=" WHERE cid=".$cid;
			$where=$this->opt['where'];
			$data=$this->query("select count(*) as c from ".$this->table.$where);
			return $data[0]['c'];
		}
	}





?>