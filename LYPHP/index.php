<?php
	header('Content-type:text/html;charset=utf-8');//设置编码
	date_default_timezone_set("PRC");//设置时区
	//框架入口
	class LYPHP{
		//框架运行
		static public function run(){
			//定义框架根目录
			define('LYPHP_PATH',dirname(__FILE__).'/');
			//框架加载时必要的文件
			self::loadFiles();
			//创建一个示范目录，让用户了解目录结构 
			self::createDirs();
			//应用控制类运行
			App::run();
		}
		//用于加载框架必要的文件
		static private function loadFiles(){
			$files= require LYPHP_PATH.'files.php';
			foreach ($files as $file) {
				is_file($file) and require $file;
			}
		}
		//创建一个示范目录，让用户了解目录结构
		static private function createDirs(){
			//判断目录APP_PATH是否存在
			if(is_dir(APP_PATH)) return false;
			//创建一个示范目录
			$AppDirs=array(
					APP_PATH,//应用根目录
					APP_PATH.'Index/',//模块目录
					APP_PATH.'Index/Controller/',//控制器目录
					APP_PATH.'Index/Config/',//模块配置目录
					APP_PATH.'Index/Model/',//模型目录
					APP_PATH.'Index/View/',//视图目录
					APP_PATH.'Index/View/Index/',//smarty模板目录
					APP_PATH.'Index/View/Index/Compile/',//smarty模板编译目录
					APP_PATH.'Index/View/Public/',//公用模板目录
					APP_PATH.'Index/View/Public/Compile/',//公用模板编译目录
				);
			foreach ($AppDirs as $dir) {
				is_dir($dir) or mkdir($dir,0755,true);
			}
			copy(LYPHP_PATH.'Tpl/Controller.php',APP_PATH.'Index/Controller/IndexController.class.php');
			copy(LYPHP_PATH.'Config.php',APP_PATH.'Index/Config/Config.php');
			copy(LYPHP_PATH.'Tpl/index.html',APP_PATH.'Index/View/Index/index.html');
			copy(LYPHP_PATH.'Tpl/success.html',APP_PATH.'Index/View/Public/success.html');
			copy(LYPHP_PATH.'Tpl/error.html',APP_PATH.'Index/View/Public/error.html');
		}
	}
//框架运行
LYPHP::run();



?>