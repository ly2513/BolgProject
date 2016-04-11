<?php /* Smarty version 2.6.26, created on 2014-10-23 15:35:28
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 151, false),)), $this); ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目管理系统 </title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {	
	font-family: "宋体";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "宋体";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "宋体";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.newfont07{
  float: left;
}
.add{
  font-family: "宋体";
  font-size: 20px;
  text-decoration: none;
  display: inline-block;
  font-weight: 700;
margin-left: 100px;
  float: left;
}
.button {
	font-family: "宋体";
	font-size: 14px;
	height: 37px;
}
a{
    text-decoration: none;
    /*color: blue;*/
}
a.page{
  width: 20px;
  height: 20px;
  color: #fff;
  background: #999;
  display: inline-block;
  text-align: center;
  line-height: 20px;
}

html { overflow-x: auto; overflow-y: auto; border:0;} 
-->
</style>

<link href="<?php echo @_VIEW_; ?>
css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="<?php echo @_VIEW_; ?>
css/style.css" rel="stylesheet" type="text/css" />
</head>
<SCRIPT language=JavaScript>
function sousuo(){
	window.open("gaojisousuo.htm","","depended=0,alwaysRaised=1,width=800,height=510,location=0,menubar=0,resizable=0,scrollbars=0,status=0,toolbar=0");
}
function selectAll(){
	var obj = document.fom.elements;
	for (var i=0;i<obj.length;i++){
		if (obj[i].name == "delid"){
			obj[i].checked = true;
		}
	}
}

function unselectAll(){
	var obj = document.fom.elements;
	for (var i=0;i<obj.length;i++){
		if (obj[i].name == "delid"){
			if (obj[i].checked==true) obj[i].checked = false;
			else obj[i].checked = true;
		}
	}
}

function link(){
    document.getElementById("fom").action="addrenwu.htm";
   document.getElementById("fom").submit();
}

</SCRIPT>

<body>
<form name="fom" id="fom" method="post" action="">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr width="100%">
    <!-- <td width="10"></td> -->
    <td width="100%"></td></tr>
  <tr>
    <td>
      <table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	  <tr>
                <td height="20">
                  <span class="newfont07">选择：
                    <a href="#" class="right-font08" onclick="selectAll();">全选</a>-
                    <a href="#" class="right-font08" onclick="unselectAll();">反选</a>
                  </span>
                  <span class="add"><a href="?m=Admin&c=Blog&a=add"style="float:left">添加博客</a></span>
                </td>
          	  </tr>
              <tr>
                <td height="40" class="font42">
				          <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				            <tr class="CTitle" >
                    	<td height="22" colspan="7" align="center" style="font-size:16px">栏目列表
                      </td>
                    </tr>
                    <tr bgcolor="#EEEEEE">
				              <td width="4%" align="center" height="30">选择</td>
                      <td width="5%">BID</td>
                      <td width="15%">博客标题</td>
                      <td width="10%">栏目标题</td>
					            <td width="10%">创建时间</td>
                      <td width="10%">发送者</td>
					            <td width="12%">操作</td>
                    </tr>
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
                      <tr bgcolor="#FFFFFF">
  				              <td height="20">
                          <input type="checkbox" name="delid"/>
                        </td>
                        <td><?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['title']; ?>
</td>
                        <td >
                          <?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['catname']; ?>

                        </td>
  					            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['d']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</td>
                        <td><?php echo $_SESSION['username']; ?>
</td>
                        <td>
                          <a href="?m=Admin&c=Blog&a=edit&bid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
">编辑|</a>
                          <a href="?a=blog&bid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
" target="_top">查看|</a>
  					              <a href="?m=Admin&c=Blog&a=delete&bid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['bid']; ?>
">删除</a></td>
                      </tr>
                    <?php endfor; endif; ?>
                  </table>
                </td>
              </tr>
            </table>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="6">
                  <img src="<?php echo @_VIEW_; ?>
images/spacer.gif" width="1" height="1" />
                </td>
              </tr>
              <tr>
                <td height="33">
                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
                    <tr>
                      <td width="50%"><!-- 共 
                        <span class="right-text09">5</span> 页 | 第 
                        <span class="right-text09">1</span> 页
                      </td> -->
                      <td width="49%" align="right"><!-- [
                        <a href="#" class="right-font08">首页</a> | 
                        <a href="#" class="right-font08">上一页</a> | 
                        <a href="#" class="right-font08">下一页</a> | 
                        <a href="#" class="right-font08">末页</a>] 转至： -->
                        <p style="color:red;"><?php echo $this->_tpl_vars['page']; ?>
 </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</form>
</body>
</html>