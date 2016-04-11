<?php
	//用户管理类
	class UserController extends AuthController{
		private $db;//用户模型
		public function __init(){
			$this->db=new UserModel;
		}
		//显示所有信息
		public function index(){
			$data=$this->db->getAdmin();
			$this->assign('data',$data);
			// p($data[0]);
			$this->display('index.html');
		}
		//添加管理员
		public function add(){
			if(IS_POST){
				// p($_POST);exit;
				if($_POST['password']==$_POST['repassword']){
					$_POST['password']=md5($_POST['password']);//密码加密
					unset($_POST['repassword']);
					if($this->db->addUser($_POST)){
						$this->success('添加管理员成功',_CONTROLLER_);
					}else{
						$this->error($this->db->error);
					}
				}else{
					$this->error('两次输入的密码不一致,请重新输入！');
				}
			}else{
				$this->display('add.html');
			}
		}
		//编辑管理员信息
		public function edit(){
			$aid=$_GET['aid'];
			$data=$this->db->where("aid=$aid")->find();
			if(IS_POST){
				if(md5($_POST['oldpassword'])==$data['password']){
					$_POST['password']=md5($_POST['password']);
					unset($_POST['oldpassword']);
					if($this->db->editUser($_POST)){
						$this->success('修改管理员信息成功',_CONTROLLER_);
					}else{
						$this->error($this->db->error);
					}	
				}else{
					$this->error('输入的旧秘密有误！');
				}	
			}else{
				$this->assign('data',$data);
				$this->display("edit.html");
			}
		}
		//删除管理员信息
		public function delete(){
			$aid=$_GET['aid'];
			if($this->db->where("aid=$aid")->delete()){
				$this->success('删除管理员信息成功',_CONTROLLER_);
			}else{
				$this->error('删除管理员信息失败');
			}
		}
	}



?>