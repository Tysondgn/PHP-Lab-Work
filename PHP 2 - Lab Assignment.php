<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<label><h1>Select Your Hobby : </h1></label>
	<input type="checkbox" name="hobby[]" value="Coding" /> Coding <br/>
	<input type="checkbox" name="hobby[]" value="Sleeping" /> Sleeping <br/>
	<input type="checkbox" name="hobby[]" value="Eating" /> Eating <br/>
	<input type="checkbox" name="hobby[]" value="Playing" /> Playing <br/>
	<button type="submit">Done</button>
</form>
<?php
	if( $_SERVER["REQUEST_METHOD"] == "POST" )
	{
		if(isset($_REQUEST["hobby"]))
		{
			echo "<h2>Your Hobby is :</h2>";
			echo "<ul>";
			$item = $_POST["hobby"];

			foreach($item as $i)
				echo "<li>$i</li>";
		
			echo "</ul>";
		}
		else
			echo "<b>You are so lazy to select any hobby</b>";
	}
?>