<?

require_once('../includes/base.php');
require_once('../database/Users.php');

// check privileges
if ($s_type != "admin") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die;
}

$users = Users::getAll();

$smarty->assign("Users", $users);

$smarty->display('user/list.tpl');

?>
