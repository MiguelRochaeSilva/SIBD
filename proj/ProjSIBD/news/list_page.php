<?

require_once('../includes/base.php');
require_once('../database/News.php');

// rows per page
$limit= 6;

// total number of rows (tuples in table news)
if (!isset($_SESSION["s_nOfNews"])) {
  $nrows= News::getNumRows();
  $_SESSION["s_nOfNews"] = $nrows;
}
else
  $nrows= $_SESSION["s_nOfNews"];

// current page number
$npage = isset($_GET["page"]) ? $_GET["page"] : '1';
// check page number in range
if ($npage < 1) 
  $npage= 1; // first page
else {
  $top= (integer) (($nrows-1) / $limit) +1;
  if ($npage > $top)
    $npage= $top;  // last page
}

// offset
$offset= ($npage-1) * $limit;

//$news = News::getAll();
$news = News::getAllNewsAuthorLimit($limit, $offset);

$smarty->assign("limit", $limit);
$smarty->assign("nrows", $nrows);
$smarty->assign("npage", $npage);
$smarty->assign("news", $news);

$smarty->display('news/list_page.tpl');

?>
