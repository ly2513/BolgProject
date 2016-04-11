<?php
		//栏目模型
	class CategoryModel extends Model{
		public $table='category';//栏目表
		//获得所有栏目
		public function getAll(){
			return $this->order('cid asc')->select();
		}
		//添加栏目
		public function addCategor($data){
			if(empty($data['catname'])){
				$this->error='栏目名不能为空';
				return false;
			}
			return $this->insert($data);
		}
		
		//编辑栏目
		public function editCategor($data){
			if(!$this->IsEmpty($data)) return false;
			if($this->where("cid<>{$_GET['cid']} and catname='{$data['catname']}'")->select()){
				$this->error='栏目名已存在';
				return false;
			}else{
				return $this->where("cid={$_GET['cid']}")->update($data);
			}
			

		}
		//删除栏目deleteCategor
		public function deleteCategor(){
			return $this->where("cid={$_GET['cid']}")->delete();
			
		}
		private function IsEmpty($data){
			//栏目名不能为空
			if(empty($data['catname'])){
				$this->error='栏目名不能为空';
				return false;
			}
			return true;
		}


	}





?>