<?php /* Smarty version 2.6.26, created on 2014-10-23 20:17:22
         compiled from edit.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑博客</title>
<script charset="utf-8" src="<?php echo @_ROOT_; ?>
/Blog/Admin/Org/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?php echo @_ROOT_; ?>
/Blog/Admin/Org/kindeditor/lang/zh_CN.js"></script>
<script>
    KindEditor.ready(function(K){
            window.editor = K.create('#editor_id');
    });
</script>
<style type="text/css">
table{
    
    background: #999;
}
tr,td,th{
    border:1px solid #ccc;
    vertical-align: middle;
    line-height: 30px;
}
input.title{
    width: 200px;
    height: 30px;
    line-height: 30px;
}
</style>
</head>

<body class="ContentBody">
  		<form action="" method='post' enctype='multipart/form-data'>    <input type="hidden" name='bid' value="<?php echo $this->_tpl_vars['field']['bid']; ?>
">
    		<table  width='100%' cellpadding="0" cellspacing="0">
    			<tr ><th width="100%" colspan="2" bgcolor="#6795B4">编辑博客</th></tr>
    			<tr>
    				<th>标题</th>
    				<td height="30" class="title">
    					<input type="title" name='title' value="<?php echo $this->_tpl_vars['field']['title']; ?>
">
    				</td>
    			</tr>
    			<tr>
    				<th>栏目</th>
    				<td height="30">
    					<select name="cid" id="">
    						<?php unset($this->_sections['c']);
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['categoryData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    						<option value="<?php echo $this->_tpl_vars['categoryData'][$this->_sections['c']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['categoryData'][$this->_sections['c']['index']]['catname']; ?>
</option>
    						<?php endfor; endif; ?>
    					</select>
    				</td>
    			</tr>
    			<tr>
    				<th>缩略图</th>
    				<td height="30">
    					<input type="file" name='thumb'>
                         <input type="hidden" name='thumb' value='<?php echo $this->_tpl_vars['field']['thumb']; ?>
'>
                        <?php if ($this->_tpl_vars['field']['thumb']): ?>
                        <img src="<?php echo @_ROOT_; ?>
/<?php echo $this->_tpl_vars['field']['thumb']; ?>
" style='height:80px;'>
                        <?php endif; ?>
    				</td>
    			</tr>
    			<tr>
    				<th>正文</th>
    				<td>
    					<textarea id="editor_id" name="content" style="width:99%;height:300px;" >
                            <?php echo $this->_tpl_vars['field']['content']; ?>

                        </textarea>
    				</td>
    			</tr>
    			<tr>
    				<th>点击数</th>
    				<td>
    					<input type="title" name='click' value='<?php echo $this->_tpl_vars['field']['click']; ?>
'>
    				</td>
    			</tr>
    			<tr>
    				<td colspan='2'>
    					<input type="submit" value="发表">
    				</td>
    			</tr>
    		</table>
    	</form>
</body>
</html>