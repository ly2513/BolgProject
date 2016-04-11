<?php
//index模块控制类
	class IndexController extends Controller{
		public function index(){
			$this->assign('a','欢迎使用LYPHP框架！');
			$this->display('index.html');
		}
		
	}





?>