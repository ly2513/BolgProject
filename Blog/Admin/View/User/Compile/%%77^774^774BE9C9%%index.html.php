<?php /* Smarty version 2.6.26, created on 2014-10-23 16:07:23
         compiled from index.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员</title>
<link href="<?php echo @_VIEW_; ?>
/css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @_VIEW_; ?>
/css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">


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
.button {
	font-family: "宋体";
	font-size: 14px;
	height: 37px;
}
td.data{
  font-size: 20px;
  line-height: 40px;
  text-align: center;
  height: 40px;
}
html { overflow-x: auto; overflow-y: auto; border:0;} 
span.add{
  margin-left: 40px;
  font-size: 20px;
  font-weight: 700;
}
</style>
</head>


<body >
<form name="fom" id="fom" method="post" action="">
<table id="mainpage" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	  <tr>
                <td height="20" >
                  <span class="newfont07">选择：
                    <a href="#" class="right-font08" onclick="selectAll();">全选</a>-
                    <a href="#" class="right-font08" onclick="unselectAll();">反选</a>
                  </span>
                  <span class="add"><a href="?m=Admin&c=User&a=add" >添加管理员</a></span>
                </td>
          	  </tr>
              <tr>
                <td height="40" class="font42">
                  <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
					          <tr>
                      <td height="20" colspan="13" align="center" bgcolor="#EEEEEE"class="tablestyle_title"> 管理员列表 </td>
                    </tr>
                    <tr>
				              <td width="5%" align="center" bgcolor="#EEEEEE">选择</td>
                      <td width="10%" height="20" align="center" bgcolor="#EEEEEE">AID</td>
                      <td width="10%" align="center" bgcolor="#EEEEEE">管理员账号</td>
                      <td width="10%" align="center" bgcolor="#EEEEEE">密码</td>
                      <td width="10%" align="center" bgcolor="#EEEEEE">操作</td>
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
                    <tr align="center">
				              <td bgcolor="#FFFFFF">
                        <input type="checkbox" name="delid"/>
                      </td>
                      <td height="20" bgcolor="#FFFFFF" class="data"><a href="#"><?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['aid']; ?>
</a></td>
                      <td bgcolor="#FFFFFF" class="data"><?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['username']; ?>
</td>
                      <td bgcolor="#FFFFFF" class="data"><?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['password']; ?>
</td>
                      <td bgcolor="#FFFFFF" class="data">
                        <a href="?m=Admin&c=User&a=edit&aid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['aid']; ?>
">编辑</a>|
                        <a href="?m=Admin&c=User&a=delete&aid=<?php echo $this->_tpl_vars['data'][$this->_sections['d']['index']]['aid']; ?>
">删除</a></td>
                    </tr>
                    <?php endfor; endif; ?>
                  </table>
                </td>
              </tr>
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
                <td width="50%">共 
                  <span class="right-text09">5</span> 页 | 第 
                  <span class="right-text09">1</span> 页
                </td>
                <td width="49%" align="right">[
                  <a href="#" class="right-font08">首页</a> | 
                  <a href="#" class="right-font08">上一页</a> | 
                  <a href="#" class="right-font08">下一页</a> | 
                  <a href="#" class="right-font08">末页</a>] 转至：
                </td>
                <td width="1%">
                  <table width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="1%">
                        <input name="textfield3" type="text" class="right-textfield03" size="1" />
                      </td>
                      <td width="87%">
                        <input name="Submit23222" type="submit" class="right-button06" value=" " />
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

<div id="loadingmsg" style="width:100px; height:18px; top:0px; display:none;">
	<img src="<?php echo @_VIEW_; ?>
images/loadon.gif" />
</div>

</body>
</html>