<?php

require_once('../includes/base.php');
require_once('../database/Users.php');


$username = $_POST["id_user"];
$password = $_POST["password"];
//var_dump("teste");

if (Users::existsUsernamePassword($username, $password)) {
  $_SESSION["s_messages"][] = 'Autenticação com sucesso';
  $_SESSION["s_user"] = $username;
  //die(var_dump($_SESSION));
  
  if (Users::isAdmin($username))
    $_SESSION["s_type"] = 'admin';
  else
    $_SESSION["s_type"] = 'user';

  if($_SESSION["s_type"] == 'admin') header("Location: ../main/home-admin.php"); 
  else header("Location: ../main/home-user.php");
}
else {
  // store user input values
  $_SESSION["s_values"] = $_POST;
  $_SESSION["s_errors"]["generic"][] = 'Username ou password errados!';

   header("Location: ../main/index.php");
}







?>