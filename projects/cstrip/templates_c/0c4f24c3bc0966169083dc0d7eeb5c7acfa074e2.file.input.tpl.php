<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-23 14:36:20
         compiled from "../templates/input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6459723755448f1672b7e83-09932257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4f24c3bc0966169083dc0d7eeb5c7acfa074e2' => 
    array (
      0 => '../templates/input.tpl',
      1 => 1414067241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6459723755448f1672b7e83-09932257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5448f167388ad4_61524962',
  'variables' => 
  array (
    'fields' => 0,
    'value' => 0,
    'dbvalues' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448f167388ad4_61524962')) {function content_5448f167388ad4_61524962($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input</title>

    <!-- Bootstrap -->
    <link href="../../../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/input.css" rel="stylesheet">
</head>
  <body>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<form role="form">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<div class="form-group">
							<label for=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label>
							<input type=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 class="form-control" id=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 placeholder=<?php echo $_smarty_tpl->tpl_vars['dbvalues']->value[$_smarty_tpl->tpl_vars['value']->value];?>
 />
							<p class="help-block">
								Example block-level help text here.
							</p>
						</div>
					<?php } ?>
					
					<div class="checkbox">
						<label><input type="checkbox" /> Check me out</label>
					</div> 
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="../../../libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/app.js"> <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
