<?php
	//博客模型类
	class BlogModel extends Model{
		public $table='blog';//博客表
		//获得博客的所有内容
		public function getAll(){
			$result=$this->count();//总共要显示的内容数
			$page=new Page($result,10);
			$pageStr=$page->show();
			$limit=$page->limit();
			$sql="select * from blog as b join category as c on b.cid=c.cid order by bid desc limit {$limit}";
			// echo $sql;
			$blog=$this->query($sql);
			return array('blog'=>$blog,'page'=>$pageStr);
		}
		//添加博客内容
		public function addBlog(){
			//有上传缩略图就处理
			if(!empty($_FILES['thumb']['name'])){
				$upload=new Upload;
				$files=$upload->upload();
				$thumb=new Thumb;
				$thumb->thumb_width=150;
				$thumb->thumb_height=150;
				//将上传图片路径存到$_POST['thumb']
				$_POST['thumb']=$thumb->thumb($files[0]['path']);
			}
			//将上传时间压入$_POST['time'];
			$_POST['addtime']=time();
			return $this->insert($_POST);
		}
		//编辑博客内容
		public function editBlog(){
			//有上传缩略图就处理
			if(!empty($_FILES['thumb']['name'])){
				if(is_file($_POST['thumb'])){
					unset($_POST['thumb']);
				}
				$upload=new Upload;
				$files=$upload->upload();
				$thumb=new Thumb;
				$thumb->thumb_width=150;
				$thumb->thumb_height=150;
				// 将上传图片路径存到$_POST['thumb']
				$_POST['thumb']=$thumb->thumb($files[0]['path']);	
			}
			//将上传时间压入$_POST['time'];
			$_POST['addtime']=time();
			return $this->where("bid={$_POST['bid']}")->update($_POST);
		}
		//删除博客
		public function deleteBlog(){
			$bid=$_GET['bid'];
			$data=$this->where("bid=$bid")->select();
			//删除上传图片
			foreach ($data as $k => $v){
				if(is_file($v['thumb'])){
					unlink($v['thumb']);
				}
			}
			return $this->where("bid=$bid")->delete();
		}




	}




?>