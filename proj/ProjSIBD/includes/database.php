<?php

session_start();

//database constants
$user = 'sibd1502';
$pass = 'sibd0215';
$dbname = 'sibd1502';

$host = 'db.fe.up.pt';
$dsn = 'pgsql:host='.$host.';dbname='.$dbname;

$schema = "GEE";



// get a database connection (not persistent)
try {
  $dbh = new PDO($dsn, $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $_SESSION["s_errors"]["generic"][] = "ERRO[00]: ".$e->getMessage();
  var_dump($e);
  header("Location: ../main/index.php");
  die;
}

?>
