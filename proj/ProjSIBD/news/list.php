<?

require_once('../includes/base.php');
require_once('../database/News.php');
	
//$news = News::getAll();
$news = News::getAllNewsAuthor();

$smarty->assign("news", $news);

$smarty->display('news/list.tpl');

?>
