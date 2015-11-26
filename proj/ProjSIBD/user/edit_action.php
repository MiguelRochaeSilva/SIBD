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
if ($_POST["upass"] == "") 
  $_SESSION["s_errors"]["upass"] = 'A password não pode ser vazia';

if ($_POST["uname"] == "") 
  $_SESSION["s_errors"]["uname"] = 'O nome não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

$username = $_POST["uuser"];
$name =  $_POST["uname"];
$password = $_POST["upass"];

$errors = Users::update($username, $password, $name);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Utilizador alterado com sucesso';
  header("Location: get.php?id=" . $username);
}

?>