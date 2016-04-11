<?php
	class Page{
		private $totalPage;//总页数
		private $selfPage;//当前页
		private $url;//地址
		private $row;//每页显示条数
		public function __construct($total,$row=10){
			$this->row=$row;
			$this->totalPage=ceil($total/$row);//ceil()向下取整
			$this->selfPage=isset($_GET['page'])?min(intval($_GET['page']),$this->totalPage):1;
			$this->url=$this->getUrl();
		}
		//获取当前页的url
		private function getUrl(){
			if(isset($_GET['page']))unset($_GET['page']);
			$url=_WEB_.'?';
			foreach ($_GET as $name => $value) {
				$url.=$name."=".$value.'&';
			}
			$url.='page=';
			return $url;
		}
		//显示页
		public function show(){
			$html='';
			for($i=1;$i<=$this->totalPage;$i++){
				if($i==$this->selfPage){
					$html.="<strong style='margin:0 10px;' class='page1'>{$i}</strong>";
				}else{
					$url=$this->url.$i;
					$html.="<a href='{$url}'style='margin:0 10px;'class='page'>{$i}</a>";
				}
			}
			return $html;
		}
		//返回SQL语句需要的limit值
		public function limit(){
			return ($this->selfPage-1)*$this->row.",".$this->row;
		}

	}
	


?>