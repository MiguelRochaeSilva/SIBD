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
if ($_POST["uuser"] == "") 
  $_SESSION["s_errors"]["uuser"] = 'O login não pode ser vazio';

if ($_POST["uname"] == "") 
  $_SESSION["s_errors"]["uname"] = 'O nome não pode ser vazio';

if ($_POST["upass"] == "") 
  $_SESSION["s_errors"]["upass"] = 'A password não pode ser vazia';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

$username = $_POST["uuser"];
$password = $_POST["upass"];
$name = $_POST["uname"];

$errors = Users::insert($username, $password, $name);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = "Utilizador criado com sucesso";
  header("Location: get.php?id=".$username);
}

?>
