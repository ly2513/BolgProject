<?php
	//管理员登录操作模型类
	class AdminModel extends Model{
		public $table='admin';//设置表名
		//用户登录
		public function userLogin($data){
			if(empty($data['username'])){
				$this->error='账号不能为空';
				return false;
			}
			if(empty($data['password'])){
				$this->error='密码不能为空';
				return false;
			}
			$user=$this->where("username='{$data['username']}'")->find();
			if(empty($user)){
				$this->error='用户不存在';
				return false;
			}
			if(md5($data['password'])!=$user['password']){
				$this->error='密码错误';
				return false;
			}
			if(empty($data['code'])){
				$this->error='验证码不能为空';
				return false;
			}
			if($_SESSION['code']!=$data['code']){
				$this->error='验证码输入错误';
				return false;
			}

			$_SESSION['aid']=$user['aid'];
			$_SESSION['username']=$user['username'];
			return true;
		}






	}



?>