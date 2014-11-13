<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-23 13:02:55
         compiled from "../templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10902451155448444ae73b52-33328483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4177a4f213b1c5ee51b6c8d7c4e46576a142fd' => 
    array (
      0 => '../templates/index.tpl',
      1 => 1414062170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10902451155448444ae73b52-33328483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5448444af0b992_12970982',
  'variables' => 
  array (
    'options' => 0,
    'value' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448444af0b992_12970982')) {function content_5448444af0b992_12970982($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/XAMPP/xamppfiles/htdocs/loretek/libs/smarty/plugins/modifier.capitalize.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
		<html>
		<head>
		<meta content="text/html; charset=ISO-8859-1"
		http-equiv="content-type">
		<title>index.php</title>
		<link rel=\"stylesheet\" href=\"css/style1.css\">
		</head>
		<body>
		<br><br><br>
		&nbsp;
		<table
		style="width: 350px; height: 56px; text-align: left; margin-left: auto; margin-right: auto;"
		border="0" cellpadding="10" cellspacing="5">
		<tbody>
		<br><br>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><th style="white-space: nowrap; text-align: center; vertical-align: middle;">
			<a href=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 target="_self"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['key']->value,true);?>
</a></th></tr>
		<?php } ?>
<?php }} ?>
