<html>
<body>
<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
<p>Provide a Color Name.</p><br>
<label for="color">Color Name: </label>
<input id="color" type="text" name="color" required>
<button type="submit">Submit</button>
</form>



<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
{	
	$colors= array("red","violet","purple","blue","aqua","green","orange","yellow","black","pink");

	for($i = 0;$i<10;$i++){
		$str =  "Color " . strval($i+1);
		$_SESSION[$str] = $colors[$i];
	}
	
	$newColor = $_POST["color"];
	$flag = "not_exist";
	foreach($_SESSION as $key=>$value){
		if($value == $newColor){
			$flag =	"exist";
			break;
		}
	}
	if($flag == "not_exist"){	
		$_SESSION["newColor ". random_int(10,50)] = $newColor;
	}
	
	echo "[ ".implode(", ",$_SESSION). " ]";

}
else{
	session_unset();
	session_destroy();
}
?>
</body>
</html>