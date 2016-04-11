<?php /* Smarty version 2.6.26, created on 2014-10-25 11:08:49
         compiled from view.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'view.html', 27, false),)), $this); ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>李勇个人博客</title>
<meta name="keywords" content="个人网站" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站" />
<link href="<?php echo @_VIEW_; ?>
css/styles.css" rel="stylesheet">
<link href="<?php echo @_VIEW_; ?>
css/view.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="<?php echo @_VIEW_; ?>
css/lrtk.css" rel="stylesheet" />
<script type="<?php echo @_VIEW_; ?>
text/javascript" src="js/jquery.js"></script>
<script type="<?php echo @_VIEW_; ?>
text/javascript" src="js/js.js"></script>
<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
      <h2 class="t_nav"><a href="?m=Index&c=Index&a=index">网站首页</a><a href="?cid=<?php echo $this->_tpl_vars['field']['cid']; ?>
"><?php echo $this->_tpl_vars['field']['catname']; ?>
</a></h2>
      <h1 class="c_titile"><?php echo $this->_tpl_vars['field']['title']; ?>
</h1>
      <p class="box">发布时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<span>编辑：<?php echo $this->_tpl_vars['field']['username']; ?>
</span>阅读（<script  src='?m=Index&c=Index&a=getClick&bid=<?php echo $this->_tpl_vars['field']['bid']; ?>
'></script>）</p>
      <ul>
       <p><?php echo $this->_tpl_vars['field']['content']; ?>
</p>
      </ul>
      <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <a class="shareCount"></a> </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
        <!-- Baidu Button END --> 
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <?php unset($this->_sections['d']);
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['related']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?>
          <li><a href="?m=Index&c=Index&a=blog&bid=<?php echo $this->_tpl_vars['related'][$this->_sections['d']['index']]['bid']; ?>
&cid=<?php echo $this->_tpl_vars['related'][$this->_sections['d']['index']]['cid']; ?>
" title="<?php echo $this->_tpl_vars['related'][$this->_sections['d']['index']]['title']; ?>
">
            <?php echo $this->_tpl_vars['related'][$this->_sections['d']['index']]['title']; ?>

          </a></li>
         <?php endfor; endif; ?>
        </ul>
      </div>
    </div>
    <!--bloglist end-->
    <aside>
      <div class="search">
        <form class="searchform" method="get" action="#">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="sunnav">
        <ul>
          <?php unset($this->_sections['d']);
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['categoryfour']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?>
          <li><a href="?m=index&c=index&a=index&cid=<?php echo $this->_tpl_vars['categoryfour'][$this->_sections['d']['index']]['cid']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['categoryfour'][$this->_sections['d']['index']]['catname']; ?>
"><?php echo $this->_tpl_vars['categoryfour'][$this->_sections['d']['index']]['catname']; ?>
</a></li>
          <?php endfor; endif; ?>
        
        </ul>
      </div>
      <div class="tuijian">
        <h2>栏目更新</h2>
        <ol>
          <?php unset($this->_sections['d']);
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['NewBlog']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?>
          <li><span><strong><?php echo $this->_sections['d']['index']+1; ?>
</strong></span><a href="?a=blog&bid=<?php echo $this->_tpl_vars['NewBlog'][$this->_sections['d']['index']]['bid']; ?>
&cid=<?php echo $this->_tpl_vars['NewBlog'][$this->_sections['d']['index']]['cid']; ?>
" title="<?php echo $this->_tpl_vars['NewBlog'][$this->_sections['d']['index']]['title']; ?>
"><?php echo $this->_tpl_vars['NewBlog'][$this->_sections['d']['index']]['title']; ?>
</a></li>
          <?php endfor; endif; ?>
        </ol>
      </div>
      <div class="toppic">
        <h2>图文并茂</h2>
        <ul>
          <li><a href="/"><img src="<?php echo @_VIEW_; ?>
images/k01.jpg">腐女不可怕，就怕腐女会画画！
            <p>伤不起</p>
            </a></li>
          <li><a href="/"><img src="<?php echo @_VIEW_; ?>
images/k02.jpg">问前任，你还爱我吗？无限戳中泪点~
            <p>感兴趣</p>
            </a></li>
          <li><a href="/"><img src="<?php echo @_VIEW_; ?>
images/k03.jpg">世上所谓幸福，就是一个笨蛋遇到一个傻瓜。
            <p>喜欢</p>
            </a></li>
        </ul>
      </div>
      <div class="clicks">
        <h2>热门点击</h2>
        <ol>
            <?php unset($this->_sections['d']);
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['hotfield']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['d']['name'] = 'd';
$this->_sections['d']['show'] = true;
$this->_sections['d']['max'] = $this->_sections['d']['loop'];
$this->_sections['d']['step'] = 1;
$this->_sections['d']['start'] = $this->_sections['d']['step'] > 0 ? 0 : $this->_sections['d']['loop']-1;
if ($this->_sections['d']['show']) {
    $this->_sections['d']['total'] = $this->_sections['d']['loop'];
    if ($this->_sections['d']['total'] == 0)
        $this->_sections['d']['show'] = false;
} else
    $this->_sections['d']['total'] = 0;
if ($this->_sections['d']['show']):

            for ($this->_sections['d']['index'] = $this->_sections['d']['start'], $this->_sections['d']['iteration'] = 1;
                 $this->_sections['d']['iteration'] <= $this->_sections['d']['total'];
                 $this->_sections['d']['index'] += $this->_sections['d']['step'], $this->_sections['d']['iteration']++):
$this->_sections['d']['rownum'] = $this->_sections['d']['iteration'];
$this->_sections['d']['index_prev'] = $this->_sections['d']['index'] - $this->_sections['d']['step'];
$this->_sections['d']['index_next'] = $this->_sections['d']['index'] + $this->_sections['d']['step'];
$this->_sections['d']['first']      = ($this->_sections['d']['iteration'] == 1);
$this->_sections['d']['last']       = ($this->_sections['d']['iteration'] == $this->_sections['d']['total']);
?>
          <li>
            <span>
              <a href="?m=index&c=index&a=blog&bid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['bid']; ?>
&cid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['catname']; ?>
</a>
            </span><a href="?a=blog&bid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['bid']; ?>
&cid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['cid']; ?>
" title="<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['title']; ?>
"><?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['title']; ?>
</a>
          </li>
        <?php endfor; endif; ?>
        </ol>
      </div>
    </aside>
  </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->
<footer>
  <div class="footer-mid">
    <div class="links">
      <h2>友情链接</h2>
      <ul>
        <li><a href="http://c40liyong.houdunphp.com">李勇项目展示</a></li>
        <li><a href="http://c40liyong.houdunphp.com/blog/index.php">李勇个人博客</a></li>
        <li><a href="http://www.houdunwang.com">后盾网</a></li>
        <li><a href="http://www.houdunphp.com">后盾框架</a></li>
        <li><a href="http://bbs.houdunwang.com">后盾网论坛</a></li>
      </ul>
    </div>
    <div class="visitors">
      <h2>最新评论</h2>
      <dl>
        <dt><img src="<?php echo @_VIEW_; ?>
images/s8.jpg">
        <dt>
        <dd>liyong
          <time>49分钟前</time>
        </dd>
        <dd>在 <a href="#" class="title">如果要学习web前端开发，需要学习什么？ </a>中评论：</dd>
        <dd>文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo @_VIEW_; ?>
images/s7.jpg">
        <dt>
        <dd>yisa
          <time>2小时前</time>
        </dd>
        <dd>在 <a href="#" class="title">芭蕾女孩的心事儿</a>中评论：</dd>
        <dd>我手机里面也有这样一个号码存在</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo @_VIEW_; ?>
images/s6.jpg">
        <dt>
        <dd>小林博客
          <time>8月7日</time>
        </dd>
        <dd>在 <a href="#">如果个人博客网站再没有价值，你还会坚持吗？ </a>中评论：</dd>
        <dd>博客色彩丰富，很是好看</dd>
      </dl>
    </div>
    <section class="flickr">
      <h2>摄影作品</h2>
      <ul>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/01.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/02.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/03.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/04.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/05.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/06.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/07.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/08.jpg"></a></li>
        <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/09.jpg"></a></li>
      </ul>
    </section>
  </div>
  <div class="footer-bottom">
    <p>Copyright 2013 Design by <a href="">liyong</a></p>
  </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
</body>
</html>