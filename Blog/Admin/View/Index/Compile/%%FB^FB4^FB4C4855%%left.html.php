<?php /* Smarty version 2.6.26, created on 2014-10-23 10:59:32
         compiled from left.html */ ?>
﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>博客管理系统 </title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../images/left.gif);
}
-->
</style>
<link href="<?php echo @_VIEW_; ?>
css/css.css" rel="stylesheet" type="text/css" />
</head>
<SCRIPT language=JavaScript>
function tupian(idt){
    var nametu="xiaotu"+idt;
    var tp = document.getElementById(nametu);
    tp.src="<?php echo @_VIEW_; ?>
images/ico05.gif";//图片ico04为白色的正方形
	
	for(var i=1;i<30;i++)
	{
	  
	  var nametu2="xiaotu"+i;
	  if(i!=idt*1)
	  {
	    var tp2=document.getElementById('xiaotu'+i);
		if(tp2!=undefined)
	    {tp2.src="<?php echo @_VIEW_; ?>
images/ico06.gif";}//图片ico06为蓝色的正方形
	  }
	}
}

function list(idstr){
	var name1="subtree"+idstr;
	var name2="img"+idstr;
	var objectobj=document.all(name1);
	var imgobj=document.all(name2);
	
	
	//alert(imgobj);
	
	if(objectobj.style.display=="none"){
		for(i=1;i<10;i++){
			var name3="img"+i;
			var name="subtree"+i;
			var o=document.all(name);
			if(o!=undefined){
				o.style.display="none";
				var image=document.all(name3);
				//alert(image);
				image.src="<?php echo @_VIEW_; ?>
images/ico04.gif";
			}
		}
		objectobj.style.display="";
		imgobj.src="<?php echo @_VIEW_; ?>
images/ico03.gif";
	}
	else{
		objectobj.style.display="none";
		imgobj.src="<?php echo @_VIEW_; ?>
images/ico04.gif";
	}
}

</SCRIPT>

<body>
<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <TD>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="<?php echo @_VIEW_; ?>
images/nav01.gif">
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="25%" rowspan="2"><img src="<?php echo @_VIEW_; ?>
images/ico02.gif" width="35" height="35" /></td>
					<td width="75%" height="22" class="left-font01">您好，<span class="left-font02"><?php echo $_SESSION['username']; ?>
</span></td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="?m=Admin&c=Login&a=out"  class="left-font01" target="_top">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		


		<!--  栏目系统开始    -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="<?php echo @_VIEW_; ?>
images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
							<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('8');" >栏目管理</a>
						</td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree8" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
			  <td width="9%" height="21" >
			  	<img id="xiaotu21" src="<?php echo @_VIEW_; ?>
images/ico06.gif" width="8" height="12" />
			  </td>
			  <td width="91%"><a href="?m=Admin&c=Category&a=index" target="mainFrame" class="left-font03" onClick="tupian('21');">栏目列表</a>
			  </td>
			</tr>
      	</table>
		<!--  栏目系统结束    -->

		

		<!--  博客系统开始    -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img7" id="img7" src="<?php echo @_VIEW_; ?>
images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('7');" >博客管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree7" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu17" src="<?php echo @_VIEW_; ?>
images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%">
						<a href="?m=admin&c=blog&a=index" target="mainFrame" class="left-font03" onClick="tupian('17');">博客列表</a></td>
				</tr>
				
      	</table>
		<!--  博客系统结束    -->



        <TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img1" id="img1" src="<?php echo @_VIEW_; ?>
images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('1');" >管理员</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree1" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
			<tr>
			  <td width="9%" height="20" >
			  	<img id="xiaotu1" src="<?php echo @_VIEW_; ?>
images/ico06.gif" width="8" height="12" />
			  </td>
			  <td width="91%">
			  	<a href="?m=Admin&c=User&a=Index" target="mainFrame" class="left-font03" onClick="tupian('1');">管理员列表</a>
			  </td>
			</tr>
		</table>
	</TD>
</tr> 
</table>
</body>
</html>