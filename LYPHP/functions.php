<?php
	//打印方法
	function p($data){
		echo '<pre>'.print_r($data,true).'</pre>';
	}

	//通过魔术函数__autoload()自动加载类
	function __autoload($classname){
		if(substr($classname,-10)=='Controller'&&requireArray(array(
			//加载控制器类
				MODEL_PATH.'Controller/'.$classname.'.class.php',
				LYPHP_PATH.'Controller.class.php',
			)
		)){}else if(substr($classname,-5)=='Model'&&requireArray(array(
			//加载模型类
				MODEL_PATH.'Model/'.$classname.'.class.php',
				
			)
		)){}else{
			//加载工具类
			require LYPHP_PATH.'Tool/'.$classname.'.class.php';
		}
	}

	function requireArray($files){
		foreach ($files as $file) {
			if(is_file($file)){
				require $file;
				return true;
			} 	
		}
	}

	//C函数
	//说明
	//C(data,value);1、设置某一个配置项的值 2、批量设置配置项的值
	//C(data);输出某个配置项的值
	//C();输出所有配置项的值
	function C($data=null,$value=null){
		//$config用于存储变量的值
		static $config=array();
		if(is_null($data)){
			//C();输出所有配置项的值
			return $config;
		}else if(is_array($data)){
			$config=array_merge($config,$data);
		}else if(is_null($value)){
			//C(data);输出某个配置项的值
			return $config[$data]?$config[$data]:null;
		}else{
			//C(data,value);1、设置某一个配置项的值
			$config[$data]=$value;
		}
	}
	//打印常量的函数
	function print_const(){
		$data=get_defined_constants(true);
		p($data['user']);
	}




?>