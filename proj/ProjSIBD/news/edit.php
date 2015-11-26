<?php

require_once('../includes/base.php');
require_once('../database/News.php');
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
  $news1 = $s_values;
else
  $news1 = News::getById((int) $_GET["id"]);

if ($news1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'A notícia '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("news1", $news1);

$authors = Authors::getAll();
$smarty->assign("authors", $authors);

$status = array('Editada', 'Publicada', 'Arquivada');
$smarty->assign("status", $status);

$smarty->display('news/edit.tpl');

?>
