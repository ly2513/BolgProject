<?php
	//控制类的基类继承Smarty类
	class Controller extends Smarty{
		//通过构造方法来动态设置Smarty模板的路径和编译路径
		 public function __construct(){
		 	//设置模板目录
		 	$this->template_dir=MODEL_PATH.'View/'.CONTROLLER.'/';
		 	//设置模板编译目录
		 	$this->compile_dir=MODEL_PATH.'View/'.CONTROLLER.'/Compile/';
		 	$this->left_delimiter='{ly:';//设置左边界
		 	//自动创建模板目录和编译目录
		 	is_dir($this->template_dir) or mkdir($this->template_dir,0755,true);
		 	is_dir($this->compile_dir) or mkdir($this->compile_dir,0755,true);
		 	//设置一个构造函数
		 	if(method_exists($this, '__init')) $this->__init();
		 }
		 //提示操作成功
		 public function success($msg='操作成功',$url=null){
		 	//设置模板目录
		 	$this->template_dir=MODEL_PATH.'View/Public/';
		 	//设置模板编译目录
		 	$this->compile_dir=MODEL_PATH.'View/Public/Compile/';
		 	$this->assign('msg',$msg);
		 	$this->assign('url',$url);
		 	$this->display('success.html');
		 	exit;//停止运行其他的代码
		 }
		  //提示操作成功
		 public function error($msg='操作失败',$url=null){
		 	//设置模板目录
		 	$this->template_dir=MODEL_PATH.'View/Public/';
		 	//设置模板编译目录
		 	$this->compile_dir=MODEL_PATH.'View/Public/Compile/';
		 	$this->assign('msg',$msg);
		 	$this->assign('url',$url);
		 	$this->display('error.html');
		 	exit;//停止运行其他的代码
		 }
	}



?>