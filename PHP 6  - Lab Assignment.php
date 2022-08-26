<?php
	$index_array = array(7, 3, 2000, 1, 3, 2000, 3, 3, 2000, 14, 9, 2002);
	echo "index array (before sorting) : ";

	foreach($index_array as $i)
		echo $i." ";

	echo "<br>";
	sort($index_array);
	echo "index array ( after sorting ) : ";
	
	foreach($index_array as $i)
		echo $i." ";
	echo "<br>";

	$associative_array = array("a"=>"65", "e"=>"66", "b"=>"56", "x"=>"69", "z"=>"45", "e"=>"655");

	echo "Associative Array ( before sorting ) : ";
	foreach($associative_array as $key => $value)
		echo "'$key' => '$value' ";
	echo "<br>";	

	asort($associative_array);
	echo "Associative Array ( after value wise sorting ) : ";
	foreach($associative_array as $key => $value)
		echo "'$key' => '$value' ";
	echo "<br>";	

	ksort($associative_array);
	echo "Associative Array ( after key wise sorting ) : ";
	foreach($associative_array as $key => $value)
		echo "'$key' => '$value' ";
	echo "<br>";	


?>