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

$news1 = (int) $_GET["id"];

$errors = News::delete($news1);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$news1);
}
else {
  $_SESSION["s_messages"][] = 'Notícia removida com sucesso';
  header("Location: list.php");
}
