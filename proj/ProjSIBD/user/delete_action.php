<?php

require_once('../includes/base.php');
require_once('../database/Users.php');

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O login é obrigatório!'; 
  header("Location: list.php");
  die;
}

$username = $_GET["id"];

$errors = Users::delete($username);	

if ($errors) {
  $_SESSION["s_errors"]["generic"][] = $errors;
  header("Location: get.php?id=".$username);
}
else {
  $_SESSION["s_messages"][] = 'Utilizador '.$username.' removido com sucesso';
  header("Location: list.php");
}
