<?

require_once('../includes/base.php');
require_once('../database/News.php');
require_once('../database/Authors.php');

// check parameters
if (!isset($_GET["id"])) {
  $_SESSION["s_errors"]["generic"][] = 'O id é obrigatório!'; 
  header("Location: list.php");
  die;
}

$news1 = News::getById((int) $_GET['id']);

if ($news1 == null) {
  $_SESSION["s_errors"]["generic"][] = 'A notícia '.$_GET["id"].' não existe!';
  header("Location: list.php");
}

$smarty->assign("news1", $news1);

$autor = Authors::getById($news1["nauthor"]);
$smarty->assign("authorname", $autor["aname"]);

$smarty->display('news/get.tpl');

?>
