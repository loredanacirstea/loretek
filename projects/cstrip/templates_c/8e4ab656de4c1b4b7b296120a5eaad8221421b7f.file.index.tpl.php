<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-11 15:58:09
         compiled from "../templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137883031554622401ca8e29-52553871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4ab656de4c1b4b7b296120a5eaad8221421b7f' => 
    array (
      0 => '../templates/index.tpl',
      1 => 1414062170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137883031554622401ca8e29-52553871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
    'value' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54622401f1b786_15673593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54622401f1b786_15673593')) {function content_54622401f1b786_15673593($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/XAMPP/xamppfiles/htdocs/loretek/libs/smarty/plugins/modifier.capitalize.php';
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
