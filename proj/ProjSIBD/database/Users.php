<?php

class Users {

  // get all tuples of users
  function getAll() {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM $schema.Users");
      $stmt->execute();
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[31]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
    }
  }

  // get user's data
  function getById($id) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.Users WHERE id_user = :id");
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[32]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // update user
  function update($id, $pass, $name) {
    global $dbh, $schema;
    try {
      $sql = "UPDATE $schema.Users SET nome = ?, password = ? WHERE id_user = ?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($name, md5($pass), $id));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $errors['generic'] = "ERRO[33]: ".$errmsg;
      return $errors;
    }
  }

  // insert user
  function insert($id, $pass, $name) {
    global $dbh, $schema;
    try {
      $sql = "INSERT INTO $schema.Users (username, nome, password) VALUES (?, ?, ?)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($id, $name, md5($pass)));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'users_pkey')) 
	$errors["uuser"] = "Login Repetido!";
      else
	$errors["generic"] = "ERRO[34]: ".$errmsg;
      return $errors;
    }
  }

  // delete user
  function delete($id) {
    global $dbh, $schema;
    try {
      $sql = "DELETE FROM $schema.Users WHERE id_user = :id";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[35]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // authenticate user
  function existsUsernamePassword($username, $password) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM \"$schema\".\"Users\" WHERE username = :user");
      $stmt->bindParam(':user', $username);
      
      $stmt->execute();

      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($result["password"] == md5($password))
	return true;
      else 
	return false;
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      var_dump($e);
      //header("Location: ../user/list.php");
      die;
    }
  }

  // decide user groups (aka user types)
  function isAdmin($username) {
    switch ($username) {
      case "admin":
	return true;
      default:
	return false;
      }
  }

} /*** end of class ***/

?>