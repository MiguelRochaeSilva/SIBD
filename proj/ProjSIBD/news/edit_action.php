<?php

require_once('../includes/base.php');
require_once('../database/News.php');
	
if ($_POST["ntitle"] == "") 
  $_SESSION["s_errors"]["ntitle"][] = 'O título não pode ser vazio';

if ($_POST["nbody"] == "") 
  $_SESSION["s_errors"]["nbody"][] = 'O corpo não pode ser vazio';

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

$id = (int) $_POST["nid"];
$title =  $_POST["ntitle"];
$body = $_POST["nbody"];
$date = $_POST["ndate"];
$author = $_POST["nauthor"];
$status = $_POST["nstatus"];

$errors = News::update($id, $title, $body, $date, $author, $status);	

if ($errors) {
  $_SESSION["s_errors"] = $errors;
  header("Location: " . $_SERVER["HTTP_REFERER"]);
}
else {
  $_SESSION["s_messages"][] = 'Notícia alterada com sucesso';
  header("Location: get.php?id=" . $id);
}

?>