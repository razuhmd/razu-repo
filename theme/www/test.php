<?php
$access_item = false;

if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();
$IC = new Items();
$items = $IC->getItems(["itemtype" => "razu"]);
$itemtype = "test";


$page->bodyClass("tests");
$page->pageTitle("Tests");
print_r($action);


if(count($action) == 2 && $action[1] == 'test1') {

	$page->page(array(
		"templates" => "pages/test1.php"
	));
	exit();
}

else if(count($action) == 2 && $action[1] == "test2") {

	$page->page(array(
		"templates" => "pages/test2.php"
	));
	exit();
}

else if(count($action) == 2 && $action[0] == "for413") {
	//print $action; exit;

	$page->page(array(
		"templates" => "pages/for413.php"
	));
	exit();
}

$page->page(array(
	"templates" => "pages/test.php"
));
exit();


?>
 