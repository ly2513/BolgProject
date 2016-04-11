<?php
//栏目控制类继承AuthController
	class CategoryController extends AuthController{
		private $db;//模型
		public function __init(){
			$this->db=new CategoryModel; 
		}
		//显示栏目信息
		public function index(){
			$data=$this->db->getAll();
			$this->assign('data',$data);
			$this->display('index.html');
		}
		//添加栏目信息
		public function add(){
			if(IS_POST){
				if($this->db->addCategor($_POST)){
					$this->success('添加栏目成功',_CONTROLLER_);
				}else{
					$this->error($this->db->error);
				}
			}else{
				$this->display('add.html');
			}
		}
		//编辑栏目信息
		public function edit(){
			if(IS_POST){
				if($this->db->editCategor($_POST)){
					$this->success('编辑栏目成功',_CONTROLLER_);
				}else{
					$this->error($this->db->error);
				}
			}else{
				$data=$this->db->where("cid={$_GET['cid']}")->find();
				$this->assign('data',$data);
				$this->display('edit.html');
			}	
		}
		//删除栏目
		public function delete(){
			if($this->db->where("cid={$_GET['cid']}")->deleteCategor()){
				$this->success('删除栏目成功',_CONTROLLER_);
			}else{
				$this->error($this->db->error);
			}
		}




	}



?>