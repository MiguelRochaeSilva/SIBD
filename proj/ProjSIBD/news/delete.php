<?php

require_once('../includes/base.php');
require_once('../database/News.php');

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

$news1 = News::getById((int) $_GET["id"]);

if ($news1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'Notícia não existe!';
  header("Location: list.php");
}

$smarty->assign("news1", $news1);

$smarty->display('news/delete.tpl');

?>
