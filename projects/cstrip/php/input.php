<?php

// put full path to Smarty.class.php
require('../../../libs/smarty/Smarty.class.php');

if(array_key_exists("table", $_GET)){
	$table = $_GET["table"];
} else{
	$table = "none";
}
if(array_key_exists("id", $_GET)){
	$id = $_GET["id"];
} else{
	$id = "none";
}

include('lib/neotek/db/view.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');
$smarty->setCacheDir('/../cache');
$smarty->setConfigDir('../configs');

$object = new record($table);

$smarty->assign('fields', $object->recordFields);
if($id != "none"){
	$object->get_info($id);
	$smarty->assign('dbvalues', $object->recordData);
}

$smarty->display('input.tpl');


?>