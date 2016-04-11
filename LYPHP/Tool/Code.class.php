<?php
	//画布指定宽度、高度、验证码数量、设置文字大小、文字颜色、背景颜色、字体
	class Code{
		//设置默认值
		public $width=150;//画布宽度
		public $height=50;//画布高度
		public $num=4;//验证码数量
		public $font_size=30;//设置文字大小
		public $font_color='';//文字颜色
		public $bg_color='#FFFFFF';//背景颜色
		public $fontfile;//字体
		private $fontColorRes;//文字颜色资源
		private $code;//验证码
		private $img;//画布资源，便于各类方法共享
		//构造函数
		public function __construct(){
			$this->fontfile=LYPHP_PATH.'Tool/font.ttf';
		}
		//创建验证码
		public function create(){
			//创建画布资源
			$this->createRes();
			//获得验证码的文字
			$this->getCode();
			//写字
			$this->createText();
			//划点、线
			$this->setFix();
			//显示验证码
			$this->show();

		}
		//创建画布资源
		private function createRes(){
			//创建画布
			$this->img=imagecreatetruecolor($this->width,$this->height);
			//定义画布背景颜色
			$color=$this->getColor($this->bg_color);
			//设置边框颜色
			$borderColor=$this->getColor('#999999');
			//填充画布颜色
			imagefill($this->img,0,0,$color);
			//绘制空心矩形
			imageRectangle($this->img,0,0,$this->width-1,$this->height-1,$borderColor);
			// imagerectangle($this->img, 0, 0, $this->width-1,$this->height-1, $borderColor);
		}
		//将十六进制的颜色值转为php能处理的颜色值列如：#ffffff
		private function getColor($color){
			$color=substr($color, 1);//去掉# (mb_substr用于截取汉字)
			//获取red;
			$red=hexdec(substr($color, 0,2));//ff red ,hexdec()将十六进制转为十进制函数
			$green=hexdec(substr($color, 2,2));//ff green
			$blue=hexdec(substr($color, 4,2));//ff blue
			//返回颜色
			return imagecolorallocate($this->img,$red,$green,$blue);
		}
		//获得验证码的文字
		private function getCode(){
			//验证码种子
			$seek='123456789qwertyuipasdfghjklzxcvbnmQWERTYUIPASDFGHJKLZXCVBNM';
			$num1=strlen($seek);
			$str='';
			for($i=0;$i<$this->num;$i++){
				$index=mt_rand(0,$num1-1);
				$str.=$seek[$index];
			}
			$this->code=$str;
			//将验证码存入session中,不区分大小写
			$_SESSION['code']=strtolower($this->code);
		}
		//写字
		private function createText(){
			//文字盒子获取文字占的空间
			imagettfbbox($this->font_size, 0, $this->fontfile, $this->code);
			if(isset($this->font_color)){
				//获取字体颜色，将16进制的颜色值转换为php能处理的颜色值
				$color=$this->getColor($this->font_color);
				$this->fontColorRes=$color;
			}
			
			//每个字的宽度(画布的宽度/验证码文字的个数)
			$font_w=$this->width/$this->num;
			for($i=0;$i<$this->num;$i++){
				$x=$font_w*$i+7;//设置每个字的宽度
				if(!isset($this->font_color)){
					//设置随机颜色
					$color=imagecolorallocate($this->img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
				}
				//像图像写入文本
				imagettftext($this->img, $this->font_size, mt_rand(-20,20), $x, $this->height*0.8, $color, $this->fontfile, $this->code[$i]);
			}
		}
		//划杂线、点
		private function setFix(){
			//画点
			for($i=0;$i<200;$i++){
				imagesetpixel($this->img, mt_rand(0,$this->width),mt_rand(0,$this->height), $this->fontColorRes);
			}
			//划线
			for($i=0;$i<20;$i++){
				imageline($this->img, mt_rand(0,$this->width), mt_rand(0,$this->height), mt_rand(0,$this->width), mt_rand(0,$this->height), $this->fontColorRes);
			}
		}
		//显示验证码
		private function show(){
			// header('content-type:image/png');
			imagepng($this->img);
		}


	}



?>