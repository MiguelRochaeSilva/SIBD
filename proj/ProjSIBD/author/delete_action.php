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

$author = (int) $_GET["id"];

$errors = Authors::delete($author);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$author);
}
else {
  $_SESSION["s_messages"][] = 'Autor removido com sucesso';
  header("Location: list.php");
}
