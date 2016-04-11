<?php
	class AuthController extends Controller{
		//判断管理员是否登入
		public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['username'])){
				$this->error('请登录后再操作',_MODEL_.'&c=Login&a=Login');
			}
		}
	}





?>