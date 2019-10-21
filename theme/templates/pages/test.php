
	<?php
	global $IC;
	global $action;
	global $itemtype;
	
	$items = $IC->getItems(["itemtype" => "razu"]);
	//print_r($items);
	foreach($items as $itemArray){
		echo "<a href='http://razu-test.local/test/for413/".$itemArray['sindex']."'>".$itemArray['sindex']." Click Here</a>";
		echo "<br>";
	}
	
	?>

	<div class="scene post i:razu">


	

			<h1>Test</h1>
			<h2>Test of Razu</h2>
			<p>This is the default tag of test</p>

			
		


	</div>
