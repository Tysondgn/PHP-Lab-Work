<b>Select Watched Series : </b>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" />
<select name="serieslist[]" multiple>
        <option  value="AOT">AOT</option>
        <option  value="Death Note">Death Note</option>
        <option  value="Naruto">Naruto</option>
        <option  value="Naruto Shippuden">Naruto Shippuden</option>
        <option  value="Dragon Ball">Dragon Ball</option>
</select>
<button type="submit">submit</button><br>
<?php
	if( $_SERVER["REQUEST_METHOD"] == "POST" )
	{

		if(isset($_REQUEST["serieslist"]))
		{
			$series = $_REQUEST["serieslist"];
			echo "You Selected : <ul>";
			foreach($series as $i)
				echo "<li>$i</li>";
			echo "</ul>";
		}
		else
			echo "You haven't selected any item";
	}
?>