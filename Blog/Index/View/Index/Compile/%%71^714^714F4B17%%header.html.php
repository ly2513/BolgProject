<?php /* Smarty version 2.6.26, created on 2014-10-25 11:08:49
         compiled from header.html */ ?>
<header>
  <nav id="nav">
    <ul>
      <li><a href="<?php echo @_WEB_; ?>
" style="font-weight:700;font-size:20px;">网站首页</a></li>
      <?php unset($this->_sections['c']);
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['category']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
      <li><a href="?m=Index&c=Index&a=showBlog&cid=<?php echo $this->_tpl_vars['category'][$this->_sections['c']['index']]['cid']; ?>
"  title="<?php echo $this->_tpl_vars['category'][$this->_sections['c']['index']]['catname']; ?>
" style="font-weight:700;font-size:20px;">
        <?php echo $this->_tpl_vars['category'][$this->_sections['c']['index']]['catname']; ?>

      </a></li>
      <?php endfor; endif; ?>
    </ul>
    <script src="<?php echo @MODEL_PATH; ?>
js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
  </nav>
</header>