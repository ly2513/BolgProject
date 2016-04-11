<?php /* Smarty version 2.6.26, created on 2014-10-23 23:01:12
         compiled from check.php */ ?>
<?php echo '<?php'; ?>

	require '../LYPHP/Tool/Code.class.php';
	$code=new Code;//验证码类
	$code->width=100;
	$code->height=40;
	$code->font_size=15;
	$code->create();
<?php echo '?>'; ?>