<?php /* Smarty version 2.6.26, created on 2014-10-23 17:02:07
         compiled from add.html */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加管理员 </title>
<style type="text/css">
table{
	border: 1px solid #ccc;
}
tr,td{
	border: 1px solid #ccc;
}
td.title{
	text-align: center;
	height: 30px;
	background:#6795B4 ;
	font-size: 20px;
	color: #fff;
	line-height: 30px;	
}
td.titlename{
	height: 30px;
	font-size: 20px;
	color: #000;
	line-height: 30px;
	text-align: center;	
}
input.catname{
	width: 200px;
	height: 30px;
	
}
input.sub{
	width: 100px;
	height: 30px;
	font-size: 20px;
}
</style>
</head>

<body class="ContentBody">
  <form action="" method="post" enctype="multipart/form-data" name="fom" id="fom"  >
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td width="100%" colspan="2" class="title">管理员添加</td></tr>
		<tr >
			<td width="50%"  height="30px" class="titlename">账号</td>
			<td width="50%"><input type="text" name="username"class="catname" /></td>
		</tr>
		<tr >
			<td width="50%"  height="30px" class="titlename">密码</td>
			<td width="50%"><input type="password" name="password"class="catname" /></td>
		</tr>
		<tr >
			<td width="50%"  height="30px" class="titlename">请再一次输入密码</td>
			<td width="50%"><input type="password" name="repassword"class="catname" /></td>
		</tr>
		<tr>
			<td width="50%"></td>
			<td width="50%">
				<input type="submit" value="提交" class="sub"/>
			</td>
		</tr>
	</table>

</div>
</form>
</body>
</html>