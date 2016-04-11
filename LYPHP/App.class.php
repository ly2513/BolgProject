<?php
	//应用控制类
	class App{
		public function run(){
			//开启会话机制
			session_start();
			//判断post的数据是否为空
			define('IS_POST',!empty($_POST));
			//模块
			$model=isset($_GET['m'])?ucfirst($_GET['m']):'Index';
			//控制器
			$controller=isset($_GET['c'])?ucfirst($_GET['c']):'Index';
			//动作
			$action=isset($_GET['a'])?$_GET['a']:'Index';
			//模块名称
			define('MODEL',$model);
			//控制器名称
			define('CONTROLLER',$controller);
			//动作名称
			define('ACTION', $action);
			//模块路径
			define('MODEL_PATH',APP_PATH.MODEL.'/');
			//网站根目录
			define('_ROOT_','http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
			//网站的url
			define('_WEB_','http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']);
			//View路径
			define('_VIEW_',_ROOT_.'/'.MODEL_PATH.'View/'.CONTROLLER.'/');

			//模块url
			define('_MODEL_',_WEB_.'?m='.MODEL);
			//控制器的url
			define('_CONTROLLER_',_MODEL_.'&c='.CONTROLLER);
			//动作url
			define('_ACTION_',_MODEL_.'&a='.ACTION);
			//加载框架核心配置项
			C(require LYPHP_PATH.'Config.php');
			//加载模块配置项
			if(is_file(MODEL_PATH.'Config/Config.php')){
				C(require MODEL_PATH.'Config/Config.php');
			}
			//类名
			$classname=CONTROLLER.'Controller';
			//加载类文件
			require MODEL_PATH.'Controller/'.$classname.'.class.php';
			//实例化一个类对象
			$obj=new $classname;
			//执行具体的动作
			$obj->$action();
		}
		


	}





?>