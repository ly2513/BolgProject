<?php
//后台
	class IndexController extends AuthController{
		//构造函数
		public function __init(){}
		public function index(){
			//后台首页
			$this->display('index.html');
		}
		//引后台头部
		public function top(){
			$this->display('top.html');
		}
		//引后台左部
		public function left(){
			$this->display('left.html');
		}
		//引后台右部
		public function right(){
			$this->display('mainfra.html');
		}
	}




?>