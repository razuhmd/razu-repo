<?php
$access_item ['/'] = false;
$access_item ['/test1'] = true;
$access_item ['/test2'] = true;

if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();
$IC = new Items();
$itemtype = "test";


$page->bodyClass("tests");
$page->pageTitle("Tests");
print_r($action);


if(count($action) == 1 && $action[0] == 'test1') {

	$page->page(array(
		"templates" => "pages/test1.php"
	));
	exit();
}

else if(count($action) == 1 && $action[0] == "test2") {

	    $page->page(array(
		    "templates" => "pages/test2.php"
	    ));
	    exit();
    }

    
$page->page(array(
	"templates" => "pages/test.php"
));
exit();


?>
 