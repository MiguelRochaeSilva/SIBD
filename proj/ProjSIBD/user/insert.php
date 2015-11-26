<?php

require_once('../includes/base.php');
require_once('../database/Users.php');

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

if ($s_values)
  $smarty->assign("User", $s_values);

$smarty->display('user/insert.tpl');

?>
