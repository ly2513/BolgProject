<?php
require APP_PATH.'Admin/Model/CategoryModel.class.php';
//index模块控制类
	class IndexController extends Controller{
		// private $db;//模型
		public function __init(){
			// 分配栏目
			$catDb=new CategoryModel;
			$category=$catDb->getAll();
			foreach ($category as $id => $cat) {
				if(isset($_GET['cid'])&&$_GET['cid']==$cat['cid']){
					$category[$id]['style']=" id='nav_current' ";
				}else{
					$category[$id]['style']='';
				}
			}
			$this->assign('category',$category);
			//只获取4条栏目名
			$categoryfour=$catDb->limit(4)->getAll();
			$this->assign('categoryfour',$categoryfour);
			// p($categoryfour);exit;
			//获得最新Blog
			$db=new Model('blog');
			$sql="select * from blog order by bid desc limit 9";
			$NewBlog=$db->query($sql);
			$this->assign('NewBlog',$NewBlog);
			//热门点击
			$clicksql="select * from blog as b join category as c on b.cid=c.cid order by click limit 7";
			$hotfield=$db->query($clicksql);
			$this->assign('hotfield',$hotfield);
			//相关文章
		} 

		public function index(){
			// $this->assign('a','欢迎使用LYPHP框架！');
			// 只显示cid的文章
			if(isset($_GET['cid'])){
				$where=" where cid=".$_GET['cid'];
			}else{
				$where='';
			}
			$db=new Model('blog');
			$count=$db->where("$where")->count();
			$page= new Page($count,4);
			//查找数据
			$sql = "select * from blog $where order by bid desc limit ".$page->limit();
			$data= $db->query($sql);
			$this->assign('data',$data);
			$this->assign('page',$page->show());

			$this->display('index.html');
		}
		public function showBlog(){
			if(isset($_GET['cid'])){
				$where=" where cid=".$_GET['cid'];
			}else{
				$where='';
			}
			$db=new Model('blog');
			$count=$db->countcategory();
			// echo $count;exit;
			$page= new Page($count,4);
			//查找数据
			$sql = "select * from blog $where order by bid desc limit ".$page->limit();
			$data= $db->query($sql);
			$this->assign('data',$data);
			$this->assign('page',$page->show());
			$this->display('show.html');
		}
		//博客详情
		public function blog(){
			//博客详情
			$db=new Model('blog');
			$bid=$_GET['bid'];
			$sql="select * from blog as b join category as c on b.cid=c.cid join admin as a on a.aid=b.aid where bid=$bid";
			$field=$db->query($sql);
			// p($field[0]);
			$this->assign('field',$field[0]);
			//相关文章
			$cid=$_GET['cid'];
			$sql1="select * from blog where cid=$cid and bid<>$bid order by bid desc limit 4";
			// p($db->query($sql1));
			$this->assign('related',$db->query($sql1));
			$this->display('view.html');
		} 
		//点击录
		public function getClick(){
			$bid =$_GET['bid'];
			$db=new Model('blog');
			$sql="update blog set click=click+1 where bid=$bid";
			$db->exe($sql);
			$field=$db->where("bid=$bid")->find();
			// p($field);exit;
			echo "document.write({$field['click']})";
		} 
			
	}





?>