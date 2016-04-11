<?php /* Smarty version 2.6.26, created on 2014-10-21 21:06:13
         compiled from error.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Document</title>
<style type='text/css'>
        div.info{
            border:solid 2px black;
            font-size:20px;
            padding:20px;
        }
        </style>
</head>
<body>
	<div class='info'>
            <?php echo $this->_tpl_vars['msg']; ?>

            <?php if ($this->_tpl_vars['url']): ?>
                <script>setTimeout(function(){location.href='<?php echo $this->_tpl_vars['url']; ?>
'},2000)</script>
            <?php else: ?>
            <script>setTimeout(function(){window.history.go(-1);},2000)</script>
            <?php endif; ?>
        </div>
</body>
</html>