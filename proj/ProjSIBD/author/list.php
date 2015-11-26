<?

require_once('../includes/base.php');
require_once('../database/Authors.php');
	
$authors = Authors::getAll();

$smarty->assign("authors", $authors);

$smarty->display('author/list.tpl');

?>
