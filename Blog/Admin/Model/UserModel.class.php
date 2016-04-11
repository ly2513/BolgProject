<?php
	//用户模型
	class UserModel extends Model{
		public $table='admin';//用户管理表
		//显示所有列表信息
		public function getAdmin(){
			return $this->order("aid asc")->select();
		}
		//添加管理员
		public function addUser($data){
			if($this->IsEmpty($data)){
				return $this->insert($data);
			}
		}
		//编辑管理员信息
		public function editUser($data){
			$aid=$data['aid'];
			return $this->where("aid=$aid")->update($data);	
		}
		private function IsEmpty($data){
			//管理员账号不能为空
			if(empty($data['username'])){
				$this->error='管理员账号不能为空';
				return false;
			}
			return true;
		}
	}

	



?>