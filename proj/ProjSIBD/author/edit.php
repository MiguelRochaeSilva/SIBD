<?php

require_once('../includes/base.php');
require_once('../database/Authors.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

if ($s_values)
  $author = $s_values;
else
  $author = Authors::getById((int) $_GET["id"]);

if ($author == null) {
  $_SESSION["s_errors"]["generic"][] = 'O autor '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("author", $author);

$smarty->display('author/edit.tpl');

?>
