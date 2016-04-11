<?php
	//Blog控制类
	class BlogController extends AuthController{
		public $db;//Blog模型
		//构造函数
		public function __init(){
			$this->db=new BlogModel;
		}
		//显示博客内容列表
		public function index(){
			$data=$this->db->getAll();
			$this->assign('data',$data['blog']);
			$this->assign('page',$data['page']);
			$this->display('index.html');
		}
		// //显示博客内容列表
		// public function show(){
		// 	$cid=$_GET['cid'];
		// 	$data=$this->db->where("cid=$cid")->order("bid desc")->getAll();
		// 	$this->assign('data',$data['blog']);
		// 	$this->assign('page',$data['page']);
		// 	$this->display('index.html');
		// }
		//添加博客内容
		public function add(){
			if(IS_POST){
				if($this->db->addBlog($_POST)){
					$this->success('添加博客成功',_CONTROLLER_);
				}else{
					$this->error($this->db->error);
				}
			}else{
				//显示添加界面，将blog栏目加载进来
				$catGory=new CategoryModel;
				$categoryData=$catGory->getAll();
				$this->assign('categoryData',$categoryData);
				$this->display('add.html');
				
			}
		}
		//博客编辑
		public function edit(){
			if(IS_POST){
				if($this->db->editBlog()){
					$this->success('修改博客成功',_CONTROLLER_);
				}else{
					$this->error($this->db->error);
				}
			}else{
				$bid=$_GET['bid'];
				$field=$this->db->where("bid=$bid")->select();
				
				$catGory=new CategoryModel;
				$categoryData=$catGory->getAll();
				// p($categoryData);exit;
				foreach ($categoryData as $id => $cat) {
					$categoryData[$id]['selected']=$cat['cid']==$field[0]['cid']?" selected=''":'';
				}
				$this->assign('field',$field[0]);
				$this->assign('categoryData',$categoryData);
				$this->display('edit.html');
			}
		}
		//删除博客操作
		public function delete(){
			if(isset($_GET['bid'])){
				if($this->db->deleteBlog()){
					$this->success("删除博客成功",_CONTROLLER_);
				}else{
					$this->error($this->db->error);
				}
			}
		}

	}




?>