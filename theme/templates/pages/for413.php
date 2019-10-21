
	<?php
	global $IC;
	global $action;
	global $itemtype;
	
	$items = $IC->getItem(["sindex" => $action[1], "extend" => true]);
	
	foreach($items as $item){
		echo $item;
		echo "<br>";
	}
	
	?>

	<div class="scene post i:razu">


	

			<h1>Assignment 413</h1>
			<h2>Task 8</h2>
			<p>Retriving from database and linking</p>

			
		


	</div>
