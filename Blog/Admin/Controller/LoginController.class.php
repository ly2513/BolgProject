<?php
	//登入控制类
	class LoginController extends Controller{
		private $db;//模型对象
		//自定义的构造函数
		public function __init(){
			$this->db=new AdminModel;
		}
		//管理员登录
		public function Login(){
			if(IS_POST){
				if($this->db->userLogin($_POST)){
					//登录成功，跳转到后台
					$this->success('登录成功',_MODEL_);	
				}else{
					$this->error($this->db->error);
				}
			}else{
				//登录失败，显示登录界面
				
				$this->display('login.html');
			}	
		}
		//退出登录
		public function out(){
			session_unset();
			session_destroy();//结束session会话
			$this->success('退出成功',_CONTROLLER_.'&a=Login');
		}

		public function code(){
			$code=new Code;//实例化一个验证码对象
			$code->width=100;
			$code->height=40;
			$code->font_color='#c40000';
			$code->font_size=20;
			$data=$code->create();
			$this->assign('code',$data);
			$this->display('check.php');
		}



	}




?>