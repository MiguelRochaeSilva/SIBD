<?php

require_once('../includes/base.php');
require_once('../database/News.php');
require_once('../database/Authors.php');

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $smarty->assign("news1", $s_values);

$authors = Authors::getAll();
$smarty->assign("authors", $authors);

$smarty->display('news/insert.tpl');

?>
