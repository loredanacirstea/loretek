<?php

require('../../../libs/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');
$smarty->setCacheDir('/../cache');
$smarty->setConfigDir('../configs');

$options = array("browse comic strips" => "browse_table.php?table=neo_cstrip", "browse frames" => "browse_table.php?table=neo_frame", "browse speech balloons" => "browse_table.php?table=neo_sballoon", "browse texts" => "browse_table.php?table=neo_intltxt");
$smarty->assign('options', $options);
//$smarty->assign('name', $name);
//$smary->assign(
$smarty->display('index.tpl');


?>