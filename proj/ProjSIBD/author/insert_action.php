<?php

require_once('../includes/base.php');
require_once('../database/Authors.php');

// check parameters
if ($_POST["aname"] == "") 
  $_SESSION["s_errors"]["aname"] = 'O nome não pode ser vazio';

if ($_POST["aemail"] == "") 
  $_SESSION["s_errors"]["aemail"] = 'O email não pode ser vazio';

if ($_POST["aphone"] == "") 
  $_SESSION["s_errors"]["aphone"] = 'O telefone não pode ser vazio';

// store user input values
$_SESSION["s_values"] = $_POST;

if ($_SESSION["s_errors"]) {
  header("Location: " . $_SERVER["HTTP_REFERER"]);
  die;
}

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: list.php");
  die;
}

$name = $_POST["aname"];
$email= $_POST["aemail"];
$phone= $_POST["aphone"];
$age= ($_POST["aage"]>0 ? $_POST["aage"] : 0);

$errors = Authors::insert($name, $email, $phone, $age);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = "Utilizador criado com sucesso";
  header("Location: get.php?id=" . Authors::getLastInsertedId());
}

?>
