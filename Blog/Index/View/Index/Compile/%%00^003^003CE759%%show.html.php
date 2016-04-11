<?php /* Smarty version 2.6.26, created on 2014-10-25 11:10:15
         compiled from show.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'show.html', 67, false),array('modifier', 'date_format', 'show.html', 73, false),)), $this); ?>
﻿#<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>李勇个人博客</title>
<meta name="keywords" content="个人网站,css3,html5" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="<?php echo @_VIEW_; ?>
css/styles.css" rel="stylesheet">
<link href="<?php echo @_VIEW_; ?>
css/animation.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="<?php echo @_VIEW_; ?>
css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo @_VIEW_; ?>
js/jquery.js"></script>

<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <!-- 高亮显示js -->
  <script type="text/javascript" src="<?php echo @_VIEW_; ?>
js/js.js"></script>
<!--header end-->
<div id="mainbody">
  <div class="info">
    <figure> <img src="<?php echo @_VIEW_; ?>
images/art.jpg"  alt="Panama Hat">
      <figcaption><strong>渡人如渡己，渡已，亦是渡</strong> 当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。</figcaption>
    </figure>
    <div class="card">
      <h1>我的名片</h1>
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：Web前端设计师、网页设计、php工程师</p>
      <p>电话：15990531230</p>
      <p>Email：626375290@qq.com</p>
      <ul class="linkmore">
        <li><a href="#" class="talk" title="给我留言"></a></li>
        <li><a href="#" class="address" title="联系地址"></a></li>
        <li><a href="#" class="email" title="给我写信"></a></li>
        <li><a href="#" class="photos" title="生活照片"></a></li>
        <li><a href="#" class="heart" title="关注我"></a></li>
      </ul>
    </div>
  </div>
  <!--info end-->
  <div class="blank"></div>
  <div class="blogs">
    <ul class="bloglist">
      <?php unset($this->_sections['d']);
$this->_sections['d']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="?a=blog&cid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['cid']; ?>
&bid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
" target="_blank">
            <?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['title']; ?>

          </a></h2>
          <ul class="textinfo">
            <a href="?a=blog&cid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['cid']; ?>
&bid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
">
            	<?php if ($this->_tpl_vars['data'][$this->_sections['d']['index']]['thumb']): ?>
            	<img src="<?php echo @_ROOT_; ?>
/<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['thumb']; ?>
">
            	<?php else: ?>
					<img src="<?php echo @_VIEW_; ?>
images/s1.jpg">
            	<?php endif; ?>
            </a>
            <p> 
            	<a href="?a=blog&cid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['cid']; ?>
&bid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 642, "...") : smarty_modifier_truncate($_tmp, 642, "...")); ?>
</a>
            </p>
          </ul>
          <ul class="details">
            <li class="likes"><a href="#"><?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['click']; ?>
</a></li>
            <li class="comments"><a href="#">34</a></li>
            <li class="icon-time"><a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li>
      <?php endfor; endif; ?>
      <li>
          <ul>
            <li class="page"><?php echo $this->_tpl_vars['page']; ?>
</li>
          </ul>
        <!--arrow_box end--> 
      </li>
    </ul>
    <!--bloglist end-->
    <aside>
      <div class="tuijian">
        <h2>推荐文章</h2>
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
</strong></span><a href="?m=index&c=index&a=blog&bid=<?php echo $this->_tpl_vars['NewBlog'][$this->_sections['d']['index']]['bid']; ?>
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
          <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/k01.jpg">腐女不可怕，就怕腐女会画画！
            <p>伤不起</p>
            </a></li>
          <li><a href="#"><img src="<?php echo @_VIEW_; ?>
images/k02.jpg">问前任，你还爱我吗？无限戳中泪点~
            <p>感兴趣</p>
            </a></li>
          <li><a href="#"><img src="<?php echo @_VIEW_; ?>
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
          <li><span><a href="?m=index&c=index&a=blog&bid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['bid']; ?>
&cid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['cid']; ?>
" title="<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['title']; ?>
"><?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['catname']; ?>
</a></span><a href="?m=index&c=index&a=blog&bid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['bid']; ?>
&cid=<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['cid']; ?>
" title="<?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['title']; ?>
"><?php echo $this->_tpl_vars['hotfield'][$this->_sections['d']['index']]['title']; ?>
</a></li>
        <?php endfor; endif; ?>
         
        </ol>
      </div>
      <div class="search">
        <form class="searchform" method="get" action="#">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="viny">
        <dl>
          <dt class="art"><img src="<?php echo @_VIEW_; ?>
images/artwork.png" alt="专辑"></dt>
          <dd class="icon-song"><span></span>南方姑娘</dd>
          <dd class="icon-artist"><span></span>歌手：赵雷</dd>
          <dd class="icon-album"><span></span>所属专辑：《赵小雷》</dd>
          <dd class="icon-like"><span></span><a href="/">喜欢</a></dd>
          <dd class="music">
            <audio src="<?php echo @_VIEW_; ?>
images/nf.mp3" controls></audio>
          </dd>
          <!--也可以添加loop属性 音频加载到末尾时，会重新播放-->
        </dl>
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
        <li><a href="#">李勇个人博客</a></li>
        <li><a href="http://www.3dst.com">3DST技术服务中心</a></li>
      </ul>
    </div>
    <div class="visitors">
      <h2>最新评论</h2>
      <dl>
        <dt><img src="<?php echo @_VIEW_; ?>
images/s8.jpg">
        <dt>
        <dd>DanceSmile
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
        <dd>在 <a href="#" class="title">如果个人博客网站再没有价值，你还会坚持吗？ </a>中评论：</dd>
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
    <p>Copyright 2014 Design by <a href="">liyong</a></p>
  </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
</body>
</html>