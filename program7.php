<html>
<body>
<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
<p>Find any number between 0-10.</p><br>
<label for="item">Find Item:</label>
<input id="item" type="text" name="item">
<input type="hidden" value="" name="action">
<button type="submit" >Find!</button>
</form>

<?php

$items_arr = array(7, 6, 9, 2, 4, 0);

if($_SERVER["REQUEST_METHOD"] == "POST")
{	
	$item = $_POST["item"];
	$index = array_search($item,$items_arr);
	$action = $_POST["action"];
	
	echo "[ ".implode(", ",$items_arr)."]"."<br><br>";
	echo "You Searched For: ".$item."<br><br>";
	if($index != false)
	{
		echo "Found!"."<br><br>";
		echo "<a href='".$_SERVER["PHP_SELF"]."?item=".$item."&action=delete'>Delete</a>";
		echo "&nbsp&nbsp";
		echo "<a href='".$_SERVER["PHP_SELF"]."?item=".$item."&action=add'>Add random item</a>";
		
	}
	else echo "Not Found!";	
}

if(array_key_exists("action",$_GET)){
	$item = $_GET["item"];
	$index = array_search($item,$items_arr);
	$action = $_GET["action"];
	
	if($action == "delete"){
		unset($items_arr[$index]);
		echo "[ ".implode(", ",$items_arr)."]"."<br><br>";
		echo "Item ".$item. " Removed!";
	}
	else if($action == "add"){
		++$index;
		$new_item = random_int(0,10);
		$new_items_arr = array_merge(array_slice($items_arr, 0, $index), array($new_item), array_slice($items_arr, $index));
		echo "[ ".implode(", ",$new_items_arr)."]"."<br><br>";
		echo "New Item ".$new_item." Added!";
	}
}

?>


</body>
</html>